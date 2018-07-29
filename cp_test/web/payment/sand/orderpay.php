<?php
require('common.php');

//支付银行
$bankname_list=array(
	'01030000',//中国农业银行
	'-1',//银联通道
    '01050000',//建设银行
    '04031000',//北京银行
    '03010000',//交通银行
    '03090000',//兴业银行
    '03050000',//中国民生银行
    '03030000',//光大银行
    '01040000',//中国银行
    '03070000',//平安银行
    '03020000',//中信银行
	'-1',//深圳发展银行
    '03060000',//广发银行
    '04012900',//上海银行
    '03100000',//上海浦发银行
    '01000000',//中国邮政
    '-1',//北京农村商业银行
    '03040000',//华夏银行
    '03080000',//招商银行
    '01020000',//工商银行
    '-1',//支付宝
	'-1',//微信
    '04243010',//南京银行
	'65012900',//上海农商行
	'03170000',//渤海银行
	'64296510',//成都银行
	'64296511',//徽商银行
	'04341101',//天津银行
	'04083320',//宁波银行
	'03200000'//东亚银行
);
//格式化数据================================================================
$orderno=$_POST['orderno'];
$amount=$_POST['amount']*100;//转换成分
$amount=sprintf("%012s",intval($amount));//格式化成12位
$banknameIndex=intval($_POST['bankname']);//获取银行代码
$bankcode='01030000';//默认中国农业银行
if($banknameIndex<count($bankname_list) && $banknameIndex>=0){
	$bankcode=$bankname_list[$banknameIndex];
}

//赋值区================================================================
$data = array(
            'mid' => 'DV77207043525',
			'orderCode' => $orderno,
            'totalAmount' => $amount,
            'subject' => 'ONLINEPAY',
			'body' => 'ONLINEPAY',
			'txnTimeOut' => date("YmdHis",time()+86400),
			'payMode' => 'bank_pc',
			'payType' => '1',
            //'NOTIFY_URL' => 'http://crm.nepei.top/payment/mmssppay/online_callback.php',
            //'JUMP_URL' => 'http://crm.nepei.top/payment/mmssppay/online_front.php',
            'bankCode' => $bankcode,
            'extend' =>'',
			'sign' =>''
);
//接口代码================================================================
if($data) {
    $data['sign'] = get_sign($data,PUB_KEY);
    $massage = send_post(API_HOST, $data);//向服务器发送请求
    $xin = json_decode($massage, true);
    if (isset($xin['code'])) {
        print_r($massage);die;
    }
}else{
    echo "不是POST传输";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="renderer" content="webkit"/>
    <title>Insert title here</title>
    <script type="text/javascript" src="js/paymentjs.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
</head>
<body>
<script>
    function wap_pay() {
        var responseText = $("#credential").text();
        console.log(responseText);
        paymentjs.createPayment(responseText, function (result, err) {
            console.log(result);
            console.log(err.msg);
            console.log(err.extra);
        });
    }
</script>

<div style="display: none">
    <p id="credential"><?php echo $massage?></p>
</div>
</body>

<script>
   window.onload = function () {
        wap_pay();
   };
</script>
</html>
