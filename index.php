<?php

/**
 *入口文件
 *1.定义常量
 *2.加载函数库
 *3.启动框架
 */
//当前框架所在根目录
define('MVC',realpath('./'));
//定义框架核心文件所处目录
define('CORE',MVC.'/core');
//项目文件如控制器 所处目录
define('APP',MVC.'/app');
//是否开启调错模式
define('DEBUG',true);
//
define('MODULE','app');
if(DEBUG){
	ini_set('display_error','On');
}
else
{
	ini_set('display_error','Off');
}
 //加载函数库
 include CORE.'/common/function.php';
 //加载框架核心文件
 include CORE.'/mvc.php';

 //引入类
 spl_autoload_register('\core\mvc::load');

 \core\mvc::run();