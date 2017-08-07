

//nav active

$('.dsm>li').on('click',function () {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});

//视点
var H4 = new Array("LOTUS 圆顶莲花的故事","CRYSTAL 水晶的故事","Voyage航行(伦敦）","Fireflies 美梦成真—艺术家布鲁斯·芒罗","Tepees圆锥形灯光帐蓬");
var small = new Array("LOTUS 7.0是一个生活墙组成的智能衬托,褶皱开放以应对","当你接近晶体时,晶体的光照亮你联系他们。人们可以玩和分享他们","Voyage (Scottsdale) November","Fireflies 美梦成真","TepeesMixed media");

$('.news>ul>li:nth-child(2)>div:last-child>a').on({
    mouseover:function () {
        $(this).children('div:last-child').css('background','#FBAD3F');
        $(this).siblings().children('div:last-child').css('background','#283961');
    },
});
$('.news>ul>li:nth-child(2)>div:last-child>a').on('click',function () {
    var index = $(this).index();
    $('.news>ul>li:nth-child(2)>div:first-child').css('background','url("images/'+(index+1)+'.jpg")');
    $('.news>ul>li:nth-child(2)>div:first-child>div>div:first-child>p:first-child').html(H4[index]);
    $('.news>ul>li:nth-child(2)>div:first-child>div>div:first-child>p:last-child').html(small[index]);
});
$('.news>div>ul>li').on('click',function () {
    var index = $(this).index();
    $('.news>ul>li:nth-child(2)>div:first-child').css('background','url("images/'+(index+1)+'.jpg")');
    $('.news>ul>li:nth-child(2)>div:first-child>div>div:first-child>p:first-child').html(H4[index]);
    $('.news>ul>li:nth-child(2)>div:first-child>div>div:first-child>p:last-child').html(small[index]);
    $('.news>ul>li:nth-child(2)>div:last-child>a').eq(index).children('div:last-child').css('background','#FBAD3F');
    $('.news>ul>li:nth-child(2)>div:last-child>a').eq(index).siblings().children('div:last-child').css('background','#283961');
    $('.news>div>div').animate({left:80+index*77},200);
})

