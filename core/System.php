<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/19/2019
 * Time: 1:03 AM
 */

Class System {
    protected $controller;
    protected $method;
    protected $controllerPath = 'Application/Controllers';
    public function __construct()
    {
        if(isset($_GET['act'])){
            $url = explode("/",filter_var(rtrim($_GET['act'],'/'),FILTER_SANITIZE_URL));
            $this->controller = $url[0];
            if(isset($url[1])){
                $this->method = $url[1];
            }else {
                $this->method = 'index';
            }
        }else {
            $this->controller = 'main';
            $this->method = 'index';
        }


        if(file_exists($this->controllerPath.'/'.$this->controller.'.php')){

            echo 'yes';
//            require_once $this->controllerPath.'/'.$this->controller.'.php';
//            $startPage = new $this->controller;
        }
    }
}