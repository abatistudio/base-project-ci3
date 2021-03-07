<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('mysqlPassword'))
{   
    function mysqlPassword($string){
        $pass = strtoupper(sha1(sha1($string, true)));
        $pass = '*' . $pass;
        return $pass;
    } 
}
