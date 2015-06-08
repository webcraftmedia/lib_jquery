<?php
namespace LIB;
class lib_jquery extends \LIB\lib_js{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return \SYSTEM\WEBPATH(new \SYSTEM\PLIB(),'/jquery/lib/jquery-2.1.4.min.js');}
    public static function version(){
        return '2.1.4';}
}
