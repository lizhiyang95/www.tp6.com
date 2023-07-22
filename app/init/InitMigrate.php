<?php

namespace app\init;

use think\App;

class InitMigrate
{
    public static function init()
    {
        $dir = (new App())->getRootPath();
//        $res = exec("php {$dir}think migrate:run");
//        $res = shell_exec("date");

        echo "开始";
        $cmd = " php {$dir}think migrate:run";
        echo $cmd;
//        $res = shell_exec($cmd);
//        echo $res;
//        echo self::class . "初始化结果" . $res;
    }
}