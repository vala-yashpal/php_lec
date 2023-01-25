<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>$this is a pseudo variable for access object properties inside class</p>
    <p>$this points itself</p>
    <p>The pseudo-variable $this is available when a method is called from within an object context. $this is the value of the calling object. 
        Calling a non-static method statically throws an Error. Prior to PHP 8.0.</p>
    <?php

    class Books{
        public $Author = "Chectan Bhagat";
        function ThreeIdiotprice(){
            return 5000000; 
        }
        function ThreeIdiots(){
            return "Story of ThreeIdiots ".$this->Author." Price is ".$this->ThreeIdiotprice() ; 
        }
        function TwoStates(){
            return "Story of TwoStates ".$this->Author;            
        }
    }
    $ClassObject = new Books;
    echo "<br>";
    echo $ClassObject->ThreeIdiots();
    echo "<br>";
    echo $ClassObject->TwoStates();
    ?>
</body>
</html>