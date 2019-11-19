<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleAddRequest;
use App\Models\Article;
use App\Models\Cate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends BaseController
{

    public function index(Request $request)
    {

        if ($request->ajax()){


            $offset = $request->get('start',0);

            $limit = $request->get('length',$this->pagesize);

            //排序
            $order = $request->get('order')[0];

            $orderType = $order['dir'];

            $columns = $request->get('columns')[$order['column']];

            $filed = $columns['data'];


            $kw = $request->get('kw');

            $builer = Article::when('kw',function ($query) use($kw){
                $query->where('title','like',"%{$kw}%");
            });

            $count = $builer->count();

            $data  = $builer->with('cates')->orderby($filed,$orderType)->offset($offset)->limit($limit)->get();


            return [

                'draw' => $request->get('draw'),
                'recordsTotal' => $count,
                'recordsFiltered' => $count,
                'data' => $data
            ];

        }
        //


       return view('admin.article.index');
    }


    public function create()
    {
        //
        $cateData = Cate::all()->toArray();

        $cateData = getTree($cateData);
        return view('admin.article.add',compact('cateData'));
    }



    public function store(ArticleAddRequest $request)
    {

        $data = $request->except(['_token','file']);

        Article::create($data);

        return redirect(route('admin.article.index'));
    }

    public function edit($id)
    {

        $url_query = \request()->all();
        //
        $cateData = Cate::all();

        $articleData = Article::with('cates')->find($id);


        return view('admin.article.edit',compact('cateData','articleData','url_query'));
    }



    public function delfile(Request $request)
    {

        $id = $request->get('id');

        $src = $request->get('src');

        $filePath = public_path($src);
        if (is_file($filePath)){
            unlink($filePath);
        }



        return ['status'=>200,'msg'=>'删除成功','path'=>$filePath];

    }


    public function update(Request $request, $id)
    {
        //

        $url = $request->get('url');
        $data = $request->except(['_token','file','_method','url']);
        Article::where('id',$id)->update($data);

        return redirect(route('admin.article.index').'?'.http_build_query($url));
    }


    public function destroy($id)
    {
        //
        Article::destroy($id);

        return ['status'=>200,'msg'=>'删除成功'];
    }

    public function show(){

    }
}


