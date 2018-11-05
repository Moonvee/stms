<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use app\common\model\Info as InfoModel;
use app\admin\Controller;

use think\Session;
use think\Request;

class Info extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    public function index()
    {
      Session::get('user_name');//获取用户信息
      $account = session('user_name');

      $value = InfoModel::get(['account' => $account]);
      if ($value) {
        $data = [
            'id'=>$value->id,
            'account' => $value->account,
            'xueyuan' => $value->xueyuan,
            'zhuanye' => $value->zhuanye,
            'nianji'=>$value->nianji,
            'banji' => $value->banji,
            'fudaoyuan'=>$value->fudaoyuan,
            'jiguan' => $value->jiguan,
            'dizhi' => $value->dizhi,
        ];
        $studentInfo[] = $data;

        $this -> view -> assign('studentInfo', $studentInfo);

        return $this -> view -> fetch();
      }else {
        $data = [
            'account' => '数据库中不存在',
            'id'=>'id',
            'xueyuan' => 'xueyuan',
            'zhuanye' => 'zhuanye',
            'nianji'=>'nianji',
            'banji' => 'banji',
            'fudaoyuan'=>'fudaoyuan',
            'jiguan' => 'jiguan',
            'dizhi' => 'dizhi',
        ];
        $studentInfo[] = $data;

        $this -> view -> assign('studentInfo', $studentInfo);
        return $this -> view -> fetch();
      }
    }
}
