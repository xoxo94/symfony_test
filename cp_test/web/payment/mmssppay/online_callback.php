<?php
require_once './lib/online.class.php';
header("Content-type: text/html; charset=utf-8");

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


/********************
1、写入内容到文件,追加内容到文件
2、打开并读取文件内容
********************/
 $file  = __DIR__.'/logs/log.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
 $content = "[".date('Y-m-d H:i:s',time())."]callback";
	$input = file_get_contents("php://input");
     $content .= '[php://input]'.$input;
	 $data = $input;
 $content .="\n";
 if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
    echo json_encode(array('name'=>'wangluozhifu','status'=>'1'),true);
 }

$base = new base();
$result = json_decode($data, true);
if($result['RetCode'] == 1)
{
	$mysign = $base->ckSign($result['Body']);

	if($mysign != $result['Sign']){
		exit('签名错误');
	}else{
	    $postdata=array('orderno'=>$result['Body']['MERORDERID'],
            'amount'=>$result['Body']['AMT']*0.01,
            'timestamp'=>time()
        );
	    //sort($postdata);
	    $signStr='';
	    foreach ($postdata as $k=>$v){
            $signStr.='['.$k.'='.$v.']';
        }
        $signStr.='[salt=39d46c96262f2c44d408b48be4c86f71]';
        $postdata['sign']=md5($signStr);
		//echo("\n".'http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$result['Body']['MERORDERID']."\n");print_r($postdata);exit();
        HttpCurl::instance()->curl('http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$result['Body']['MERORDERID'],true,$postdata);
		return $result['Body'];
	}

	return false;               
}elseif ($result == false && $base->GetCommandID() == hexdec('0x090B'))//输入文件流
{
	return array('STATUS'=>true,'txt'=>$data);
}
else
{
	return false;
}
?>