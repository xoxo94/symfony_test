<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/23
 * Time: 14:06
 */

namespace AppBundle\Util;


class Regular
{

    private static  $instance=null;

    /**
     *
     * @return Regular
     */
    public static function &instance()
    {
        if (!isset(self::$instance))
        {
            self::$instance = new Regular();
        }

        return self::$instance;
    }
    private function __construct(){

    }

    /**
     *  前一天的时间和今天时间
     *
     */
     public function agoAndPresentData(){
         date_default_timezone_set('Asia/Shanghai');
        $Present=date("Y-m-d H:i:s",time());
        $ago=date("Y-m-d H:i:s",strtotime("-1 month"));
        return  ['Present'=>$Present,"ago"=>$ago];
    }


    /** 格式化时间
     * @param $date
     * @return false|string
     */
     public function formattingDate($date){
         if (empty($date)) {
              return "";
         }

        return   date("Y-m-d H:i:s",strtotime($date));
    }


    /**手机号验证
     * @param $mobile
     * @return int
     */
    function verifyMobile($mobile){
       $res= preg_match("/^1[34578]\d{9}$/", $mobile);
       return $res;
    }
    /**邮箱 验证
     * @param $mail
     * @return int
     */
     function verifyMail($mail){
         $preg = '/^(\w{1,25})@(\w{1,16})(\.(\w{1,4})){1,3}$/';
         $res=preg_match($preg, $mail);
         return $res;
     }
    /**密码   验证字母加数字8位
     * @param $password
     * @return bool
     */
    function VerifyPassword($password){
       $res= preg_match("/(?=.*\d)(?=.*[A-z])^[0-9A-z]{8,}$/",$password);
       return $res;
    }

    /**
     * desc
     * 身份证验证
     * author：lhx
     */
    function is_idcard($id)
    {
        $id = strtoupper($id);
        $regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/";
        $arr_split = array();
        if(!preg_match($regx, $id))
        {
            return FALSE;
        }
        if(15==strlen($id)) //检查15位
        {
            $regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/";

            @preg_match($regx, $id, $arr_split);
            //检查生日日期是否正确
            $dtm_birth = "19".$arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4];
            if(!strtotime($dtm_birth))
            {
                return FALSE;
            } else {
                return TRUE;
            }
        }
        else      //检查18位
        {
            $regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/";
            @preg_match($regx, $id, $arr_split);
            $dtm_birth = $arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4];
            if(!strtotime($dtm_birth)) //检查生日日期是否正确
            {
                return FALSE;
            }
            else
            {
                //检验18位身份证的校验码是否正确。
                //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
                $arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
                $arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
                $sign = 0;
                for ( $i = 0; $i < 17; $i++ )
                {
                    $b = (int) $id{$i};
                    $w = $arr_int[$i];
                    $sign += $b * $w;
                }
                $n = $sign % 11;
                $val_num = $arr_ch[$n];
                if ($val_num != substr($id,17, 1))
                {
                    return FALSE;
                } //phpfensi.com
                else
                {
                    return TRUE;
                }
            }
        }

    }
}