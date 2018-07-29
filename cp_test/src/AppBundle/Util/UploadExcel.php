<?php
/**
 * Created by IntelliJ IDEA.
 * User: rochuan
 * Date: 2017/10/10
 * Time: 下午5:49
 */

namespace AppBundle\Util;


class UploadExcel
{

    private $fileSize = 5*1024*1024;
    private $fileType  = ['application/vnd.ms-excel'];
    private $message = array('code'=>200,'msg'=>'','response'=>[]);
    private   $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
        'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
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
     * @file
     */
    public function execute($excel)
    {
        //获取表格的大小，限制上传表格的大小5M
        $excel_size = $excel['size'];
        if ($excel_size>$this->fileSize) {
            $this->message['code'] = false;
            $this->message['msg'] = '上传失败，上传的表格不能超过5M的大小';
            return $this->message;
        }
        //限制上传表格类型
        $file_type = $excel['type'];
        //application/vnd.ms-excel 为xls文件类型
        if ($file_type!=$this->fileType[0]) {
            $this->message['code'] = false;
            $this->message['msg'] = '上传失败，只能上传excel的xls格式';
            return $this->message;

        }
        //判断上传是否 成功  POST上传的
        if (!is_uploaded_file($excel['tmp_name'])) {
            $this->message['code'] = false;
            $this->message['msg'] = '上传失败';
            return $this->message;
        }

      return true;
    }

    /**
     *   将 Excel 数据取 出 组装 数组
     * @file
     */
    public function assembleExcelData($excel)
    {
        global $kernel;
        //创建一个Excel对象  将文件 路径 塞进去   $excel['tmp_name']读取文件 路径
        $phpExcelObject = $kernel->getContainer()->get('phpexcel')->createPHPExcelObject($excel['tmp_name']);
        //指定为哪张表（默认第一张表）
        //$objWorksheet = $phpExcelObject->getActiveSheet("sheet1");
        $objWorksheet = $phpExcelObject->getActiveSheet();
        //获取行数
        $highestRow = $objWorksheet->getHighestRow();
        $highestColumn = $objWorksheet->getHighestColumn();
        //获取列数 设置获取的 列数
        $Column=array_keys($this->cellName,$highestColumn);
        if(!is_array($Column)){ $this->message['code'] = false; $this->message['msg'] = '列数不正确'; return $this->message;}
         $highestColumnIndex = $Column[0]+1;
        //递归输出Excel内容
        $excelData=array();
        for ($row = 2;$row <= $highestRow;$row++)
        {
            $strs=array();
            for ($col = 0;$col < $highestColumnIndex;$col++)
            {
                $strs[$col] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
            }

            $excelData[$row-1]=$strs;
        }
        unset($phpExcelObject);
        return $excelData;
    }






}