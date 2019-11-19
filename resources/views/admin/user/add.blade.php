@extends('admin.public.main')


@section('cnt')
    <div class="col-md-6" style="width:1260px; height: 350px;">
        <section class="boxs">
            <div class="boxs-header">
                <h3 class="custom-font hb-cyan">
                    <strong>添加</strong>用户</h3>
            </div>

            <div class="boxs-body">
                <form class="form-horizontal" role="form" action="{{ route('admin.store') }}" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="username">
                        </div>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">实名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="truename">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">电话</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">性别</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" checked="true" value="先生">
                                先生
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="女士">
                                女士
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">重复密码</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3"
                                   name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">添加角色</label>
                        <div class="col-sm-2 col-xs-6">
                            <select class="form-control inline" name="role_id">
                                @foreach($roleData as $val)
                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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