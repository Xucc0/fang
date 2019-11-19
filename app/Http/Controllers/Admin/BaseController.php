<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    //
    
    protected $pagesize = 1;

    public function __construct()
    {
        $this->pagesize = env('PAGESIZE');
    }


    //上传文件
    public function upfile(Request $request)
    {

        $node = $request->get('node');

        $file =$request->file('file');

        $uri = $file->store('',$node);


        return ['status'=>200,'url'=>'/uploads/'.$node.'/'.$uri];

    }
}
