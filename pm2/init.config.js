module.exports = {
    apps: [
        {
            name: 'init',
            script: '../init.php',//这里相对你命令执行时所在目录
            args: '',
            instances: 1,
            autorestart: false,
            watch: false,
            interpreter: 'D:\\soft\\phpEnv\\php\\php-8.2\\php',
            log_date_format: 'YYYY-MM-DD HH:mm:ss',
            out_file: './log/init_out.log',
            error_file: './log/init_error.log',
            max_memory_restart: '500M',
            env: {
                NODE_ENV: 'development',
            },
            env_production: {
                NODE_ENV: 'production',
            },
        },
    ]
};