<?php
namespace Home\Controller;

use Think\Controller;

class PostController extends Controller
{

    //加载主页面
    public function index()
    {
        $this->display();
    }

    //加载数据列表
    public function  getList()
    {
        $Post = D('Post');
        $this->ajaxReturn($Post->getList());
    }
}