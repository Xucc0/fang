<?php


namespace App\Models\Service;
use Illuminate\Http\Request;


use App\Models\Admin;

class AdminService
{

    public function getList(Request $request,int $pagesize = 5)
    {

        $kw = $request->get('kw');


        return Admin::when($kw,function ($query) use ($kw){

            $query -> where('username','like',"%{$kw}%");

        })->orderBy('id','desc')->paginate($pagesize);
    }
}