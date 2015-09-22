<?php 
/**
 * 初始化文件
 */

// 设置页面显示编码
header('Content-Type:text/html;charset=utf-8');

// 时区设置
date_default_timezone_set('Asia/Shanghai');

// 错误报告
error_reporting(-1);

// 网站根目录
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');

// 载入includes目录下的文件
require ROOT_PATH . 'includes/config.php';
require ROOT_PATH . 'includes/functions.php';