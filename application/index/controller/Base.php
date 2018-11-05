<?php
/**
* stms [a web test ms based ThinkPHP5]
*
* @author    moonvee
* @link      www.gmwabc.cn
* @copyright hebau(河北农业大学)
* @link      www.hebau.edu.cn
* @license   http://www.apache.org/licenses/LICENSE-2.0
*/
namespace app\index\controller;

use think\Controller;
use think\Session;
use think\Db;

class Base extends Controller
{
    protected function _initialize()
    {
        parent::_initialize();

        define('USER_ID', Session::has('user_id') ? Session::get('user_id'):null);
    }
    //检测用户登录状态
    protected function isLogin()
    {
        if (is_null(USER_ID)) {
            $this->error('您还没有登录，请登录', url('user/login'));
        }
    }
    //防止用户重复登录
    protected function alreadyLogin()
    {
        if (USER_ID) {
            $this->display('index/index');
        }
    }

    protected function stuSysOpen()
    {
        $auth = Db::table('tp_yuyue')->where('id', 1)->find();
    
        Session::get('user_info');
        $xueyuan = session('user_info.xueyuan');

        if ($auth['auth']==1 && $auth['xueyuan']==$xueyuan) {
            $this->display();
        } else {
            $this->error('当前测试系统未开通', 'index/sysError');
        }
    }
}
