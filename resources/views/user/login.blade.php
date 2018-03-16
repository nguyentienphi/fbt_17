@extends('layouts.app')
@section('content')
    <div class=container>
        <div clas="row">
            <div class="col-md-8 col-md-offset-2">
                <nav class="navbar navbar-dark bg-light"> 
            <div class="login_title"> <h1 class="navbar-text">Đăng Nhập</h1></div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                @include('commont.errors')
                <div class="form">
                {{ Form::open(['route' => 'getlogin']) }}
                    {{ method_field('POST') }}
                    <div class="form-group">
                        {{ Form::label('Email', null, ['class' => 'col-md-6 control-label']) }}
                        <div class="col-md-12">
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label(trans('message.password'), null ,['class' => 'col-md-5 control-label']) }}
                        <div class="col-md-12">
                            {{ Form::password('password', ['class' => 'form-password form-control', 'placeholder' => 'Mật Khẩu']) }}
                             @if (session('status'))
                                <div class="message"> {{ session('status')}} </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-1">
                            <div class="login">
                                <a href="#">Quên mật khẩu?</a>
                                    {{ Form::submit(trans(message.login), ['class' => 'btn btn-primary']) }}
                            </div>
                            <a href="{{route('dangky')}}" class="add">{{trans('message.add')}}</a>
                        </div>
                     </div>
                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
