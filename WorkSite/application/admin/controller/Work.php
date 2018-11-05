<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use app\common\model\Work as WorkModel;

use app\admin\Controller;

use think\Session;
use think\Request;

class Work extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected static $isdelete = false;

        public function index()
        {
          Session::get('user_name');//获取用户信息
          $account = session('user_name');

          $value = WorkModel::get(['account' => $account]);
          if ($value) {
            $data = [
                'id'=>$value->id,
                'account' => $value->account,
                'danwei'=> $value->danwei,
                'xingzhi'=> $value->xingzhi,
                'daiyu'=> $value->daiyu,
                'fangxiang'=> $value->fangxiang,
                'yixiang'=> $value->yixiang,
            ];
            $workInfo[] = $data;

            $this -> view -> assign('workInfo', $workInfo);

            return $this -> view -> fetch();
          }else {
            $data = [
                'account' => '数据库中不存在',
                'id'=>'',
                'danwei'=> '',
                'xingzhi'=> '',
                'daiyu'=> '',
                'fangxiang'=> '',
                'yixiang'=> '',
            ];
            $workInfo[] = $data;

            $this -> view -> assign('workInfo', $workInfo);
            return $this -> view -> fetch();
          }

        }

}
