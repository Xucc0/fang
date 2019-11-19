@extends('admin.public.main')


@section('cnt')
    <div class="col-md-6" style="width:1260px; height: 350px;">
        <section class="boxs">
            <div class="boxs-header">
                <h3 class="custom-font hb-cyan">
                    <strong>添加</strong>角色</h3>
            </div>

            <div class="boxs-body">
                <form class="form-horizontal" role="form" action="{{ route('admin.role.store') }}" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">角色名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">选择权限</label>
                        <div class="col-sm-2 col-xs-6">

                                @foreach($dataNode as $val)
                                        <div class="checkbox" style="padding-left: {{ $val['level']*30 }}px;">
                                            <label>
                                                <input type="checkbox" class="checks" name="ids[]" value="{{ $val['id'] }}" pid="{{ $val['pid'] }}">
                                                {{ $val['name'] }}
                                            </label>
                                        </div>
                                @endforeach

                        </div>
                    </div>
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-raised btn-cyan" style="background-color:#49cdd0;color: #fff;">确定</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <style>
        .radio {
            display: inline-block;
            float: left;
        }
    </style>
@endsection


@section('js')


    <script>
        $(function () {
            $('.checks').click(function () {
                var vals = $(this).val();

                console.log($(this).prop('checked'));
                if ($(this).prop('checked') == true){
                    $.each($('.checks'),function (key,val) {
                        if ($(val).attr('pid') == value) {
                            $(val).prop('checked',true);
                        }
                    })
                }else{
                    $.each($('.checks'),function (key,val) {
                        if ($(val).attr('pid') == vals) {
                            $(val).prop('checked',false);
                        }
                        // else if ($("input[value=vals]") == $(val).attr('pid')){
                        //     $("input[value=vals]").prop('checked',true);
                        // }
                    })
                }
                })


            })
        })
    </script>

@endsection