<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
    1 => 'delete',
    2 => 'recyclebin',
    3 => 'saveorder',
  ),
  'create_config' => true,
  'controller' => 'WorkInfo',
  'title' => '就业信息管理',
  'form' => 
  array (
    2 => 
    array (
      'title' => '学号',
      'name' => 'account',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'require' => '1',
      'validate' => 
      array (
        'datatype' => '*',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    3 => 
    array (
      'title' => '目前工作单位',
      'name' => 'danwei',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    4 => 
    array (
      'title' => '工作性质',
      'name' => 'xingzhi',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    5 => 
    array (
      'title' => '薪资待遇',
      'name' => 'daiyu',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    6 => 
    array (
      'title' => '理想就业方向',
      'name' => 'fangxiang',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    7 => 
    array (
      'title' => '意向工作地点',
      'name' => 'yixiang',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
  ),
  'auto_timestamp' => '1',
);
