<?php
	//1. Получение id из каталога товаров
	//2. Формирование внешнего вида (см. piggy)
    
    class classProductsBody {
        var $idAdrProduct;
        var $connectMySQL;
        
        var $productName;
        var $productView;
        var $productCharacteristic;
        
        
        function __construct($idAdrProduct, $connectMySQL) {
            $this->idAdrProduct = $idAdrProduct;
            $this->connectMySQL = $connectMySQL;
            $this->takeProductData();
            $this->makeProductPage();
        }
        
        function takeProductData() {
            $getHeadProduct = "SELECT * FROM products";
            $headProduct = mysqli_query($this->connectMySQL, $getHeadProduct);
            $idProduct = substr($this->idAdrProduct, 0, -4);//поменять
            
            while ($oop = mysqli_fetch_array($headProduct)) {
                if ($idProduct == $oop["id"]) {
                    $this->productName = $oop["name"];
                    $this->productView = $oop["view"];
                    $this->productCharacteristic = $oop["characteristic"];
                }
            }
        }
        
        function makeProductPage() {
            echo "<img src='".BODYIMG.$this->idAdrProduct."'><br><br>";
            echo $this->productName."<br><br>";
            echo $this->productView."<br><br>";
            echo $this->productCharacteristic."<br><br>";
        }
        
    }
    
    
?>