<?php
/**
 * Created by IntelliJ IDEA.
 * User: rochuan
 * Date: 2017/9/14
 * Time: 下午5:21
 */
namespace AppBundle\Util;

class Pagination
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
     * 总条数
     */
    private $total = 0;

    /**
     *
     * @return Pagination
     */
    private static $instance;

    /**
     *
     * @return Pagination
     */
    public static function &instance()
    {
        if (!isset(self::$instance))
        {
            self::$instance = new Pagination();
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
        $this->total = $total;
        $this->page = $page;
        $this->page_size = $page_size;
    }


    /**
     * 取得总页数
     * @return void
     */
    protected function getPages()
    {
        return ceil($this->total / $this->page_size);
    }

    /**
     * 取得下一页
     * @return void
     */
    protected function getNextPage()
    {
        return ($this->page >= $this->getPages()) ? $this->getPages() : ($this->page + 1);
    }

    /**
     * 取得上一页
     * @return void
     */
    protected function getPrevPage()
    {
        return ($this->page <= 1) ? 1 : ($this->page - 1);
    }


    /**
     * 取得序列的分页信息 如：上一页 1 2 3 下一页
     * @step init 每次显示的页数 默认为:3
     * @return array
     */
    public function getPageRange($step = 3)
    {
        $range = array();

        $pages = $this->getPages();
        $this->page = ($this->page >= $pages) ? $pages : $this->page;

        $step = min($pages, $step);
        $low = (($this->page - 1) % $step) ? ($this->page - (($this->page - 1) % $step)) : $this->page;
        $high = ($this->page >= $pages) ? $pages : ($low + $step - 1);
        $range = range($low, $high);

        return array(
            "page" => $this->page,
            "prevPage" => $this->getPrevPage(),
            "nextPage" => $this->getNextPage(),
            "total" => $this->total,
            "pages" => $pages,
            "range" => $range
        );
    }

    /**
     * 取得传统的分页信息 如：首页 上一页 下一页 末页
     * @return array
     */
    public function getPageInfo()
    {
        $pages = $this->getPages();
        return array(
            "page" => ($this->page >= $pages) ? $pages : $this->page,
            "prevPage" => $this->getPrevPage(),
            "nextPage" => $this->getNextPage(),
            "total" => $this->total,
            "pages" => $pages
        );
    }

}