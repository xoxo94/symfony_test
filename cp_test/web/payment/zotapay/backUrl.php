<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/22 0022
 * Time: 上午 2:19
 */
require_once 'ZotaPayHelper.php';
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
$requestStr='';
foreach($_REQUEST as $k=>$v){
    $requestStr.=$k.'='.$v.'&';
}
file_put_contents('log\\'.date("Ymd"),date("Y-m-d H:i:s")."\t".$requestStr."\n", FILE_APPEND);
//初始化数据
$param=[
    'client_orderid'=>$_REQUEST['client_orderid'],
    'orderid'=>$_REQUEST['orderid'],
    'currency'=>$_REQUEST['currency']
];
$service=new ZotaPayHelper();
$result=$service->callBack($param);
unset($service);
if($result===true){
    $postdata=array(
        'orderno'=>$_REQUEST['client_orderid'],
        'amount'=>floatval($_REQUEST['amount']),
        'timestamp'=>time(),
    );
    $signStr='';
    foreach ($postdata as $k=>$v){
        $signStr.='['.$k.'='.$v.']';
    }
    $signStr.='[salt=39d46c96262f2c44d408b48be4c86f71]';
    $postdata['sign']=md5($signStr);
    $post_tmp=HttpCurl::instance()->curl('http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$_REQUEST['client_orderid'],true,$postdata);
    file_put_contents('log\\'.date("Ymd"),date("Y-m-d H:i:s")."\t".$post_tmp."\n", FILE_APPEND);
    exit("SUCCESS");
}else{
    exit('FAIL');
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