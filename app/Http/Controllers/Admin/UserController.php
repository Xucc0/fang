<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Role;
use App\Models\Service\AdminService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Mail\Message;

class UserController extends BaseController
{
    //
    public function index(Request $request)
    {



        $data = (new AdminService())->getList($request, $this->pagesize);


        $addBtn = Admin::addBtn('admin.create','添加用户');

        return view('admin.user.index', compact('data','addBtn'));
    }

    public function create()
    {
        $roleData = Role::all();
        return view('admin.user.add',compact('roleData'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|unique:admins,username',
            'truename' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|confirmed',
            'sex' => 'required',
            'role_id' => 'required'
        ]);


        Admin::create($request->except('_token', 'password_confirmation'));


        Mail::raw('添加用户成功', function (Message $message) use ($request) {
            $message->subject('添加用户通知');
            $message->to($request->get('email'), '许');
        });

        return redirect(route('admin.user'))->with('success', '添加用户成功');

    }

    public function edit(int $id)
    {

        $data = Admin::find($id);
        $roleData = Role::all();

        $roleName = $data->roles->toArray();

        return view('admin.user.edit', compact('data','roleName','roleData'));
    }

    public function update(Request $request, int $id)
    {

        $data = $this->validate($request, [
            'truename' => 'required',
            'email' => 'nullable|email',
            'password' => 'nullable|confirmed',
            'sex' => "in:先生,女士",
            'role_id' => 'required'
        ]);


        if (!$data['password']) {
            unset($data['password']);
        }

        Admin::where('id', $id)->update($data);

        return redirect(route('admin.user'))->with('success', '修改成功');
    }

    public function profile()
    {
        $data = auth()->user();

        return view('admin.user.profile', compact('data'));

    }

    public function editUser(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'email' => 'nullable|email',
            'password' => 'nullable|confirmed',
            'phone' => 'nullable',
        ]);

        if (!$data['password']) {
            unset($data['password']);

            Admin::where('id', $id)->update($data);

            return redirect(route('admin.profile'));
        }
    }

    //删除用户
    public function destroy(int $id)
    {
        Admin::destroy($id);


        return ['status' => 200, 'msg' => '删除成功'];
    }

    //恢复用户

    public function restore(int $id)
    {
        Admin::where('id', $id)->onlyTrashed()->restore();

        return ['status' => 200, 'msg' => 'success'];
    }


}
