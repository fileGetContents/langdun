<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>朗顿设计</title>
    <link rel="Shortcut Icon" href="{{asset('images/bitbug_favicon.ico')}}"/>
    <link rel="Bookmark" href="{{asset('images/bitbug_favicon.ico')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/auto-size.js')}}"></script>

</head>
<style type="text/css">
    @font-face {
        font-family: myFirstFont;
        src: url('ziti/font.ttf'),
        url('ziti/font.eot'); /* IE9 */
    }

    {
        font-family: myFirstFont
    ;
    }
    #code {
        font-family: Arial;
        font-style: italic;
        font-weight: bold;
        border: 0;
        letter-spacing: 2px;
        color: blue;
        font-size: 20px;
    }

    #code2 {
        font-family: Arial;
        font-style: italic;
        font-weight: bold;
        border: 0;
        letter-spacing: 2px;
        color: blue;
        font-size: 20px;
    }
</style>
<body>
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
                <a href="#home" class="N-r">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right dsm">
                    <li class="active"><a href="{{URl('/')}}">首页</a></li>
                    <li><a href="{{URl('about')}}">走进朗顿</a></li>
                    <li><a href="#portal">设计项目</a></li>
                    <li><a href="#contact">项目加盟</a></li>
                    <li><a href="{{URl('join')}}">加入我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--carousel-->
    <div class="carousel" id="home">
        <ul>
            <li>
                <a href="">
                    <div class="fonts">
                        <h1>Hello</h1>

                        <h1 id="ld">LangDun</h1>

                        <h1 id="fonts2">如蹉如切 如琢如磨</h1>
                    </div>
                    <img src="{{asset('images/gaibian/lunbo1.jpg')}}" alt="">
                </a>
                <a href="">
                    <div class="fonts">
                        <h1>Hello</h1>

                        <h1 id="ld">LangDun</h1>

                        <h1 id="fonts2">扉不有初 鲜克有终</h1>
                    </div>
                    <img src="{{asset('images/gaibian/lunbo2.jpg')}}" alt="">
                </a>
                <a href="">
                    <div class="fonts">
                        <h1>Hello</h1>

                        <h1 id="ld">LangDun</h1>

                        <h1 id="fonts2">他山之石 可以攻玉</h1>
                    </div>
                    <img src="{{asset('images/gaibian/lunbo3.jpg')}}" alt="">
                </a>
                <a href="">
                    <div class="fonts">
                        <h1>Hello</h1>

                        <h1 id="ld">LangDun</h1>

                        <h1 id="fonts2">高山仰止 景行行止</h1>
                    </div>
                    <img src="{{asset('images/gaibian/lunbo4.jpg')}}" alt="" width="100%">
                </a>
                <a href="">
                    <div class="fonts">
                        <h1>Hello</h1>

                        <h1 id="ld">LangDun</h1>

                        <h1 id="fonts2">如蹉如切 如琢如磨</h1>
                    </div>
                    <img src="{{asset('images/gaibian/lunbo1.jpg')}}" alt="">
                </a>
                <!--<a href=""><img src="images/img2.jpg" alt=""></a>
                <a href=""><img src="images/img4.png" alt=""></a>
                <a href=""><img src="images/img1.jpg" alt=""></a>
                <a href=""><img src="images/img5.jpg" alt=""></a>-->
            </li>
            <li>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--portal-->
    <div class="portal" id="portal">
        <ul>
            <li>
                <a href="{{URL('two')}}">
                    <div><img src="{{asset('images/tup1.png')}}" alt=""></div>
                    <p>两厅文化</p>
                </a>
            </li>
            <li>
                <a href="{{URL('three')}}">
                    <div><img src="{{asset('images/tup2.png')}}" alt=""></div>
                    <p>卧室设计</p>
                </a>

            </li>
            <li>
                <a href="{{URl('one')}}">
                    <div><img src="{{asset('images/tup3.png')}}" alt=""></div>
                    <p>儿童设计</p>
                </a>

            </li>
            <li>
                <a href="{{URl('four')}}">
                    <div><img src="{{asset('images/tup4.png')}}" alt=""></div>
                    <p>家居动漫</p>
                </a>

            </li>
            <li>
                <a href="{{URL('five')}}">
                    <div><img src="{{asset('images/tup5.png')}}" alt=""></div>
                    <p>品牌策划</p>
                </a>

            </li>
            <li>
                <a href="{{URL('six')}}">
                    <div><img src="{{asset('images/tup6.png')}}" alt=""></div>
                    <p>企业服务</p>
                </a>

            </li>
        </ul>
    </div>
    <!--video-->
    <div class="video" id="video">
        <ul>
            <li>
                <div><img src="{{URl('images/whiteLogo.jpg')}}" alt=""></div>
            </li>
            <li>
                <div>
                    <video id="my-video" class="video-js container" poster="{{asset('images/mp4.png')}}" data-setup="{}"
                           controls="controls">
                        <source src="{{asset('video.mp4')}}" type="video/mp4" autostart="false" loop="false">
                    </video>
                </div>
            </li>
            <li><p>设计是为人而设计的,服务于人们的生活需要是设计的最终目的 <br>
                    Design is for people,serving people’s life demands are the final purpose of the design.</p></li>
        </ul>
    </div>
    <!--contact-->
    <div class="contact" id="contact">
        <h3 style="color: white;margin:10px 0 30px;text-align: center;">( 加盟 ) 加入我们</h3>

        <div class="clearfix">
            <!--form-->
            <div>
                <div>
                    <div class="btn1">加盟</div>
                    <div class="btn2">应聘</div>
                </div>
                <form class="form1" action="">
                    <div class="input-group">
                        <span class="input-group-addon">姓名</span>
                        <input id="name" type="text" class="form-control" placeholder="请输入姓名"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">性别</span>
                        <label class="checkbox-inline">
                            <input type="radio" name="optionsRadiosinline" value="男" checked>男
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="optionsRadiosinline" value="女">女
                        </label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">年龄</span>
                        <input id="age" type="text" class="form-control" placeholder="请输入年龄"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">联系方式</span>
                        <input id="tel" type="text" class="form-control" placeholder="请输入联系方式"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group work">
                        <span class="input-group-addon">服务内容</span>
                        <label class="checkbox-inline pmsj">
                            <input name="scope" type="checkbox" value="平面设计">平面设计
                        </label>
                        <label class="checkbox-inline">
                            <input name="scope" type="checkbox" value="卧室设计">卧室设计
                        </label>
                        <label class="checkbox-inline">
                            <input name="scope" type="checkbox" value="儿童设计">儿童设计
                        </label>
                        <label class="checkbox-inline">
                            <input name="scope" type="checkbox" value="客厅文化设计">客厅文化设计
                        </label>
                        <label class="checkbox-inline">
                            <input name="scope" type="checkbox" value="空间设计">空间设计
                        </label>
                        <label class="checkbox-inline">
                            <input name="scope" type="checkbox" value="动漫设计">动漫设计
                        </label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">兴趣爱好</span>
                        <label class="checkbox-inline pmsj">
                            <input name="hobby" type="checkbox" value="爬山">爬山
                        </label>
                        <label class="checkbox-inline">
                            <input name="hobby" type="checkbox" value="读书">读书
                        </label>
                        <label class="checkbox-inline">
                            <input name="hobby" type="checkbox" value="旅游">旅游
                        </label>
                        <label class="checkbox-inline">
                            <input name="hobby" type="checkbox" value="健身">健身
                        </label>
                    </div>
                    <div class="verification">
                        <input id="yzm" value="" type="text" class="form-control" placeholder="请输入验证码"
                               aria-describedby="basic-addon1">

                        <div onclick="createCode()">
                            <!--<img src="images/11.png" alt="">-->
                            <input type="button" id="code"/>

                            <p style="color: white;margin-left: -10px;">看不清,换一张</p>
                        </div>
                    </div>
                    <input type="button" class="btn btn-default" value="提交" onclick="validate()" style="width: 20%;"/>
                </form>


                <form class="form2" action="">
                    <div class="input-group">
                        <span class="input-group-addon">姓名</span>
                        <input id="name2" name="name2" type="text" class="form-control" placeholder="请输入姓名"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">性别</span>
                        <label class="checkbox-inline">
                            <input type="radio" name="optionsRadiosinline2" value="option1" checked>男
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="optionsRadiosinline2" value="option2">女
                        </label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">毕业学院</span>
                        <input name="school" id="school" type="text" class="form-control" placeholder="请输入毕业学院"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">专业</span>
                        <input name="major" id="major" type="text" class="form-control" placeholder="请输入专业"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">年龄</span>
                        <input name="age2" id="age2" type="text" class="form-control" placeholder="请输入年龄"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">联系方式</span>
                        <input name="tel2" id="tel2" type="text" class="form-control" placeholder="请输入联系方式"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">兴趣爱好</span>
                        <label class="checkbox-inline pmsj">
                            <input name="hobby2" type="checkbox" value="爬山">爬山
                        </label>
                        <label class="checkbox-inline">
                            <input name="hobby2" type="checkbox" value="读书">读书
                        </label>
                        <label class="checkbox-inline">
                            <input name="hobby2" type="checkbox" value="旅游">旅游
                        </label>
                        <label class="checkbox-inline">
                            <input name="hobby2" type="checkbox" value="健身">健身
                        </label>
                    </div>
                    <div class="verification">
                        <input id="yzm2" value="" type="text" class="form-control" placeholder="请输入验证码"
                               aria-describedby="basic-addon1">

                        <div onclick="createCodes()">
                            <!--<img src="images/11.png" alt="">-->
                            <input type="button" id="code2"/>

                            <p style="color: white;margin-left: -10px;">看不清,换一张</p>
                        </div>
                    </div>
                    <input type="button" class="btn btn-default " value="提交" onclick="validates()"/>
                </form>
            </div>
            <!--地图-->
            <div class="map">
                <img src="{{asset('images/map.png')}}" alt="">

                <p>
                    <a href="http://ditu.amap.com/dir?from%5Bname%5D=%E6%88%91%E7%9A%84%E4%BD%8D%E7%BD%AE&from%5Bid%5D=dirmyloc&from%5Badcode%5D=510100&from%5Bpoitype%5D=&from%5Blnglat%5D=104.03234%2C30.71208&from%5Bmodxy%5D=104.03234%2C30.71208&to%5Bname%5D=%E5%AF%8C%E9%A1%BF%E4%B8%AD%E5%BF%83B%E5%BA%A7&to%5Blnglat%5D=103.985754%2C30.604066&to%5Bid%5D=B0FFGB5BNJ&to%5Bpoitype%5D=120201&to%5Badcode%5D=510100&to%5Bmodxy%5D=103.985754%2C30.604066&type=car&policy=1"
                       target="_blank" role="button">到公司来</a></p>
            </div>
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
<div class="fix">Top</div>
<script type="text/javascript">//加盟验证脚本
    var flag1 = false, flag2 = false, flag3 = false, flag4 = false, flag5 = false;
    var code;
    //随机数代码
    function createCode() {
        code = '';
        var codeLength = 4;
        var codeV = document.getElementById('code');
        //此数组已屏蔽与数字相似字母,以及大小写相似
        var random = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y',
                'a', 'b', 'd', 'e', 'f', 'g', 'h', 'j', 'm', 'n', 'q', 'r', 's', 't', 'y');
        for (var i = 0; i < codeLength; i++) {
            //设置随机数范围,设置为0 ~ 36
            var index = Math.floor(Math.random() * 36);
            code += random[index];
        }
        codeV.value = code;
    }

    //判断代码
    function validate() {
        $(".work input").each(function () {
            if ($(this).prop("checked") == true) {
                flag4 = true;
                $(".work").css({"border": ""})
            }
        });
        $(".work").css({"border": "5px solid red"});
        if (flag5 && flag4 && flag3 && flag2 && flag1) {
            // 获取复选框的值
            // 兴趣爱好集合
            var hobby_obj = document.getElementsByName("hobby");
            var hobby_all = "";
            for (var j = 0; j < hobby_obj.length; j++) {
                //如果选中，将value添加到变量s中
                var hobby = document.getElementsByName("hobby")[j].checked;
                if (hobby) {
                    hobby_all += hobby_obj[j].value + ','
                }
            }
            // 服务范围集合
            var check_obj = document.getElementsByName("scope");
            var scope_all = "";
            for (var i = 0; i < check_obj.length; i++) {
                //如果选中，将value添加到变量s中
                var check = document.getElementsByName("scope")[i].checked;
                if (check) {
                    scope_all += check_obj[i].value + ','
                }
            }

            $.ajax({
                type: "post",
                data: {
                    'name': $("#name").val(),
                    'sex': $("input[name=optionsRadiosinline]").val(),
                    'age': $("#age").val(),
                    'tel': $("#tel").val(),
                    'scope': scope_all,
                    'hobby': hobby_all
                }
                ,
                dataType: "json",
                url: "{{URl('api/join')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (obj) {
                    if (obj.info == 1) {
                        alert('申请加盟失败');
                    } else {
                        alert('申请加盟成功');
                        window.location.reload();// 刷新界面
                    }
                },
                error: function () {
                }
            });
            createCode();//提交之后返回就刷新验证码；
        } else {
            alert("请补全内容或检查红色提示框");
        }
    }
    //判断名字
    $("#name").blur(function () {
        var n = /[\u4E00-\u9FA5]{2,5}(?:·[\u4E00-\u9FA5]{2,5})*/;
        if (n.test($(this).val())) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            flag1 = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            flag1 = false;
        }
    })
    //判断年龄
    $("#age").blur(function () {
        if ($(this).val() >= 18 && $(this).val() <= 60) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            flag2 = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            flag2 = false;
        }
    })
    //判断电话
    $("#tel").blur(function () {
        var t = /^((0\d{2,3}-\d{7,8})|(1[35784]\d{9}))$/;
        if (t.test($(this).val())) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            flag3 = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            flag3 = false;
        }
    })
    //判断验证码
    $("#yzm").blur(function () {
        if ($(this).val() == code) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            flag5 = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            flag5 = false;
        }
    })

    //设置此处的原因是每次进入界面展示一个随机的验证码，不设置则为空
    window.onload = function () {
        createCode();
    }
</script>
<script type="text/javascript">//应聘验证脚本
    var a = false, b = false, c = false, d = false, e = false, f = false;
    var code2;
    //随机数代码
    function createCodes() {
        code2 = '';
        var codeLength = 4;
        var codeV = document.getElementById('code2');
        //此数组已屏蔽与数字相似字母,以及大小写相似
        var random = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y',
                'a', 'b', 'd', 'e', 'f', 'g', 'h', 'j', 'm', 'n', 'q', 'r', 's', 't', 'y');
        for (var i = 0; i < codeLength; i++) {
            //设置随机数范围,设置为0 ~ 36
            var index = Math.floor(Math.random() * 36);
            code2 += random[index];
        }
        codeV.value = code2;
    }

    //判断代码
    function validates() {
        //      if (a && b && c && d && e) {
        if (1 == 1) {
            // 提交数
            var hobby = "";
            var hobby2_obj = document.getElementsByName("hobby2");
            for (var i = 0; i < hobby2_obj.length; i++) {
                if (hobby2_obj[i].checked) {
                    hobby = hobby + hobby2_obj[i].value + ','
                }
            }
            $.ajax({
                type: "post",
                data: {
                    'name2': $("input[name=name2]").val(),
                    'sex': $("input[name=optionsRadiosinline2]").val(),
                    'school': $("input[name=school]").val(),
                    'major': $("input[name=major]").val(),
                    'age2': $("input[name=age2]").val(),
                    'tel2': $("input[name=tel2]").val(),
                    'hobby': hobby
                },
                dataType: "json",
                url: "{{URl('api/obRecruitment')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (obj) {

                },
                error: function () {
                }
            });
            // createCodes();//提交之后返回就刷新验证码；
        } else {
            alert("请补全内容或检查红色提示框");
        }
    }
    //判断名字
    $("#name2").blur(function () {
        var n = /[\u4E00-\u9FA5]{2,5}(?:·[\u4E00-\u9FA5]{2,5})*/;
        if (n.test($(this).val())) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            a = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"});
            a = false;
        }
    })

    //判断学校
    $("#school").blur(function () {
        if ($(this).val() !== "") {
            $(this).css({"borderColor": "", "borderWidth": ""})
            b = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            b = false;
        }
    })

    //判断专业
    $("#major").blur(function () {
        if ($(this).val() !== "") {
            (this).css({"borderColor": "", "borderWidth": ""})
            c = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            c = false;
        }
    })

    //判断年龄
    $("#age2").blur(function () {
        if ($(this).val() >= 18 && $(this).val() <= 60) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            d = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            d = false;
        }
    })
    //判断电话
    $("#tel2").blur(function () {
        var t = /^((0\d{2,3}-\d{7,8})|(1[35784]\d{9}))$/;
        if (t.test($(this).val())) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            e = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            e = false;
        }
    })
    //判断验证码
    $("#yzm2").blur(function () {
        if ($(this).val() == code2) {
            $(this).css({"borderColor": "", "borderWidth": ""})
            f = true;
        } else {
            $(this).css({"borderColor": "red", "borderWidth": "5px"})
            f = false;
        }
    })

    //设置此处的原因是每次进入界面展示一个随机的验证码，不设置则为空
    window.onload = function () {
        createCode();
        createCodes();
    }
</script>
<script type="text/javascript">
    // fix
    $('.fix').on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });

    //carousel

    var timer = null;
    $(function () {
        timer = setInterval('carousel()', 4000);

    });


    var n = 0;
    var j = $('.carousel>ul').height();
    function carousel() {

        n++;
        $('.carousel>ul>li:first-child').animate({top: -j * n}, 1000, function () {
            if (parseInt($('.carousel>ul>li:first-child').css('top')) <= -j * 4) {
                $('.carousel>ul>li:first-child').css('top', 0);
                n = 0;
            }
            $('.carousel>ul>li:nth-child(2)>ul>li').eq(n).css({background: '#4D4D4D'});
            $('.carousel>ul>li:nth-child(2)>ul>li').eq(n).siblings().css({background: '#CCCCCC'});
        });

    }

    $('.carousel>ul>li:nth-child(2)>ul>li').on('click', function () {
        clearInterval(timer);
        var a = $(this).index();
        if (a == 4) {
            n = -1
        } else {
            n = a
        }
        $('.carousel>ul>li:first-child').animate({top: -j * a}, 1000, function () {
            if (parseInt($('.carousel>ul>li:first-child').css('top')) <= -j * 4) {
                $('.carousel>ul>li:first-child').css('top', 0);
                a = 0;
            }
            $('.carousel>ul>li:nth-child(2)>ul>li').eq(a).css({background: '#4D4D4D'});
            $('.carousel>ul>li:nth-child(2)>ul>li').eq(a).siblings().css({background: '#CCCCCC'});
        });
        timer = setInterval('carousel()', 4000);
    });
    //form
    $('.btn2').on('click', function () {
        $(this).css('background', '#202020');
        $('.btn1').css('background', 'none');
        $('.form1').hide();
        $('.form2').show();
    });
    $('.btn1').on('click', function () {
        $(this).css('background', '#202020');
        $('.btn2').css('background', 'none');
        $('.form1').show();
        $('.form2').hide();
    });
</script>
</body>
<script src="{{asset('js/index.js')}}"></script>
</html>