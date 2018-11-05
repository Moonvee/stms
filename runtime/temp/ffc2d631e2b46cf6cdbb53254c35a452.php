<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/muban/index.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/base.html";i:1535183414;s:98:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/javascript_vars.html";i:1535183414;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo lang('title'); ?></title>
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
  <table class="table table-border table-bordered table-bg table-hover radius">
    <tr>
      <th colspan="13">清华同方学生信息导入模板</th>
      <td width="120" class="text-c">
        <a href="javascript:;" onclick="layer_open('模板导出','<?php echo \think\Url::build('tongfang'); ?>',{w:'30%',h:'50%'})" class="btn btn-primary radius J_load">
          <i class="Hui-iconfont">&#xe644;</i> 导出
        </a>
      </td>
    </tr>
    <tr  class="text-c active">
      <td>学校代码</td>
      <td>年级编号</td>
      <td>班号</td>
      <td>班级</td>
      <td>学号</td>
      <td>民族代码</td>
      <td>姓名</td>
      <td>性别</td>
      <td>出生日期</td>
      <td>学生来源</td>
      <td>身份证号</td>
      <td>家庭地址</td>
      <td>是否免测</td>
      <td>免测原因</td>
    </tr>
  </table>
  <table class="table table-border table-bordered table-bg table-hover radius mt-20">
    <tr>
      <th colspan="18">体质网大学数据导入模板</th>
      <td width="120" class="text-c">
        <a href="javascript:;" onclick="layer_open('模板导出','<?php echo \think\Url::build('tizhiwang'); ?>',{w:'30%',h:'50%'})" class="btn btn-success radius J_load">
          <i class="Hui-iconfont">&#xe644;</i> 导出
        </a>
      </td>
    </tr>
    <tr  class="text-c success">

      <td>年级编号</td>
      <td>班号</td>
      <td>班级</td>
      <td>学籍号</td>
      <td>民族代码</td>
      <td>姓名</td>
      <td>性别</td>
      <td>出生日期</td>
      <td>学生来源</td>
      <td>身份证号</td>
      <td>家庭地址</td>
      <td>身高</td>
      <td>体重</td>
      <td>肺活量</td>
      <td>50米跑</td>
      <td>1000或800米跑</td>
      <td>坐位体前屈</td>
      <td>立定跳远</td>
      <td>仰卧起坐/引体向上</td>

    </tr>
  </table>
  <table class="table table-border table-bordered table-bg table-hover radius mt-20">
    <tr>
      <th colspan="24">河北农业大学体质健康标准管理模板</th>
      <td width="120" class="text-c">
        <a href="javascript:;" onclick="layer_open('模板导出','<?php echo \think\Url::build('nongda'); ?>',{w:'30%',h:'50%'})" class="btn btn-warning radius J_load">
          <i class="Hui-iconfont">&#xe644;</i> 导出
        </a>
      </td>
    </tr>
    <tr  class="text-c warning">


      <td>学号</td>
      <td>姓名</td>
      <td>性别</td>
      <td>民族</td>
      <td>身份证号</td>
      <td>校区</td>
      <td>学院</td>
      <td>专业</td>
      <td>班级</td>
      <td>年级</td>
      <td>在读状态</td>
      <td>入学年份</td>
      <td>学制</td>
      <td>身高</td>
      <td>体重</td>
      <td>肺活量</td>
      <td>50米跑</td>
      <td>中长跑</td>
      <td>坐位体前屈</td>
      <td>立定跳远</td>
      <td>仰卧起坐/引体向上</td>
      <td>测试状态</td>
      <td>测试时间</td>
      <td>免测</td>
      <td>备注</td>


    </tr>
  </table>


</div>

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
