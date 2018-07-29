<?php
/**
 * Created by IntelliJ IDEA.
 * User: rochuan
 * Date: 2017/9/28
 * Time: 下午3:43
 */
namespace AppBundle\Util;

use Symfony\Component\Config\Definition\Exception\Exception;

class HttpClient{


    public $serverUrl = "";
    public $accessToken;
    public $connectTtl = 0;
    public $connectTimeout=0;
    public $readTtl = 0;
    public $readTimeout=0;
    public $appKey = 'admin';
    public $appSecret = 'admin';
    public $version = "1.0";
    public $format = "json";
    private $charset = "UTF-8";
    private $jsonParam = "http_param_json";

    public function __construct()
    {
        global $kernel;
        $this->serverUrl=$kernel->getContainer()->getParameter('app.apiurl');
    }

    protected function generateSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v)
        {
            if("@" != substr($v, 0, 1))
            {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    public function curl($url, $postFields = null,$method)
    {
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
        if($method=="POST"){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$postFields);
        }
        try {
            $reponse = curl_exec($ch);
        }catch (Exception $e){
            return ($e->getMessage());
        }
        if (curl_errno($ch))
        {
            throw new Exception(curl_error($ch),0);
        }
        else
        {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
            {
                throw new Exception($reponse,$httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    public function execute($request, $access_token = null,$method=null)
    {
        //组装系统参数
        $sysParams["app_key"] = $this->appKey;
        $sysParams["v"] = $this->version;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        if (null != $access_token)
        {
            $sysParams["access_token"] = $access_token;
        }
        //获取业务参数
        $apiParams = $request->getApiParams();

        $sysParams[$this->jsonParam] = $apiParams;


        //签名
        $sysParams["sign"] = $this->generateSign($sysParams);
        //系统参数放入GET请求串
        $requestUrl = $this->serverUrl . $sysParams["method"] . "?";
        foreach ($sysParams as $sysParamKey => $sysParamValue)
        {
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
        }
//         return $requestUrl;
        //发起HTTP请求
        try{
            $resp = $this->curl($requestUrl, $apiParams,$method);
            //var_dump($resp);exit();
        }catch (Exception $e){
            //var_dump($e->getMessage());exit();
            $resp = $e->getMessage();
        }
        if ("json" == $this->format)
        {
            $respObject = json_decode($resp , true);
        }
        return $respObject;
    }
}