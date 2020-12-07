<?php

    interface Milldeware {
        public static function handle(Closure $next);
    }

    class VerfiyCsrfToekn implements Milldeware {

        public static function handle(Closure $next)
        {
            // $next();
            echo '验证csrf Token <br>';
            $next();
            // exit;
        }
    }

    class VerfiyAuth implements Milldeware {

        public static function handle(Closure $next)
        {
            echo '验证是否登录 <br>';
            $next();
            // exit;
        }
    }

    class SetCookie implements Milldeware {
        public static function handle(Closure $next)
        {
            $next();
            echo '设置cookie信息！<br>';
            // $next();
            // exit;
        }
    }

    $handle = function() {
        echo '当前要执行的程序!<br>';
        // exit;	
    };

    $pipe_arr = [
        'VerfiyCsrfToekn',
        'VerfiyAuth',
        'SetCookie',
    ];

    $callback = array_reduce($pipe_arr,function($stack,$pipe) {
        return function() use($stack,$pipe){
            return $pipe::handle($stack);
        };
    },$handle);
    echo "<pre/>";
    print_r($callback);
    call_user_func($callback);