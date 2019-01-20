<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:91:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/teacher/pw_edit.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/base.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/meta.html";i:1536912251;s:89:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/footer.html";i:1540802237;}*/ ?>
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



<title><?php echo (isset($title) && ($title !== '')?$title:"标题"); ?></title>
<style media="screen">
.passwordStrength{

}
.passwordStrength b{
font-weight:normal;
}
.passwordStrength b,.passwordStrength span{
display:inline-block;
vertical-align:middle;
line-height:16px;
line-height:18px\9;
height:16px;
}
.passwordStrength span{
width:45px;
text-align:center;
background-color:#d0d0d0;
border-right:1px solid #fff;
}
.passwordStrength .last{
border-right:none;
}
.passwordStrength .bgStrength{
color:#fff;
background-color:#71b83d;
}
</style>


</head>
<body>





<article class="cl pd-20">

	<form action="" method="post" class="form form-horizontal" id="form-class-edit">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>原密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" value="" name="pw"  datatype="*6-18" errormsg="密码至少6个字符,最多18个字符！">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>新密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" value="" name="password"  plugin="passwordStrength"  datatype="*6-18" errormsg="密码至少6个字符,最多18个字符！">
				<div class="passwordStrength">密码强度： <span>弱</span><span>中</span><span class="last">强</span></div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>重复新密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" value="" name="repassword"  datatype="*6-18" errormsg="密码至少6个字符,最多18个字符！" recheck="password" >
			</div>
		</div>

		<!--将当前记录的id做为隐藏域发送到服务器-->
		<input type="hidden" value="<?php echo session('tec_id'); ?>" name="id">

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input class="btn btn-primary radius disabled" type="button" value="&nbsp;&nbsp;提&nbsp;&nbsp;交&nbsp;&nbsp;" id="submit" >
			</div>
		</div>
	</form>


</article>




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
<script type="text/javascript" src="__LIB__/Validform/5.3.2/passwordStrength-min.js"></script>

<script>
	$(function(){
		$("#form-class-edit").Validform({
			tiptype:2,
			usePlugin:{
				passwordstrength:{
					minLen:6,
					maxLen:18
				}
			}
		});

	    $("form").children().change(function(){
	        $("#submit").removeClass('disabled');
		});
        $("#submit").on("click", function(event){
            $.ajax({
							type: "POST",
							url: "<?php echo url('teacher/doPw'); ?>",
							data: $("#form-class-edit").serialize(),
							dataType: "json",
							success: function(data){
				    		if (data.status == 1) {
									layer.msg(data.message, {icon: 6,time:1000});
								} else {
									layer.msg(data.message, {icon: 5,time:1000});
								}
							}
					});
				});
	})
</script>


</body>
</html>
