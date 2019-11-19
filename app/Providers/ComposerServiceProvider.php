<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(
            'admin.public.main', //模板名
            'App\Http\Controllers\Admin\IndexController@index'  //方法名或者类中的方法
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
//        $this->app->bind('App\Services\UserRepositoryInterface', "App\Services\Relizes\UserRepository");

    }
}
