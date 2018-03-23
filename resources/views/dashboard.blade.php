<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{  Html::script('css/all.min.css') }}
        {{ Html::style('css/dashboard.css') }}
         <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top bg-success" role="navigation">
                <div class="container-fluid">
                    <div class="container">
                        <div>
                            <h4 class="navbar-text title">{{ trans('message.mybook')}}</h4>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{route('trangchu')}}">{{ trans('message.home') }}</a>
                            </li>
                            <li>
                                <a href="#" >{{ trans('message.introduce') }}</a>
                            </li>
                            <li>
                                <form class="navbar-form navbar-left" action="/action_page.php">
                                    <div class="form-group">
                                        {{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search']) }}
                                    </div>
                                    <button  class="btn btn-default">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                 </form>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                            <li>
                                <a href="{{ route('dangnhap') }}">{{trans('message.login')}}</a>
                            </li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} 
                                    <span class="glyphicon glyphicon-user"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('dangxuat') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Đăng Xuất
                                        </a>
                                        <form id="logout-form" action="{{ route('dangxuat') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../image/Screenshot from 2018-03-19 15-45-01.png" class="image">
                </div>
                <div class="item">
                    <img src="../image/Screenshot from 2018-03-19 15-11-44.png" class="image">
                </div>  
                <div class="item" class="image">
                    <img src="../image/Screenshot from 2018-03-19 14-56-15.png" class="image">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">{{trans('message.previous')}}</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">{{ trans('message.next') }}</span>
            </a>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer">
                        <h4>Về phần chúng tôi!</h4>
                        <p>Chúng tối luôn cung cấp những loại sách chất lượng.</p>
                        <p>Bãn sẽ có những trải nghiệm thú vị khi sử dụng sản phẩm của chúng tôi</p>
                    </div>
                    <div class="col-md-4 footer">
                        <p>Địa chỉ : 123- Phường Mặt Trăng - Hệ Mặt Trời</p>
                        <p>Số điện thoại</p>
                        <p>0987654321</p>
                        <p>Email : mybook@gmail.com</p>
                        <p>Trang chủ: <a href="{{route('home')}}">www.mybook.com</a></p>
                    </div>
                    <div class="col-md-4 image_footer"> 
                        <div class="com-md-2">
                            <img src="../image/989496215.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Html::script('js/jquery-3.3.1.min.js') }}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
