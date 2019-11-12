<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>好客租房</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ staticPath() }}assets/js/vendor/bootstrap/bootstrap.min.css">
    <!-- CSS Files -->
    <link href="{{ staticPath() }}assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
<div class="wrapper">
    <div class="header header-filter"
         style="background-image: url('{{ staticPath() }}assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                    @include('admin.public.msg')
                    <div class="card card-signup">

                        <form class="form"  action="{{ route('admin.login') }}" method="post">
                            <div class="header header-primary text-center">
                                <h4>后台管理系统</h4>
                            </div>
                            <div class="content">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control underline-input" placeholder="请输入用户名" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="请输入密码" class="form-control underline-input" name="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> 记住我</label>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <a href="javascript:;" class="btn btn-info btn-raised submit">登录</a>
                            </div>
                            <a href="forgotpass.html" class="btn btn-wd">忘记密码</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-20">
            <div class="container">
                <div class="col-lg-12 text-center">
                    <a href="signup.html" class="text-uppercase text-white">Create an account</a>
                    <div class="copyright text-white mt-20"> &copy; 2018, made with
                        <i class="fa fa-heart heart"></i> by
                        <a href="http://www.jsdaima.com/" target="_blank">jsdaima.com</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--  Vendor JavaScripts -->
<script src="{{ staticPath() }}assets/bundles/libscripts.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<script src="{{ staticPath() }}assets/js/vendor/jquery/jquery-3.1.0.min.js"></script>

<script>
    $(function () {
        $('.submit').click(function () {
            $('.form').submit();
        })

    })
</script>


</body>
</html>