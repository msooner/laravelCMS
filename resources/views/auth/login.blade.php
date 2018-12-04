<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台登录</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/page.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 main">
            <h1 class="text-center login-title">后台登录</h1>
            <div class="account-wall">
                <img class="profile-img" src="{{asset('img/backend.png')}}" alt="">
                <form class="form-signin" action="{{route('login')}}" method="POST">
                  {{csrf_field()}}
                    <div class="item"{{ $errors->has('email') ? ' has-error' : '' }}>
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}" placeholder="邮箱" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="item">
                        <input id="password" type="password" class="form-control" name="password" placeholder="密码"
                               required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="item">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">立即登录</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="//captcha.luosimao.com/static/dist/api.js"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>

{{--<script src="https://captcha.luosimao.com/static/js/api.js"></script>--}}
</body>
</html>
