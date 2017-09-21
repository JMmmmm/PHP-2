<?php
	//1. include classHeadProducts
	//2. Заголовок Каталог наших товаров
	//3. Цикл вывода объектов класса из Базы данных
	
    include_once 'config.php';
    include_once 'models/view.php';
    include_once 'models/classGenerateHeadFromBody.php';
    include_once 'models/classProductsHead.php';
    
    
    
    $tittle = "Каталог наших товаров";
    //echo $tittle;
    
    $contentImg = view_include ('template/v_contentImg.php', array ('arrayBodyImg' => $arrayBodyImg, 'arrayHeadImg' => $arrayHeadImg, 'connectMySQL' => $connectMySQL));
    
    $page = view_include ('template/v_indexCatalog.php', array('tittle' => $tittle, 'contentImg' => $contentImg));
    
    echo $page;
    
    
    
?>