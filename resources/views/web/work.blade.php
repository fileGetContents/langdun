<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script src="jquery-1.11.3.min.js"></script>
    <style>
        .imginfo .circle{
            color: white;
            width: 200px;
            height: 200px;
            position: relative;
            left: 50%;
            margin-left: -136px;
            -webkit-border-radius:50%;
            -o-border-radius:50%;
            -moz-border-radius:50%;
            border-radius: 50%;
            border: 36px solid rgb(218,245,252);
            box-sizing: content-box;
        }
        .imginfo .circle div{
            font-size: 40px;
            font-weight: bold;
            line-height: 140px;
            text-align: center;
            width: 100%;
            height: 100%;
            border: 30px solid rgb(141,225,245);
            background: -webkit-linear-gradient(135deg, rgb(4,154,231),rgb(18,209,240));
            background: -o-linear-gradient(135deg, rgb(4,154,231),rgb(18,209,240));
            background: -moz-linear-gradient(135deg, rgb(4,154,231),rgb(18,209,240));
            background: linear-gradient(135deg, rgb(4,154,231),rgb(18,209,240));
            -webkit-border-radius:50%;
            -o-border-radius:50%;
            -moz-border-radius:50%;
            border-radius: 50%;
        }
        .icon-circle{
            display: inline-block;
            width: 26px;
            height: 26px;
            -webkit-border-radius:50%;
            -o-border-radius:50%;
            -moz-border-radius:50%;
            border-radius: 50%;
            background-color: #000066;
        }
        .left .icon-circle{ margin-left: 10px}
        .right .icon-circle{ margin-right: 10px}
        @media all and (max-width:1200px) {
            .imginfo .icon-circle{
                display: none;
            }
        }
        .imginfo span{
            text-align: center;
            display: inline-block;
            color: white;
            line-height: 26px;
            font-size: 16px;
            width: 8em;
            -webkit-border-radius:13px;
            -o-border-radius:13px;
            -moz-border-radius:13px;
            border-radius: 13px;
            position: relative;
            top: -7px;
        }
        .imginfo .left{
            position: absolute;
            right: 50%;
        }
        .imginfo .right{
            position: absolute;
            left: 50%;
        }
        .imginfo .bottom{
            bottom: 20px;
        }
        .imginfo .middle{
            top: 50%;
            margin-top: -18px;
        }
        .imginfo .top{ top: 20px}
    </style>
    <script>
        $(function(){
            $("#imginfo span,#imginfo i").css("backgroundColor",function(){
                return $(this).parent().attr("my-color")
            })
        })
    </script>
</head>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-sm-6 imginfo" id="imginfo">
            <div class="circle">
                <div>朗顿</div>
            </div>
            <div class="left top" style="margin-right: 66px" my-color="rgb(131,194,244)">
                <span>员工生日会</span><i class="icon-circle"></i>
            </div>
            <div class="right top" style="margin-left: 66px" my-color="rgb(23,223,244)">
                <i class="icon-circle"></i><span>员工特殊慰问金</span>
            </div>
            <div class="left middle" style="margin-right: 120px" my-color="rgb(137,234,255)">
                <span>五险一金</span><i class="icon-circle"></i>
            </div>
            <div class="right middle" style="margin-left: 120px" my-color="rgb(165,212,245)">
                <i class="icon-circle"></i><span>餐费补助</span>
            </div>
            <div class="left bottom" style="margin-right: 74px" my-color="rgb(6,170,234)">
                <span>商业意外险</span><i class="icon-circle"></i>
            </div>
            <div class="right bottom" style="margin-left: 74px" my-color="rgb(131,194,244)">
                <i class="icon-circle"></i><span>员工健康关怀</span>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>

</div>

</body>
</html>