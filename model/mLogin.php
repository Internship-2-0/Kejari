<?php
    session_start();

    class mLogin {
        public function getLogin() {
            include 'koneksi.php';
            if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
                $username = $_REQUEST['username'];
                $Admin = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$username'");
                $dataAdmin = mysqli_fetch_array($Admin);
                if ($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin'){
                    return 'login';
                }else{
                    return '>>> invalid user';
                }
            }
        }
    }