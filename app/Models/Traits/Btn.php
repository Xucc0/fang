<?php


namespace App\Models\Traits;


trait Btn
{

    static private function checkAuth(string $routeName)
    {

        $auths = request()->auths;

        if (!in_array($routeName,$auths) && request()->username != 'admin'){
            return false;
        }

        return true;
    }


    //添加按钮

    static public function addBtn(string $routeName,$btnName)
    {
        if (self::checkAuth($routeName)){

            return   "<a class='btn btn-raised btn-cyan' style='background-color:#49cdd0;color: #fff;'
           href='".route($routeName)."'>$btnName</a>";
        }

        return '';
    }

    //修改按钮
    public function editBtn(string $routeName)
    {
        if (self::checkAuth($routeName)){

            $arr['start'] = request()->get('start');

            $arr['filed'] = request()->get('order')[0]['column'];

            $arr['order'] = request()->get('order')[0]['dir'];


            $params = http_build_query($arr);


            $url = route($routeName,$this);

            if (stristr($url,'?')){
                $url = $url.'&'.$params;
            }else{
                $url = $url.'?'.$params;
            }


            return "<a href='".$url."'><i class='fa fa-edit' style='font-size: 20px;'></i></a>";
        }

        return "";
    }

    //删除按钮
    public function delBtn(string $routeName)
    {
        if (self::checkAuth($routeName)){
            return "<a href='".route($routeName,$this)."' class='deluser'><i class='fa fa-times' style='font-size: 20px;'></i></a>";
        }

        return "";
    }
}