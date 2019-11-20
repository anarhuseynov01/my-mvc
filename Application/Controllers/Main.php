<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/19/2019
 * Time: 1:21 AM
 */


Class Main extends Controller {
    public function index(){


        $this->render('home',['ad'=>'Anar','soyad'=>'Huseynov']);

    }
}