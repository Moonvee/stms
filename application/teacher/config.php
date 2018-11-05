<?php 
 /**
 * stms [a web test ms based ThinkPHP5]
 *
 * @author    moonvee
 * @link      
 * @copyright 
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

use \think\Request;

$basename = Request::instance()->root();
if (pathinfo($basename, PATHINFO_EXTENSION) == 'php') {
    $basename = dirname($basename);
}

return [
    // 模板参数替换
    'view_replace_str' => [
        '__ROOT__'   => $basename,
        '__STATIC__' => $basename . '/static/index',
        '__INDEX__'  => $basename . '/static/index',
        '__ADMIN__'  => $basename . '/static/admin',
        '__LIB__'    => $basename . '/static/admin/lib',
        '__IMG__'    => $basename . '/static/admin/images',
    ],

    // traits 目录
    'traits_path'      => APP_PATH . 'admin' . DS . 'traits' . DS,

    // 异常处理 handle 类 留空使用 \think\exception\Handle
    'exception_handle' => '\\TpException',

    'template' => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'            => 'Think',
        // 模板路径
        'view_path'       => '',
        // 模板后缀
        'view_suffix'     => '.html',
        // 预先加载的标签库
        'taglib_pre_load' => 'app\\admin\\taglib\\Tp',
        // 默认主题
        'default_theme'   => '',
    ],
];
