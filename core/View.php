<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/20/2019
 * Time: 12:09 AM
 */

Class View {
    public static function render($file,$params = []){
        if(file_exists(VIEW_PATH.'/'.$file.'.php')){
            require_once VIEW_PATH.'/'.$file.'.php';
        } else {
            exit();
        }
    }
}