<?php
  include_once 'config.php';
  include_once 'models/classProductsBody.php';
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Описание товара</title>
</head>
<body>
  <a href="indexCatalog.php"> Вернуться в каталог </a>
  <div>
    <?php 
        $idAdrProduct = $_GET["idAdr"];
        $getPage = new classProductsBody($idAdrProduct, $connectMySQL);
    ?>
  </div>
</body>
</html>