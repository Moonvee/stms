<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:91:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/teacher/test_up.html";i:1540728679;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/base.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/meta.html";i:1536912251;s:89:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/footer.html";i:1540802237;}*/ ?>
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
	<span class="c-gray en">&gt;</span><?php echo lang('tectest'); ?>
	<span class="c-gray en">&gt;</span><?php echo lang('test-up'); ?>
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);"
	 title="刷新">
		<i class="Hui-iconfont">&#xe68f;</i>
	</a>
</nav>
<div class="page-container">
	<div class="cl table-border pd-5 bg-1 bk-gray">
		<span class="l">
			<a href="javascript:;" onclick="test_add('添加测试','<?php echo url('teacher/testAdd'); ?>','800','600');" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe6df;</i> 添加测试</a>
		</span>
	</div>

	<table class="table table-border table-bordered table-bg radius mt-20">
		<thead>
			<tr>
				<th scope="col" colspan="12">选课列表</th>
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
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>

			<?php if(is_array($testList) || $testList instanceof \think\Collection || $testList instanceof \think\Paginator): $i = 0; $__LIST__ = $testList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><?php echo $vo['id']; ?></td>
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
				<td>
					<a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>')" class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>

					<a title="管理" href="javascript:;" onclick="stu_list('编辑','<?php echo $vo['id']; ?>')" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe602;</i>
					</a>
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
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/other.js"></script>

<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__LIB__/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__LIB__/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="__LIB__/jedate/src/jedate.js"></script>

 <!--/_footer 作为公共模版分离出去-->




<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">
	function del(obj, id) {
		layer.confirm('确认要删除吗？', function (index) {
			$(obj).parents("tr").remove();
			$.get("<?php echo url('teacher/delTest'); ?>", {
				id: id
			});
			layer.msg('已删除!', {
				icon: 1,
				time: 1000
			});
		});
	}

	function test_add(title, url, w, h) {
		layer_show(title, url, w, h);
	}

	function stu_list(title, id) {
		setCk('cid', id)
		layer_show(title, "<?php echo url('teacher/stuList'); ?>", 1400, 800);

	}


</script>
<!--/请在上方写此页面业务相关的脚本-->


</body>
</html>
