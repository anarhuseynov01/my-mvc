<?php

if(!defined("MY_SCRIPT")){
    exit;
}

class Helper {
    public static function redirect($url){
        if($url){
            if(!headers_sent()){
                header("LOCATION:". $url);
        } else {
                echo '<script>location.href ="'.$url.'"</script>';
            }
        }

    }

    public static function clean($text){
        $dangerword = ["insert","update","delete","union","*"];
        $text = str_replace($dangerword,"",$text);
        $text = strip_tags($text);
        $text =trim($text);
        return $text;
    }

}
