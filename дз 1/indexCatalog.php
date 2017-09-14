<?php
	//1. include classHeadProducts
	//2. Заголовок Каталог наших товаров
	//3. Цикл вывода объектов класса из Базы данных
	
    include_once 'config.php';
    include_once 'models/classGenerateHeadFromBody.php';
    include_once 'models/classProductsHead.php';

    $tittle = "Каталог наших товаров<br><br>";
    echo $tittle;
    
    
    
    //генерация маленьких картинок из больших
    foreach ($arrayBodyImg as $imgBody) {
        classGenerateHeadFromBody::changeImage(BODYIMG.$imgBody, HEADIMG.$imgBody, substr($imgBody, -3));
    }
    
    //генерация меню каталога
    foreach ($arrayHeadImg as $imgName) {
        $imgId = substr($imgName, 0, -4);//поменять
        $makeMenuImg = new classProductsHead($imgId, $imgName, $connectMySQL);  
    }
    
?>