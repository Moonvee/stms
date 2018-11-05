<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:87:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/student/index.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/base.html";i:1535183414;s:98:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/template/javascript_vars.html";i:1535183414;s:86:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/student/form.html";i:1535183414;s:84:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/student/th.html";i:1535183414;s:84:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/student/td.html";i:1535183414;}*/ ?>
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
    <input type="text" class="input-text" style="width:250px" placeholder="学院" name="xueyuan" value="<?php echo \think\Request::instance()->param('xueyuan'); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="班级" name="banji" value="<?php echo \think\Request::instance()->param('banji'); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="姓名" name="name" value="<?php echo \think\Request::instance()->param('name'); ?>">
    <input type="text" class="input-text" style="width:250px" placeholder="学号" name="sid" value="<?php echo \think\Request::instance()->param('sid'); ?>">
    <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
</form>

    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('add')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('添加','<?php echo \think\Url::build('add', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 添加</a><?php endif; if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; ?>
            <a href="javascript:;" onclick="layer_open('批量导入','<?php echo \think\Url::build('load'); ?>',{w:'50%',h:'80%'})" class="btn btn-warning radius J_load ml-20"><i class="Hui-iconfont">&#xe645;</i> 批量导入</a>
            <a href="javascript:;" onclick="layer_open('批量导出','<?php echo \think\Url::build('out'); ?>',{w:'50%',h:'50%'})" class="btn btn-success radius J_load"><i class="Hui-iconfont">&#xe644;</i> 批量导出</a>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo $count; ?></strong> 条
        </span>
    </div>
    <table class="radius table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox" value="" name=""></th>
<th width="40">ID</th>
<th width="110">学号</th>
<th width="80">姓名</th>
<th width="40">性别</th>
<th width="40">民族</th>
<th width="80">生日</th>
<th width="150">身份证号</th>
<th width="150">家庭地址</th>
<th width="60">校区</th>
<th width="100">学院</th>
<th width="100">专业</th>
<th width="60">班级</th>
<th width="70">在读状态</th>
<th width="70">入学时间</th>
<th width="50">学制</th>
<th width="80">备注</th>
<th width="80"><?php echo sort_by('添加时间','create_time'); ?></th>

            <th width="100">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
        <tr class="text-c">
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['id']; ?></td>
<td><?php echo $vo['sid']; ?></td>
<td><?php echo high_light($vo['name'],\think\Request::instance()->param('name')); ?></td>
<td><?php echo high_light($vo['sex'],\think\Request::instance()->param('sex')); ?></td>
<td><?php echo high_light($vo['minzu'],\think\Request::instance()->param('minzu')); ?></td>
<td><?php echo high_light($vo['shengri'],\think\Request::instance()->param('shengri')); ?></td>
<td><?php echo high_light($vo['sfzh'],\think\Request::instance()->param('sfzh')); ?></td>
<td><?php echo high_light($vo['dizhi'],\think\Request::instance()->param('dizhi')); ?></td>
<td><?php echo high_light($vo['xiaoqu'],\think\Request::instance()->param('xiaoqu')); ?></td>
<td><?php echo high_light($vo['xueyuan'],\think\Request::instance()->param('xueyuan')); ?></td>
<td><?php echo high_light($vo['zhuanye'],\think\Request::instance()->param('zhuanye')); ?></td>
<td><?php echo high_light($vo['banji'],\think\Request::instance()->param('banji')); ?></td>
<td><?php echo high_light($vo['zdzt'],\think\Request::instance()->param('zdzt')); ?></td>
<td><?php echo high_light($vo['ruxue'],\think\Request::instance()->param('ruxue')); ?></td>
<td><?php echo high_light($vo['xuezhi'],\think\Request::instance()->param('xuezhi')); ?></td>
<td><?php echo high_light($vo['beizhu'],\think\Request::instance()->param('beizhu')); ?></td>
<td><?php echo date('Y-m-d',$vo['create_time']); ?></td>

            <td class="f-14">
                <?php if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; if (\Rbac::AccessCheck('password')) : ?> <a title="修改密码" href="javascript:;" onclick="layer_open('修改密码','<?php echo \think\Url::build('password', ['id' => $vo['id'], ]); ?>')" class="label radius ml-5 label-secondary">修改密码</a><?php endif; ?>
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
