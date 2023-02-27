<?php
    function dd($a){
        echo "<pre>";
        print_R($a);
        echo"</pre>";
    }

    $password = "yashpal";

    $convert_password = "the password -->>  " .$password;
    dd($convert_password);

    $convert_password = "md5 Binary : ".md5($password, TRUE); //-- 16 char
    dd($convert_password);

    $convert_password = "md5 HEX : ".md5($password); //-- 32 char
    dd($convert_password);


    $convert_password = "sha1 Binary : ".sha1($password, TRUE); //-- 20 char
    dd($convert_password);

    $convert_password = "sha1 HEX : ".sha1($password); //-- 40 char
    dd($convert_password);

echo "<br><br><< ===========================sha256================================== >><br><br>";

    $sha256_password = "vala";

    $convert_sha256_password ="<b>the sha256 password -->> <b> ".$sha256_password;
    dd($convert_sha256_password);

    // echo hash('sha256', $_POST['ppasscode']);

    $convert_sha256_password = "sha256 : ".hash('sha256',$sha256_password);
    dd($convert_sha256_password);



?>