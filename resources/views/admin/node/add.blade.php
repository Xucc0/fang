@extends('admin.public.main')


@section('cnt')
    <div class="col-md-6" style="width:1260px; height: 350px;">
        <section class="boxs">
            <div class="boxs-header">
                <h3 class="custom-font hb-cyan">
                    <strong>添加</strong>权限</h3>
            </div>

            <div class="boxs-body">
                <form class="form-horizontal" role="form" action="{{ route('admin.node.store') }}" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">上级权限</label>
                        <div class="col-sm-2 col-xs-6">
                            <select class="form-control inline" name="pid">
                                @foreach($data as $id => $val)
                                <option value="{{ $id }}">{{ $val }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">权限名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">路由别名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="route_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">是否菜单</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="is_menu" checked="true" value="1">
                                是
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="0">
                                否
                            </label>
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
