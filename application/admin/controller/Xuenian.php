<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Request;
use think\Db;

class Xuenian extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    public function xuenianSelect(Request $request)
    {
      $id = $request -> param('id[]');
      $isSelect = Db::name('xuenian')->where('status',1);
      if ($isSelect) {
        $message = '已经选择了学年，请编辑以去除勾选！';
      }

    }


}
