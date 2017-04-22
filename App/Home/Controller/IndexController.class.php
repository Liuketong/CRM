<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    //加载主页面
    public function index()
    {
        $this->display();
    }

    //加载导航
    public function getTree()
    {
        $this->ajaxReturn(D('Nav')->getTree());
    }
}