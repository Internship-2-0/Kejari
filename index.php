<?php
include_once "controller/cLogin.php";

$cLogin = new cLogin();
$cekLogin = $cLogin->cekLogin();
if($cekLogin == 'login'){
    include 'view/vIndex.php';
} else {
    $cLogin->proses();
}