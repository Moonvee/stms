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
use app\index\controller\Base;
use think\Request;
use app\index\model\User as UserModel;
use think\Session;

class User extends Base
{
  //登录界面
  public function login(){
    $this-> alreadyLogin();//判断用户是否登录，防止重复登录

	  return $this -> view -> fetch('user/login');
  }
  //验证登录
  public function checkLogin(Request $request){
    $status = 0;
    $result = '验证失败';
    $data = $request -> param();

    $map=[
      'sid' => $data['sid'],
    ];
    $reg = UserModel::get($map);
    if($reg['reg_status']==0){
      $status = 0;
      $result = '您还没有注册，请注册';
    }else{
    //创建验证规则
    $rule = [
      'sid|学号' => 'require',
      'password|密码' => 'require',
      'verify|验证码' => 'require|captcha',
    ];
    //自定义验证信息，并作为参数传给下面的validate
    $msg = [
      'sid'=>['require'=>'请填写学号！'],
      'password'=>['require'=>'请填写密码！'],
      'verify'=>['require'=>'请填写验证码！',
                  'captcha'=>'验证码错误！'],
    ];
    $result = $this->validate($data,$rule,$msg);

    //如果验证通过，则继续执行
    if($result === true){
      //构造查询条件
      $map=[
        'sid' => $data['sid'],
        'password' => md5($data['password']),
      ];
      $user = UserModel::get($map);
      //查询用户信息
      if ($user == null) {
        $result = '用户名或密码错误!';
      }else{
        $status = 1;
        $result = '验证通过，正在进入系统...';
        //设置用户登录信息用session
        Session::set('user_id',$user->id);
        Session::set('user_info',$user->getData());
      }
    }
  }
    return ['status'=>$status,'message'=>$result,'data'=>$data];
  }

  //学生注册
  public function reg()
  {
    return $this -> view -> fetch('user/reg');
  }
  public function checkReg(Request $request){
    $status = 0;
    $result = '注册失败';
    $data = $request -> param();

    $map=[
      'sid' => $data['sid'],
    ];
    $reg = UserModel::get($map);
    if($reg['reg_status']==1){
      $status = 0;
      $result = '您已经注册，请登录';
    }else{
      $rule = [
      'sid|学号' => 'require',
      'idcard|身份证号'=>'require',
      'password|密码' => 'require',
      'verify|验证码' => 'require|captcha',
      ];
      $msg = [
      'sid'=>['require'=>'请填写学号！'],
      'idcard'=>['require'=>'请填写身份证号！'],
      'password'=>['require'=>'请填写密码！'],
      'verify'=>['require'=>'请填写验证码！',
                  'captcha'=>'验证码错误！'],
      ];
       $result = $this->validate($data,$rule,$msg);
      if($data['repassword']==$data['password']){ 
        if($result === true){
          //构造查询条件
          $map=[
            'sid' => $data['sid'],
            'sfzh' => $data['idcard'],
          ];        

          $user = UserModel::get($map);

          $pw = UserModel::where('sid',$data['sid'])->update(['password'=>md5($data['password']),'reg_status'=>'1']);
          //查询用户信息
          if ($user == null) {
            $status = 0;
            $result = '学号和身份证号不匹配，请检查!';
          }else if($pw == null){
            $status = 0;
            $result = '注册失败，请重试';
          }else{
            $status = 1;
            $result = '注册成功，请登录...';
          }
        }
      }else{
        $status = 0;
        $result = '两次密码输入不一致';
      }
    }
    return ['status'=>$status,'message'=>$result,'data'=>$data];
  }

  //退出登录
  public function logout(){
    //退出前先更新登录时间字段,下次登录时就知道上次登录时间了
    UserModel::update(['login_time'=>time()],['id'=> Session::get('user_id')]);
    Session::delete('user_id');
    Session::delete('user_info');
    $this->success('已注销，正在返回登录页面','user/login');
  }
}
