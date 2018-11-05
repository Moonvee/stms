<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/teacher/stu_score.html";i:1540905643;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/base.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/meta.html";i:1536912251;s:89:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/footer.html";i:1540802237;}*/ ?>
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








	<div class="page-container">

    <table class="table table-border table-bordered table-bg mt-5 radius">
      <thead>
        <tr>
          <th colspan="2" scope="col">成绩查询</th>
        </tr>
      </thead>
				<?php if(is_array($scoreList) || $scoreList instanceof \think\Collection || $scoreList instanceof \think\Paginator): $i = 0; $__LIST__ = $scoreList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tbody>
        <tr>
          <th width="30%">学号</th>
          <td><span id="lbServerName"><?php echo $vo['sid']; ?></span></td>
        </tr>
        <tr>
          <th width="30%">姓名</th>
          <td><span id="lbServerName"><?php echo $vo['name']; ?></span></td>
        </tr>
        <tr>
          <td>身高</td>
          <td><?php echo $vo['shengao']; ?> 厘米</td>
        </tr>
        <tr>
          <td>体重</td>
          <td><?php echo $vo['tizhong']; ?> 千克</td>
        </tr>
        <tr>
          <td>肺活量</td>
          <td><?php echo $vo['feihuoliang']; ?> 毫升</td>
        </tr>
        <tr>
          <td>1000/800米跑</td>
          <td><?php echo $vo['lrun']; ?> (分/秒)</td>
        </tr>
        <tr>
          <td>400米跑</td>
          <td><?php echo $vo['mrun']; ?> (分/秒)</td>
        </tr>
        <tr>
          <td>50x8往返跑</td>
          <td><?php echo $vo['srun']; ?> (分/秒)</td>
        </tr>
        <tr>
          <td>引体向上\仰卧起坐</td>
          <td><?php echo $vo['yintiyangwo']; ?> 次</td>
        </tr>

        <tr>
          <td>坐位体前屈</td>
          <td><?php echo $vo['qianqu']; ?> 厘米</td>
        </tr>
        <tr>
          <td>50米跑</td>
          <td><?php echo $vo['run50']; ?> 秒</td>
        </tr>
        <tr>
          <td>立定跳远</td>
          <td><?php echo $vo['liding']; ?> 米</td>
        </tr>
        <tr>
          <td>跳绳</td>
          <td><?php echo $vo['tiaosheng']; ?> 次/分</td>
        </tr>
				<tr>
					<td>测试状态</td>
					<td><?php echo $vo['status']; ?></td>
				</tr>
				<?php if($vo['status'] == '1'): ?>
				<tr>
					<td>测试时间</td>
					<td><?php echo $vo['cssj']; ?></td>
				</tr>
				<?php endif; if($vo['status'] == '2'): ?>
				<tr>
					<td>免测编号</td>
					<td><?php echo $vo['mcbh']; ?></td>
				</tr>
				<?php endif; ?>
      </tbody>
			<?php endforeach; endif; else: echo "" ;endif; ?>

			<thead>
				<tr class="bg">
					<th>体质建议</th>
					<?php if(is_array($bmiList) || $bmiList instanceof \think\Collection || $bmiList instanceof \think\Paginator): $i = 0; $__LIST__ = $bmiList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bmi): $mod = ($i % 2 );++$i;?>
					<th>该学生的BMI为<?php echo $bmi['bmi']; ?>，属于<?php echo $bmi['bmic']; ?>，建议<?php echo $bmi['bmia']; ?>。</th>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tr>
				<tr>
					<td colspan="2">
						<form action="" target="_blank" method="post">
							<button class="btn btn-success" type="submit">导出Excel</button>
						</form>
					</td>
				</tr>
			</thead>
    </table>
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
