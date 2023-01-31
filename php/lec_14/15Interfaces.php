<?php

interface customInterface{
    function GiveInterestToUsers();
    // function GiveInterestToUsersABC(){
    //     echo "called";
    // }
}
class JolaChapBank extends RBI implements customInterface{
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
    <p>Interfaces are 100% abstract</p>
</body>
</html>