<?php

use Computer as GlobalComputer;

    class Computer {
        private static $cnt = 0;
        private $moduleName;
        private $price;

        function __construct($moduleName = null, $price = null)
        {
            self::$cnt++;
            $this->moduleName = $moduleName;
            $this->price = $price;
        }

        function printInfo() {
            print "모델명 : {$this->moduleName}, 가격: {$this->price}<br>";
        }

        static function totalProductCnt()
        {
            print "총 생산된 컴퓨터 수 :" . self::$cnt . "<br>";
        }
    }

    $c1 = new Computer("abc-123", 40000);
    $c2 = new Computer("xkk-222", 50000);
    $c3 = new Computer("y23k-ggg", 60000);
    $c4 = new Computer("dks-554", 70000);

    $c1->printInfo();
    $c2->printInfo();
    $c3->printInfo();
    $c4->printInfo();
    // $c1->totalProductCnt();
    // $c2->totalProductCnt();
    // $c3->totalProductCnt();
    // $c4->totalProductCnt();
    Computer::totalProductCnt();