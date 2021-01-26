<?php 
    session_start();

    include_once "model/mLogin.php"; //memanggil mLogin.php

    class cLogin {
        public $mLogin;

        public function __construct() //konstruktor
        {
            $this->mLogin = new mLogin(); //pemanggilan class
        }

        public function cekLogin(){
            if (isset($_SESSION['status'])) {
                if($_SESSION['status'] == 'login'){
                    return 'login';
                }
            } else{
                return 'logout';
            }
        }

        public function proses(){ //method proses
            $_SESSION['status'] = $this->mLogin->getLogin();
            $status = $_SESSION['status'];
            if($status == 'login'){
                include 'view/vIndex.php';
            }else{
                include 'view/vLogin.php';
            }
        }
    }