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
namespace app\teacher\controller;
use app\teacher\controller\Base;
use think\Session;

class Index extends Base
{
    public function index()
    {
      $this->isLogin();//判断用户是否登录，防止直接进入后台

		  return $this -> view -> fetch();
    }
    public function welcome()
    {
      Session::get('tec_info');//获取用户信息
      $sid = session('tec_info.sid');

      return $this->view->fetch();
    }
}
