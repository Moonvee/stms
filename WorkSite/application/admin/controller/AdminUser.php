<?php
/**
 * tpAdmin [a web admin based ThinkPHP5]
 *
 * @author yuan1994 <tianpian0805@gmail.com>
 * @link http://tpadmin.yuan1994.com/
 * @copyright 2016 yuan1994 all rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

//------------------------
// 用户控制器
//-------------------------

namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Exception;
use think\Loader;
use think\Db;

class AdminUser extends Controller
{
    use \app\admin\traits\controller\Controller;

//    protected static $blacklist = ['delete', 'clear', 'deleteforever', 'recyclebin', 'recycle'];

    protected function filter(&$map)
    {
        //不查询管理员
        $map['id'] = ["gt", 1];

        if ($this->request->param('realname')) {
            $map['realname'] = ["like", "%" . $this->request->param('realname') . "%"];
        }
        if ($this->request->param('account')) {
            $map['account'] = ["like", "%" . $this->request->param('account') . "%"];
        }
        if ($this->request->param('email')) {
            $map['email'] = ["like", "%" . $this->request->param('email') . "%"];
        }
        if ($this->request->param('mobile')) {
            $map['mobile'] = ["like", "%" . $this->request->param('mobile') . "%"];
        }
    }

    /**
     * 修改密码
     */
    public function password()
    {
        $id = $this->request->param('id/d');
        if ($this->request->isPost()) {
            //禁止修改管理员的密码，管理员id为1
            if ($id < 2) {
                return ajax_return_adv_error("缺少必要参数");
            }

            $password = $this->request->post('password');
            if (!$password) {
                return ajax_return_adv_error("密码不能为空");
            }
            if (false === Loader::model('AdminUser')->updatePassword($id, $password)) {
                return ajax_return_adv_error("密码修改失败");
            }
            return ajax_return_adv("密码已修改为{$password}", '');
        } else {
            // 禁止修改管理员的密码，管理员 id 为 1
            if ($id < 2) {
                throw new Exception("缺少必要参数");
            }

            return $this->view->fetch();
        }
    }

    /**
     * 禁用限制
     */
    protected function beforeForbid()
    {
        // 禁止禁用 Admin 模块,权限设置节点
        $this->filterId(1, '该用户不能被禁用', '=');
    }

        // public function load()
        // {
        //       return $this->view->fetch();
        // }
        //
        // public function upload()
        // {
        //     vendor("PHPExcel.PHPExcel"); //方法一
        //     // $obj_PHPExcel = new \PHPExcel();
        //
        //     //获取表单上传文件
        //   $file = request()->file('excel');
        //
        //     $info = $file->validate(['ext'=>'xlsx,xls,csv'])->move(ROOT_PATH . 'public' . DS . 'uploads/excel');
        //
        //     if($info){
        //
        //         $exclePath = $info->getSaveName();  //获取文件名
        //         $file_name = ROOT_PATH . 'public' . DS . 'uploads/excel' . DS . $exclePath;   //上传文件的地址
        //         //判断截取文件
        //         $extension = strtolower( pathinfo($file_name, PATHINFO_EXTENSION) );
        //         //区分上传文件格式
        //         if($extension == 'xlsx') {
        //           $objReader =\PHPExcel_IOFactory::createReader('Excel2007');
        //           $objReader->setReadDataOnly(true);
        //           $obj_PHPExcel = $objReader->load($file_name);
        //
        //         }else if($extension == 'xls'){
        //           $objReader =\PHPExcel_IOFactory::createReader('Excel5');
        //           $objReader->setReadDataOnly(true);
        //           $obj_PHPExcel = $objReader->load($file_name);
        //         }
        //
        //         $sheet = $obj_PHPExcel->getSheet(0);
        //         $highestRow = $sheet->getHighestRow();           //取得总行数
        //         $highestColumn = $sheet->getHighestColumn(); //取得总列数
        //
        //         for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
        //         {
        //           $str="";
        //           $count .= 1;
        //           for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
        //           {
        //             $str .= $obj_PHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';//读取单元格
        //           }
        //           $str=mb_convert_encoding($str,'utf-8','auto');//根据自己编码修改
        //           $strs = explode("|*|",$str);
        //           return '<script>parent.layer.alert("导入成功！");</script>';
        //
        //           Db::name('admin_user')->data([
        //                             'account' => $strs[0],
        //                             'password' => md5($strs[0]),
        //                             'realname' => $strs[1],
        //                             'mobile' => $strs[2],
        //                             'email' => $strs[3],
        //                         ])->insert($data);//批量插入数据
        //           Db::name('student_info')->data ([
        //                             'account' => $strs[0],
        //                             'xueyuan' => $strs[4],
        //                             'zhuanye' => $strs[5],
        //                             'nianji' => $strs[6],
        //                             'banji' => $strs[7],
        //                             'fudaoyuan' => $strs[8],
        //                             'jiguan' => $strs[9],
        //                             'dizhi' => $strs[10],
        //                         ])->insert();//批量插入数据
        //         }
        //         return '<script>parent.layer.alert("导入成功！");</script>';
        //
        //     }else{
        //         // 上传失败获取错误信息
        //         return '<script>parent.layer.alert("导入失败！")</script>';
        //         //echo $file->getError();
        //     }
        // }
}
