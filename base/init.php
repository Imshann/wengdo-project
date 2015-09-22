<?php 
/**
 * 初始化文件
 */

// 网站根目录
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');

// 载入配置文件
require ROOT_PATH . 'includes/config.php';

// 设置页面显示编码
header("Content-Type:text/html;charset={$encoding}");

// 时区设置
date_default_timezone_set( $timezone );

// 错误报告
error_reporting( $error );

// 载入自定义函数库
require ROOT_PATH . 'includes/functions.php';