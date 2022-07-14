<?php
    class Fruit {
        private $name;
        private $color;
        private $price;
        // private한 멤버필드에 값 넣는 법 : 1)생성자를 통해 2)setter메소드를 통해
        // private한 멤버필드에 값 빼는 법 : 1)getter메소드를 통해
        
        function __construct($name=null, $color=null, $price=null) {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        public function printFruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }
    }

    $apple = new Fruit(null, "Red");
    $banana = new Fruit("Banana", "yellow", 500);

    $apple->printFruit();
    $banana->printFruit();