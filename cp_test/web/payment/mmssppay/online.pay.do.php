<?php
//error_reporting(E_ERROR);
require_once './lib/online.class.php';
header('Content-Type:text/html; charset=utf-8');
//支付银行
$bankname_list=array(
	'ABC-NET-B2C',//中国农业银行
	'YLBILL-NET-B2C',//银联通道
    'CCB-NET-B2C',//建设银行
    'BCCB-NET-B2C',//北京银行
    'BOCO-NET-B2C',//交通银行
    'CIB-NET-B2C',//兴业银行
    'CMBC-NET-B2C',//中国民生银行
    'CEB-NET-B2C',//光大银行
    'BOC-NET-B2C',//中国银行
    'PINGANBANK-NET-B2C',//平安银行
    'ECITIC-NET-B2C',//中信银行
    'SDB-NET-B2C',//深圳发展银行
    'GDB-NET-B2C',//广发银行
    'SHB-NET-B2C',//上海银行
    'SPDB-NET-B2C',//上海浦东发展银行
    'POST-NET-B2C',//中国邮政
    'BJRCB-NET-B2C',//北京农村商业银行
    'HXB-NET-B2C',//华夏银行
    'CMBCHINA-NET-B2C',//招商银行
    'ICBC-NET-B2C',//工商银行
    'ALI-PAY',//支付宝
    'WEIXIN-PAY'//微信
);
//格式化数据================================================================
$orderno=$_POST['orderno'];
$amount=$_POST['amount']*100;//转换成分
$banknameIndex=intval($_POST['bankname']);//获取银行代码
$bankcode='ABC-NET-B2C';//默认中国农业银行
if($banknameIndex<count($bankname_list) && $banknameIndex>=0){
	$bankcode=$bankname_list[$banknameIndex];
}

//赋值区================================================================
$data = array(
            'MERORDERID' => $orderno,
            'AMT' => $amount,
            'GOODSNAME' => 'ONLINEPAY',
            'NOTIFY_URL' => 'http://crm.nepei.top/payment/mmssppay/online_callback.php',
            'JUMP_URL' => 'http://crm.nepei.top/payment/mmssppay/online_front.php',
            'PAY_CHANNEL' => $bankcode,
            'REMARK' =>'nothing'
);
//接口代码================================================================
$msg = ''; $isCheck = true;

if($data)
{
	
    //head
    $merMod = new online();
    $merMod->SetCommandID(hexdec('0x0912'));
    $merMod->SetSeqID('1');
    $merMod->SetNodeType('3');
    $merMod->SetNodeID('openapi');
    $merMod->SetVersion('1.0.0');
	$merMod->SetAGENTNO(payconfig::AGENTNO);//报文头机构或代理ID
	$merMod->SetMERNO(payconfig::MERNO);
	$merMod->SetTERMNO(payconfig::TERMNO);
	
	//业务数据包	Body
	$merMod->SetMERORDERID($data['MERORDERID']);
	$merMod->SetAMT($data['AMT']);
	$merMod->SetGOODSNAME($data['GOODSNAME']);
	$merMod->SetNOTIFY_URL($data['NOTIFY_URL']);
	$merMod->SetJUMP_URL($data['JUMP_URL']);
	$merMod->SetPAY_CHANNEL($data['PAY_CHANNEL']);
	$merMod->SetREMARK($data['REMARK']);
	
	
	
    if($isCheck){
			//设置附件
            $merMod->BodyAes();
            $merMod->MakeSign();
            $result = $merMod->sendHtml();
			echo $result;
	   }
    
}

	
?>
