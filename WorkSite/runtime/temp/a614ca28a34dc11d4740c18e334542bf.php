<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"D:\WorkSite\public/../application/admin\view\info\index.html";i:1521194302;s:63:"D:\WorkSite\public/../application/admin\view\template\base.html";i:1488957233;s:74:"D:\WorkSite\public/../application/admin\view\template\javascript_vars.html";i:1488957233;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
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
    <table class="table table-border table-bordered table-hover table-bg">
      <thead>
        <tr>
          <th colspan="2" scope="col">个人信息</th>
        </tr>
      </thead>
				<?php if(is_array($studentInfo) || $studentInfo instanceof \think\Collection || $studentInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $studentInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tbody>
        <tr>
          <td width="30%">学号</td>
          <td><span id="lbServerName"><?php echo $vo['account']; ?></span></td>
        </tr>
        <tr>
          <td>姓名</td>
          <td><?php echo \think\Session::get('real_name'); ?></td>
        </tr>
        <tr>
          <td>学院</td>
          <td><?php echo $vo['xueyuan']; ?></td>
        </tr>
        <tr>
          <td>专业</td>
          <td><?php echo $vo['zhuanye']; ?></td>
        </tr>
        <tr>
          <td>年级</td>
          <td><?php echo $vo['nianji']; ?></td>
        </tr>
        <tr>
          <td>班级</td>
          <td><?php echo $vo['banji']; ?></td>
        </tr>
        <tr>
          <td>辅导员</td>
          <td><?php echo $vo['fudaoyuan']; ?></td>
        </tr>
        <tr>
          <td>籍贯</td>
          <td><?php echo $vo['jiguan']; ?></td>
        </tr>
        <tr>
          <td>家庭地址</td>
          <td><?php echo $vo['dizhi']; ?></td>
        </tr>
        <tr>
          <td>操作</td>
          <td><?php if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; ?></td>
        </tr>
      </tbody>
			<?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>