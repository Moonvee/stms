<?php
namespace app\common\model;

use think\Model;

class Student extends Model
{
    // 指定表名,不含前缀
    protected $name = 'info_s';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    //自动完成
    protected $auto = ['password'];

    protected function setPasswordAttr($value)
    {
        return password_hash_tp($value);
    }

    /**
     * 修改密码
     */
    public function updatePassword($id, $password)
    {
        return $this->where("id", $id)->update(['password' => password_hash_tp($password)]);
    }

    // public function getMinzuAttr($value)
    // {
    //   $minzu=[
    //   0=>'汉族',1=>'壮族',2=>'满族',3=>'回族',4=>'苗族',5=>'维吾尔族',
    //   6=>'土家族',7=>'彝族',8=>'蒙古族',9=>'藏族',10=>'布依族',
    //   11=>'侗族',12=>'瑶族',13=>'朝鲜族',14=>'白族',15=>'哈尼族',
    //   16=>'哈萨克族',17=>'黎族',18=>'傣族',19=>'畲族',20=>'傈僳族',
    //   21=>'仡佬族',22=>'东乡族',23=>'高山族',24=>'拉祜族',25=>'水族',
    //   26=>'佤族',27=>'纳西族',28=>'羌族',29=>'土族',30=>'仫佬族',
    //   31=>'锡伯族',32=>'柯尔克孜族',33=>'达斡尔族',34=>'景颇族',35=>'毛南族',
    //   36=>'撒拉族',37=>'布朗族',38=>'塔吉克族',39=>'阿昌族',40=>'普米族',
    //   41=>'鄂温克族',42=>'怒族',43=>'京族',44=>'基诺族',45=>'德昂族',
    //   46=>'保安族',47=>'俄罗斯族',48=>'裕固族',49=>'乌孜别克族',50=>'门巴族',
    //   51=>'鄂伦春族',52=>'独龙族',53=>'塔塔尔族',54=>'赫哲族',55=>'珞巴族',];
    //   return $minzu[$value];
    // }
    public function getZdztAttr($value)
    {
      $zdzt = [
        3 => '退学',
        2 => '休学',
        1 => '在读',
      ];
      return $zdzt[$value];
    }
}
