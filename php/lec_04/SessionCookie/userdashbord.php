<?php 

require_once("header.php");

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>
<h2>Hello, <?php echo $_SESSION['UserData']['UserName']; ?></h2>