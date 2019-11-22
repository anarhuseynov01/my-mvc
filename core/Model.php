<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/21/2019
 * Time: 1:10 AM
 */


if(!defined("MY_SCRIPT")){
    exit;
}

class Model {
    public $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.'',DB_USERNAME,DB_PASSWORD);
    }
}