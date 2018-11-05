<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
    1 => 'forbid',
    2 => 'resume',
    3 => 'delete',
    4 => 'recyclebin',
    5 => 'saveorder',
  ),
  'create_config' => true,
  'controller' => 'Info',
  'title' => '个人信息',
  'form' => 
  array (
    1 => 
    array (
      'title' => 'ID',
      'name' => 'id',
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
      'title' => '学院',
      'name' => 'xueyuan',
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
    4 => 
    array (
      'title' => '专业',
      'name' => 'zhuanye',
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
    5 => 
    array (
      'title' => '年级',
      'name' => 'nianji',
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
    6 => 
    array (
      'title' => '班级',
      'name' => 'banji',
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
    7 => 
    array (
      'title' => '辅导员',
      'name' => 'fudaoyuan',
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
    8 => 
    array (
      'title' => '籍贯',
      'name' => 'jiguan',
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
    9 => 
    array (
      'title' => '家庭地址',
      'name' => 'dizhi',
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
  ),
);
