<?php
/**
 * stms [a web test ms based ThinkPHP5]
 * @author    moonvee
 * @link      www.gmwabc.cn
 * @copyright hebau(河北农业大学)
 * @link      www.hebau.edu.cn
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */
namespace app\college\controller;

use app\college\controller\Base;
use app\college\model\college as CollegeModel;
use think\Request;
use think\Session;
use think\Db;

class College extends Base
{ 
    //获取xid全局函数
    public function getXid()
    {
        Session::get('col_info');
        $xid = session('col_info.xid');
        return $xid;
    }
    //学院信息
    public function info()
    {
        $xid = $this->getXid();

        $value = Db::name('info_x')->where('xid', $xid)->find();
        $data = [
            'xid' => $value['xid'], 
            'name' => $value['name'],
            'xiaoqu' => $value['xiaoqu'],
            'xueyuan' => $value['xueyuan'],
            'phone' => $value['phone'],
            'email' => $value['email'],
        ];
        //每次关联查询结果,保存到数组$CollegeList中
        $CollegeList[] = $data;

        $this->view->assign('CollegeList', $CollegeList);

        $this->view->assign('title', '个人信息');

        return $this->view->fetch('col_info');
    }

     //信息修改
    public function infoEdit(Request $request)
    {
        $col_xid = $request->param('xid');
        $result = CollegeModel::get($col_xid);

        $this->view->assign('col_info', $result);
        $this->view->assign('title', '申请修改');
        return $this->view->fetch('info_edit');
    }
    //执行信息修改
    public function doInfoEdit(Request $request)
    {
        $data = $request->param();

        foreach ($data as $key => $value) {
            if (!empty($value)) {
                $data[$key] = $value;
            }
        }
        $condition = ['id' => $data['id']];
        $result = CollegeModel::update($data, $condition);

        if (true == $result) {
            return ['status' => 1, 'message' => '更新成功'];
        } else {
            return ['status' => 0, 'message' => '更新失败'];
        }
    }

    public function pwEdit()
    {
        $this->view->assign('title', '申请修改');
        return $this->view->fetch('pw_edit');
    }
    public function doPw(Request $request)
    {

        //获取表单返回的数据
        $data = $request->param();

        $condition = ['id' => $data['id']];

        $user = CollegeModel::get($condition);

        if (md5($data['pw']) == $user['password']) {

            $data = md5($data['password']);
            $result = CollegeModel::update(['password' => $data], $condition);

            if (true == $result) {
                return ['status' => 1, 'message' => '更新成功'];
            } else {
                return ['status' => 0, 'message' => '更新失败'];
            }
        } else {
            return ['status' => 0, 'message' => '原密码错误'];
        }

    }
}
