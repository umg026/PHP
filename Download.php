<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Download file using php:</h2>
    <a href="download.php?file=image1.jpg">Download</a>
</body>
</html>

<?php

if(!empty($_GET['file'])){

    $filename = basename($_GET['file']);
    $filepath = 'destination/'. $filename;

    if(!empty($filename) && file_exists($filepath)){

       header('Cache-control: public');
       header('Content-Description: File Transfer');
       header('Content-Disposition: attachment; filename=umang');
       header('Content-Type: application/zip');
       header('Content-Transfer-Emcoding: binary');

       readfile($filepath);
    }
}
else {
    echo "the file path doesn't exist";
}


?>