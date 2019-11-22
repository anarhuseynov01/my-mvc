<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/20/2019
 * Time: 11:52 PM
 */

if(!defined("MY_SCRIPT")){
    exit;
}

class Controller {
    public function render($file,$params = []){
        return View::render($file,$params);
    }

    public function model($file){
        if(file_exists(MODEL_PATH.'/'.$file.'.php')){
            require_once MODEL_PATH.'/'.$file.'.php';
            if(class_exists($file)){
                return new $file;
            }else {
                exit();
            }
        }else {
            exit();
        }

    }
}