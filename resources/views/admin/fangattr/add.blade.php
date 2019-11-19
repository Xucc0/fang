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
                    <strong>添加</strong>房源属性</h3>
            </div>

            <div class="boxs-body">
                <form class="form-horizontal" role="form" id="form-attr-add" action="{{ route('admin.fangattr.store') }}" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">上级权限</label>
                        <div class="col-sm-2 col-xs-6">
                            <select class="form-control inline"  id="pid">
                                @foreach($data as $id => $val)
                                    <option value="{{ $id }}">{{ $val }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">属性名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">字段名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail2" name="field_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">图标</label>
                        <div class="uploader-thum-container">
                            <div id="picker">选择图片</div>
                            <input type="hidden" name="icon" id="pic">
                        </div>
                        <div class="imgbox" style="display: none;">
                            <span class="delimg" onclick="delimg()">
                                X
                            </span>
                            <img src="" id="showpic">
                        </div>
                    </div>
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-raised btn-cyan"
                                    style="background-color:#49cdd0;color: #fff;">确定
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection



@section('js')

    <script src="/webuploader/webuploader.js"></script>
    <script src="/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/jquery-validation/dist/additional-methods.js"></script>

    <script>
    var uploader = WebUploader.create({

    auto: true,

    swf: '/webuploader/Uploader.swf',

    server: '{{ route('admin.base.upfile') }}',

    pick: '#picker',

    resize: false,

    formData: {_token: "{{ csrf_token() }}",node:'fangattr'},

    fileVal: 'file'
    });

    // 回调方法监听
    uploader.on('uploadSuccess', function (file,{url}) {

        $('#showpic').attr('src',url);

        $('#pic').val(url);

        $('.imgbox').css('display','block');
    });



    jQuery.validator.addMethod('fieldName',function (value,element) {
        var bool = $('#pid').val() == 0 ?false:true;

        var reg = /[a-zA-Z_]+/;

        return bool || (reg.test(value));
    })



        $('#form-attr-add').validate({
            rules:{
                name:{
                    required:true
                },
                field_name:{
                    fieldName:true
                }
            },
            onkeyup:false,
            success:'valid',
            submitHandler:function (form) {
                form.submit();
            }
        })
    </script>
@endsection
