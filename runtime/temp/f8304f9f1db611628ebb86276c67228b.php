<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"/Users/moonvee/Project/website/Stms/public/../application/index/view/student/stu_score1.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/base.html";i:1535183414;s:85:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/meta.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/index/view/public/footer.html";i:1535183414;}*/ ?>
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
		<span class="c-gray en">&gt;</span><?php echo lang('stutest'); ?>
		<span class="c-gray en">&gt;</span><?php echo lang('stu-score'); ?> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
		<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	 </nav>
	<div class="page-container">
    <table class="table table-border table-bordered table-bg radius">
      <thead>
        <tr>
          <th scope="col" colspan="9">学期列表</th>
        </tr>
        <tr class="text-c">
          <th width="50">序号</th>
          <th width="100">学期</th>
          <th width="100">状态</th>
          <th width="100">操作</th>
        </tr>
      </thead>
      <tbody>

      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
        <tr class="text-c">
          <td><?php echo $k; ?></td>
          <td><?php echo $vo['xuenian']; ?></td>

          <td class="td-status">  
            <?php if($vo['status'] == '未测试'): ?>
            <span class="label radius"><?php echo $vo['status']; ?></span>
            <?php else: ?>
            <span class="label label-success radius"><?php echo $vo['status']; ?></span>
            <?php endif; ?>
          </td>
          <td>
            <button name="" id="" class="btn btn-success" type="post" onclick="scoreMake('成绩查询','<?php echo url("student/scoreMake",["id"=>$vo["id"]]); ?>','1','800','500')">
              <i class="Hui-iconfont">&#xe665;</i> 查看成绩
            </button>
          </td>
        </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>

      </tbody>
    </table>
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

<script>
function scoreMake(title,url,id,w,h){
    $.get(url,{id:id}); //执行控制器中的编辑操作
	layer_show(title,url,w,h);
}
</script>
<!--/请在上方写此页面业务相关的脚本-->


</body>
</html>
