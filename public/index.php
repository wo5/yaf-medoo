<?php
static $_db = NULL;
define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf\Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();