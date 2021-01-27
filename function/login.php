<?php

    function cekLogin(){
        include "koneksi.php";
        if (isset($_POST['login'])) {
            $ambil = $koneksi->query("SELECT * FROM admin WHERE username = '$_POST[username]' AND password = '$_POST[password]' ");
            $cocok = $ambil->num_rows;
            if ($cocok == 1) {
                $_SESSION['admin'] = $ambil->fetch_assoc();
    
                echo "<script> alert('Login Sukses') </script>";
                echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
            }
            else {
                echo "<script> alert('Login Gagal') </script>";
                echo "<meta http-equiv='refresh' content='1; url=../pages/login.php'>";
            }
        }
    }