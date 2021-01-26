<?php

    class mLogin {
        public function getLogin() {
            include 'koneksi.php';
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $Admin = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$username'");
                $dataAdmin = mysqli_fetch_array($Admin);
                if ($_POST['username']== $dataAdmin['username'] && $_POST['password']==$dataAdmin['password']){
                    return 'login';
                }else{
                    return '>>> invalid user';
                }
            }
        }
    }