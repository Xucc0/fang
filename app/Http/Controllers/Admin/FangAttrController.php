<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FangAttrRequest;
use App\Models\Fangattr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FangAttrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return 'ok';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $data = Fangattr::where('pid',0)->pluck('name','id')->toArray();

        $data[0] = '顶级';

        return view('admin.fangattr.add',compact('data'));
    }


    public function store(FangAttrRequest $request)
    {
        $data = $request->except(['_token','file']);


//        dd($data);

        Fangattr::create($data);

        return redirect(route('admin.fangattr.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fangattr  $fangattr
     * @return \Illuminate\Http\Response
     */
    public function show(Fangattr $fangattr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fangattr  $fangattr
     * @return \Illuminate\Http\Response
     */
    public function edit(Fangattr $fangattr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fangattr  $fangattr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fangattr $fangattr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fangattr  $fangattr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fangattr $fangattr)
    {
        //
    }
}
