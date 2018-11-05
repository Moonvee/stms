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
use app\college\controller\Base;
use think\Request;
use app\college\model\User as UserModel;
use think\Session;

class User extends Base
{
  //登录界面
  public function login(){
    $this-> alreadyLogin();//判断用户是否登录，防止重复登录

	  return $this -> view -> fetch();
  }
  //验证登录
  public function checkLogin(Request $request){
    $status = 0;
    $result = '验证失败';
    $data = $request -> param();

    //创建验证规则
    $rule = [
      'xid|账号' => 'require',
      'password|密码' => 'require',
      'verify|验证码' => 'require|captcha',
    ];
    //自定义验证信息，并作为参数传给下面的validate
    $msg = [
      'xid'=>['require'=>'请填写账号！'],
      'password'=>['require'=>'请填写密码！'],
      'verify'=>['require'=>'请填写验证码！',
                  'captcha'=>'验证码错误！'],
    ];
    $result = $this->validate($data,$rule,$msg);

    //如果验证通过，则继续执行
    if($result === true){
      //构造查询条件
      $map=[
        'xid' => $data['xid'],
        'password' => md5($data['password']),
        'status' => 1,
      ];
      $user = UserModel::get($map);
      //查询用户信息
      if ($user == null) {
        $result = '用户名或密码错误!';
      }else{
        $status = 1;
        $result = '验证通过，正在进入系统...';

        //设置用户登录信息用session
        Session::set('col_id',$user->id);
        Session::set('col_info',$user->getData());
      }
    }
    return ['status'=>$status,'message'=>$result,'data'=>$data];
  }
  //退出登录
  public function logout(){
    //退出前先更新登录时间字段,下次登录时就知道上次登录时间了
    UserModel::update(['login_time'=>time()],['id'=> Session::get('col_id')]);
    Session::delete('col_id');
    Session::delete('col_info');
    $this->success('已注销，正在返回登录页面','user/login');
  }
}
