<?php 
    include_once "model/mLogin.php"; //memanggil mLogin.php

    class cLogin {
        public $mLogin;

        public function __construct() //konstruktor
        {
            $this->mLogin = new mLogin(); //pemanggilan class
        }

        public function proses(){ //method proses
            $result = $this->mLogin->getLogin();

            if($result == 'login'){
                include 'view/vIndex.php';
            }else{
                include 'view/vLogin.php';
            }
        }
    }