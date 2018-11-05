<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
  ),
  'create_config' => true,
  'controller' => 'Work',
  'title' => '就业信息提交',
  'form' => 
  array (
    0 => 
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
    2 => 
    array (
      'title' => '目前就业单位',
      'name' => 'danwei',
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
      'title' => '工作性质',
      'name' => 'xingzhi',
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
    1 => 
    array (
      'title' => '工资待遇',
      'name' => 'daiyu',
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
      'title' => '理想就业方向',
      'name' => 'fangxiang',
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
      'title' => '意向工作地区',
      'name' => 'yixiang',
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
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    25 => 
    array (
      'name' => 'account',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'not_null' => '1',
      'key' => '1',
      'comment' => '学号',
      'extra' => '',
    ),
    26 => 
    array (
      'name' => 'danwei',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '目前就业单位',
      'extra' => '',
    ),
    27 => 
    array (
      'name' => 'xingzhi',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '工作性质',
      'extra' => '',
    ),
    28 => 
    array (
      'name' => 'daiyu',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '工资待遇',
      'extra' => '',
    ),
    29 => 
    array (
      'name' => 'fangxiang',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '理想就业方向',
      'extra' => '',
    ),
    30 => 
    array (
      'name' => 'yixiang',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '意向工作地区',
      'extra' => '',
    ),
  ),
  'model' => '1',
);
