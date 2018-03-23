@extends('dashboard')
@section('content')
    <div class="container">
        <div class="first">
            <div class="row"> 
                <div class="col-md-3">
                    <div class="catory">
                        <h4>{{ trans('message.category') }}<span class="glyphicon glyphicon-align-justify categori"></span></h4>
                        <div>     
                        </div>       
                    </div>
                    
                </div>
            <div class="col-md-7">
                 <h4> {{ trans('message.view') }}</h4>
            </div>   
            <div class="col-md-2">
                <h4>{{ trans('message.member') }}</h4>
            </div>
            </div>
        </div>      
    </div>
    <div class="container">
        <div class="first">
            <div class="row">
                <a href="}}"><h4
                    >{{ trans('message.develop') }}</h4></a>
            </div>
            <div class="row">
                <div class="col-md-2">
                    
                </div>
            </div>
        </div>      
    </div>
    <div class="container">
        <div class="first">
            <div class="row">
                <a href="">
                    <h4> {{ trans('message.science') }} </h4>
                </a>        
            </div>
            <div class="row">
                <div class="col-md-2">            
                </div>   
            </div>
        </div>      
    </div>
@endsection
