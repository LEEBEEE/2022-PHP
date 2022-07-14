<?php
    class Student {
        private $studentId;
        private $studentName="홍길동";
        const ADDR = "대구";
        
        // getter
        public function getStudentId() {
            return $this->studentId;
        }
        
        public function getStudentName() {
            return $this->studentName;
        }

        // setter
        public function setStudentId($studentId){
            $this->studentId = $studentId;
            return $this;
        }

        public function setStudentName($studentName){
            $this->studentName = $studentName;
            return $this;
        }

        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }
    }

    $obj = new Student;
    print "첫번째 " . $obj->setStudentId(1122)->getStudentId() . "<br>";
    print "첫번째 " . $obj->getStudentName() . "<br>";
    print "첫번째 " . $obj::ADDR . "<br>";
    $obj->setStudentName("ouo");
    // $obj->printStudent();
    $obj2 = new Student;
    print "두번째 " . $obj2->setStudentId(33333)->getStudentId() . "<br>";
    print "두번째 " . $obj2->setStudentName("신사임당")->getStudentName() . "<br>";
    print "두번째 " . $obj2::ADDR . "<br>";
    print Student::ADDR;