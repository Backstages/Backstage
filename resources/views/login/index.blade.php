@extends('layouts.head')
@section('content')
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{{asset('assets/img/logo-dark.png')}}" alt="Klorofil Logo"></div>
                                <p class="lead">Login to your account</p>
                            </div>
                            <form class="form-auth-small" action="{{route('login')}}" method="post">
                                <input typt="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">用户名</label>
                                    <input type="text" class="form-control" id="signin-name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">密码</label>
                                    <input type="password" class="form-control" id="signin-password" placeholder="Password">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>记住我</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Free Bootstrap dashboard template</h1>
                            <p>by The Develovers</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection