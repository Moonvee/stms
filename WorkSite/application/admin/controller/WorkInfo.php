<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use app\common\model\WorkInfo as WorkInfoModel;

use app\admin\Controller;

use think\Session;
use think\Request;

class WorkInfo extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];


}
