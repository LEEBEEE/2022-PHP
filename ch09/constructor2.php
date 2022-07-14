<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        public function printFruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }

        public function setName($name)
        {
            $this->name = $name;
            return $this;
        }

        public function setColor($color)
        {
            $this->color = $color;
            return $this;
        }

        public function setPrice($price)
        {
            $this->price = $price;
            return $this;
        }
    }

    $apple1 = (new Fruit)->setName("사과");
    $apple1->printFruit();

    $apple2 = (new Fruit)
                ->setColor("파란")
                ->setPrice(10000);
    $apple2->printFruit();

    $banana1 = new Fruit;
    $banana1->setColor("노란");
    $banana1->setPrice(20000)->setName('바나나')->printFruit();

    /* -----------------------------------------------------

        멤버 필드 : 변수, 상수
        클래스 : 멤버 필드와 메소드로 구성될 수 있는...
        객체를 만드는 데 사용되는 설계도?
        객체, 인스턴스 : 비슷
        프로퍼티 : 속성 멤버필드...
        메소드 : function

    ----------------------------------------------------- */