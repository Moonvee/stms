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
  'controller' => 'TecTest',
  'title' => '测试管理',
  'form' => 
  array (
    1 => 
    array (
      'title' => 'id',
      'name' => 'id',
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
    2 => 
    array (
      'title' => '教师工号',
      'name' => 'tid',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search' => '1',
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
      'title' => '测试日期',
      'name' => 'riqi',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search' => '1',
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
      'title' => '节次',
      'name' => 'jieci',
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
      'title' => '人数',
      'name' => 'renshu',
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
      'title' => '测试状态',
      'name' => 'status',
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
  'model' => '1',
  'auto_timestamp' => '1',
  'validate' => '1',
);
