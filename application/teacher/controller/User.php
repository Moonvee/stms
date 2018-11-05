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
use app\teacher\model\User as UserModel;
use think\Request;
use think\Session;

class User extends Base
{
    //登录界面
    public function login()
    {
        $this->alreadyLogin(); //判断用户是否登录，防止重复登录

        return $this->view->fetch();
    }
    //验证登录
    public function checkLogin(Request $request)
    {
        $status = 0;
        $result = '验证失败';
        $data = $request->param();

        //创建验证规则
        $rule = [
            'tid|账号' => 'require',
            'password|密码' => 'require',
            'verify|验证码' => 'require|captcha',
        ];
        //自定义验证信息，并作为参数传给下面的validate
        $msg = [
            'tid' => ['require' => '请填写账号！'],
            'password' => ['require' => '请填写密码！'],
            'verify' => ['require' => '请填写验证码！',
                'captcha' => '验证码错误！'],
        ];
        $result = $this->validate($data, $rule, $msg);

        //如果验证通过，则继续执行
        if ($result === true) {
            //构造查询条件
            $map = [
                'tid' => $data['tid'],
                'password' => md5($data['password']),
            ];
            $user = UserModel::get($map);
            //查询用户信息
            if ($user == null) {
                $result = '用户名或密码错误!';
            } else {
                $status = 1;
                $result = '验证通过，正在进入系统...';

                //设置用户登录信息用session
                Session::set('tec_id', $user->id);
                Session::set('tec_info', $user->getData());
            }
        }
        return ['status' => $status, 'message' => $result, 'data' => $data];
    }
    //退出登录
    public function logout()
    {
        //退出前先更新登录时间字段,下次登录时就知道上次登录时间了
        UserModel::update(['login_time' => time()], ['id' => Session::get('tec_id')]);
        Session::delete('tec_id');
        Session::delete('tec_info');
        $this->success('已注销，正在返回登录页面', 'user/login');
    }
}
