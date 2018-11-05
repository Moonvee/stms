<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\WorkSite\public/../application/admin\view\admin_user\load.html";i:1520857682;s:63:"D:\WorkSite\public/../application/admin\view\template\base.html";i:1488957233;s:74:"D:\WorkSite\public/../application/admin\view\template\javascript_vars.html";i:1488957233;}*/ ?>
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


<div class="page-container" id="full">

  <div class="panel panel-warning">
  	<div class="panel-header">上传前请阅读以下提示</div>
  	<div class="panel-body">
      <div class="Huialert Huialert-danger">1.下载的模板文件不要改变列名等模板信息;</div>
      <div class="Huialert Huialert-danger">2.所有数据字段均以'文本'格式上传;</div>
      <div class="Huialert Huialert-danger">3.建议一次上传不要超过10万条数据。</div>
      <a href="/file/学生导入模板.xlsx"><div class="Huialert Huialert-success mt-20"><i class="Hui-iconfont">&#xe640;</i>点击此处下载Excel导入模板</div></a>

    </div>
  </div>
  <iframe name="upload" style="display: none"></iframe>

  <form class="form form-horizontal" id="form" method="post" target="upload" enctype="multipart/form-data" action="<?php echo \think\Url::build('upload'); ?>">
      <div class="row cl">
          <label class="form-label col-xs-3 col-sm-3">
            <span class="c-red">*</span>Excel文件：
          </label>
          <div class="formControls col-xs-6 col-sm-6">
            <span class="btn-upload">
              <a href="javascript:void();" class="btn btn-primary radius">
                <i class="Hui-iconfont">&#xe600;</i> 浏览文件</a>
                <input class="input-text upload-url radius" type="text" name="excel" id="excel" readonly width="150px" datatype="*" nullmsg="请选择文件">
              <input type="file" multiple name="excel" class="input-file">
            </span>
          </div>
          <div class="col-xs-3 col-sm-3"></div>
      </div>

      <div class="row cl">
          <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
              <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
              <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
          </div>
      </div>
      <p id="success"></p>
  </form>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script>
</script>

</body>
</html>