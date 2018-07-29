<?php
/**
 * Created by IntelliJ IDEA.
 * User: rochuan
 * Date: 2017/10/10
 * Time: 下午5:49
 */

namespace AppBundle\Util;


class Uploader
{

    private $fileSize = 5*1024*1024;
    private $fileType  = ["gif","png","jpg","jpeg"];
    private $message = array('code'=>200,'msg'=>'','response'=>[]);
    private static $instance;

    public static function &instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}

    private function __clone(){}

    /*
     * 设置文件的大小与类型
    */
    public function setFileType($fileSize, $fileType = array()) {
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
    }

    /*
     * 检测文件的后缀
    */
    public function extention($file) {

        $extention = strtolower(substr(strrchr($file, '.'), 1));
        return $extention;
    }

    public function checkExtention($type = null){
        if($this->fileType) {
            return in_array($type, $this->fileType) ? $type : false;
        }
        return true;
    }

    /*
     * 按模块创建目录
    */

    public function mkdir($dir = null)
    {
        global $kernel;

        $path = $_SERVER['DOCUMENT_ROOT'].$dir;

        if(!file_exists($path)) {
            umask(0);
            mkdir($path, 0777, true);
        }
        return $path;
    }

    /*
     * 检测文件大小，单位为字节
    */

    public function fileSize($fileSize)
    {
        return ($fileSize > $this->fileSize) ? false : true;
    }


    /*
     * 上传文件到服务器
    */

    public function moveUploadedFile($filePath, $file)
    {
        return move_uploaded_file($file['tmp_name'], $filePath);
    }

    /*
     * 获取上传文件错误信息
    */

    public function fileError($file) {

        switch($file['error']) {
            case UPLOAD_ERR_OK:
                $this->message['code'] = 200;
                $this->message['msg'] = '上传成功！';
                break;
            case UPLOAD_ERR_INI_SIZE:
                $this->message['code'] = 101;
                $this->message['msg'] = '上传的文件超过了php配置！';
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $this->message['code'] = 102;
                $this->message['msg'] = '上传文件的大小超过了表单中 MAX_FILE_SIZE！';
                break;
            case UPLOAD_ERR_PARTIAL:

                $this->message['code'] = 103;
                $this->message['msg'] = '文件只有部分被上传！';
                break;
            case UPLOAD_ERR_NO_FILE:
                $this->message['code'] = 104;
                $this->message['msg'] = '没有文件被上传！';
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $this->message['code'] = 105;
                $this->message['msg'] = '找不到临时文件夹！';

                break;
            case UPLOAD_ERR_CANT_WRITE:
                $this->message['code'] = 106;
                $this->message['msg'] = '文件写入失败！';
                break;
            default:
                break;
        }
        return $this->message ;
    }


    /**
     *上传
     * @file 上传二进制流
     */
    public function execute($file  , $url , $fileName =null )
    {
        $url = $url .DIRECTORY_SEPARATOR. date('Y') .DIRECTORY_SEPARATOR. date('m') .DIRECTORY_SEPARATOR. date('d');
        if (!$file){
            $this->message['code'] = 107;
            $this->message['msg'] = '上传文件不能为空！';
            return $this->message ;
        }
        if ($file['error'] != 0)
        {
            return $this->file_error($file);
        }
        $type = $this->extention($file['name']);
        if(!$type)
        {
            $this->message['code'] = 108;
            $this->message['msg'] = '缺少文件类型！';
            return $this->message ;
        }
        $extention = $this->checkExtention($type);
        if(!$extention)
        {
            $this->message['code'] = 109;
            $this->message['msg'] = '文件类型错误！';
            return $this->message ;
        }
        $fileSize = $this->fileSize($file['size']);
        if(!$fileSize) {
            $this->message['code'] = 110;
            $this->message['msg'] = '上传文件不得超过'.$this->fileSize . "字节";
            return $this->message ;
        }

        if (!$fileName){
            $fileName = md5(date('YmdHis',microtime(true)) . rand(0,1000000)) . '.' . $type;
        }
        $fileDir = $this->mkdir($url);
		$path = $fileDir.DIRECTORY_SEPARATOR.$fileName;
        $url = $url.DIRECTORY_SEPARATOR.$fileName;
        if(!$this->moveUploadedFile($path, $file)) {
            $this->message['code'] = '111';
            $this->message['msg'] = '文件移动失败'.$fileDir;
            return $this->message ;
        }
        $this->message['code'] = '200';
        $this->message['msg'] = '上传成功！';
        $this->message['response'] = array(
            'img_url'=>$url,
            'size'=>$file['size'],
            'name'=>$fileName,
            'url'=>''
        );
        return $this->message ;

    }
}