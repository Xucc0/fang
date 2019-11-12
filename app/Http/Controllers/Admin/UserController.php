<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Service\AdminService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends BaseController
{
    //
    public function index(Request $request)
    {

        $data = (new AdminService())->getList($request,$this->pagesize);

        return view('admin.user.index', compact('data'));
    }

    public function create()
    {
        return view('admin.user.add');
    }


    public function store(Request $request)
    {

//        dump($request->all()); exit;

        $this ->validate($request,[
            'username' => 'required|unique:admins,username',
            'truename' => 'required',
            'email'    => 'nullable|email',
            'password' => 'required|confirmed',
            'sex'      => 'required'
        ]);


        Admin::create($request->except('_token','password_confirmation'));

        return redirect(route('admin.user'))->with('success','添加用户成功');

    }

    public function edit(int $id)
    {

        $data = Admin::find($id);
        return view('admin.user.edit',compact('data'));
    }

    public function update(Request $request,int $id)
    {

        $data = $this->validate($request,[
            'truename' => 'required',
            'email' => 'nullable|email',
            'password'=>'nullable|confirmed',
            'sex' =>"in:先生,女士",
        ]);


        if (!$data['password']){
            unset($data['password']);
        }

        Admin::where('id',$id)->update($data);

        return redirect(route('admin.user'))->with('success','修改成功');
    }

    public function profile()
    {
        $data = auth()->user();
        return view('admin.user.profile',compact('data'));

    }

    public function editUser(Request $request,int $id)
    {
        $data = $this->validate($request,[
           'email' => 'nullable|email',
           'password' => 'nullable|confirmed',
            'phone' =>'nullable',
        ]);

        if (!$data['password']){
            unset($data['password']);

            Admin::where('id',$id)->update($data);

            return redirect(route('admin.profile'));
        }
    }
}
