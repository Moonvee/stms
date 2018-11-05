<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Request;
use think\Db;

class Score extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {
      if ($this->request->param("sid")) {
          $map['sid'] = ["like", "%" . $this->request->param("sid") . "%"];
      }
      if ($this->request->param("xuenian")) {
          $map['xuenian'] = ["like", "%" . $this->request->param("xuenian") . "%"];
      }
      if ($this->request->param("status")) {
          $map['status'] = ["like", "%" . $this->request->param("status") . "%"];
      }
      if ($this->request->param("cssj")) {
          $map['cssj'] = ["like", "%" . $this->request->param("cssj") . "%"];
      }
      if ($this->request->param("mcbh")) {
          $map['mcbh'] = ["like", "%" . $this->request->param("mcbh") . "%"];
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

              for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
              {
                $str .= $obj_PHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';//读取单元格
              }
              $str=mb_convert_encoding($str,'utf-8','auto');//根据自己编码修改
              $strs = explode("|*|",$str);

              $data = [
                  'sid' => $strs[0],
                  'xuenian' => $strs[1],
                  'shengao' => $strs[2],
                  'tizhong' => $strs[3],
                  'feihuoliang' => $strs[4],
                  'lrun' => $strs[5],
                  'mrun' => $strs[6],
                  'srun' => $strs[7],
                  'yintiyangwo' => $strs[8],
                  'qianqu' => $strs[9],
                  'run50' => $strs[10],
                  'liding' => $strs[11],
                  'tiaosheng' => $strs[12],
                  'status' => $strs[13],
                  'cssj' => $strs[14],
                  'mcbh' => $strs[15],
              ];

              // 学号	学年	身高	体重	肺活量	1000/800米	400米	8*50往返	引体向上	仰卧起坐	坐位体前屈	50米	立定跳	跳绳	测试状态	测试时间	免测编号

              Db::name('test_pe')->insert($data);//批量插入数据
            }
            return '<script>parent.layer.alert("上传成功！")</script>';

        }else{
            // 上传失败获取错误信息
            return '<script>parent.layer.alert("上传失败，请重试")</script>';
            //echo $file->getError();
        }
    }

    public function out(Request $request)
    {
      if ($this->request->isPost()) {
          $header = [
            '学号',
            '学年',
            '身高',
            '体重',
            '肺活量',
            '1000/800米',
            '400米',
            '8*50往返',
            '引体向上/仰卧起坐',
            '坐位体前屈',
            '50米',
            '立定跳',
            '跳绳',
            '测试状态',
            '测试时间',
            '免测编号',
          ];

          $body = Db::name('test_pe')->field('id,create_time,update_time',true)->select();
          if ($error = \Excel::export($header, $body, "成绩导出", '2007')) {
              throw new Exception($error);
          }
      } else {
          return $this->view->fetch('out');
      }
    }

}
