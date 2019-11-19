@extends('admin.public.main')
@section('css')

    <link rel="stylesheet" href="/webuploader/webuploader.css">

    <style>
        .imgbox{
            width: 200px;
            height: 150px;
            /*border: 1px solid red;*/
            margin-left: 200px;
            position: relative;
        }
        .imgbox img{
            width: 100%;
            height: 100%;
        }
        .delimg{
            position: absolute;
            display: block;
            text-align: center;
            line-height: 20px;
            padding-bottom: 2px;
            font-size: 20px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            color: #49cdd0;
            border: 1px solid #49cdd0;
            right: 5px;
            top: 5px;
            cursor: pointer;
        }

    </style>
@endsection


@section('cnt')
    <div class="col-md-6" style="width:1260px; height: 350px;">
        <section class="boxs">
            <div class="boxs-header">
                <h3 class="custom-font hb-cyan">
                    <strong>添加</strong>文章</h3>
            </div>

            <div class="boxs-body">
                <form class="form-horizontal" role="form" action="{{ route('admin.article.store') }}" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">文章标题</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="title">
                        </div>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">分类栏目</label>
                        <div class="col-sm-2 col-xs-6">
                            <select class="form-control inline" name="cid">
                                @foreach($cateData as $val)
                                    <option value="{{ $val['id'] }}">{{ $val['cname'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">文章摘要</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="desn">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">封面图</label>
                        <div class="uploader-thum-container">
                            <div id="picker">选择图片</div>
                            <input type="hidden" name="pic" id="pic">
                        </div>
                        <div class="imgbox" style="display: none;">
                            <span class="delimg" onclick="delimg()">
                                X
                            </span>
                            <img src=""  id="showpic">
                        </div>
                    </div>
                    <input type="hidden" id="pic" value="">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">文章内容</label>
                    </div>
                    <textarea name="body" id="editor" style="margin-left: 160px;"></textarea>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-raised btn-cyan" style="background-color:#49cdd0;color: #fff;">确定</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection

@section('js')
    <script src="/ueditor/php/ueditor.config.js"></script>
    <script src="/ueditor/php/ueditor.all.js"></script>
    <script src="/ueditor/php/lang/zh-cn/zh-cn.js"></script>
    <script src="/webuploader/webuploader.js"></script>


    <script>

        var ue = UE.getEditor('editor',{
            initialFrameHeight:400,
            initialFrameWidth:950,
        });

        var uploader = WebUploader.create({

            auto: true,

            swf: '/webuploader/Uploader.swf',

            server: '{{ route('admin.base.upfile') }}',

            pick: '#picker',

            resize: false,

            formData: {_token: "{{ csrf_token() }}",node:'article'},

            fileVal: 'file',

        });
        // 回调方法监听
        uploader.on('uploadSuccess', function (file,{url}) {

            $('#showpic').attr('src',url);

            $('#pic').val(url);

            $('.imgbox').css('display','block');
        });

        //删除图片

        function delimg() {
            $('.imgbox').hide(1000);
            $('#showpic').attr('src','');

            $('#pic').val('');
        }


    </script>
@endsection