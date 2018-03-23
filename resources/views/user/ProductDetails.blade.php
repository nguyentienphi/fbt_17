@extends('dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="row"><h4>{{ trans('message.category') }}</h4></div>
        <div class="col-md-3">
                    <div class="thumbnail">
                        <img src=>      
                    </div> 
        </div>
        <div class="col-md-3">
            <p>Thể loại:</p>
            <p>Tên Sách: </p>
            <p>Tác Gỉa:</p>
            <p>Số trang:</p>
            <p>Ngày Cập Nhật:</p>
                @guest
                <div>
                    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">{{ trans('message.request') }}</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ trans('message.addlogin') }}</h4>
                                </div>
                                <div class="modal-footer">
                                    <a href="dangnhap"><button type="button" class="btn btn-default">{{ trans('message.login')}}</button>
                                    </a>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">{{ trans('message.request')}}</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ trans('message.requestbook') }}</h4>
                                </div>
                                <div class="modal-body">
                                    {{ Form::label(trans('message.name')) }}
                                    {{ Form::text('name',null,['class' => 'form-control']) }} 
                                    {{ Form::label(trans('message.borrowed_day')) }}
                                     {{ Form::text('brrowed_day',null,['class' => 'form-control']) }}
                                    {{ Form::label(trans('message.pay_day')) }}
                                     {{ Form::text('pay_day',null,['class' => 'form-control']) }}
                                </div>
                                <div class="modal-footer">
                                    <a href="chitietsanpham">
                                        <button type="button" class="btn btn-default">{{ trans('message.booksubmit') }}</button>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
                @endguest
        </div>  
    </div>
</div>
    @guest
    @else
        <div class="row">
            <div class="container">
                <div class="form-group">
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <a href="">
                        <button class="btn btn-primary">Bình Luận</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    @endguest
</div>
@endsection
