<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!auth()->check()){

            return redirect(route('admin.login'))->withErrors(['error'=>'请先登录']);
        }
        //获取用户信息模型
        $userModel = auth()->user();

        $roleModel = $userModel->roles;

        $auths = $roleModel->nodes()->pluck('route_name','id')->toArray();

        $authLists = array_filter($auths);

        $routes = [
            'admin.index',
            'admin.login',
            'admin.logout'
        ];

        $authLists = array_merge($authLists,$routes);


        $request->auths = $authLists;


        $currentRoute = $request->route()->getName();

        $currentUserName = auth()->user()->username;

        $request->username = $currentUserName;


        if (!in_array($currentRoute,$authLists) && $currentUserName != 'admin'){
            exit('你没有权限');
        }


        return $next($request);
    }
}
