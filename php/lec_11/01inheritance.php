<?php

    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($n,$a,$s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
           
        }

        function info(){
            echo "<h3>Employee profile</h3>";
            echo "Employee name:".$this->name."<br>";
            echo "Employee age:".$this->age."<br>";
            echo "Employee salary:".$this->salary."<br>";
        }
    }

    class manager extends employee{

        public $ta = 4000;
        public $phone = 1000;
        public $totalsalary;

            function info(){
                $this->totoalsalary = $this->salary + $this->ta + $this->phone;

                echo "<h3>Manager profile</h3>";
                echo "Manager name:".$this->name."<br>";
                echo "Manager age:".$this->age."<br>";
                echo "Manager salary:".$this->totoalsalary."<br>";
            }
    }

    $manobject = new manager("yashpal", 23,50000);

    $empobject = new employee("rahul", 25,20000);
    
    $manobject->info();
    $empobject->info();


?>