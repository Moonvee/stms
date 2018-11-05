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
use app\index\model\Student as StudentModel;
use think\Db;
use think\Request;
use think\Session;

class Student extends Base
{
    //sid获取函数
    public function getSid()
    {
        //通过session获取当前登录用户信息
        Session::get('user_info');
        $sid = session('user_info.sid'); //通过session获取sid

        return $sid;
    }
    //获取当前学年
    public function getXuenian()
    {
        $data = StudentModel::table('tp_xuenian')->where('thisyear', 1)->find();

        return $data->xuenian;
    }
    /*信息管理*/
    //学生个人信息
    public function info()
    {
        $sid = $this->getSid();

        $value = StudentModel::get(['sid' => $sid]); //模型查询sid对应的学生信息
        $data = [
            'sid' => $value->sid,
            'name' => $value->name,
            'sex' => $value->sex,
            'minzu' => $value->minzu,
            'sfzh' => $value->sfzh,
            'beizhu' => $value->beizhu,
            'ruxue' => $value->ruxue,
            'xuezhi' => $value->xuezhi,
            'zdzt' => $value->zdzt,
            'xiaoqu' => $value->xiaoqu,
            'xueyuan' => $value->xueyuan,
            'zhuanye' => $value->zhuanye,
            'banji' => $value->banji,
        ];
        $studentList[] = $data;
        $this->view->assign('studentList', $studentList); //将个人信息存为数组并反馈到前端

        $this->view->assign('title', '个人信息');
        return $this->view->fetch('stu_info');
    }
    //学生个人信息修改**************未完成
    public function infoEdit()
    {
		$result = Session::get('user_info');

        $this->view->assign('stu_info', $result);
        $this->view->assign('title', '申请修改');
        return $this->view->fetch('info_edit');
    }
    //执行修改操作
    public function doInfoEdit(Request $request)
    {
        //获取表单返回的数据
        $param = $request->param();

        //去掉表单中为空的数据,即没有修改的内容
        foreach ($param as $key => $value) {

            if (!empty($value)) {
                $data[$key] = $value;
            }
            
        }
        $sid = $this->getSid();
        $condition = ['id' => $sid];

        $result = Db::table('tp_info_s')->where('id',$sid)->update($data);

        if (true == $result) {
            return ['status' => 1, 'message' => '更新成功'];
        } else {
            return ['status' => 0, 'message' => '更新失败'];
        }
    }
    //密码修改
    public function pwEdit()
    {
        $this->view->assign('title', '密码修改');
        return $this->view->fetch('pw_edit');
    }
    public function doPwEdit(Request $request)
    {
        $data = $request->param();
        $condition = ['id' => $data['id']];

        $user = StudentModel::get($condition);

        if (md5($data['pw']) == $user['password']) {
            if ($data['password'] == $data['repassword']) {
                $data = md5($data['password']);
                $result = StudentModel::update(['password' => $data], $condition);
                if (true == $result) {
                    return ['status' => 1, 'message' => '更新成功'];
                } else {
                    return ['status' => 0, 'message' => '更新失败'];
                }
            } else {
                return ['status' => 0, 'message' => '两次密码不一样，请检查'];
            }
        } else {
            return ['status' => 0, 'message' => '原密码错误'];
        }
    }
    /*测试管理*/
    //成绩查询
    public function stuScore()
    {
        $sid = $this->getSid();

        $stu = StudentModel::table('tp_test_pe')->where('sid', $sid)->select(); //从testpe表中选择sid对应的成绩信息
        if ($stu) {
            foreach ($stu as $value) {
                $data = [
                    'id' => $value->id,
                    'xuenian' => $value->xuenian,
                    'status' => $value->status,
                ];
                $list[] = $data;
            }

            $this->view->assign('list', $list);

            if ($this->request->isPost()) {
                return $this->view->fetch('stu_score');
            }
            return $this->view->fetch('stu_score1');
        } else {
            return $this->view->fetch('stu_score0');
        }
    }
    //成绩单生成
    public function scoreMake(Request $request)
    {
        $sid = $this->getSid();
        $id = $request->param('id');

        //score loading
        $value = StudentModel::table('tp_test_pe')->where('id', $id)->find();
        if ($value->status == '已测试') {
            $data = [
                'sid' => $value->sid,
                'shengao' => $value->shengao,
                'tizhong' => $value->tizhong,
                'feihuoliang' => $value->feihuoliang,
                'lrun' => $value->lrun,
                'mrun' => $value->mrun,
                'srun' => $value->srun,
                'yintiyangwo' => $value->yintiyangwo,
                'qianqu' => $value->qianqu,
                'run50' => $value->run50,
                'liding' => $value->liding,
                'tiaosheng' => $value->tiaosheng,
                'status' => $value->status,
                'cssj' => $value->cssj,
                'mcbh' => $value->mcbh,
            ];

            $scoreList[] = $data;
            $this->view->assign('scoreList', $scoreList);
            $this->view->assign('title', '成绩查询');

            //bmi advice
            $bmi = $value->tizhong / (($value->shengao / 100) * ($value->shengao / 100));
            if ($bmi <= 18.5 && $bmi > 0) {
                $bmic = '<18.5范围，体重过轻';
                $bmia = '寻找过轻的原因，还需增加热量的摄入';
            } elseif ($bmi < 22.9 && $bmi > 18.5) {
                $bmic = '18.5-22.9范围，体重正常';
                $bmia = '做适量运动，保持热量摄入';
            } elseif ($bmi < 24.9 && $bmi > 23.0) {
                $bmic = '23.0-24.9范围，体重过重';
                $bmia = '增加运动量，注意饮食，减少热量摄入';
            } elseif ($bmi < 29.9 && $bmi > 25.9) {
                $bmic = '25.0-19.9范围，体重一级肥胖';
                $bmia = '增加运动量，制定健康的饮食计划';
            } else {
                $bmic = '>30范围，体重二级肥胖';
                $bmia = '多运动来消耗热量，制定认真的减肥计划';
            }
            $bmil = [
                'bmi' => round($bmi, 2),
                'bmic' => $bmic,
                'bmia' => $bmia,
            ];
            $bmiList[] = $bmil;
            $this->view->assign('bmiList', $bmiList);

            //Excel output
            if ($this->request->isPost()) {
                $header = ['学号', '身高', '体重', '肺活量', '1000/800米跑', '400米跑', '50x8往返跑', '引体向上\仰卧起坐', '坐位体前屈', '50米跑', '立定跳远', '跳绳', '测试状态'];

                $body = StudentModel::table('tp_test_pe')->where('sid', $sid)->field("id", true)->select();
                if ($error = \Excel::export($header, $scoreList, "$sid 成绩导出", '2007')) {
                    throw new Exception($error);
                }
            } else {
                return $this->view->fetch('stu_score');
            }
        } elseif ($value->status == '免测') {
            $mcbh = $value->mcbh;

            $this->view->assign('mcbh', $mcbh);

            return $this->view->fetch('stu_score2');
        } else {
            return $this->view->fetch('stu_score0');
        }
    }

    //预约测试
    public function stuTest()
    {
        $this->stuSysOpen();
        $sid = $this->getSid();

        $xuenian = $this->getXuenian();

        $sex = Db::table('tp_info_s')->where('sid', $sid)->value('sex');

        $stu = StudentModel::table('tp_info_s')->where('sid', $sid)->find();
        $stutest = StudentModel::table('tp_test_s')->where('sid', $sid)->find();

        if ($stutest->sid) { //判断是否有该学生

            if ($stutest->cid == null) { //判断学生是否预约
                //==================//

                $tec = StudentModel::table('tp_info_t')->where('xiaoqu', $stu->xiaoqu)->find();
                $map['tid'] = $tec->tid;
                $map['xuenian'] = $xuenian;
                $value = StudentModel::table('tp_test_t')->where($map)->order('id desc')->select();
                if ($value) {
                    //------------------------//
                    foreach ($value as $value) {
                        $data = [
                            'id' => $value->id,
                            'name' => $tec->name,
                            'xiaoqu' => $tec->xiaoqu,
                            'xueyuan' => $tec->xueyuan,
                            'riqi' => $value->riqi,
                            'jieci' => $value->jieci,
                            'rsman' => $value->rsman,
                            'rswomen' => $value->rswomen,
                            'rongliang' => $value->krlman + $value->krlwomen,
                            'krlman' => $value->krlman - $value->rsman,
                            'krlwomen' => $value->krlwomen - $value->rswomen,
                            'status' => $value->status,
                            'select' => '0',
                        ];
                        if ($value->rsman == $value->krlman && $value->krlwomen == $value->rswomen) {
                            $data['select'] = '2';
                        } elseif ($value->krlwomen == $value->rswomen && $sex == '女') {
                            $data['select'] = '2';
                        } elseif ($value->krlman == $value->rsman && $sex == '男') {
                            $data['select'] = '2';
                        }
                        $testList[] = $data;
                    }

                    $this->view->assign('testList', $testList);
                } else {
                    return $this->view->fetch('stu_test0');
                }
                //----------------------//
            } else {
                $value = StudentModel::table('tp_test_t')->where('id', $stutest->cid)->find();
                $tec = StudentModel::table('tp_info_t')->where('tid', $value->tid)->find();
                $data = [
                    'id' => $value->id,
                    'name' => $tec->name,
                    'xiaoqu' => $tec->xiaoqu,
                    'xueyuan' => $tec->xueyuan,
                    'riqi' => $value->riqi,
                    'jieci' => $value->jieci,
                    'rsman' => $value->rsman,
                    'rswomen' => $value->rswomen,
                    'rongliang' => $value->krlman + $value->krlwomen,
                    'krlman' => $value->krlman - $value->rsman,
                    'krlwomen' => $value->krlwomen - $value->rswomen,
                    'status' => $value->status,
                    'select' => '1',
                ];
                $testList[] = $data;
                $this->view->assign('testList', $testList);
            }
            //==================//
            $this->view->assign('title', '测试管理');

            return $this->view->fetch('stu_test');
        } else {
            return $this->view->fetch('stu_test0');
        }
    }
    //执行测试选择
    public function testSelect(Request $request)
    {
        $id = $request->param('id');
        $sid = $this->getSid();
        $sex = Db::table('tp_info_s')->where('sid', $sid)->value('sex');

        $value = StudentModel::table('tp_test_t')->where('id', $id)->find();

        if ($sex == '男' && $value->krlman > $value->rsman) {
            StudentModel::table('tp_test_t')->where('id', $id)->setInc('rsman');
        } elseif ($sex == '女' && $value->krlwomen > $value->rswomen) {
            StudentModel::table('tp_test_t')->where('id', $id)->setInc('rswomen');
        } else {
            return 0;
        }

        $xuenian = $this->getXuenian();
        $map['sid'] = $sid;
        $map['xuenian'] = $xuenian;
        $stutest = StudentModel::table('tp_test_s')->where($map)->update(['cid' => $id]);

        return 1;
    }
    //取消测试
    public function testDelete(Request $request)
    {
        $id = $request->param('id');
        $sid = $this->getSid();

        $sex = StudentModel::table('tp_info_s')->where('sid', $sid)->value('sex');
        if ($sex == '男') {
            $tectest = StudentModel::table('tp_test_t')->where('id', $id)->setDec('rsman');
        } else {
            $tectest = StudentModel::table('tp_test_t')->where('id', $id)->setDec('rswomen');
        }
        $xuenian = $this->getXuenian();
        $map['sid'] = $sid;
        $map['xuenian'] = $xuenian;
        $map['cid'] = $id;
        $stutest = StudentModel::table('tp_test_s')->where($map)->update(['cid' => 0]);
    }
}
