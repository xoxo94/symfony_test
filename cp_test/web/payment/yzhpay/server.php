<?php
file_put_contents("success.txt",date("Y-m-d H:i:s")."\t".file_get_contents("php://input")."\n", FILE_APPEND);
 $returnArray = array( // 返回字段
            "memberid" => $_REQUEST["memberid"], // 商户ID
            "orderid" =>  $_REQUEST["orderid"], // 订单号
            "amount" =>  $_REQUEST["amount"], // 交易金额
            "datetime" =>  $_REQUEST["datetime"], // 交易时间
            "transaction_id" =>  $_REQUEST["transaction_id"], // 支付流水号
            "returncode" => $_REQUEST["returncode"],
        );
        $md5key = "uigug6s0il0aiygsprhu13x4bkg85ypq";
        ksort($returnArray);
        reset($returnArray);
        $md5str = "";
        foreach ($returnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $md5key));
if ($sign == $_REQUEST["sign"]) {
			if ($_REQUEST["returncode"] == "00") {
				$postdata=array(
                    'orderno'=>$returnArray['orderid'],
                    'amount'=>$returnArray['amount'],
                    'timestamp'=>time(),
                );
                $signStr='';
                foreach ($postdata as $k=>$v){
                    $signStr.='['.$k.'='.$v.']';
                }
                $signStr.='[salt=39d46c96262f2c44d408b48be4c86f71]';
                $postdata['sign']=md5($signStr);
                $post_tmp=HttpCurl::instance()->curl('http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$returnArray['orderid'],true,$postdata);
				file_put_contents("success.txt",date("Y-m-d H:i:s")."\t".$post_tmp."\n", FILE_APPEND);
                exit("ok");
            }
        }
//===============================
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

?>