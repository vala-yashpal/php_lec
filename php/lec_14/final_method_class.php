<?php

    // final class RBI{
    //     function intrest(){
    //         echo "RBI intrest:7.50";
    //     }
    // }
    // class bob extends RBI{
    //     function employee(){
    //         echo "employee function :";
    //     }
    // }

    // $object  = new bob;
    // $object->employee();


    // class RBI{
    //     final function intrest(){
    //         echo "RBI intrest:7.50";
    //     }
    // }
    // class bob extends RBI{
    //     function intrest(){
    //         echo "employee function :";
    //     }
    // }

    // $object  = new bob;
    // $object->intrest();

    class RBI{
        final function intrest(){
            echo "RBI intrest:";
        }
        function disp(){
            echo "1234";
        }
    }

    class bob extends RBI{
        function employee(){
            echo "employee function :";
        }
    }

    $object  = new bob;
    $object->disp();

?>