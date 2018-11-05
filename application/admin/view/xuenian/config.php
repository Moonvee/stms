<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
    1 => 'delete',
    2 => 'recyclebin',
  ),
  'create_config' => true,
  'controller' => 'Xuenian',
  'title' => '学年管理',
  'form' => 
  array (
    2 => 
    array (
      'title' => '学年',
      'name' => 'xuenian',
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
