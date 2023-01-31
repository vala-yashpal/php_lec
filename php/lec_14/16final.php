<?php


// final class RBI{
//     function GiveInterestToUsers(){
//         echo "called";
//     }
//     function GiveInterestToUsers1(){
//         echo "called";
//     }
// }

    class RBI{
        final function GiveInterestToUsers(){
            echo "called";
        }
        function GiveInterestToUsers1(){
            echo "called";
        }
    }

    class Jolachap extends RBI{
        // function GiveInterestToUsers(){
        //     echo "called";
        // }
        function GiveInterestToUsers1(){
            echo "called";
        }
    }
    $AbsExample = new Jolachap;


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
    <p>Class Jolachap cannot extend final class RBI in</p>
    <p>finalized class cant be inherited</p>
    <p>Cannot override final method RBI::GiveInterestToUsers() </p>
    <p>Cannot override finalized methods</p>
</body>
</html>