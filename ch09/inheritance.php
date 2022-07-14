<?php
    class People {
        protected $name;
        protected $age;
        // private은 상속되지 않지만 protected는 상속
        function __construct()
        {
            print "나는 People이요<br>";
        }
        function printPeople() {
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }

    class Student extends People { // People을 참조해서 protected도 사용 가능
        private $studentId;
        
        function __construct($name, $age, $id)
        {
            print "나는 Student요<br>";
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $id;
        }

        function printStudent()
        {
            print "- Student - <br>";
            $this->printPeople();
            // parent::printPeople();
            print "ID : {$this->studentId}<br>";
        }

        // Overriding : 덮어쓰기
        function printPeople() {
            print "Student에 있는 printPeople<br>";
        }
    }

    $people = new People();

    $stu1 = new Student("홍길동", 21, 1010);
    // $stu1->printPeople();
    // print "-------------<br>";
    // $stu1->printStudent();

    function callPrintPeople($obj){
        $obj->printPeople();
    }

    callPrintPeople($people);
    print "-------------<br>";
    callPrintPeople($stu1);

    