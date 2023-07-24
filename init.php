<?php

namespace think;

use app\init\InitMigrate;

// 加载composer自动加载基础文件
require __DIR__ . '/vendor/autoload.php';

new App();
InitMigrate::init();