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
  'controller' => 'StudentInfo',
  'title' => '学生信息',
  'form' => 
  array (
    0 => 
    array (
      'title' => '学号',
      'name' => 'account',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'sort' => '1',
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
    4 => 
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
    2 => 
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
    3 => 
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
    6 => 
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
    7 => 
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
    8 => 
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
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    1 => 
    array (
      'name' => 'account',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学号',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'xueyuan',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学院',
      'extra' => '',
    ),
    3 => 
    array (
      'name' => 'zhuanye',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '专业',
      'extra' => '',
    ),
    4 => 
    array (
      'name' => 'nianji',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '年级',
      'extra' => '',
    ),
    5 => 
    array (
      'name' => 'banji',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '班级',
      'extra' => '',
    ),
    6 => 
    array (
      'name' => 'fudaoyuan',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '辅导员',
      'extra' => '',
    ),
    7 => 
    array (
      'name' => 'jiguan',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '籍贯',
      'extra' => '',
    ),
    8 => 
    array (
      'name' => 'dizhi',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '家庭地址',
      'extra' => '',
    ),
  ),
  'auto_timestamp' => '1',
  'validate' => '1',
);
