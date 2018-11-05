<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:85:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/score/index.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/base.html";i:1535183414;s:98:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/javascript_vars.html";i:1535183414;s:84:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/score/form.html";i:1535183414;s:82:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/score/th.html";i:1536541939;s:82:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/score/td.html";i:1536541929;}*/ ?>
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
    <form class="mb-20" method="get" action="<?php echo \think\Url::build(\think\Request::instance()->action()); ?>">
    <input type="text" class="input-text" style="width:150px" placeholder="学号" name="sid" value="<?php echo \think\Request::instance()->param('sid'); ?>" >
    <input type="text" class="input-text" style="width:150px" placeholder="学年" name="xuenian" value="<?php echo \think\Request::instance()->param('xuenian'); ?>" >
    <input type="text" class="input-text" style="width:150px" placeholder="测试状态" name="status" value="<?php echo \think\Request::instance()->param('status'); ?>" >
    <input type="text" onClick="WdatePicker()" id="logmin" class="input-text Wdate" name="cssj" value="<?php echo \think\Request::instance()->param('cssj'); ?>"  placeholder="测试日期" style="width:200px;" datatype="*" nullmsg="请填写测试日期">
    <input type="text" class="input-text" style="width:150px" placeholder="免测编号" name="mcbh" value="<?php echo \think\Request::instance()->param('mcbh'); ?>" >
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>

    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('add')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('添加','<?php echo \think\Url::build('add', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 添加</a><?php endif; if (\Rbac::AccessCheck('forbid')) : ?><a href="javascript:;" onclick="forbid_all('<?php echo \think\Url::build('forbid', []); ?>')" class="btn btn-warning radius mr-5"><i class="Hui-iconfont">&#xe631;</i> 禁用</a><?php endif; if (\Rbac::AccessCheck('resume')) : ?><a href="javascript:;" onclick="resume_all('<?php echo \think\Url::build('resume', []); ?>')" class="btn btn-success radius mr-5"><i class="Hui-iconfont">&#xe615;</i> 恢复</a><?php endif; ?>
            <a href="javascript:;" onclick="layer_open('批量导入','<?php echo \think\Url::build('load'); ?>',{w:'50%',h:'80%'})" class="btn btn-primary radius J_load ml-20"><i class="Hui-iconfont">&#xe645;</i> 批量导入</a>
            <a href="javascript:;" onclick="layer_open('批量导出','<?php echo \think\Url::build('out'); ?>',{w:'50%',h:'50%'})" class="btn btn-success radius J_load"><i class="Hui-iconfont">&#xe644;</i> 批量导出</a>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo $count; ?></strong> 条
        </span>
    </div>
    <table class="radius table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="">ID</th>
<th width="">学号</th>
<th width="">学年</th>
<th width="">身高</th>
<th width="">体重</th>
<th width="">肺活量</th>
<th width="">1000/800米</th>
<th width="">400米</th>
<th width="">8*50米</th>
<th width="">引体向上/仰卧起坐</th>
<th width="">坐位体前屈</th>
<th width="">50米</th>
<th width="">立定跳</th>
<th width="">跳绳</th>
<th width="">测试状态</th>
<th width="">测试时间</th>
<th width="">免测编号</th>
            <th width="50">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
        <tr class="text-c">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['id']; ?></td>
<td><?php echo high_light($vo['sid'],\think\Request::instance()->param('sid')); ?></td>
<td><?php echo high_light($vo['xuenian'],\think\Request::instance()->param('xuenian')); ?></td>
<td><?php echo $vo['shengao']; ?></td>
<td><?php echo $vo['tizhong']; ?></td>
<td><?php echo $vo['feihuoliang']; ?></td>
<td><?php echo $vo['lrun']; ?></td>
<td><?php echo $vo['mrun']; ?></td>
<td><?php echo $vo['srun']; ?></td>
<td><?php echo $vo['yintiyangwo']; ?></td>
<td><?php echo $vo['qianqu']; ?></td>
<td><?php echo $vo['run50']; ?></td>
<td><?php echo $vo['liding']; ?></td>
<td><?php echo $vo['tiaosheng']; ?></td>
<td><?php echo high_light($vo['status'],\think\Request::instance()->param('status')); ?></td>
<td><?php echo high_light($vo['cssj'],\think\Request::instance()->param('cssj')); ?></td>
<td><?php echo high_light($vo['mcbh'],\think\Request::instance()->param('mcbh')); ?></td>
            <td class="f-14">
                <?php if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo $page; ?></div>
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
