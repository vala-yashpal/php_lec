<ul>
    <li>strtolower() = string to lower case</li>
    <li>strtoupper() = string to upper case</li>
    <li>ucfirst() = string first character upper case</li>
    <li>lcfirst() = string first character lower case </li>
    <li>ucwords() = stirng all word first character upper case</li>
</ul>


<?php
    /*-------converts a string to Lowercase------- */
    $str = "yashpal vala";

    $newStr = strtolower($str);

    echo $newStr;
    echo '<br><br>';

    /*-------converts a string to Uppercase------- */

    $newStr1 = strtoupper($str);

    echo $newStr1;
    echo '<br><br>';

    /*-------Convert the first character of a string to lowercase: ------- */

    $newStr2 = lcfirst($str);

    echo $newStr2;
    echo '<br><br>';

    /*-------Converts the first character of a string to uppercase------- */

    $newStr3 = ucfirst($str);

    echo $newStr3;
    echo '<br><br>';

    /*-------Converts the first character of each word in a string to uppercase------- */

    $newStr4 = ucwords($str);

    echo $newStr4;
    echo '<br><br>';

?>
