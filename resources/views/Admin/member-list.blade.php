<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="admin/lib/html5.js"></script>
<script type="text/javascript" src="admin/lib/respond.min.js"></script>
<script type="text/javascript" src="admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>应聘管理</title>

</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 应聘 <span class="c-gray en">&gt;</span> 应聘管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
        <span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">名字</th>
				<th width="40">邮箱</th>
				<th width="90">信息</th>
				<th width="150">附件地址</th>
				<th width="130">申请时间</th>
				<th width="70">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		@foreach($list as $v)
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>{{$v->job_id}}</td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">{{$v->job_name}}</u></td>
				<td>{{$v->job_email}}</td>
				<td>{{$v->job_message}}</td>
				<td style="display: none"></td>
				<td class="text-l" style="text-align: center"><a target="_blank" href="{{URL('download/file?file='.$v->job_file)}}">下载查看</a></td>
				<td>{{date( "Y-m-d H:i:s",$v->job_time )}}</td>
					@if($v->job_tag==10)
					<td class="td-status">
					    <span class="label label-success radius">已查看</span>
			        </td>
					@else
					<td class="td-status">
						<span class="label label-defaunt radius">待查看</span>
					</td>
					@endif

				<td class="td-manage">
                    @if($v->job_tag==10)
                        <a style="text-decoration:none" onClick="member_stop(this,'{{$v->job_id}}')" href="javascript:;" title="已查看"><i class="Hui-iconfont">&#xe631;</i></a>
                    @else
                        <a style="text-decoration:none"  onClick="member_start(this,'{{$v->job_id}}')" href="javascript:;" title="待查看"><i class="Hui-iconfont">&#xe6e1;</i></a>
                    @endif
					<a title="删除" href="javascript:;" onclick="member_del(this,'{{$v->job_id}}')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>
		@endforeach

		</tbody>
	</table>
	</div>
	{!! $list->render() !!}
</div>
<script type="text/javascript" src="admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="admin/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="admin/js/H-ui.js"></script>
<script type="text/javascript" src="admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
layer.confirm('确认修改为待查看？',fu
function member_stop(obj,id){nction(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,'+id+')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">待查看</span>');
        $.ajax({
            type: "post",
            data: {
                'table':'job',
                'id' :id,
                'value':"0",
                'tag':'job_tag'
            },
            dataType: "json",
            url: "{{URl('uploadTag')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {

            },
            error: function () {
            }
        });

        $(obj).remove();
		layer.msg('待查看!',{icon: 5,time:1000});
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认已查看吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,'+id+')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已查看</span>');
        $.ajax({
            type: "post",
            data: {
                'table':'job',
                'id' :id,
                'value':"10",
                'tag':'job_tag'
            },
            dataType: "json",
            url: "{{URl('uploadTag')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {

            },
            error: function () {
            }
        });
        $(obj).remove();
		layer.msg('已查看!',{icon: 6,time:1000});
	});
}
/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
        $.ajax({
            type: "post",
            data: {
                'table':'job',
                'id' :id,
                'value':"10",
                'tag':'job_tag'
            },
            dataType: "json",
            url: "{{URl('uploadTag')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (obj) {

            },
            error: function () {
            }
        });

		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>
</body>
</html>