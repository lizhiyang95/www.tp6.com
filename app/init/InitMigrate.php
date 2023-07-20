<?php

namespace app\init;

class InitMigrate
{
    public static function init()
    {
        $res = exec('php think migrate:run');
        echo self::class . "初始化结果" . $res;
    }
}