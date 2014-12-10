<?php
namespace Debugging;

class Debugging {

    public static function debug() {
        ob_start();
        echo "<div><pre>";
        foreach (func_get_args() as $arg) {
            print_r($arg);
        }
        echo "</div></pre>";
        ob_end_flush();
    }

}