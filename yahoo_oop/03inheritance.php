<?php

    class employee{

        public $name;
        public $age;
        public $salary;

        public function __construct($n="no name",$a=0,$s=0){
            $this->name = $n;
            $this->age =$a;
            $this->salary =$s;
        }

        public function info(){
            echo "<h3>Employee profile</h3>";
            echo "Employee name:".$this->name."<br>";
            echo "Employee age:".$this->age."<br>";
            echo "Employee salary:".$this->salary."<br>";
        }
    }

    class manager extends employee{
        public $ta =4000;
        public $phone=1000;
        public $totalsalary;

        function info(){
            echo "<h3>Manager profile</h3>";
            $this->totalsalary = $this->salary + $this->ta + $this->phone;

            echo "Manager name:".$this->name."<br>";
            echo "Manager age:".$this->age."<br>";
            echo "Manager salary:".$this->totalsalary."<br>";


        }
    }

    
    $object_manager = new manager("jay",25,50000);
    $object_manager->info();
    $object_employee = new employee("rahul",20,10000);
    $object_employee->info();
?>