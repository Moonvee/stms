<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:90:"/Users/moonvee/Project/website/Stms/public/../application/index/view/student/stu_test.html";i:1536754574;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/base.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/meta.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/footer.html";i:1535183414;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>


<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__LIB__/html5shiv.js"></script>
<script type="text/javascript" src="__LIB__/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css" />

<!--[if IE 6]>
<script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->



<title><?php echo (isset($title) && ($title !== '')?$title:'标题'); ?></title>



</head>
<body>








	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <?php echo lang('index'); ?>
		<span class="c-gray en">&gt;</span><?php echo lang('stutest'); ?>
		<span class="c-gray en">&gt;</span><?php echo lang('stu-test'); ?> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
		<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	 </nav>
	<div class="page-container">
			<table class="table table-border table-bordered table-bg radius">
				<thead>
					<tr>
						<th scope="col" colspan="13">选课列表</th>
					</tr>
					<tr class="text-c">
						<th width="20">序号</th>
						<th width="40">教师姓名</th>
						<th width="100">校区</th>
						<th width="100">学院</th>
						<th width="50">日期</th>
						<th width="50">节次</th>
						<th width="50">男生人数</th>
						<th width="50">女生人数</th>
						<th width="50">课容量</th>
						<th width="50">剩余男生容量</th>
						<th width="50">剩余女生容量</th>
						<th width="50">状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>

				<?php if(is_array($testList) || $testList instanceof \think\Collection || $testList instanceof \think\Paginator): $k = 0; $__LIST__ = $testList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
					<tr class="text-c">
						<td><?php echo $k; ?></td>
						<td><?php echo $vo['name']; ?></td>
						<td><?php echo $vo['xiaoqu']; ?></td>
						<td><?php echo $vo['xueyuan']; ?></td>
						<td><?php echo $vo['riqi']; ?></td>
						<td><?php echo $vo['jieci']; ?></td>
						<td><?php echo $vo['rsman']; ?></td>
						<td><?php echo $vo['rswomen']; ?></td>
						<td><?php echo $vo['rongliang']; ?></td>
						<td><?php echo $vo['krlman']; ?></td>
						<td><?php echo $vo['krlwomen']; ?></td>
						<td class="td-status">  
							<?php if($vo['status'] == '已测试'): ?>
							<span class="label label-success radius"><?php echo $vo['status']; ?></span>
							<?php else: ?>
							<span class="label radius"><?php echo $vo['status']; ?></span>
							<?php endif; ?>
						</td>
						<td>
							<?php if($vo['select'] == '1'): ?>
							<button name="" id="" class="btn btn-success disabled" type="post">
								<i class="Hui-iconfont">&#xe676;</i> 已预约
							</button>
							<button name="" id="" class="btn btn-warning quxiao" type="post" href="javascript:;" onclick="test_delete(this,<?php echo $vo['id']; ?>)">
								<i class="Hui-iconfont">&#xe60b;</i> 取消预约
							</button>
							<?php endif; if($vo['select'] == '2'): ?>
							<button name="" id="" class="btn btn-warning" disabled>
								 <i class="Hui-iconfont">&#xe6a6;</i> 课容量满
							</button>
							<?php endif; if($vo['select'] == '0'): ?>
							<button name="" id="" class="btn btn-success yuyue" type="post" href="javascript:;" onclick="test_select(this,<?php echo $vo['id']; ?>)">
								<i class="Hui-iconfont">&#xe6a7;</i> 预约测试
							</button>
							<?php endif; ?>

						</td>
					</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>

				</tbody>
			</table>
			<div class="page-bootstrap">
			</div>
	</div>





<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/other.js"></script>
<script type="text/javascript" src="__LIB__/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__LIB__/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__LIB__/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>



 <!--/_footer 作为公共模版分离出去-->




<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">
function test_select(obj,id){
	$('.yuyue').addClass('disabled');
		
	layer.confirm('确认要选择吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.get("<?php echo url('student/testSelect'); ?>",{id:id});
		layer.msg('请在页面刷新后查看预约结果！', { icon: 6});
		window.setTimeout("location.replace(location.href)", 2000);
	});
}
function test_delete(obj,id){
	$(".quxiao").addClass('disabled');
	layer.confirm('确认要取消吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
    	$.get("<?php echo url('student/testDelete'); ?>",{id:id});

		layer.msg('已取消!', {icon: 5});
		location.replace(location.href);
	});
}
</script>
<!--/请在上方写此页面业务相关的脚本-->


</body>
</html>
