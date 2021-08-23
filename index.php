<?php

    include "config/koneksi.php";
    include "library/oop.php";
    require_once 'templates/header.php';
?>

<?php
    switch(@$_GET['page']){
        case 'home';
        include 'home.php';
        break;
        
        case 'buku';
        include 'buku/buku.php';
        break;
    }
?>

<?php require_once 'templates/footer.php'; ?>