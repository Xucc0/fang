<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Mail\Message;

class LoginController extends Controller
{
    //

    public function index()
    {

//        dump(session('success'));exit;
        return view("admin.login.index");
    }

    public function login(Request $request)
    {

        $data = $this->validate($request,[
           'username' => 'required',
           'password' => 'required'
        ]);


        $bool = auth()->attempt($data);

        if(!$bool){
            return redirect('admin/login')->withErrors(['error'=>'登陆失败']);
        }


//        $mail = auth()->user()->email;
//
//            Mail::raw('登陆成功',function (Message $message) use ($mail){
//                $message->subject('登录信息');
//
//                $message->to($mail,'小许');
//
//
//            });

            return redirect('admin/index');

    }


}
