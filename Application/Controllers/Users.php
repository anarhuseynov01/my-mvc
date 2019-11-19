<?php
/**
 * Created by PhpStorm.
 * User: anar_huseynov ( ahuseynov1995@gmail.com )
 * Date: 11/19/2019
 * Time: 1:28 AM
 */

class Users {
    public function index(){
        echo 'Users page...';
    }

    public function getuser($id = 0){

        if(empty($id)){
            exit;
        } else {
            echo $id;
        }



    }

    public function userslist(){
        echo 'Users list...';
    }
}