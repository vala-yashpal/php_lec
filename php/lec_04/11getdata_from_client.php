<?php

echo "<pre>";
echo "<br>======================= GET ==========================<br>";
print_r($_GET);
echo "<br>======================= POST ==========================<br>";
print_r($_POST);
echo "<br>======================= REQUEST ==========================<br>";
print_r($_REQUEST);
echo "<br>======================= FILES ==========================<br>";
print_r($_FILES);
print_r($_FILES['img']);
echo "<br>======================= GLOBALS ==========================<br>";
print_r($GLOBALS);
echo "</pre>";
?>
<h2>GET</h2>
<p>Get will send data to the server using URL</p>
<p>its less secure because its sends data to the server via URL</p>
<p>Faster then POST</p>
<p>FORM default method is GET</p>
<p>mostly use for searching and sending data to other page</p>
<p>? will be appending data its called Query selector & will helps to send multiple data</p>
<p>Limitation of 1024 byts 2048 char only</p>
<p>not supported file uploading</p>
<form>
    <input type="text" name="usernamegetmethod" id="usernamegetmethod">
    <input type="submit" name="btngetmethod" id="btngetmethod">
</form><br>

<h2>POST</h2>
<p>send data without URL </p>
<p>secure then get</p>
<p>supports file uploading</p><br>

<!-- <form method="get">
    <input type="text" name="usernamegetmethod" id="usernamegetmethod">
    <input type="submit" name="btngetmethod" id="btngetmethod">
</form> -->

<form method="post" enctype="multipart/form-data">
    <input type="text" name="usernamepostmethod" id="usernamepostmethod" placeholder="username"><br><br>
    <input type="file" name="img" id="img"><br><br>
    <input type="submit" name="btnpostmethod" id="btnpostmethod">
</form>