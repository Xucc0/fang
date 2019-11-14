<?php

function staticPath(){

    return '/admin/';
}



//无限极分类
function getTree($arr,$pid=0,$level=0)
{
    static $list = [];
    foreach ($arr as $key => $value) {
        if ($value["pid"] == $pid) {
            $value["level"] = $level;
            $list[] = $value;
            unset($arr[$key]); //删除已经排好的数据为了减少遍历的次数，当然递归本身就很费神就是了
            getTree($arr,$value["id"],$level+1);
        }
    }
    return $list;
}