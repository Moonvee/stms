<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/teacher/tec_info.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/base.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/meta.html";i:1536912251;s:89:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/footer.html";i:1540802237;}*/ ?>
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
		<span class="c-gray en">&gt;</span><?php echo lang('tecinfo'); ?>
		<span class="c-gray en">&gt;</span><?php echo lang('tec-info'); ?> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
		<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	 </nav>
	<div class="page-container">
    <table class="table table-border table-bordered table-bg mt-5 radius">
      <thead>
        <tr>
          <th colspan="2" scope="col">个人信息</th>
        </tr>
      </thead>
				<?php if(is_array($teacherList) || $teacherList instanceof \think\Collection || $teacherList instanceof \think\Paginator): $i = 0; $__LIST__ = $teacherList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tbody>
        <tr>
          <th width="30%">学号</th>
          <td><span id="lbServerName"><?php echo $vo['tid']; ?></span></td>
        </tr>
        <tr>
          <td>姓名</td>
          <td><?php echo $vo['name']; ?></td>
        </tr>
        <tr>
          <td>校区</td>
          <td><?php echo $vo['xiaoqu']; ?></td>
        </tr>
        <tr>
          <td>学院</td>
          <td><?php echo $vo['xueyuan']; ?></td>
        </tr>
        <tr>
          <td>电话</td>
          <td><?php echo $vo['phone']; ?></td>
        </tr>
        <tr>
          <td>邮箱</td>
          <td><?php echo $vo['email']; ?></td>
        </tr>

      </tbody>
			<?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <div class="cl pd-5 bg-1 bk-gray mt-10">
      <span class="l">
        <a href="javascript:;" onclick="infoEdit('申请修改','<?php echo url("teacher/infoEdit"); ?>','800','600')" class="btn btn-primary radius" title="暂未提供修改功能">
        <i class="Hui-iconfont">&#xe6df;</i> 申请修改</a>
      </span>

      <span class="l  ml-20">
        <a href="javascript:;" onclick="infoEdit('修改密码','<?php echo url("teacher/pwEdit"); ?>','800','600')" class="btn btn-primary radius">
        <i class="Hui-iconfont">&#xe6df;</i> 密码修改</a>
      </span>
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

<!--/请在上方写此页面业务相关的脚本-->


</body>
</html>
