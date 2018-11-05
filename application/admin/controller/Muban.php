<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;

use think\Request;
use think\Db;

class Muban extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单

    public function tongfang(Request $request)
    {
      if ($this->request->isPost()) {
          $header = [
            '学校代码',
            '年级编号',
            '班号',
            '班级',
            '学号',
            '民族代码',
            '姓名',
            '性别',
            '出生日期',
            '学生来源',
            '身份证号',
            '家庭地址',
            '是否免测',
            '免测原因',
          ];

          $infos = Db::name('info_s')->field('id,password,create_time,update_time,beizhu,xuezhi,zdzt,isdelete,login_time,login_count',true)->select();
          $objpe = Db::name('test_pe')->where('sid',$infos->sid)->field('id,sid,shengao,tizhong,feihuoliang,lrun,mrun,srun,yinti,yangwo,qianqu,run50,liding,tiaosheng,cssj,mcbh,create_time,update_time',true)->select();

          $data = [
              'scid'=>'11920',//学校代码
              'nianji' => $infos->ruxue,//年级编号
              'banhao' => $infos->banji,//班号
              'banji' => $infos->banji,//班级
              'sid' => $infos->sid,//学号
              'minzu'=>$infos->minzu,//民族代码
              'name' => $infos->name,//姓名
              'sex'=>$infos->sex,//性别
              'shengri'=>$infos->shengri,//出生日期
              'shengyuan'=>$infos->shengyuan,//学生来源
              'sfzh'=>$infos->sfzh,//身份证号
              'dizhi'=>$infos->dizhi,//家庭地址
              'status'=>$objpe->status,//是否免测
              'mcyy'=>$objpe->mcyy,//免测原因
          ];

          // sid
          // shengao
          // tizhong
          // feihuoliang
          // lrun
          // mrun
          // srun
          // yinti
          // yangwo
          // qianqu
          // run50
          // liding
          // tiaosheng
          // status
          // cssj
          // mcbh
          // mcyy
          if ($error = \Excel::export($header, $data, "清华同方学生信息导入模板", '2007')) {
              throw new Exception($error);
          }
      } else {
          return $this->view->fetch('tongfang');
      }
    }
    public function tizhiwang(Request $request)
    {
      if ($this->request->isPost()) {
          $header = [
            '年级编号',
            '班号',
            '班级',
            '学籍号',
            '民族代码',
            '姓名',
            '性别',
            '出生日期',
            '学生来源',
            '身份证号',
            '家庭地址',
            '身高',
            '体重',
            '肺活量',
            '50米跑',
            '1000或800米跑',
            '坐位体前屈',
            '立定跳远',
            '仰卧起坐/引体向上',
          ];

          $body = Db::name('info_s')->field('id,password,create_time,update_time,isdelete,login_time,login_count',true)->select();
          if ($error = \Excel::export($header, $body, "学生导出", '2007')) {
              throw new Exception($error);
          }
      } else {
          return $this->view->fetch('tizhiwang');
      }
    }
    public function nongda(Request $request)
    {
      if ($this->request->isPost()) {
          $header = [
            '学号',
            '姓名',
            '性别',
            '民族',
            '身份证号',
            '校区',
            '学院',
            '专业',
            '班级',
            '年级',
            '在读状态',
            '入学年份',
            '学制',
            '身高',
            '体重',
            '肺活量',
            '50米跑',
            '中长跑',
            '坐位体前屈',
            '立定跳远',
            '仰卧起坐/引体向上',
            '测试状态',
            '测试时间',
            '免测',
            '备注',
          ];

          $body = Db::name('info_s')->field('id,password,create_time,update_time,isdelete,login_time,login_count',true)->select();
          if ($error = \Excel::export($header, $body, "学生导出", '2007')) {
              throw new Exception($error);
          }
      } else {
          return $this->view->fetch('nongda');
      }
    }



}
