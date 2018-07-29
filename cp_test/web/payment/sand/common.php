<?php
const API_HOST ='http://www.sdshopping.cn/api/orderpay.php';//测试旧地址
const PUB_KEY = 'FE131D7F5A6B38B23CC967316C13DAE2';//测试密钥
/**
 * @param $data
 * @param $a_key
 * @return string
 * 生成签名
 */
function get_sign($data, $a_key)
{
    $is_sign = $a_key;
    ksort($data);//对关联数组按照键名进行升序排序
    foreach ($data as $key => $value) {
        if ($value != "") {
            $is_sign .= $key . $value;
        }
    }
    $is_sign .= $a_key;
    return strtoupper(md5($is_sign));
}

/**
 * 发送post请求
 * @param string $url 请求地址
 * @param array $post_data post键值对数据
 * @return string
 */
function send_post($url, $post_data) {
    $postdata = http_build_query($post_data);//生成 URL-encode 之后的请求字符串
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $postdata,
            'timeout' => 15 * 60 // 超时时间（单位:s）
        )
    );
    $context = stream_context_create($options);//创建资源流上下文
    $result = file_get_contents($url, false, $context);//将整个文件读入一个字符串
    return $result;
}
/**
 * @param $data
 * @param $a_key
 * @return bool
 * 数据包验签
 */
function verification_sign($data, $a_key)
{
    ksort($data);//对关联数组按照键名进行升序排序
    $is_sign = $a_key;
    foreach ($data as $key => $value) {
        if ($value != "" && $key != "sign") {
            $is_sign .= $key . $value;
        }
    }
    $is_sign .= $a_key;
    $is_sign = strtoupper(md5($is_sign));//把所有字符转换为大写
    if ($is_sign == $data['sign']) {
        return true;
    }
    return false;
}