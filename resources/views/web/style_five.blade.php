<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>朗顿设计-品牌策划</title>

    <link rel="Shortcut Icon" href="images/bitbug_favicon.ico" />
    <link rel="Bookmark" href="images/bitbug_favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/auto-size.js"></script>
    <style>

    </style>
</head>
<body>
<!--all-->
<div class="banner">
    <!--nav-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" id="btn1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="N-r">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right dsm">
                    <li><a href="index.html" >首页</a></li>
                    <li><a href="about.html">走进朗顿</a></li>
                    <li class="active dropdown" role="presentation" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">设计项目</a>
                        <ul class="dropdown-menu">
                            <li><a href="style_one.html">儿童设计</a></li>
                            <li><a href="style_two.html">两厅文化</a></li>
                            <li><a href="style_three.html">卧室设计</a></li>
                            <li><a href="style_four.html">家居动漫</a></li>
                            <li><a href="style_six.html">企业服务</a></li>
                        </ul>
                    </li>
                    <li><a href="joinUs.html">加入我们</a></li>
                    <li><a href="#footer">联系我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--content-->

    <div class="top" id="home">
        <img src="images/five.jpg" alt="">
    </div>


    <!--footer-->
    <div class="footer" id="footer">
        <div class="footer_box">
            <p><span><span>Ema</span><span>:</span></span>langdunds@163.com</p>
            <p style="font-size: 16px;"><span><span>Add</span><span>:</span></span>四川省成都市武侯区富顿中心</p>
            <p><span><span>T e l</span><span>:</span></span>+86 85043211&nbsp&nbsp&nbsp&nbsp;+86 13608096332&nbsp&nbsp&nbsp&nbsp;+86 18200519681</p>
            <div class="ewms"><img src="images/ewm.jpg" alt=""></div>
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
    $('.fix').on('click',function () {
        $('body,html').animate({
            scrollTop:0
        },500);
    });
    //nav active

    $('.dsm>li').on('click',function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });

</script>
</body>
</html>