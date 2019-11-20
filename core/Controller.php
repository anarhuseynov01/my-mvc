<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/20/2019
 * Time: 11:52 PM
 */

class Controller {
    public function render($file,$params = []){
        return View::render($file,$params);
    }
}