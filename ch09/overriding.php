<?php
    class Animal {
        public function crying()
        {
            print "동물이 운다. <br>";
        }
    }

    class Dog extends Animal {
        function crying()
        {
            print "강아지가 멍멍. <br>";
        }
        function grandFatherCrying(){
            parent::crying();
        }
    }

    class Chiwawa extends Dog {
        function crying()
        {
            parent::grandFatherCrying();
            print "치와와가 왕왕. <br>";
        }
        
    }
    
    class Cat extends Animal {
        function crying()
        {
            print "고양이가 앩. <br>";
        }
    }

    class Human {
        function speak() {
            print "사람이 말한다";
        }
    }

    function doCry($ani) {
        if(method_exists($ani, "crying")) {
            $ani->crying();
        } else {
            print "crying없음";
        }
    }

    doCry(new Chiwawa);
    doCry(new Cat);
    doCry(new Dog);
    doCry(new Animal);
    doCry(new Human);