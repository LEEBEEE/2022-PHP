<?php

    class Student {
        private $studentId;
        private $studentName;
        // private : 은닉화
        // 상수는 public으로 둬도...

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";
        }
    }

    $obj = new Student;
    // $obj->studentId = 155413; // ERROR
    // $obj->studentName = "Ted"; // ERROR : private에 접근하려고 했기 때문
    $obj->printStudent(155413, "Ted");