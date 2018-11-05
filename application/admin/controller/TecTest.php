<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;

class TecTest extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {
        if ($this->request->param("tid")) {
            $map['tid'] = ["like", "%" . $this->request->param("tid") . "%"];
        }
        if ($this->request->param("riqi")) {
            $map['riqi'] = ["like", "%" . $this->request->param("riqi") . "%"];
        }
    }
  
}
