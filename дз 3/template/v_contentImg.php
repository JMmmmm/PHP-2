<?php 

//генерация маленьких картинок из больших
foreach ($arrayBodyImg as $imgBody) {
    classGenerateHeadFromBody::changeImage(BODYIMG.$imgBody, HEADIMG.$imgBody, substr($imgBody, -3));
}

//генерация меню каталога
foreach ($arrayHeadImg as $imgName) {
    $imgId = substr($imgName, 0, -4);
    $makeMenuImg = new classProductsHead($imgId, $imgName, $connectMySQL);
}

?>