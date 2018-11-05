<?php
namespace app\common\validate;

use think\Validate;

class ObjPe extends Validate
{
    protected $rule = [
        "sid|学号" => "require",
        "xuenian|学年" => "require",
        "shengao|身高" => "require",
        "tizhong|体重" => "require",
        "feihuoliang|肺活量" => "require",
        "lrun|1000/800米" => "require",
        "mrun|400米" => "require",
        "srun|8*50米" => "require",
        "yinti|引体向上" => "require",
        "yangwo|仰卧起坐" => "require",
        "qianqu|坐位体前屈" => "require",
        "run50|50米" => "require",
        "liding|立定跳" => "require",
        "tiaosheng|跳绳" => "require",
        "status|测试状态" => "require",
    ];
}
