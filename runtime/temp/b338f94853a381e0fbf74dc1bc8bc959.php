<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/index/index.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/base.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/meta.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/header.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/menu.html";i:1539005330;s:87:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/footer.html";i:1535183414;}*/ ?>
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



<title><?php echo lang('title'); ?>-学生端</title>
<meta name="keywords" content="<?php echo lang('keywords'); ?>">
<meta name="description" content="<?php echo lang('description'); ?>">


</head>
<body>

<!-- header -->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl">
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="#"><?php echo lang('name'); ?></a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs"><?php echo lang('version'); ?></span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">

				<ul class="cl">
					<li>
						<?php echo session('user_info.sid'); ?>&nbsp;&nbsp;
					</li>
					<li class="dropDown dropDown_hover">
						<a href="#" class="dropDown_A">
							<?php echo session('user_info.name'); ?>&nbsp;
							<i class="Hui-iconfont">&#xe6d5;</i>
						</a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="<?php echo url('user/logout'); ?>">退出</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!-- header -->





<!--menu-->
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe60d;</i> <?php echo lang('stuinfo'); ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('student/info'); ?>" href="javascript:;" data-title="<?php echo lang('stu-info'); ?>"><?php echo lang('stu-info'); ?></a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe637;</i> <?php echo lang('stutest'); ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                  <li><a data-href="<?php echo url('student/stuScore'); ?>" href="javascript:;" data-title="<?php echo lang('stu-score'); ?>"><?php echo lang('stu-score'); ?></a></li>
                  <li><a data-href="<?php echo url('student/stuTest'); ?>" href="javascript:;" data-title="<?php echo lang('stu-test'); ?>"><?php echo lang('stu-test'); ?></a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--menu -->




<!--网站内容-->
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="<?php echo lang('welcome'); ?>" _href="<?php echo url('index/welcome'); ?>"><?php echo lang('welcome'); ?></span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group">
			<a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a>
			<a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a>
	</div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo url('index/welcome'); ?>"></iframe>
	</div>
</div>
</section>
<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>




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




<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__LIB__/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
	$("#min_title_list li").contextMenu('Huiadminmenu', {
		bindings: {
			'closethis': function(t) {
				console.log(t);
				if(t.find("i")){
					t.find("i").trigger("click");
				}
			},
			'closeall': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
		}
	});
});
</script>
<!--脚本-->


</body>
</html>
