<?php 
    CONST HEADIMG = "img/products/head/";
    CONST BODYIMG = "img/products/body/";
    $connectMySQL = mysqli_connect("localhost", "root", "", "image_table");
    $arrayHeadImg = array_slice(scandir(HEADIMG),2);
    $arrayBodyImg = array_slice(scandir(BODYIMG),2);
    
    
    
?>