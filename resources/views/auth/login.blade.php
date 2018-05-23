<!DOCTYPE html>
<html lang="en" class="body-full-height">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title><?php echo(env('APP_GEN_TITLE')); ?> | Login</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" id="theme" href="/css/theme-default.css"/>
    <link rel="stylesheet" type="text/css" href="/custom/style.css"/>
</head>
<body>
<div class="login-container" >

    <div class="login-box animated fadeInDown" style="margin-top:50px;">
        <div class="auth_title">Furman Records</div>
        <div class="login-body">
            <div class="login-title" style="text-align: center!important"><strong>Welcome</strong></div>
            <form action="/login" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}"
                               placeholder="Email"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        @if (session()->has('info'))
                            <span class="help-block">
                                <strong>{{ session('info') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" style="float: right!important;">
                        <button class="btn btn-info btn-block" style="float: right!important;">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>






