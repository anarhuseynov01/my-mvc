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

    public function __construct()
    {
        if(isset($_GET['act'])){
            $url = explode("/",filter_var(rtrim($_GET['act'],'/'),FILTER_SANITIZE_URL));
            $this->controller = ucfirst($url[0]);
            array_shift($url);

            if(isset($url[0])){
                $this->method = $url[0];
                array_shift($url);
            }else {
                $this->method = 'index';
            }
        }else {
            $this->controller = 'Main';
            $this->method = 'index';
        }



        if(file_exists(CONTROLLER_PATH.'/'.$this->controller.'.php')){
            require_once CONTROLLER_PATH.'/'.$this->controller.'.php';
            if(class_exists($this->controller)){
                if($this->controller === 'Main' && $this->method === 'index'){
                    $url = [];
                }
                $this->controller = new $this->controller;
                if(method_exists($this->controller,$this->method)){
                    call_user_func_array([$this->controller,$this->method],$url);
                }else {
                    $this->method = 'index';
                    call_user_func_array([$this->controller,$this->method],$url);
                }
            }
        }else {
                $this->controller = 'Main';
                $this->method = 'index';
                $arg = [];
                require_once CONTROLLER_PATH.'/'.$this->controller.'.php';
                $this->controller = new $this->controller;
                call_user_func_array([$this->controller,$this->method], $arg);
        }

    }
}