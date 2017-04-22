<?php
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller{
    public function index(){
//        D('Nav')->getTree();
        $this->display();
    }
}