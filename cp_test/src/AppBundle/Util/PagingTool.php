<?php
namespace AppBundle\Util;

class PagingTool
{
    /**
     * 当前页
     */
    private $page = 0;
    
    /**
     * 每页显示条数
     */
    private $page_size = 0;
    /**
     * 总页数
     */
    private $page_total=0;
    
    /**
     * 总条数
     */
    private $total = 0;
    /**
     * 页码开始
     */
    private $page_start=0;
    /**
     * 页码结束
     */
    private $page_end=0;
    
    /**
     * 上一页
     */
    private $page_parent=0;
    
    /**
     * 下一页
     */
    private $page_next=0;
    
    /**
     *
     * @return Pagination
     */
    private static $instance;
    /**
     * @return the $page_start
     */
    public function getPage_start()
    {
        return $this->page_start;
    }

    /**
     * @return the $page_end$pagedata
     */
    public function getPage_end()
    {
        return $this->page_end;
    }
    

    /**
     *
     * @return Pagination
     */
    public static function &instance()
    {
        if (!isset(self::$instance))
        {
            self::$instance = new PagingTool();
        }
        
        return self::$instance;
    }
    
    private function __construct()
    {
        
    }
    
    /**
     * 初始化
     */
    public function init($total, $page, $page_size)
    {
        $this->page=$page;
        $this->total=$total;
        $this->page_size=$page_size;
        
        $totalpage=$total/$page_size;
        $inttotalpage=intval($totalpage);
        if($totalpage>$inttotalpage){
            $this->page_total = $inttotalpage+1;
        }else{
            $this->page_total = $inttotalpage;
            }
        $page_start=$page;
        $page_end=$page_start+4;
        if($page_start >= 3){
            $page_start=$page_start-2;$page_end=$page_end-2;
        }else{
            if($page_start<=0){$page_start=1;}
        }
        if($page_end > $inttotalpage){
            $page_end=$inttotalpage;
        }else{
            if($page_end<=$page_start){$page_end=$page_start;}
        }
        $this->page_start=$page_start;
        $this->page_end=$page_end;
        
        $page_parent=$page-1;
        $page_next=$page+1;
        if($page_parent <= 0){
            $page_parent=1;
        }
        if($page_next>$inttotalpage){
            $page_next=$inttotalpage;
        }
        $this->page_parent=$page_parent;
        $this->page_next=$page_next;
    }
    /**
     * @return the $page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return the $page_size
     */
    public function getPage_size()
    {
        return $this->page_size;
    }

    /**
     * @return the $page_total
     */
    public function getPage_total()
    {
        return $this->page_total;
    }

    /**
     * @return the $total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return the $page_parent
     */
    public function getPage_parent()
    {
        return $this->page_parent;
    }

    /**
     * @return the $page_next
     */
    public function getPage_next()
    {
        return $this->page_next;
    }

}

