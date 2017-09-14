<?php
	//1. Получение с базы данных: Названия товара и индекса
	//2. Для каждого товара из большой картинки формируется маленькая. Цикл -> Генерация картинки
	//3. Вывод внешнего вида класса товаров для каталога

    class classProductsHead {
       
        var $numImg;
        var $nameImg;
        var $connectMySQL;
        var $nameProduct;
        
        public function __construct($numImg, $nameImg, $connectMySQL) {
            $this->numImg = $numImg;
            $this->nameImg = $nameImg;
            $this->connectMySQL = $connectMySQL;
            $this->getNameHeadProduct();
            $this->makeHeadProduct();
        }
                      
        public function getNameHeadProduct () {
            
            $getHeadProduct = "SELECT id, name FROM products";
            $headProduct = mysqli_query($this->connectMySQL, $getHeadProduct);     
            
            while ($oop = mysqli_fetch_array($headProduct)) {
                 if ($oop["id"] == $this->numImg) {
                     //$this->makeHeadProduct();
                     $this->nameProduct = $oop["name"];
                 }
            }
        }
        
        public function makeHeadProduct() {
            echo "<a href='productMainPage.php?idAdr=".$this->nameImg."'>";
            echo "<img src='".HEADIMG.$this->nameImg."'>";
            echo "<p>".$this->nameProduct."</p>";
            echo "</a>";
        } 
    }
    
    
    
    
?>