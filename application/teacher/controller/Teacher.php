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
use app\teacher\model\Teacher as TeacherModel;
use think\Cookie;
use think\Db;
use think\Request;
use think\Session;

class Teacher extends Base
{
    //获取tid全局函数
    public function getTid()
    {
        Session::get('tec_info');
        $tid = session('tec_info.tid');
        return $tid;
    }

    //个人信息
    public function info()
    {
        $tid = $this->getTid();
        $value = TeacherModel::get(['tid' => $tid]);

        $data = [
            'tid' => $value->tid,
            'name' => $value->name,
            'xiaoqu' => $value->xiaoqu,
            'xueyuan' => $value->xueyuan,
            'phone' => $value->phone,
            'email' => $value->email,
        ];
        $teacherList[] = $data;

        $this->view->assign('teacherList', $teacherList);
        $this->view->assign('title', '个人信息');
        return $this->view->fetch('tec_info');
    }

    //信息修改
    public function infoEdit(Request $request)
    {
        $tec_tid = $request->param('tid');
        $result = TeacherModel::get($tec_tid);

        $this->view->assign('tec_info', $result);
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
        $result = TeacherModel::update($data, $condition);

        if (true == $result) {
            return ['status' => 1, 'message' => '更新成功'];
        } else {
            return ['status' => 0, 'message' => '更新失败'];
        }
    }

    //密码修改
    public function pwEdit()
    {
        $this->view->assign('title', '申请修改');
        return $this->view->fetch('pw_edit');
    }
    //执行密码修改
    public function doPw(Request $request)
    {
        $data = $request->param();
        $condition = ['id' => $data['id']];
        $user = TeacherModel::get($condition);

        if (md5($data['pw']) == $user['password']) {

            $data = md5($data['password']);
            $result = TeacherModel::update(['password' => $data], $condition);

            if (true == $result) {
                return ['status' => 1, 'message' => '更新成功'];
            } else {
                return ['status' => 0, 'message' => '更新失败'];
            }
        } else {
            return ['status' => 0, 'message' => '原密码错误'];
        }
    }

    //测试管理
    public function testUp()
    {
        $tid = $this->getTid();
        $tec = Session::get('tec_info');

        $value = TeacherModel::table('tp_test_t')->where('tid', $tid)->order('id desc')->select();
        //Db::table('tp_test_s')->where('cid',$value->id)->count();
        if ($value) {

            foreach ($value as $value) {
                $data = [
                    'id' => $value->id,
                    'name' => $tec['name'],
                    'xiaoqu' => $tec['xiaoqu'],
                    'xueyuan' => $tec['xueyuan'],
                    'riqi' => $value->riqi,
                    'jieci' => $value->jieci,
                    'rsman' => $value->rsman,
                    'rswomen' => $value->rswomen,
                    'rongliang' => $value->krlman + $value->krlwomen,
                    'krlman' => $value->krlman - $value->rsman,
                    'krlwomen' => $value->krlwomen - $value->rswomen,
                    'status' => $value->status,
                ];
                $testList[] = $data;
            }

            $this->view->assign('testList', $testList);
            $this->view->assign('title', '测试管理');
            return $this->view->fetch('test_up');
        } else {
            return $this->view->fetch('test_0');
        }
    }

    //添加测试
    public function testAdd()
    {
        return $this->view->fetch('test_add');
    }
    //执行添加测试
    public function doTestAdd(Request $request)
    {
        $data = $request->param();

        $tec = Session::get('tec_info');
        $result = Db::table('tp_test_t')
            ->insert([
                'tid' => $tec['tid'],
                'riqi' => $data['riqi'],
                'jieci' => $data['jieci'],
                'rongliang' => $data['rongliang'],
            ]);
        $status = 0;
        $message = '添加失败';

        if (true == $result) {
            $status = 1;
            $message = '添加成功';
        }
        return ['status' => $status, 'message' => $message];
    }

    //删除测试
    public function delTest(Request $request)
    {
        $id = $request->param('id');
        Db::table('tp_test_t')->delete($id);
    }

    //测试学生列表
    public function stuList()
    {
        $id = Cookie::get('cid');
        //---------分页查询处理---------//
        $pageParam = ['query' => []];
        if ($id) {
            $result = Db::table('tp_test_s')->where('cid', $id)->order('id', 'desc')->select();
            $this->assign('id', $result);
            $pageParam['query']['id'] = $result;
        }
        $testList = Db::table('tp_test_s')->where('cid', $id)->paginate(10, false, $pageParam);
        //----------*********---------//
        $this->view->assign('testList', $testList);
        $this->view->assign('title', '学生列表');
        return $this->view->fetch('stu_list');
    }

    //删除学生选择
    public function delStu(Request $request)
    {
        $sid = $request->param('id');
        $xuenian = $request->param('xn');

        $map['sid'] = $sid;
        $map['xuenian'] = $xuenian;
        Db::table('tp_test_s')->where($map)->update(['cid' => 0]);
    }
//*********************************************//
    //添加学生成绩
    public function scoreAdd()
    {
        return $this->view->fetch('score_add');
    }
    //执行添加学生成绩操作
    public function doScoreAdd(Request $request)
    {
        $data = $request->param();
        $map['sid'] = $data['sid'];
        $map['xuenian'] = $data['xuenian'];
        $result = Db::table('tp_test_pe')
            ->insert([
                'sid' => $data['sid'],
                'xuenian' => $data['xuenian'],
                'shengao' => $data['shengao'],
                'tizhong' => $data['tizhong'],
                'feihuoliang' => $data['feihuoliang'],
                'lrun' => $data['lrun'],
                'mrun' => $data['mrun'],
                'srun' => $data['srun'],
                'yintiyangwo' => $data['yintiyangwo'],
                'qianqu' => $data['qianqu'],
                'run50' => $data['run50'],
                'liding' => $data['liding'],
                'tiaosheng' => $data['tiaosheng'],
                'status' => $data['status'],
                'cssj' => $data['cssj'],
                'mcbh' => $data['mcbh'],
            ]);
        $status = 0;
        $message = '添加失败';

        if (true == $result) {
            $status = 1;
            $message = '添加成功';
        }
        return ['status' => $status, 'message' => $message, 'data' => $data];
    }

    //单个添加学生成绩
    public function addStuScore(Request $request)
    {
        $oid = Cookie::get('oid');
        $sid = Cookie::get('sid');
        if($oid == 0){
            return $this->view->fetch('add_stu_score');
        }else{
            $stu = Db::table('tp_test_pe')->where('sid', $sid)->find();
            if($stu == null){
                $data = ['sid' => $sid, 'id' => $oid];
                Db::table('tp_test_pe')->insert($data);
            }

            return $this->view->fetch('edit_stu_score');
        }
    }
    //执行添加单个学生成绩
    public function doAddStuScore()
    {

    }
    //执行编辑单个学生成绩
    public function doEditStuScore()
    {

    }

    //查看单个学生成绩
    public function seeStuScore(Request $request)
    {
        $oid = Cookie::get('oid');

        // $oid = $request->param('id');

        $value = Db::table('tp_test_pe')->where('id', $oid)->find();

        if ($value['status'] == '1') {
            $sid = $value['sid'];
            $name = Db::table('tp_info_s')->where('sid', $sid)->find();
            $data = [
                'sid' => $value['sid'],
                'name' => $name['name'],
                'shengao' => $value['shengao'],
                'tizhong' => $value['tizhong'],
                'feihuoliang' => $value['feihuoliang'],
                'lrun' => $value['lrun'],
                'mrun' => $value['mrun'],
                'srun' => $value['srun'],
                'yintiyangwo' => $value['yintiyangwo'],
                'qianqu' => $value['qianqu'],
                'run50' => $value['run50'],
                'liding' => $value['liding'],
                'tiaosheng' => $value['tiaosheng'],
                'status' => $value['status'],
                'cssj' => $value['cssj'],
                'mcbh' => $value['mcbh'],
            ];

            $scoreList[] = $data;
            $this->view->assign('scoreList', $scoreList);
            $this->view->assign('title', '成绩查询');

            //bmi advice
            $bmi = $value['tizhong'] / (($value['shengao'] / 100) * ($value['shengao'] / 100));
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
                $header = ['学号', '身高', '体重', '肺活量', '1000/800米跑', '400米跑', '50x8往返跑', '引体向上', '仰卧起坐', '坐位体前屈', '50米跑', '立定跳远', '跳绳'];

                $body = TeacherModel::table('tp_test_pe')->where('id', $oid)->field("id", true)->select();

                if ($error = \Excel::export($header, $scoreList, "$sid 成绩导出", '2007')) {
                    throw new Exception($error);
                }
            } else {
                return $this->view->fetch('stu_score');
            }

        } elseif ($value['status'] == '2') {
            $mcbh = $value->mcbh;
            $this->view->assign('mcbh', $mcbh);
            return $this->view->fetch('stu_score2');
        } else {
            return $this->view->fetch('stu_score0');
        }

        return $this->view->fetch('stu_score');
    }

    public function teststu(Request $request)
    {
        $cid = $request->param('id');
        $sid = Db::table('tp_test_s')->where('cid', 30)->column('sid');
        //$sid = Db::table('tp_test_s')->where('cid','$cid')->find();
        $map['sid'] = array('in', $sid);
        $value = Db::table('tp_info_s')->where($map)->select();
        if ($value) {
            //------------------------//
            foreach ($value as $value) {
                $data = [
                    'sid' => $cid,
                    'name' => $value['name'],
                    'xiaoqu' => $value['xiaoqu'],
                    'xueyuan' => $value['xueyuan'],
                    'zhuanye' => $value['zhuanye'],
                    'banji' => $value['banji'],
                ];
                $testList[] = $data;
            }

            $this->view->assign('testList', $testList);
            $this->view->assign('title', '测试管理');
            return $this->view->fetch('test_stu');
        } else {

            $data = [
                'sid' => '',
                'name' => '',
                'xiaoqu' => '',
                'xueyuan' => '',
                'zhuanye' => '',
                'banji' => '',
                'status' => '',
            ];
            $testList[] = $data;

            $this->view->assign('testList', $testList);
            $this->view->assign('title', '测试管理');
            return $this->view->fetch('test_stu');
        }
    }
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function stuscore(Request $request)
    {
        $sid = $request->param('sid');

        $oid = TeacherModel::table('tp_test_s')->where('sid', $sid)->value('oid');

        $value = Db::table('tp_test_pe')->where('id', 12)->select();
        if (1) {
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
            return $this->view->fetch('stu_score');

        } else {
            return $this->view->fetch('stu_score0');
        }
    }
    public function scoreMake(Request $request)
    {
        Session::get('tec_info'); //获取用户tid
        $tid = session('tec_info.tid');
        $id = $request->param('id');

        //score loading
        $value = TeacherModel::table('tp_test_pe')->where('id', $id)->find();
        if ($value->status == '已测试') {
            $data = [
                'tid' => $value->tid,
                'shengao' => $value->shengao,
                'tizhong' => $value->tizhong,
                'feihuoliang' => $value->feihuoliang,
                'lrun' => $value->lrun,
                'mrun' => $value->mrun,
                'srun' => $value->srun,
                'yinti' => $value->yinti,
                'yangwo' => $value->yangwo,
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
                $header = ['学号', '身高', '体重', '肺活量', '1000/800米跑', '400米跑', '50x8往返跑', '引体向上', '仰卧起坐', '坐位体前屈', '50米跑', '立定跳远', '跳绳'];

                $body = TeacherModel::table('tp_test_pe')->where('tid', $tid)->field("id", true)->select();
                if ($error = \Excel::export($header, $scoreList, "$tid 成绩导出", '2007')) {
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

    public function testSelect(Request $request)
    {
        $id = $request->param('id');
        $tectest = TeacherModel::table('tp_test_t')->where('id', $id)->setInc('renshu');

        $tid = $this->getTid();
        $stutest = TeacherModel::table('tp_test_s')->where('tid', $tid)->update(['cid' => $id]);

    }

}
