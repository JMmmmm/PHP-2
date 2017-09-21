<?php
    include_once 'config.php';
    include_once 'models/view.php';
    include_once 'models/classProductsBody.php';
  
    $tittle = 'Описание товара';
    
    $idAdrProduct = $_GET["idAdr"];
    $getPage = new classProductsBody($idAdrProduct, $connectMySQL);
    
    $page = view_include ('template/v_productMainPage.php', array('tittle' => $tittle, 'content' => $getPage));
    
    echo $page;
    
?>
