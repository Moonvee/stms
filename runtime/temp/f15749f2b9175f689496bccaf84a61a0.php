<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/user/login.html";i:1538444366;}*/ ?>
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

	<title><?php echo lang('title'); ?>-教师端</title>
	<meta name="keywords" content="<?php echo lang('keywords'); ?>">
	<meta name="description" content="<?php echo lang('description'); ?>">
	<link href="__ADMIN__/css/login.css" rel="stylesheet" type="text/css"/>
	<link href="__ADMIN__/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />

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
					<form id="form" method="post" class="form form-horizontal ">
	            <div class="row cl">
	                <label class="form-label col-xs-3 col-ms-3" style="line-height: 36px;font-size: 20px;color:#008384;">帐号</label>
	                <div class="formControls col-xs-6 col-ms-6">
	                    <input name="tid" type="text" placeholder="请填写帐号" class="input-text long size-L" datatype="*" nullmsg="请填写帐号" onkeydown="KeyDown();">
	                </div>
	            </div>
	            <div class="row cl">
	                <label class="form-label col-xs-3 col-ms-3" style="line-height: 40px;font-size: 20px;color:#008384;">密码</label>
	                <div class="formControls col-xs-6 col-ms-6">
	                    <input name="password" type="password" placeholder="请填写密码" class="input-text long size-L" datatype="*" nullmsg="请填写密码"  onkeydown="KeyDown();"> 
	                </div>
	            </div>
	            <div class="row cl">
								<label class="form-label col-xs-3 col-ms-3" style="line-height: 40px;font-size: 20px;color:#008384;" >验证码</label>

	                <div class="formControls col-xs-6 col-ms-6">
	                    <input name="verify" id="verify" type="text" placeholder="请填写验证码" class="input-text long size-L" datatype="*" nullmsg="请填写验证码" maxlength="4" autocomplete="off" onkeydown="KeyDown();">
									</div>
	            </div>
	            <div class="row cl">
	                <div class="formControls col-xs-6 col-xs-offset-3">
                    <a class="verify_img" id="kanbuq" href="javascript:refreshVerify();">
                      <img id="verify_img" src="<?php echo captcha_src(); ?>" alt="captcha" title="点击更换验证码"  style="cursor:pointer;width: 150px;height: 40px">
                    </a>
	                </div>
	            </div>
	            <div class="row cl">
	                <div class="formControls col-xs-6 col-xs-offset-3">
	                    <input name="btn" type="button" id="login" class="btn btn-success radius size-L mr-20" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
	                </div>
	            </div>
	        </form>
			</ul>
		</div>
	</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<!-- <script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script> -->
<script type="text/javascript" src="__ADMIN__/js/login.js"></script>
<script>
  $(function(){
    //登录按钮
    $("#login").on('click',function(event){
      $.ajax({
        type:"POST",                         //设置提交方式位POST
        url:"<?php echo url('checkLogin'); ?>",          //设置提交数据处理脚本文件
        data:$("form").serialize(),          //将当前表单序列化后提交
        dataType:'json',                     //设置提交数据的类型
        success:function(data){
          if (data.status==1) {              //返回值为1时跳转后台
            layer.msg(data.message, {icon: 6,time:2000});
						window.location.href="<?php echo url('index/index'); ?>";
          }else {
            layer.msg(data.message, {icon: 5,time:2000}); 
						document.getElementById("verify").value='';         //否则输出错误信息
            refreshVerify();                //刷新验证码
          }
        }
      });
    })
  })
</script>

</body>
</html>
