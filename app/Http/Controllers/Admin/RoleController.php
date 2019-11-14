<?php

namespace App\Http\Controllers\Admin;

use App\Models\Node;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends BaseController
{
    //
    public function index()
    {

        $data = Role::paginate($this->pagesize);


        return view('admin.role.index',compact('data'));
    }

    public function create()
    {

        $data = Node::all()->toArray();
        $dataNode = getTree($data);
        return view('admin.role.add',compact('dataNode'));
    }

    public function store(Request $request)
    {

        $data = $this->validate($request,[
            'name'=>'required',
        ]);

        $model = Role::create($data);

        $model->nodes()->sync($request->get('ids'));

        return redirect(route('admin.role.index'))->with('success','添加角色成功');
    }

    public function edit(int $id)
    {
        $data = Role::find($id);

        $dataNode = Node::all()->toArray();

        $dataNode = getTree($dataNode);

        $role_nodes = $data -> nodes()->get()->pluck('id')->toArray();


        return view('admin.role.edit',compact('dataNode','data','role_nodes'));

    }

    public function update(Request $request,int $id)
    {

        Role::where('id',$id)->update(['name'=>$request->get('name')]);
        return redirect(route('admin.role.index'));

    }
}
