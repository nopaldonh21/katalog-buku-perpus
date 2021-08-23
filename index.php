<?php

    include "config/koneksi.php";
    include "library/oop.php";
    require_once 'templates/header.html';

    switch(@$_GET['page']){
        case 'home';
        include 'home.php';
        break;
        
        case 'buku';
        include 'buku/buku.php';
        break;
    }
    
    require_once 'templates/footer.html';
    
?>