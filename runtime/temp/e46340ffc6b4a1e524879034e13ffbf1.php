<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:87:"/Users/moonvee/Project/website/Stms/public/../application/index/view/index/welcome.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/base.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/meta.html";i:1535183414;s:90:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/copyright.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/footer.html";i:1535183414;}*/ ?>
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



<title><?php echo lang('title'); ?></title>


</head>
<body>







<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <?php echo lang('index'); ?>
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
	<i class="Hui-iconfont">&#xe68f;</i>
	</a>
 </nav>
<div class="page-container">
	<p class="f-20 text-success">欢迎您使用<?php echo lang('name-long'); ?>&nbsp;<?php echo lang('name-en-long'); ?><span class="f-14">&nbsp;&nbsp;&nbsp;<?php echo lang('version'); ?></span></p>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">个人信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">学号</th>
				<td><span id="lbServerName"><?php echo session('user_info.sid'); ?></span></td>
			</tr>
			<tr>
				<td>姓名</td>
				<td><?php echo session('user_info.name'); ?></td>
			</tr>
			<tr>
				<td>校区</td>
				<td><?php echo session('user_info.xiaoqu'); ?></td>
			</tr>
			<tr>
				<td>学院</td>
				<td><?php echo session('user_info.xueyuan'); ?></td>
			</tr>
			<tr>
				<td>专业</td>
				<td><?php echo session('user_info.zhuanye'); ?></td>
			</tr>
			<tr>
				<td>班级</td>
				<td><?php echo session('user_info.banji'); ?></td>
			</tr>

			<tr>
				<td>上次登录时间</td>
				<td><?php echo date("Y-m-d H:i:s",\think\Session::get('user_info.login_time')); ?></td>
			</tr>
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
    <div class="container">
        <p></p>
        <p>
            感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch等开源项目<br>
        </p>
        <p>本系统由&nbsp;&nbsp;<b><a href="http://www.h-ui.net/" target="_blank" rel="nofollow" title="H-ui前端框架">H-ui前端框架</a></b>
        &nbsp;&nbsp;<b><a href="http://www.thinkphp.cn/" target="_blank" rel="nofollow" title="ThinkPHP5.0开发框架">ThinkPHP5.0开发框架</a></b>
        &nbsp;&nbsp;<b><a href="http://www.gmwabc.cn/" target="_blank" rel="nofollow" title="GMWabc.cn">GMWabc.cn</a></b>&nbsp;&nbsp;提供技术支持</p>
        <p>Copyright &copy;2018 <b><a href="#"><?php echo lang('copyright'); ?></a></b> All Rights Reserved.</p>
    </div>
</footer>





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






</body>
</html>
