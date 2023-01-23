<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>access parent properties to child is called inheritance</p>
    <img src="inheritance.jpg" alt="" width="500px">
    <?php

use MathOp as GlobalMathOp;

    class MathOp{
        function Addition($a, $b){
            return $a + $b; // 5000 line code
        }
    }
    class AdvMathOp extends GlobalMathOp{
        function average($koipan, $kuchbhi){
            // $sum = $koipan+$kuchbhi; // 5000 line code 
            $sum =  $this->Addition($koipan, $kuchbhi);
            return $sum/2; // 5000 line code
        }
    }
    // echo "<br>".Addition(50,60); // 1line code passing the argument to the function
    $MathOpOb = new AdvMathOp;
    echo "<br>";
    echo "Addition is ".$MathOpOb->Addition(50,60);
    echo "<br>";
    echo "Average is ".$MathOpOb->average(50,60);
    echo "<br>";
    ?>

</body>

</html>