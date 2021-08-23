<?php

$con = mysqli_connect('localhost', 'root', '', 'db_katalogperpus');

if(!$con){
    echo 'Not Connected Database' .mysqli_connect_error();
}

?>