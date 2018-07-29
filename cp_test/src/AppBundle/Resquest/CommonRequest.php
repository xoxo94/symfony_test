<?php
namespace AppBundle\Resquest;

class CommonRequest
{
    private $api_method_name='';
    private static $instance;
    private $apiParams=array();
    public function __construct($api_method_name)
    {
        $this->api_method_name=$api_method_name;
    }
    public function getApiMethodName()
    {
        return $this->api_method_name;
    }
    
    public function findParam()
    {
        return $this->apiParams;
    }
    
    public function getApiParams()
    {
        return json_encode($this->apiParams);
    }
    
    public function putParam($key, $value)
    {
        $this->apiParams[$key] = $value;
    }
    
    public function removeParam($key)
    {
        unset($this->apiParams[$key]);
    }
}

