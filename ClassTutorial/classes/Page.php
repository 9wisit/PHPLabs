<?php
require_once 'Helper.php';

class Page extends Helper
{
    public $currentPage;

    public function __construct()
    {
        $getPage = parent::methodGet('page');
        $this->currentPage = $getPage != null ? $getPage : 'home';
    }

    public function getTitle()
    {
        return $this->currentPage . ' Page';
    }

    public function getLinkPage($page)
    {
        return 'index.php?page=' . $page;
    }

    public function getNavActive($page)
    {
        return $page == $this->currentPage ? 'active' : null;
    }

    public function requirePage()
    {
        require_once './pages/' . $this->currentPage . '.php';
    }

}
