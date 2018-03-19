@extends('layouts.app')
@section('content')
    <div class="container">
        <div clas="row">
            <div class="col-md-8 col-md-offset-2">
                <nav class="navbar navbar-dark bg-light"> 
            <div class="register"> <h1 class="navbar-text">{{trans('message.register')}}</h1></div>
                </nav>
            </div>
        </div>
    </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form">
                <div>
                    {{ Form::open(['route' => 'getuser']) }}
                         {{ method_field('POST') }}
                        <div class="form-group">
                                {{ Form::label(trans('message.username'), null, ['class' => 'col-md-5 control-label']) }}
                            <div class="col-md-10">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                                @if ($errors->has('name'))
                                    <span>
                                        <strong class="message">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                {!! Form::label('trans(message.email_register)',null,['class' => 'col-md-5 control-label']) !!}
                            <div class="col-md-10">
                                {{ Form::text('email', null, ['class' => 'form-control']) }}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="message">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                {{ Form::label(trans('message.password'), null, ['class' => 'col-md-5 control-label']) }}
                            <div class="col-md-10">
                                {{ Form::password('password', ['class' => 'form-password form-control']) }}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="message">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                {{ Form::label(trans('message.confirm'), null, ['class' => 'col-md-6 control-label']) }}
                            <div class="col-md-10">
                                 {{ Form::password('password_confirmation', ['class' => 'form-password form-control']) }}
                            </div>
                        </div>
                         <div class="form-group">
                                {{ Form::label(trans('message.phone'), null, ['class' => 'col-md-5 control-label']) }}
                            <div class="col-md-10">
                                {{ Form::text('phone', null, ['class' => 'form-control']) }}

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong class="message">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                                {{ Form::label(trans('message.address'), null, ['class' => 'col-md-5 control-label']) }}
                            <div class="col-md-10">
                                {!! Form::text('address',null,['class' => 'form-control']) !!}

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong class="message">{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-1">
                            <div class="submit">
                                 @if (session('status'))
                                    <div  class="alert alert-light status"><i><b>{{ session('status') }}</b></i></div>
                                @endif
                                  <a href="{{route('dangnhap')}}">{{trans('message.login')}}</a>
                                {{ Form::submit(trans('message.register'), ['class' => 'btn btn-danger']) }}
                            </div>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
