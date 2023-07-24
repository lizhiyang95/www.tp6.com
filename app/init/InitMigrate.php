<?php

namespace app\init;

use think\facade\Console;

class InitMigrate
{
    public static function init()
    {
        try {// 执行数据库迁移命令
            echo "数据库初始化开始" . PHP_EOL;
            Console::call('migrate:run');
            echo "数据库初始化成功" . PHP_EOL;
        } catch (\Exception $e) {
            echo "数据库初始化失败" . $e->getMessage() . PHP_EOL;
        }
    }
}