<?php  
include "Config.php";
//初始化数据
$param=[
    'server_no' => $PayCode,
    'trans_time' => date("YmdHis"),
    'account' => $Account,
    'amount'=>$_POST['amount']*100,//单位分
    'pay_mode'=>$API_GATEWAY
];
$Signstr = "{" . $param["server_no"] . "}|{" . $param["trans_time"] . "}|{" .$param["account"] . "}|{" . $param["amount"] . "}|{" . $param["pay_mode"] . "}|{" . $key . "}";
$Sign = substr(strtoupper(md5($Signstr)),0,16);

$param['aging']= '2' ; //t0=1 t1=2
$param['app_id']=$_POST['orderno'];
$param['callback_url']='http://'.$_SERVER['HTTP_HOST'].'/payment/yitianmao/callfront.php';
$param['notify_url']='http://'.$_SERVER['HTTP_HOST'].'/payment/yitianmao/callback.php';
$param['memo']='online_pay';

$Context = "server_no=" . $param["server_no"]. "&trans_time=" . $param["trans_time"] . "&account=" . $param["account"] . "&amount=" . $param["amount"] . "&pay_mode=" . $param["pay_mode"] .
    "&aging=" . $param["aging"] . "&app_id=" . $param["app_id"] . "&callback_url=" . $param["callback_url"] . "&notify_url=" . $param["notify_url"] . "&memo=" . $param["memo"];
$Context=mb_convert_encoding($Context, "GBK","UTF-8");
$Context=base64_encode($Context);
$res=new HttpUtils() ;
$Context = $res->PackUrlBase64( $Context);
$strUrl=$res->Postdata($Syscode,$Version,$Context,$Sign);
list ( $curl_errno, $result )=$res->Post($Pay_server,$strUrl);
unset($res);
if ( $curl_errno >0){
    echo '通讯失败:请尝试使用其他域名访问.';exit;
}
$dic=json_decode($result,true);
if ($dic["errorcode"] != "0000"){
    echo ("请求失败!" . $dic["errorcode"] ."  ". $dic["errormessage"] );exit;
}
$strSign = $dic["signature"];
$res=new HttpUtils() ;
$context = $res->UnPackUrlBase64($dic["context"]);
$context = base64_decode($context);
unset($res);
parse_str($context,$dic);
$Signstr = "{" . $dic["trans_id"] . "}|{" . $dic["amount"] . "}|{" . $dic["pay_url"] . "}|{" . $key . "}";
$Sign = substr(strtoupper(md5($Signstr)),0,16);
if ($strSign != $Sign){
    echo("验签失败!请勿恶意修改参数.");exit;
}
$res=new HttpUtils() ;
$pay_url =   $res->UnPackUrlBase64( $dic["pay_url"] );
$pay_url =   base64_decode( $pay_url ) ;
unset($res);
header('Location:'. $pay_url)  ;
?>
