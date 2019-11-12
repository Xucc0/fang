@extends('admin.public.main')


@section('cnt')

    <div role="tabpanel" class="tab-pane" id="setting">
        <div class="wrap-reset">
            <form class="profile-settings" action="{{ route('admin.editUser',['id'=>$data->id]) }}" method="post">
                <div class="row">
                    <div class="form-group col-md-12 legend">
                        <h4>
                            <strong>个人信息</strong>设置</h4>
                        <p>Secure your account</p>
                    </div>
                </div>
                <div class="row">
                    <div class="userinfo" style="display:block;">
                    <div class="form-group col-sm-6">
                        <label for="username">用户名</label>
                        <input type="text" class="form-control" id="username" value="{{ $data->username }}" readonly name="username">
                    </div>
                        @method('PUT')
                        @csrf
                    <div class="form-group col-sm-6">
                        <label for="truename">实名</label>
                        <input type="text" class="form-control" id="username" value="{{ $data->truename }}" readonly name="truename">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="phone">电话</label>
                        <input type="text" class="form-control" id="username" value="{{ $data->phone }}" readonly name="phone">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">邮箱</label>
                        <input type="email" class="form-control" id="username" value="{{ $data->email }}" readonly name="email">
                    </div>
                    </div>
                    <div class="setpassword" style="display:none;">
                    <div class="form-group col-sm-6">
                        <label for="password">当前密码</label>
                        <input type="password" class="form-control" id="password" name="now-password">
                    </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="new-password">新密码</label>
                        <input type="password" class="form-control" id="new-password">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="new-password-repeat">重新输入新密码</label>
                        <input type="password" class="form-control" id="new-password-repeat">
                    </div>
                </div>
                </div>
                    <div class="form-group col-sm-12">
                        <button class="btn btn-raised btn-primary" type="submit">保存设置</button>
                        <a class="btn btn-raised btn-primary pwd">修改密码</a>
{{--                        <div class="rets" >--}}
                        <div class="btn btn-raised btn-primary ret" style="display: none;">返回</div>
{{--                        </div>--}}
                    </div>

                </div>

            </form>
        </div>
    </div>

    <script src="/js/jquery-min.js"> </script>
            <script>
                $(function () {
                    $('.pwd').click(function () {
                        $('.userinfo').css('display','none');
                        $('.setpassword').css('display','block');
                        $('.ret').css('display','inline-block');

                    })

                    $('.ret').click(function () {
                        $('.userinfo').css('display','block');
                        $('.setpassword').css('display','none');
                        $('.ret').css('display','none');

                    })
                })
            </script>

@endsection







