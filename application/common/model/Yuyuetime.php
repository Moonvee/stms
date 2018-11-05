<?php
namespace app\common\model;

use think\Model;

class Yuyuetime extends Model
{
    // 指定表名,不含前缀
    protected $name = 'yuyue';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    public function getAuthAttr($value)
    {
      $status = [
        0 => '系统关闭中',
        1 => '系统开启',
      ];
      return $status[$value];
    }
}
