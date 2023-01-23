<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>encapsulation is wrapping data into single unit its done through class</p>
    <p>class is an example of encapsulation</p>
    <p>without instance/object of class we cant access any property of class out side</p>
    <p>with the help of new keyword we can create an object of any class</p>
    <p>class is a collection of datamember and member function only</p>
    <?php

    // $a = 40;
    // $b = 40;
    // $sum = $a+$b; // 5000 line code
    // $sum = $a+$b; // 5000 line code
    // $sum = $a+$b; // 5000 line code
    // $sum = $a+$b; // 5000 line code
    // $sum = $a+$b; // 5000 line code

    // // user definded function UDF START
    // function Addition(){
    //     $a = 40;
    //     $b = 40;
    //     return $a + $b; // 5000 line code
    // }
    // // user definded function UDF END

    // echo Addition(); // 1line code
    // echo Addition(); // 1line code
    // echo Addition(); // 1line code
    // echo Addition(); // 1line code
    // echo Addition(); // 1line code
    // dynamic user definded parameterised function UDF START
    // function Addition($a,$b){ // reciver as parameter
    //     // $a = 40;
    //     // $b = 40;
    //     return $a + $b; // 5000 line code
    // }
    // // dynamic user definded parameterised function UDF END

    // echo "<br>".Addition(50,60); // 1line code passing the argument to the function
    // echo "<br>".Addition(10,20); // 1line code
    // echo "<br>".Addition(60,88); // 1line code
    // echo "<br>".Addition(77,22); // 1line code
    // echo "<br>".Addition(54,124); // 1line code
    
    class MathOp{
        function Addition($a, $b){
            return $a + $b; // 5000 line code
        }
    }
    // echo "<br>".Addition(50,60); // 1line code passing the argument to the function
   
    $MathOpOb = new MathOp;

    echo $MathOpOb->Addition(50,60);
    ?>

</body>

</html>