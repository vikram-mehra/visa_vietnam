<?php

// app/Helpers/info_helper.php
use CodeIgniter\CodeIgniter;

/**
 * Returns CodeIgniter's version.
 */
function ci_version(): string
{
    return CodeIgniter::CI_VERSION;
}
/* Debugger function */
if (!function_exists('pre')) {
    function pre($var, $strict = false)
    {
        if ($var !== null) {
            if (!$strict && (is_array($var) || is_object($var))) {
                echo "<pre>";
                print_r($var);
                echo "</pre>";
            } else {
                echo $var;
            }
        } else {
            var_dump($var);
        }
        die;
    }
}