@extends('admin.public.main')


@section('cnt')
    <div class="col-md-6" style="width:1260px; height: 350px;">
        <section class="boxs">
            <div class="boxs-header">
                <h3 class="custom-font hb-cyan">
                    <strong>修改</strong>角色</h3>
            </div>

            <div class="boxs-body">
                <form class="form-horizontal" role="form" action="{{ route('admin.role.update',['id'=>$data->id])}}" method="post">
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">角色名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name" value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label">选择权限</label>
                    <div class="col-sm-2 col-xs-6">

                        @foreach($dataNode as $val)
                            <div class="checkbox" style="padding-left: {{ $val['level']*30 }}px;">
                                <label>
                                    <input type="checkbox" @if(in_array($val['id'],$role_nodes)) checked="true" @endif name="ids[]" value="{{ $val['id'] }}" class="checks" pid="{{ $val['pid'] }}">
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
                var value = $(this).val();

                console.log($(this).prop('checked'));
                if ($(this).prop('checked') == true){
                $.each($('.checks'),function (key,val) {
                    if ($(val).attr('pid') == value) {
                        $(val).prop('checked',true);
                    }
                })
            }else{
                    $.each($('.checks'),function (key,val) {
                        if ($(val).attr('pid') == value) {
                            $(val).prop('checked',false);
                        }
                    })
            }

            })
        })
    </script>

    @endsection