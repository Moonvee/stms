<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/teacher/stu_list.html";i:1540983523;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/base.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/meta.html";i:1536912251;s:89:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/footer.html";i:1540802237;}*/ ?>
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
<style>
	.pagination {
margin-top: 10px;
margin-bottom: 10px;
}
.pagination {
display: inline-block;
padding-left: 0;
margin: 20px 0;
border-radius: 4px;
}
.pagination>li {
display: inline;
}

li {
display: list-item;
text-align: -webkit-match-parent;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span,
.pagination>.active>span:focus, .pagination>.active>span:hover {
z-index: 3;
color: #fff;
cursor: default;
background-color: #337ab7;
border-color: #337ab7;
}
.pagination>li>a, .pagination>li>span {
position: relative;
float: left;
padding: 6px 12px;
margin-left: -1px;
line-height: 1.42857143;
color: #337ab7;
text-decoration: none;
background-color: #fff;
border: 1px solid #ddd;
}
</style>


</head>
<body>








<div class="page-container">

	<div class="cl table-border pd-5 bg-1 bk-gray">
		<span class="l">
			<a href="javascript:;" onclick="score_add('添加学生及测试成绩','<?php echo url("teacher/scoreadd"); ?>','800','600')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 添加学生及测试成绩</a>
		</span>
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);"
		 title="刷新">
			<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	</div>

	<table class="table table-border table-bordered table-bg mt-5 radius">
		<thead>
			<tr>
				<th colspan="9" scope="col">测试学生管理</th>
			</tr>
			<tr class="text-c">
				<th width="20">序号</th>
				<th width="100">学号</th>
				<th width="40">测试号</th>
				<th width="40">成绩号</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($testList) || $testList instanceof \think\Collection || $testList instanceof \think\Paginator): $k = 0; $__LIST__ = $testList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

			<tr class="text-c">
				<td><?php echo $k; ?></td>
				<td><?php echo $vo['sid']; ?></td>
				<td><?php echo $vo['cid']; ?></td>
				<td><?php echo $vo['oid']; ?></td>
				<td>
					<a title="查看成绩" href="javascript:;" onclick="see_stu_score('学号 <?php echo $vo['sid']; ?> 的成绩','<?php echo url('seeStuScore'); ?>','1200','600','<?php echo $vo['oid']; ?>')"
					 class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe695;</i>
					</a>
					<a title="编辑成绩" href="javascript:;" onclick="edit_stu_score('编辑成绩','<?php echo url('addStuScore'); ?>','1200','600','<?php echo $vo['oid']; ?>','<?php echo $vo['sid']; ?>')"
					 class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe610;</i>
					</a>
					<a title="从该测试中删除此学生" href="javascript:;" onclick="del(this,'<?php echo $vo['sid']; ?>','<?php echo $vo['xuenian']; ?>')" class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="page-container">
		<div class="col-xs-12 ml-5">
			<?php echo $testList->render(); ?>
		</div>
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
	function del(obj, id, xn) {
		layer.confirm('确认要删除吗？', function (index) {
			$(obj).parents("tr").remove();
			$.get("<?php echo url('teacher/delStu'); ?>", {
				id: id,
				xn: xn
			});
			layer.msg('已删除!', {
				icon: 1,
				time: 1000
			});
		});
	}

	function see_stu_score(title, url, w, h, id) {
		setCk('oid', id);
		layer_show(title, url, w, h);
	}
	function edit_stu_score(title, url, w, h, id,sid) {
		setCk('oid', id);
		setCk('sid', sid);
		layer_show(title, url, w, h);
	}

	function score_add(title, url, w, h) {
		layer_show(title, url, w, h);
	}
</script>
<!--/请在上方写此页面业务相关的脚本-->


</body>
</html>
