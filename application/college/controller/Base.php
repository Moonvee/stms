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
namespace app\college\controller;
use think\Controller;
use think\Session;

class Base extends Controller
{
  protected function _initialize()
  {
      parent::_initialize();

      define('COL_ID', Session::has('col_id') ? Session::get('col_id'):null);
  }
  //检测用户登录状态
  protected function isLogin()
  {
    if(is_null(COL_ID))
    {
      $this -> display();
      $this->error('您还没有登录，请登录',url('user/login'));
    }
  }
  //防止用户重复登录
  protected function alreadyLogin()
  {
    if(COL_ID)
    {
      $this->error('您已经登录，请勿重复登录',url('index/index'));
    }
  }

}
