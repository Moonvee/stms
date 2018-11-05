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

namespace app\index\model;
use think\Model;
class Student extends Model
{
  // 设置当前模型对应的完整数据表名称
    protected $table = 'tp_info_s';

    //设置当前表默认日期时间显示格式
    protected $dateFormat = 'Y/m/d';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    public function getZdztAttr($value)
    {
      $zdzt = [
        3 => '退学',
        2 => '休学',
        1 => '在读',
      ];
      return $zdzt[$value];
    }
    public function getStatusAttr($value)
    {
      $status = [
        0 => '未测试',
        1 => '已测试',
        2 => '免测',
      ];
      return $status[$value];
    }
}
