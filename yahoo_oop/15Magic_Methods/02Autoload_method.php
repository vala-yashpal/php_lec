<?php

    // require "02autoload/first.php";
    // require "02autoload/secound.php";

    function __autoload($class){
        require "02autoload/".$class.".php";
    }
    
    $objf = new first();
    $objs = new secound();

?>