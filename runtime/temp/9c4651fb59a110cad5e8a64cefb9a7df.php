<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/teacher/score_add.html";i:1540713416;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/base.html";i:1535183414;s:87:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/meta.html";i:1536912251;s:89:"/Users/moonvee/Project/website/Stms/public/../application/teacher/view/public/footer.html";i:1540802237;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__LIB__/jedate/skin/jedate.css">



</head>
<body>





<div class="page-container">
    <form class="form form-horizontal" id="form" method="post">
        <input type="hidden" name="id" value="<?php echo isset($vo['id']) ? $vo['id'] :  ''; ?>">
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>学号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="学号" name="sid"  datatype="*" nullmsg="请填写学号">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>学年：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="学年" name="xuenian"  datatype="*" nullmsg="请填写学年">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>身高：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="身高" name="shengao"  datatype="*" nullmsg="请填写身高">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>体重：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="体重" name="tizhong"  datatype="*" nullmsg="请填写体重">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>肺活量：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="肺活量" name="feihuoliang"   datatype="*" nullmsg="请填写肺活量">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>1000/800米：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text dateinput dateicon" id="date1" placeholder="1000/800米" name="lrun"  datatype="*" nullmsg="请填写1000/800米" readonly>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>400米：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text dateinput" id="date2" placeholder="400米" name="mrun"  datatype="*" nullmsg="请填写400米" readonly>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>8*50米：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text dateinput" id="date3" placeholder="8*50米" name="srun"   datatype="*" nullmsg="请填写8*50米" readonly>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>引体向上/仰卧起坐：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="引体向上/仰卧起坐" name="yintiyangwo" value="<?php echo isset($vo['yintiyangwo']) ? $vo['yintiyangwo'] :  ''; ?>"  datatype="*" nullmsg="请填写引体向上/仰卧起坐">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>坐位体前屈：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="坐位体前屈" name="qianqu" value="<?php echo isset($vo['qianqu']) ? $vo['qianqu'] :  ''; ?>"  datatype="*" nullmsg="请填写坐位体前屈">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>50米：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="50米" name="run50" value="<?php echo isset($vo['run50']) ? $vo['run50'] :  ''; ?>"  datatype="*" nullmsg="请填写50米">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>立定跳：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="立定跳" name="liding" value="<?php echo isset($vo['liding']) ? $vo['liding'] :  ''; ?>"  datatype="*" nullmsg="请填写立定跳">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>跳绳：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="跳绳" name="tiaosheng" value="<?php echo isset($vo['tiaosheng']) ? $vo['tiaosheng'] :  ''; ?>"  datatype="*" nullmsg="请填写跳绳">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>测试状态：</label>
            <div class="formControls col-xs-6 col-sm-6 skin-minimal">
              <div class="radio-box">
                <input type="radio" name="status" id="status-0" value="0" datatype="*" nullmsg="请选择测试状态">
                <label for="status-0">未测试</label>
              </div>
              <div class="radio-box">
                <input type="radio" name="status" id="status-1" value="1" datatype="*" nullmsg="请选择测试状态">
                <label for="status-1">已测试</label>
              </div>
              <div class="radio-box">
                <input type="radio" name="status" id="status-2" value="2" datatype="*" nullmsg="请选择测试状态">
                <label for="status-2">免测</label>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">测试时间：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text dateinput" id="date4" placeholder="测试时间" name="cssj" value="<?php echo isset($vo['cssj']) ? $vo['cssj'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">免测编号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="免测编号" name="mcbh" value="<?php echo isset($vo['mcbh']) ? $vo['mcbh'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" id="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
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




<script>
    $(function () {
        //点击显示 时分秒（hh:mm:ss）格式
        var date = {
            theme: { bgcolor: "#2d6dcc", color: "#ffffff", pnColor: "#00CCFF" },
            isinitVal: true,
            initDate: [{ hh: 00, mm: 00, ss: 00 }, false],
            format: "hh:mm:ss"
        };
       jeDate("#date1", date);
       jeDate("#date2", date);
       jeDate("#date3", date);
       jeDate("#date4", {
            theme: { bgcolor: "#2d6dcc", color: "#ffffff", pnColor: "#00CCFF" },
            isinitVal: true,
            format: "YYYY-MM-DD"
        });

       $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret){
                ajax_progress(ret);
            }
        });

        $("form").children().change(function () {
            $("#submit").removeClass('disabled');
        });


        $("#submit").on("click", function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('teacher/doscoreAdd'); ?>",
                data: $("#form").serialize(),
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        layer.msg(data.message, { icon: 6, time: 1000 });
                    } else {
                        layer.msg(data.message, { icon: 5, time: 1000 });
                    }
                }
            });
        });
    })
</script>


</body>
</html>
