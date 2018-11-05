<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);
use app\common\model\Student as StudentModel;

use app\admin\Controller;
use think\Request;
use think\Db;


class Student extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {
        if ($this->request->param('sid')) {
            $map['sid'] = ["like", "%" . $this->request->param('sid') . "%"];
        }
        if ($this->request->param('name')) {
            $map['name'] = ["like", "%" . $this->request->param('name') . "%"];
        }
        if ($this->request->param('xueyuan')) {
            $map['xueyuan'] = ["like", "%" . $this->request->param('xueyuan') . "%"];
        }
        if ($this->request->param('banji')) {
            $map['banji'] = ["like", "%" . $this->request->param('banji') . "%"];
        }
    }
     //修改密码
    public function password()
    {
        $id = $this->request->param('id/d');
        if ($this->request->isPost()) {
            $password = $this->request->post('password');
            if (!$password) {
                return ajax_return_adv_error("密码不能为空");
            }
            if (false === Loader::model('Student')->updatePassword($id, $password)) {
                return ajax_return_adv_error("密码修改失败");
            }
            return ajax_return_adv("密码已修改为{$password}", '');
        } else {
            return $this->view->fetch();
        }
    }

    public function load()
    {
          return $this->view->fetch();
    }

    public function upload()
    {
        vendor("PHPExcel.PHPExcel"); //方法一
        // $obj_PHPExcel = new \PHPExcel();

        //获取表单上传文件
      $file = request()->file('excel');

        $info = $file->validate(['ext'=>'xlsx,xls,csv'])->move(ROOT_PATH . 'public' . DS . 'uploads/excel');

        if($info){

            $exclePath = $info->getSaveName();  //获取文件名
            $file_name = ROOT_PATH . 'public' . DS . 'uploads/excel' . DS . $exclePath;   //上传文件的地址
            //判断截取文件
            $extension = strtolower( pathinfo($file_name, PATHINFO_EXTENSION) );
            //区分上传文件格式
            if($extension == 'xlsx') {
              $objReader =\PHPExcel_IOFactory::createReader('Excel2007');
              $objReader->setReadDataOnly(true);
              $obj_PHPExcel = $objReader->load($file_name);

            }else if($extension == 'xls'){
              $objReader =\PHPExcel_IOFactory::createReader('Excel5');
              $objReader->setReadDataOnly(true);
              $obj_PHPExcel = $objReader->load($file_name);
            }

            $sheet = $obj_PHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();           //取得总行数
            $highestColumn = $sheet->getHighestColumn(); //取得总列数
            for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
            {
              $str="";
              $count .= 1;
              for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
              {
                $str .= $obj_PHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';//读取单元格
              }
              $str=mb_convert_encoding($str,'utf-8','auto');//根据自己编码修改
              $strs = explode("|*|",$str);

              $data = [
                  'sid' => $strs[0],
                  'password' => md5($strs[0]),
                  'name' => $strs[1],
                  'sex' => $strs[2],
                  'minzu' => $strs[3],
                  'sfzh' => $strs[4],
                  'xiaoqu' => $strs[5],
                  'xueyuan' => $strs[6],
                  'zhuanye' => $strs[7],
                  'banji' => $strs[8],
                  'zdzt' => $strs[9],
                  'ruxue' => $strs[10],
                  'xuezhi' => $strs[11],
                  'beizhu' => $strs[12],
              ];

              Db::name('info_s')->insert($data);//批量插入数据
              Db::name('test_s')->insert($data->sid);//批量插入数据
            }
            $this -> view -> assign('count', $count);
            return '<script>parent.layer.alert("上传成功！")</script>';

        }else{
            // 上传失败获取错误信息
            return '<script>parent.layer.alert("上传失败，请重试！")</script>';
            //echo $file->getError();
        }
    }
    public function out(Request $request)
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
            '在读状态',
            '入学时间',
            '学制',
            '备注',
          ];

          $body = Db::name('info_s')->field('id,password,create_time,update_time,isdelete,login_time,login_count',true)->select();
          if ($error = \Excel::export($header, $body, "学生导出", '2007')) {
              throw new Exception($error);
          }
      } else {
          return $this->view->fetch('out');
      }
    }

}
