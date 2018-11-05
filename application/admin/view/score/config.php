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
  'controller' => 'ObjPe',
  'title' => '',
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
      'name' => 'sid',
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
      'title' => '学年',
      'name' => 'xuenian',
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
    4 => 
    array (
      'title' => '身高',
      'name' => 'shengao',
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
      'title' => '体重',
      'name' => 'tizhong',
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
      'title' => '肺活量',
      'name' => 'feihuoliang',
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
      'title' => '1000/800米',
      'name' => 'lrun',
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
      'title' => '400米',
      'name' => 'mrun',
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
      'title' => '8*50米',
      'name' => 'srun',
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
    10 => 
    array (
      'title' => '引体向上/仰卧起坐',
      'name' => 'yintiyangwo',
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
    
    11 => 
    array (
      'title' => '坐位体前屈',
      'name' => 'qianqu',
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
    12 => 
    array (
      'title' => '50米',
      'name' => 'run50',
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
    13 => 
    array (
      'title' => '立定跳',
      'name' => 'liding',
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
    14 => 
    array (
      'title' => '跳绳',
      'name' => 'tiaosheng',
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
    15 => 
    array (
      'title' => '测试状态',
      'name' => 'status',
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
    16 => 
    array (
      'title' => '测试时间',
      'name' => 'cssj',
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
    17 => 
    array (
      'title' => '免测编号',
      'name' => 'mcbh',
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
  ),
  'validate' => '1',
);
