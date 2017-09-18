<?php 
    abstract class abstractProduct {
        abstract protected function getPrice();
        abstract protected function getAmount();
        
        public function sum() {
            $sum = $this->getAmount()*$this->getPrice();
            echo "С вас: ".$sum." рублей<br>";
        }
    }
    
    class digitalProduct extends abstractProduct{
        private $price;
        private $amount;
        
        public function __construct($price, $amount){
            $this->price = $price;
            $this->amount = $amount;
            $this->sum();
        }
        
        protected function getPrice(){
            return $this->price / 2;
        }
        
        protected function getAmount(){
            return $this->amount;
        }
    }
    
    class pieceProduct extends abstractProduct{
        private $price;
        private $amount;
        
        public function __construct($price, $amount){
            $this->price = $price;
            $this->amount = $amount;
            $this->sum();
        }
        
        protected function getPrice(){
            return $this->price;
        }
        
        protected function getAmount(){
            return $this->amount;
        }
    }
    
    class weightProduct extends abstractProduct{
        private $price;
        private $amount;
        
        public function __construct($price, $amount){
            $this->price = $price;
            $this->amount = $amount;
            $this->sum();
        }
        
        protected function getPrice(){
            return $this->price;
        }
        
        protected function getAmount(){
            return $this->amount * 0.9;
        }
    }
    
    $oop = new digitalProduct(30, 4);
    $oop2 = new pieceProduct(30, 4);
    $oop3 = new weightProduct(30, 4);
?>