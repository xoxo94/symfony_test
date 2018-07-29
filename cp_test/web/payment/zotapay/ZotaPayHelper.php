<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/22 0022
 * Time: 上午 2:04
 */

class ZotaPayHelper
{
    //[3058]-[554]
    private $endpointid='';
    private $endpoint_list=['MYR'=>'7239','IDR'=>'7240','THB'=>'7242','VND'=>'7243','CNY'=>'8710','USD'=>'8190'];

    private $merchant_data='BeneForex';

    private $control_key='94A72147-A027-4B22-B124-211262933ED8';

    private $frontUrl='';

    private $backUrl='';

    public function __construct()
    {
        //$this->frontUrl='http://crm.nepei.top/uplo/index';
        $this->frontUrl='http://'.$_SERVER['HTTP_HOST'].'/uplo/index';
        $this->backUrl='http://crm.beneforex-china.com/payment/zotapay/backUrl.php';
    }

    private function sendRequest($url, array $requestFields)
    {
        $curl = curl_init($url);

        curl_setopt_array($curl, array
        (
            CURLOPT_HEADER         => 0,
            CURLOPT_USERAGENT      => 'Zotapay-Client/1.0',
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST           => 1,
            CURLOPT_RETURNTRANSFER => 1
        ));

        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($requestFields));

        $response = curl_exec($curl);

        if(curl_errno($curl))
        {
            $error_message  = 'Error occurred: ' . curl_error($curl);
            $error_code     = curl_errno($curl);
        }
        elseif(curl_getinfo($curl, CURLINFO_HTTP_CODE) != 200)
        {
            $error_code     = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $error_message  = "Error occurred. HTTP code: '{$error_code}'";
        }

        curl_close($curl);

        if (!empty($error_message))
        {
            throw new \Exception($error_message, $error_code);
        }

        if(empty($response))
        {
            throw new \Exception('Host response is empty');
        }

        $responseFields = array();

        parse_str($response, $responseFields);

        return $responseFields;
    }

    private function signString($s, $merchantControl)
    {
        return sha1($s . $merchantControl);
    }

    private function signPaymentRequest($requestFields, $endpointOrGroupId, $merchantControl)
    {
        $base = '';
        $base .= $endpointOrGroupId;
        $base .= $requestFields['client_orderid'];
        $base .= $requestFields['amount'] * 100;
        $base .= $requestFields['email'];

        return $this->signString($base, $merchantControl);
    }

    private function signStatusRequest($requestFields, $login, $merchantControl)
    {
        $base = '';
        $base .= $login;
        $base .= $requestFields['client_orderid'];
        $base .= $requestFields['orderid'];

        return $this->signString($base, $merchantControl);
    }


    function send(array $param){
        if(!isset($param['amount']) || $param['amount']<=0){
            return ['code'=>false,'msg'=>'amount not fund'];
        }
        if(!isset($param['currency']) || empty($param['currency'])){
            return ['code'=>false,'msg'=>'currency not fund'];
        }
        $param['currency']=strtoupper($param['currency']);
        if(! isset($this->endpoint_list[$param['currency']])){return ['code'=>false,'msg'=>'currency not fund'];}
        $this->endpointid=$this->endpoint_list[$param['currency']];
        $requestFields = array(
            'client_orderid' => $param['client_orderid'],
            'order_desc' => isset($param['order_desc'])?$param['order_desc']:'Recharge',
            'address1' => isset($param['address1'])?$param['address1']:'100 Main st',
            'city' => isset($param['city'])?$param['city']:'Chengdu',
            'zip_code' => isset($param['zip_code'])?$param['zip_code']:'844200',
            'country' => isset($param['country'])?$param['country']:'CN',
            'amount' => number_format(floatval($param['amount']),2,'.',''),
            'email' =>isset($param['email'])?$param['email']:'system@beneforx.com',
            'currency' => $param['currency'],
            'ipaddress' =>isset($param['ipaddress'])?$param['ipaddress']:'127.0.0.1',
            'expire_month' => '12',
            'expire_year' => '2099',
            'cvv2' => '321',
            'redirect_url' =>$this->frontUrl,
            'server_callback_url' => $this->backUrl
        );
        $requestFields['control'] = $this->signPaymentRequest($requestFields, $this->endpointid, $this->control_key);
        $responseFields = $this->sendRequest('https://gate.zotapay.com/paynet/api/v2/sale-form/'.$this->endpointid, $requestFields);
        if(isset($responseFields['redirect-url']) && isset($responseFields['merchant-order-id']) && substr($responseFields['merchant-order-id'],0,strlen($param['client_orderid']))==$param['client_orderid']){
            return ['code'=>true,'data'=>$responseFields['redirect-url']];
        }
        return ['code'=>false,'msg'=>isset($responseFields['error-message'])?substr($responseFields['error-message'],0,-1):'system error'];
    }

    function callBack(array $param){
        $param['currency']=strtoupper($param['currency']);
        if(! isset($this->endpoint_list[$param['currency']])){return false;}
        $this->endpointid=$this->endpoint_list[$param['currency']];
        $requestFields = array(
            'login'=>$this->merchant_data,
            'client_orderid' =>$param['client_orderid'],
            'orderid' =>$param['orderid']
        );

        $requestFields['control'] = $this->signStatusRequest($requestFields, $this->merchant_data, $this->control_key);
        $responseFields = $this->sendRequest('https://gate.zotapay.com/paynet/api/v2/status/'.$this->endpointid, $requestFields);
        if(isset($responseFields['status']) && substr($responseFields['status'],0,8)=='approved'){//支付成功
            return true;
        }else{
            return false;
        }
    }
}