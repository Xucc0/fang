<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Node;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NodeController extends Controller
{

    public function index()
    {
        //
        $data = Node::all()->toArray();

        $data = getTree($data);

        $addBtn = Admin::addBtn('admin.node.create','添加权限');


        return view('admin.node.index',compact('data','addBtn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Node::where('pid',0)->pluck('name','id')->toArray();


        $data[0] = '顶级';

        ksort($data);


        return view('admin.node.add',compact('data'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
           'name' => 'required'
        ]);

        Node::create($request->except('_token'));

        return redirect(route('admin.node.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
