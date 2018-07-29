<?php
namespace AppBundle\Util;

class UserBuildIBID
{
    private $arr_charset=array(
        '0'=>array('0'=>'H','H'=>'0','1'=>'D','D'=>'1','2'=>'U','U'=>'2','3'=>'f','f'=>'3','4'=>'J','J'=>'4','5'=>'u','u'=>'5','6'=>'C','C'=>'6','7'=>'W','W'=>'7','8'=>'d','d'=>'8','9'=>'e','e'=>'9','|'=>'v','v'=>'|'),
        '1'=>array('0'=>'Z','Z'=>'0','1'=>'t','t'=>'1','2'=>'i','i'=>'2','3'=>'d','d'=>'3','4'=>'k','k'=>'4','5'=>'F','F'=>'5','6'=>'G','G'=>'6','7'=>'n','n'=>'7','8'=>'z','z'=>'8','9'=>'g','g'=>'9','|'=>'q','q'=>'|'),
        '2'=>array('0'=>'z','z'=>'0','1'=>'Q','Q'=>'1','2'=>'u','u'=>'2','3'=>'r','r'=>'3','4'=>'v','v'=>'4','5'=>'f','f'=>'5','6'=>'c','c'=>'6','7'=>'e','e'=>'7','8'=>'U','U'=>'8','9'=>'E','E'=>'9','|'=>'n','n'=>'|'),
        '3'=>array('0'=>'v','v'=>'0','1'=>'R','R'=>'1','2'=>'i','i'=>'2','3'=>'H','H'=>'3','4'=>'c','c'=>'4','5'=>'y','y'=>'5','6'=>'I','I'=>'6','7'=>'s','s'=>'7','8'=>'E','E'=>'8','9'=>'e','e'=>'9','|'=>'V','V'=>'|'),
        '4'=>array('0'=>'G','G'=>'0','1'=>'d','d'=>'1','2'=>'u','u'=>'2','3'=>'B','B'=>'3','4'=>'y','y'=>'4','5'=>'q','q'=>'5','6'=>'e','e'=>'6','7'=>'g','g'=>'7','8'=>'A','A'=>'8','9'=>'E','E'=>'9','|'=>'P','P'=>'|'),
        '5'=>array('0'=>'x','x'=>'0','1'=>'e','e'=>'1','2'=>'v','v'=>'2','3'=>'P','P'=>'3','4'=>'w','w'=>'4','5'=>'h','h'=>'5','6'=>'j','j'=>'6','7'=>'F','F'=>'7','8'=>'W','W'=>'8','9'=>'I','I'=>'9','|'=>'i','i'=>'|'),
        '6'=>array('0'=>'s','s'=>'0','1'=>'E','E'=>'1','2'=>'f','f'=>'2','3'=>'R','R'=>'3','4'=>'d','d'=>'4','5'=>'g','g'=>'5','6'=>'r','r'=>'6','7'=>'o','o'=>'7','8'=>'M','M'=>'8','9'=>'l','l'=>'9','|'=>'D','D'=>'|'),
        '7'=>array('0'=>'R','R'=>'0','1'=>'x','x'=>'1','2'=>'B','B'=>'2','3'=>'m','m'=>'3','4'=>'K','K'=>'4','5'=>'q','q'=>'5','6'=>'z','z'=>'6','7'=>'l','l'=>'7','8'=>'w','w'=>'8','9'=>'P','P'=>'9','|'=>'a','a'=>'|'),
        '8'=>array('0'=>'q','q'=>'0','1'=>'V','V'=>'1','2'=>'F','F'=>'2','3'=>'c','c'=>'3','4'=>'y','y'=>'4','5'=>'K','K'=>'5','6'=>'T','T'=>'6','7'=>'x','x'=>'7','8'=>'b','b'=>'8','9'=>'j','j'=>'9','|'=>'J','J'=>'|'),
        '9'=>array('0'=>'H','H'=>'0','1'=>'f','f'=>'1','2'=>'j','j'=>'2','3'=>'G','G'=>'3','4'=>'y','y'=>'4','5'=>'C','C'=>'5','6'=>'X','X'=>'6','7'=>'Z','Z'=>'7','8'=>'n','n'=>'8','9'=>'W','W'=>'9','|'=>'J','J'=>'|'));
    private $arr_groupid=array(
        '0'=>'s','1'=>'a','2'=>'e','3'=>'t','4'=>'k','5'=>'g','6'=>'j','7'=>'q','8'=>'h','9'=>'y',
        's'=>'0','a'=>'1','e'=>'2','t'=>'3','k'=>'4','g'=>'5','j'=>'6','q'=>'7','h'=>'8','y'=>'9'
    );
    private $ib_code;
    private $ib_server;
    private $ib_group;
    private $ib_lock;
    private $ib_type;
    public function init($code,$server,$group,$lock,$type){
        $this->ib_code=intval($code);
        $this->ib_server=intval($server);
        $this->ib_group=intval($group);
        $this->ib_lock=intval($lock);
        $this->ib_type=intval($type);
    }
    public function enCodeIBID(){
        $groupid=mt_rand(0,9);
        $head=$this->arr_groupid[$groupid];
        $linksStr=$this->ib_code.'|'.$this->ib_server.'|'.$this->ib_group.'|'.$this->ib_lock.'|'.$this->ib_type;
        $length=strlen($linksStr);
        $hash=$head.'';
        for($i=0;$i<$length;$i++){
            $hash .= $this->getCharCode($groupid,$linksStr[$i]);
        }
        return $hash;
    }
    private function getCharCode($groupid,$num){
        $ret='';
        if(isset($this->arr_charset[$groupid][$num])){
            $ret=$this->arr_charset[$groupid][$num];
        }
        return $ret;
    }
    public function deCodeIBID($signIBID){
        $ret=array('IB_code'=>0,'IB_server'=>0,'IB_group'=>0,'IB_lock'=>0,'IB_type'=>0);
        $head=$signIBID[0];
        $signIBID=substr($signIBID,1);
        if(!isset($this->arr_groupid[$head])){
            return $ret;
        }
        $groupid=$this->arr_groupid[$head];
        $length=strlen($signIBID);
        $hash='';
        for($i=0;$i<$length;$i++){
            $hash .= $this->getCharCode($groupid,$signIBID[$i]);
        }
        $count_sub=substr_count($hash,'|');
        if($count_sub != 4){ return $ret;}
        $ibarr=explode('|',$hash);
        $ret['IB_code']=$ibarr[0]?:0;
        $ret['IB_server']=intval($ibarr[1]) ?:0;
        $ret['IB_group']=intval($ibarr[2]) ?:0;
        $ret['IB_lock']=intval($ibarr[3]) ?:0;
        $ret['IB_type']=intval($ibarr[4]) ?:0;
        return $ret;
    }
}

