<?php
namespace app\common\model;

use think\Model;

class Score extends Model
{
    // 指定表名,不含前缀
    protected $name = 'test_pe';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';


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
