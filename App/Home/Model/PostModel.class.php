<?php
namespace Home\Model;

use Think\Model;

class PostModel extends Model
{

    //获取数据链接
    public function getList()
    {
        $object = $this->field('id,name,create_time')->select();

        return $object;
    }
}