<?php
return array(
	//'配置项'=>'配置值'

    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'     =>  array('Home'),

    // 默认模块
    'DEFAULT_MODULE'        =>  'Home',

    // 默认模板文件后缀
    'TMPL_TEMPLATE_SUFFIX'  =>  '.tpl',

    // URL访问模式
    'URL_MODEL'             =>  2,

    // 默认模板主题名称
    'DEFAULT_THEME'         =>  'Default',

    //PDO数据库链接
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'crm',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'crm_',    // 数据库表前缀

    //拒绝强制小写
    'DB_PARAMS'             =>array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
);