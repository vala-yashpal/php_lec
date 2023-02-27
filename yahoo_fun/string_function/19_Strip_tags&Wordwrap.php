<?php

    /*-------strip_tags Function------- */
    $str = "Hello <b>World</b>, Hello <i>Earth</i>";

    $newstr = strip_tags($str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------Remove tag------- */
    $newstr = strip_tags($str,"<b>");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------Wordwrap Function------- */
    $str = "This world is beautiful.";

    $newstr = wordwrap($str,5);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = wordwrap($str,5,"<br>",TRUE);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
?>