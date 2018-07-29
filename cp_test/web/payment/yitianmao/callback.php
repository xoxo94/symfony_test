<?php
include "Config.php";

$input = file_get_contents("php://input"); //接收POST数据
file_put_contents('logs\notify.log', date("Y-m-d H:i:s")."\t".$input.PHP_EOL, FILE_APPEND);
parse_str($input,$dic);
$res=new HttpUtils() ;
$context = $res->UnPackUrlBase64($dic["context"]);
$context = base64_decode($context);
unset($res);
file_put_contents('logs\notify.log', date("Y-m-d H:i:s")."\t".$context.PHP_EOL, FILE_APPEND);
parse_str($context,$dic);
$strSign=$dic["signature"];
$Signstr = "{" . $dic["trans_id"] . "}|{" . $dic["result"] . "}|{" . $dic["amount"] . "}|{" . $key . "}";
$Sign = substr(strtoupper(md5($Signstr)),0,16);
if ($strSign != $Sign){
    exit('FAIL');
}
$postdata=array(
    'orderno'=>$dic['app_id'],
    'amount'=>floatval($dic['amount']*0.01),//单位分
    'timestamp'=>time(),
);
$signStr='';
foreach ($postdata as $k=>$v){
    $signStr.='['.$k.'='.$v.']';
}
$signStr.='[salt=39d46c96262f2c44d408b48be4c86f71]';
$postdata['sign']=md5($signStr);
$post_tmp=HttpCurl::instance()->curl('http://'.$_SERVER['HTTP_HOST'].'/payment/callback/'.$dic['app_id'],true,$postdata);
file_put_contents('logs\notify.log',date("Y-m-d H:i:s")."\t".$post_tmp."\n", FILE_APPEND);
exit('SUCCESS');

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