<?php
require('common.php');
class HttpCurl
{
    public $connectTtl = 0;
    public $readTtl = 0;
    public $readTimeout=120000;
    public $connectTimeout=120000;
    /**
     *
     * @return HttpCurl
     */
    private static $instance;

    /**
     *
     * @return HttpCurl
     */
    public static function &instance()
    {
        if (!isset(self::$instance))
        {
            self::$instance = new HttpCurl();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }


    public function curl($url,$post=false,$postdata=[]){
        $url=$url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTtl) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTtl) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        //https 请求
        if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if($post){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$postdata);
        }
        try {
            $reponse = curl_exec($ch);
        }catch (\Exception $e){
            return $e->getMessage();
        }
        if (curl_errno($ch))
        {
            return curl_error($ch);
        }
        else
        {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
            {
                return $reponse;
            }
        }
        curl_close($ch);
        return $reponse;
    }
}






file_put_contents("demo_notifyUrl_log.txt", date("Y-m-d H:i:s") . "  " . "异步通知:" . file_get_contents("php://input") . "\r\n", FILE_APPEND);
if($_POST) {
    $post = array(
        'data' => $_POST['data'],
        'sign' => $_POST['sign']
    );
    if (verification_sign($post,PUB_KEY)){
        //签名验证成功
        $result = json_decode($post['data'], true);
		file_put_contents("demo_notifyUrl_log_body.txt", date("Y-m-d H:i:s") . "  " . "异步通知:" . json_encode($result['body'],true) . "\r\n", FILE_APPEND);
	    $postdata=array('orderno'=>$result['body']['orderCode'],
            'amount'=>$result['body']['totalAmount']*0.01,
            'timestamp'=>time()
        );
	    //sort($postdata);
	    $signStr='';
	    foreach ($postdata as $k=>$v){
            $signStr.='['.$k.'='.$v.']';
        }
        $signStr.='[salt=39d46c96262f2c44d408b48be4c86f71]';
        $postdata['sign']=md5($signStr);
		//echo("\n".'http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$result['body']['MERORDERID']."\n");print_r($postdata);exit();
        HttpCurl::instance()->curl('http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$result['body']['orderCode'],true,$postdata);

        echo "respCode=000000";
        exit;
    } else {
        //签名验证失败
        echo "签名验证失败";
        exit;
    }
}else{
    echo "不是POST传输";
}



