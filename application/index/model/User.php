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
use traits\model\SoftDelete;

class User extends Model
{
  // 设置当前模型对应的完整数据表名称
    protected $table = 'tp_info_s';


    // 新增自动完成列表
    protected $insert = [
        'login_time'=> NULL, //新增时登录时间应该为NULL,因为刚创建
        'login_count' => 0, //原因同上,刚创建肯定没有登录过
    ];
    // 更新自动完成列表
    protected $update = [];
    // 是否需要自动写入时间戳 如果设置为字符串 则表示时间字段的类型
    protected $autoWriteTimestamp = true; //自动写入
    // 创建时间字段
    protected $createTime = 'create_time';
    // 更新时间字段
    protected $updateTime = 'update_time';
    // 时间字段取出后的默认时间格式
    protected $dateFormat = 'Y年m月d日';

    //密码修改器
    public function setPasswordAttr($value)
    {
        return md5($value);
    }

    //登录时间获取器
    public function getLoginTimeAttr($value)
    {
        return date('Y/m/d H:i', $value);
    }
}
