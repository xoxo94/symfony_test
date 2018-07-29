<?php

/**
 * Created by IntelliJ IDEA.
 * User: rochuan
 * Date: 2017/9/28
 * Time: 下午4:11
 */
namespace AppBundle\Resquest;

class UserLoginRequest
{
    private $apiParams = array();

    public function getApiMethodName(){
        return "/v1/user/login";
    }

    public function getApiParams(){
        return json_encode($this->apiParams);
    }

    public function putOtherTextParam($key, $value){
        $this->apiParams[$key] = $value;
        $this->$key = $value;
    }
    private $username;
    private $password;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->apiParams["username"] = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->apiParams['password'] = $password;
    }


}