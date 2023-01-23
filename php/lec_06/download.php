<?php
if (isset($_REQUEST['savefile'])) 
{   
    $size = filesize("video.mp4");
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="video.mp4"');
    header('Content-Length:' . $size);
    readfile("video.mp4");
}
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
<form method="post">
        <button type="submit" name="savefile">Download</button>
    </form>
</body>
</html>