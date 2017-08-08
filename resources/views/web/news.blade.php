<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>朗顿视点</title>
    <link rel="Shortcut Icon" href="{{asset('images/bitbug_favicon.ico')}}"/>
    <link rel="Bookmark" href="{{asset('images/bitbug_favicon.ico')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}} ">
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/auto-size.js')}}"></script>
    <style>
        .cover {
            width: 1200px;
            background: #F4F4F4;
            padding: 40px 60px;
            text-align: center;
        }

        .cover > hr {
            border-bottom: 1px solid #CACAC9;
        }

        .cover > h2 {
            color: #000;
            font-weight: 600;
            font-size: 26px;
        }

        .cover > p {
            margin: 40px 0 10px;
        }

        .cover > p:nth-child(3) {
            color: #999999;
            margin: 0;
        }

        .cover > p:nth-child(3) > span {
            margin-right: 30px;
        }

        @media screen and (max-width: 1450px) {
            .cover {
                width: 100%;
            }
        }

    </style>
</head>
<body>
<!--all-->
<div class="banner">
    <!--nav-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" id="btn1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{asset('/')}}" class="N-r">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right dsm">
                    <li><a href="{{asset('/')}}">首页</a></li>
                    <li><a href="{{asset('about')}}">走进朗顿</a></li>
                    <li class="active"><a href="#home">朗顿视点</a></li>
                    <li><a href="{{asset('join')}}">加入我们</a></li>
                    <li><a href="#footer">联系我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--content-->
    <div class="content">

        <div class="cover">
            <h2>{{$new->new_title}}</h2>
            <hr>
            <p>发布时间：<span>{{date("Y-m-d",$new->new_time)}}</span>浏览次数:<span>{{$new->new_bro_num}}</span>文章来源:<span>{{$new->new_source}}</span></p>
            {{$new->new_body}}
        </div>
    </div>
    <!--footer-->
    <div class="footer" id="footer">
        <div class="footer_box">
            <p><span><span>Ema</span><span>:</span></span>langdunds@163.com</p>
            <p style="font-size: 16px;"><span><span>Add</span><span>:</span></span>四川省成都市武侯区富顿中心</p>
            <p><span><span>T e l</span><span>:</span></span>+86 85043211&nbsp&nbsp&nbsp&nbsp;+86
                13608096332&nbsp&nbsp&nbsp&nbsp;+86 18200519681</p>
            <div class="ewms"><img src="{{asset('images/ewm.jpg')}}" alt=""></div>
            <div>
                <p>
                    <span><span>T e l :</span></span>+86 85043211 <br>
                    <span><span></span> <span></span></span>+86 13608096332<br>
                    <span><span></span> <span></span></span>+86 18200519681<br>
                </p>
                <p><span><span>Ema :</span> </span>langdunds@163.com</p>
                <p><span><span>Add :</span> </span>四川省成都市武侯区富顿中心</p>
            </div>
        </div>
    </div>
</div>
<!--top-->
<div class="fix">Top</div>
<script type="text/javascript">
    // fix
    $('.fix').on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });
    //nav active

    $('.dsm>li').on('click', function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });

    // 界面加载完成后请求数据
    window.onload = function () {
        $.ajax({
            type: "post",
            data: {
                "id":"{{$new->new_id}}",
                "new_bro_num":"{{$new->new_bro_num}}",
            },
            dataType: "json",
            url: "{{URl('update/Browse/Number')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (obj) {

            },
            error: function () {
            }
        });
    }

</script>
</body>
</html>