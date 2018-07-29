<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
//格式化数据================================================================
$pay_amount=$_POST['amount'];   //交易金额
$pay_bankcode =907;//银行编码
$pay_orderid = $_POST['orderno'];    //订单号
$pay_applydate = date("Y-m-d H:i:s");  //订单时间
$pay_notifyurl = 'http://crm.nepei.top/payment/yzhpay/server.php';   //服务端返回地址
$pay_callbackurl = 'http://crm.nepei.top/payment/yzhpay/page.php';  //页面跳转返回地址
$tjurl = "http://www.yzhpay.net/Pay_Index.html";   //提交地址
$pay_memberid = "10290";   //商户ID
$Md5key = "uigug6s0il0aiygsprhu13x4bkg85ypq";   //密钥
//扫码
//赋值区================================================================
$native = array(
    "pay_memberid" => $pay_memberid,
    "pay_orderid" => $pay_orderid,
    "pay_amount" => $pay_amount,
    "pay_applydate" => $pay_applydate,
    "pay_bankcode" => $pay_bankcode,
    "pay_notifyurl" => $pay_notifyurl,
    "pay_callbackurl" => $pay_callbackurl,
);
ksort($native);
$md5str = "";
foreach ($native as $key => $val) {
    $md5str = $md5str . $key . "=" . $val . "&";
}
//echo($md5str . "key=" . $Md5key);
$sign = strtoupper(md5($md5str . "key=" . $Md5key));
$native["pay_md5sign"] = $sign;
$native['pay_attach'] = "1234|456";
$native['pay_productname'] =$_POST['mt4no'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
</head>
<body onLoad="document.payForm.submit()">
            <form class="form-inline" name="payForm" method="post" action="<?php echo $tjurl; ?>">
                <?php
                foreach ($native as $key => $val) {
                    echo '<input type="hidden" name="' . $key . '" value="' . $val . '">';
                }
                ?>
            </form>
<script>
</script>
</body>
</html>