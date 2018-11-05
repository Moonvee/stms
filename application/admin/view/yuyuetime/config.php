<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
  ),
  'create_config' => true,
  'controller' => 'Yuyuetime',
  'title' => '预约时间管理',
  'form' => 
  array (
    2 => 
    array (
      'title' => '预约状态',
      'name' => 'auth',
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
  'model' => '1',
  'auto_timestamp' => '1',
);
