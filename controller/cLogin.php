<?php 
    session_start();

    include_once "model/mLogin.php"; //memanggil mLogin.php

    class cLogin {
        public $mLogin;

        public function __construct() //konstruktor
        {
            $this->mLogin = new mLogin(); //pemanggilan class
        }

        public function cekLogin(){ //method pengecekan login
            if (isset($_SESSION['status'])) {
                if($_SESSION['status'] == 'login'){
                    include 'view/vMenu.php';
                }
            } else{
                $_SESSION['status'] = $this->mLogin->getLogin();
                if($_SESSION['status'] == 'login'){
                    include 'view/vMenu.php';
                }else{
                    include 'view/vLogin.php';
                }
            }
        }

        public function logout(){
            $_SESSION['status'] == 'logout';
            session_destroy();
        }
    }