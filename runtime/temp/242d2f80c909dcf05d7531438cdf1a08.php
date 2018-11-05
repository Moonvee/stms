<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/Users/moonvee/Project/website/Stms/public/../application/admin/view/pub/login.html";i:1535183414;}*/ ?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="Bookmark" href="__ROOT__/favicon.ico" >
	<link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />

	<title><?php echo lang('title'); ?>-学院端</title>
	<meta name="keywords" content="<?php echo lang('keywords'); ?>">
	<meta name="description" content="<?php echo lang('description'); ?>">
	<link href="__STATIC__/css/login.css" rel="stylesheet" type="text/css"/>
	<link href="__STATIC__/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />

	<style media="screen">
		.denglu{background:url(__IMG__/login-bg.png) center top;}
		.long{width: 300px;}
	</style>

</head>
<body class="denglu">
	<div class="dl">
		<div class="biaoti">
			<img src="__IMG__/logo.png" />
		</div>
		<div class="log">
			<ul class="left">
				 <li class="xz"><?php echo lang('name'); ?></li>
				 <li><?php echo lang('description'); ?></li>

			</ul>
			  <ul class="right">
					<form class="form form-horizontal" action="<?php echo \think\Url::build('checkLogin'); ?>" method="post" id="form">
	            <div class="row cl">
	                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;color:#008384;">帐号</label>
	                <div class="formControls col-xs-6 col-ms-6">
	                    <input name="account" type="text" placeholder="请填写帐号" class="input-text long size-L" datatype="*" nullmsg="请填写帐号">
	                </div>
	                <div class="col-xs-3 col-ms-3"></div>
	            </div>
	            <div class="row cl">
	                <label class="form-label col-xs-3 col-ms-3" style="line-height: 40px;font-size: 20px;color:#008384;">密码</label>
	                <div class="formControls col-xs-6 col-ms-6">
	                    <input name="password" type="password" placeholder="请填写密码" class="input-text long size-L" datatype="*" nullmsg="请填写密码">
	                </div>
	                <div class="col-xs-3 col-ms-3"></div>
	            </div>
	            <div class="row cl">
								<label class="form-label col-xs-3 col-ms-3" style="line-height: 40px;font-size: 20px;color:#008384;">验证码</label>

	                <div class="formControls col-xs-6 col-ms-6">
	                    <input name="captcha" type="text" placeholder="请填写验证码" class="input-text long size-L" datatype="*" nullmsg="请填写验证码" maxlength="4" autocomplete="off">
									</div>
	                <div class="col-xs-3 col-ms-3"></div>
	            </div>
	            <div class="row cl">
	                <div class="formControls col-xs-6 col-xs-offset-3">
										<img id="captcha" src="<?php echo captcha_src(); ?>" alt="验证码" title="点击刷新验证码" style="cursor:pointer;width: 150px;height: 40px">
	                </div>
	            </div>
	            <div class="row cl">
	                <div class="formControls col-xs-6 col-xs-offset-3">
	                    <input name="" type="submit" class="btn btn-success radius size-L mr-20" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
	                </div>
	            </div>
	        </form>
			</ul>

		</div>
	</div>
	<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
	<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
	<script>
	    $(function () {
	        $("#captcha").click(function () {
	            $(this).attr("src","<?php echo captcha_src(); ?>?t="+new Date().getTime())
	        });

	        $("#form").Validform({
	            tiptype:1,
	            ajaxPost:true,
	            showAllError:true,
	            callback:function(ret){
	                if (ret.code){
	                    if (ret.msg == '验证码错误!'){
	                        $("#captcha").click();
	                        $("[name='captcha']").val('');
	                        layer.msg(ret.msg);
	                    } else {
	                        layer.alert(ret.msg);
	                    }
	                } else {
	                    layer.msg("登录成功！");
	                    location.href = '<?php echo \think\Request::instance()->get('callback')?: \think\Url::build("Index/index"); ?>';
	                }
	            }
	        });
	    })

	</script>
</body>
</html>
