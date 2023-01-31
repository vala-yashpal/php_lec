<?php

// class AbsExample{

//     abstract function MyAbsFunc(){
//         echo "called";
//     }

// }
abstract class RBI{
    abstract function GiveInterestToUsers();
    abstract function GiveInterestToUsers1();
    function GiveInterestToUsersABC(){
        echo "called";
    }
}
class JolaChapBank extends RBI{
    function GiveInterestToUsers(){
        echo "called";
    }
    function GiveInterestToUsers1(){
        echo "called";
    }
}

$AbsExample = new JolaChapBank;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Abstract methods can not contian body while declaration</p>
    <p>Abstracted class only contains Abstacted methods</p>
    <p>Cannot instantiate abstract class</p>
    <p>Class JolaChapBank contains 1 abstract method and must therefore be declared abstract or implement the remaining methods</p>
</body>
</html>