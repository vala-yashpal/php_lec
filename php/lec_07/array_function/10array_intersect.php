<?php
    /* -----------array_intersect-------------- */
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","f"=>"yellow","d"=>"purple");       
    $a3=array("a"=>"red","b"=>"black","h"=>"yellow");     
   $newArray = array_intersect($a1,$a2,$a3); //all array check all  valu retun samevalue

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    /* ----------- Match only Key-------------*/
    $newArray1 = array_intersect_key($a1,$a2);

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";


    /* ---------Match Key and Value both---------- */
    $newArray2 = array_intersect_assoc($a1,$a2);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";


    /* ---------Match Key and Value both with callback function----------- */

    function compare($a,$b){
        if ($a===$b){
        return 0;
        }
        return ($a > $b)?1:-1;
    }
    
    function compareValue($a,$b){
        if ($a===$b){
        return 0;
        }
        return ($a > $b)?1:-1;
    }
    
    $newArray3 = array_intersect_uassoc($a1,$a2, "compare"); 
    
    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";
    
    $newArray4 = array_uintersect_assoc($a1,$a2, "compare");  //this function can write also like this -- Important
    
    echo "<pre>";
    print_r($newArray4);
    echo "</pre>";

    /* ----------Match only key with function------------ */
    $newArray5 = array_intersect_ukey($a1,$a2, "compare");

    echo "<pre>";
    print_r($newArray5);
    echo "</pre>";


    /* --------Match only value with function----------- */
    $newArray6 = array_uintersect($a1,$a2, "compare");

    echo "<pre>";
    print_r($newArray6);
    echo "</pre>";


    /* --------Match both value and key with two different functions----------- */
    
    $newArray7=array_uintersect_uassoc($a1,$a2,"compare","compareValue");

    echo "<pre>";
    print_r($newArray7);
    echo "</pre>";


?>