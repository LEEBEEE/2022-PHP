<?php
    class Calc {
        function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    $c = new Calc;
    print "CalcResult :" . $c->sum(5, 10) . "<br>";

    class StaticCalc {
        static function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    print "StaticResult :" . StaticCalc::sum(10, 11) . "<br>";