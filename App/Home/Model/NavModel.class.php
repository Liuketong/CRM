<?php
namespace Home\Model;

use Think\Model;

class NavModel extends Model{
    public function getTree(){
        //得到所有的节点
        $object = $this->field('id,text,url,iconCls,nid')->select();

        //声明树数组
        $tree = array();

        //将所有主节点筛选出来
        foreach ($object as $key=>$value)
        {
            if($value['nid'] == 0){
                $tree[] = $value;
            }
        }

        //将所有子节点合并到对应的主节点中
        foreach($tree as $treekey=>$treeValiue)
        {
            foreach($object as $objectKey=>$objectValue)
            {
                if($treeValiue['id'] == $objectValue['nid'])
                {
                    $tree[$treekey]['children'][] = $objectValue;
                }
            }
        }

        return $tree;
    }
}