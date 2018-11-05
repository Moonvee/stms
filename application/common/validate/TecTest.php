<?php
namespace app\common\validate;

use think\Validate;

class TecTest extends Validate
{
    protected $rule = [
        "tid|教师工号" => "require",
    ];
}
