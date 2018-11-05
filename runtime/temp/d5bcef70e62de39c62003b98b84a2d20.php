<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:87:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/index/welcome.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/base.html";i:1535183414;s:98:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/javascript_vars.html";i:1535183414;s:92:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/copyright.html";i:1535183414;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>我的桌面</title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>

    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>

<nav class="breadcrumb">
    <div id="nav-title"></div>
    <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<div class="page-container">
	<p class="f-20 text-success">
		欢迎您使用<?php echo lang('name-long'); ?>&nbsp;<?php echo lang('name-en-long'); ?>
		<span class="f-14">
			&nbsp;&nbsp;<?php echo lang('version'); ?>
		</span>
	</p>
	<p>
		本次登录IP：<?php echo $current_login_ip; ?> &nbsp;&nbsp;&nbsp;
		本次登录时间：<?php echo date('Y-m-d H:i:s',$info['last_login_time']); ?> &nbsp;&nbsp;&nbsp;
		本次登录地点：<?php echo $current_login_loc; ?>
	</p>
  <table class="radius table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">个人信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">工号</th>
				<td><span id="lbServerName"><?php echo $info['account']; ?></span></td>
			</tr>
			<tr>
				<td>姓名</td>
				<td><?php echo $info['realname']; ?></td>
			</tr>
			<tr>
				<td>学院</td>
				<td><?php echo $info['xueyuan']; ?></td>
			</tr>
			<tr>
				<td>手机号</td>
				<td><?php echo $info['mobile']; ?></td>
			</tr>
			<tr>
				<td>备注</td>
				<td><?php echo $info['remark']; ?></td>
			</tr>
			<tr>
				<td>登录次数</td>
				<td><?php echo $info['login_count']; ?></td>
			</tr>
			<tr>
				<td>上次登录时间</td>
				<td><?php echo date('Y-m-d H:i:s',\think\Session::get('last_login_time')); ?></td>
			</tr>
			<tr>
				<td>上次登录IP</td>
				<td><?php echo $last_login_ip; ?></td>
			</tr>
			<tr>
				<td>上次登录地点</td>
				<td><?php echo $last_login_loc; ?></td>
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



<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="__LIB__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__LIB__/citylist/jquery.citys.js"></script>


</body>
</html>
