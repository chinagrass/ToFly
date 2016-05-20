<?php
/**入口文件*/
define('BASEDIR',__DIR__);
include BASEDIR.'/Itofly/Loader.php';
spl_autoload_register('\\Itofly\\loader::autoload');


