<?php 
    //task 5
    /*class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    $a1 = new A();
    $a2 = new A();
    $a1->foo(); //1
    $a2->foo(); //2
    $a1->foo(); //3
    $a2->foo();*/ //4
    // инкремент икса в классе A с каждым вызовом функции перезаписывается 
    
    
    //task 6
    class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    
    class B extends A {
    }
    
    $a1 = new A();
    $b1 = new B();
    $a1->foo(); //1
    $b1->foo(); //1
    $a1->foo(); //2
    $b1->foo(); //2
    // Класс B включает в себя стартовое значение класса A, и при изменении класса A, инкремент в классе B не перезаписывается
    
?>