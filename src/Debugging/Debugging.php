<?php
namespace Debug;

class Debug {

    public static function flush() {
        ob_start();
        foreach (func_get_args() as $arg) {
            echo '<div><pre>', print_r($arg, true), '</pre></div>';
        }
        ob_end_flush();
    }

}