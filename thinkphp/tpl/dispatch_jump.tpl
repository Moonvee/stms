{__NOLAYOUT__}
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/lib/html5shiv.js"></script>
<script type="text/javascript" src="__STATIC__/lib/respond.min.js"></script>
<![endif]-->
<link href="__INDEX__/h-ui.admin/css/loginCss.css" rel="stylesheet" type="text/css" />
<style media="screen">

  .jump{
    font-size: 1.3em;
    color: black;
  }
</style>

<title>跳转提示--标准考试管理系统</title>
</head>
<body>
    <div class="main">
    		<div class="login">
          <h1>《标准》考试管理系统</h1>
    			<div class="inset">
            <div class="system-message">
                <?php switch ($code) {?>
                    <?php case 1:?>
                    <h2 class="success"><?php echo(strip_tags($msg));?></h2>
                    <?php break;?>
                    <?php case 0:?>
                    <h2 class="error"><?php echo(strip_tags($msg));?></h2>
                    <?php break;?>
                <?php } ?>
                <p class="detail"></p>
                <h2 class="jump">
                    页面还有&nbsp;&nbsp;<b id="wait"><?php echo($wait);?></b>&nbsp;&nbsp;秒自动 <a id="href" href="<?php echo($url);?>">跳转</a>
                </h2>
            </div>
    			</div>
    		</div>
    	</div>
      <div class="copy-right"><p>Copyright &copy; 河北农业大学体育部 All Rights Reserved</p></div>

    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
