<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/22 0022
 * Time: 上午 2:09
 */
require_once 'ZotaPayHelper.php';
error_reporting(0);
header("Content-type: text/html; charset=utf-8");

function get_ip(){
    //判断服务器是否允许$_SERVER
    if(isset($_SERVER)){
        if(isset($_SERVER[HTTP_X_FORWARDED_FOR])){
            $realip = $_SERVER[HTTP_X_FORWARDED_FOR];
        }elseif(isset($_SERVER[HTTP_CLIENT_IP])) {
            $realip = $_SERVER[HTTP_CLIENT_IP];
        }else{
            $realip = $_SERVER[REMOTE_ADDR];
        }
    }else{
        //不允许就使用getenv获取
        if(getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv( "HTTP_X_FORWARDED_FOR");
        }elseif(getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        }else{
            $realip = getenv("REMOTE_ADDR");
        }
    }

    return $realip;
}

//初始化数据
$param=[
    'amount'=>$_POST['amount'],
    'client_orderid'=>$_POST['orderno'],
    'currency'=>$_POST['currency'],
	'ipaddress'=>get_ip()
];
if(isset($_POST['email']) && !empty($_POST['email'])){
    $param['email']=trim($_POST['email']);
}
$service=new ZotaPayHelper();
$result=$service->send($param);
unset($service);
if($result['code']===true){
    header('Location:'.$result['data']);exit;
}else{
?>
    <script type="text/javascript">
        alert('<?php echo($result['msg']); ?>');
        window.opener=null;
        window.open('','_self');
        window.close();
    </script>
<?php
}
?>