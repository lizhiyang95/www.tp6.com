<?php

namespace app\controller;

use app\BaseController;
use app\Request;
use think\facade\Db;

class Index extends BaseController
{
    public function index(Request $request)
    {
        //return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">16载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
        //$uid  = $request->route('uid');
        //$user = Db::table('users')->where(" uid = $uid ")->find();
        //var_dump($user);

    }

    public function hello1()
    {
        var_dump($_SERVER);

        $a = input('test/s', 'default');
        //$a = "<script>alert(123);</script>";

        $a1 = htmlspecialchars($a);

        //dump($a1);
        //echo  $a;
        //$a = "1'"()&%<acx><ScRiPt >uYm7(9888)</ScRiPt>"

        return view('index/hello1', ['test' => $a1]);
    }

    // 简单下载文件
    public function downloadExistsFileBySimple()
    {
        $file = 'a.txt';

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            readfile($file);
        }
    }

    // 下载不存在的文件
    public function downloadNoExistsFile()
    {
        $file   = 'b.txt';
        $handle = fopen($file, 'w');

        // 设置文件头，告诉浏览器该文件是可下载的
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));

        // 每秒写入当前时间戳到文件
        $count = 0;
        while ($count < 10) {
            $count++;
            $timestamp = time();
            fwrite($handle, $timestamp . PHP_EOL);
            fflush($handle);

            // 将写入的内容立即输出到浏览器
            echo $timestamp . PHP_EOL;

            // 刷新输出缓冲区，确保内容被发送到浏览器
            ob_flush();
            flush();

        }

        fclose($handle);
    }

    // 下载存在的文件
    public function downloadIsExistsFile()
    {
        $file = fopen('a.txt', 'r'); // 打开文件以供读取

        if ($file) {
            header('Content-Type: text/plain');
            header('Content-Disposition: attachment; filename="a.txt"');
            while (($line = fgets($file)) !== false) {
                echo $line; // 输出当前行到浏览器
                flush(); // 刷新输出缓冲区
                ob_flush(); // 刷新输出缓冲区
            }

            fclose($file); // 关闭文件
        }

    }
}
