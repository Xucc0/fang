<?php

namespace App\Http\Controllers\Admin;

use App\Models\Node;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use AppServiceProvider;
use Illuminate\View\View;

class IndexController extends Controller
{
    //
    public function index()
    {

        $userModel = auth()->user();

        $roleModel = $userModel->roles;


        if ($userModel->username !== 'admin'){

            $routeData = $roleModel->nodes()->where('is_menu','1')->get(['id','pid','route_name','name'])->toArray();

        }else {

            $routeData = Node::where('is_menu', '1')->get(['id','pid','route_name','name'])->toArray();

        }


        $routeDatas = subTree($routeData);



        view()->share('routeDatas',$routeDatas);

        return view('admin.index.index');
    }


    public function logout()
    {
        auth()->logout();

        return redirect(route('admin.login'))->with('success','退出成功');
    }
}
