<?php
namespace app\common\validate;

use think\Validate;

class StudentInfo extends Validate
{
    protected $rule = [
        "account|学号" => "require",
        "xueyuan|学院" => "require",
        "zhuanye|专业" => "require",
        "nianji|年级" => "require",
        "banji|班级" => "require",
        "fudaoyuan|辅导员" => "require",
        "jiguan|籍贯" => "require",
        "dizhi|家庭地址" => "require",
    ];
}
