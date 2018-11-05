<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'forbid',
    1 => 'resume',
  ),
  'create_config' => true,
  'controller' => 'Muban',
  'title' => '模板生成',
  'form' => 
  array (
    0 => 
    array (
      'title' => '',
      'name' => '',
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
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    0 => 
    array (
      'name' => '',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '',
      'extra' => '',
    ),
  ),
  'model' => '1',
);
