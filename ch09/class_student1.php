<?php
    // Access Modifier
    // 접근지시어
    // 접근제어자   
    // private protected public
    class Student {
        public $studentId;
        public $studentName;

        // public function printStudent($id, $name) {
        //     print "ID : {$id}<br>";
        //     print "Name : {$name}<br>";
        // }
        
        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }
    }

    // 배열과 객체의 차이 : 객체는 메소드를 만들 수 있다 / 접근지시어가 없다

    $obj = new Student;
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";

    // $obj->printStudent($obj->studentId, $obj->studentName);
    $obj->printStudent();