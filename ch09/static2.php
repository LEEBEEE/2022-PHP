<?php
    class Computer {
        public static $brand;
        public $price;

        function __construct()
        {
            $this -> init();
        }

        function init($brand) {
            self::$brand = $brand;
        }

        function myPrint() {
            print "컴퓨터 브랜드는" . self::$brand .", 가격은 {$this->price}원입니다. <br>";
        }

        static function myStaticPrint() {
            // print "컴퓨터 브랜드는" . self::$brand .", 가격은 {$this->price}원입니다. <br>";
            // static함수에서는 static인 멤버필드만 사용할 수 있다 
            print "컴퓨터 브랜드는" . self::$brand .", 가격은 원입니다. <br>";
        }

        public static function setBrand($brand)
        {
            // $this->brand = $brand;
            self::$brand = $brand;
        }
    }

    Computer::$brand = "LG";
    Computer::setBrand("ASUS");
    
    $c = new Computer; 
    $c->price = 10000;
    // $c->setBrand("Apple"); // $c2도 같이 바뀜
    // $c->brand = "Apple"; // 안됨
    
    $c2 = new Computer;
    $c2->price = 20000;
    
    $c->myPrint();
    $c2->myPrint();
    
    Computer::$brand = "Samsung";
    
    $c->myPrint();
    $c2->myPrint();

    Computer::myStaticPrint();