<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File</title>
</head>
<body>
    <h2>Download file using PHP:</h2>
    <a href="download.php?file=img.jpeg">Download</a>
</body>
</html>

<?php

if (!empty($_GET['file'])) {

    $filename = basename($_GET['file']);
    $filepath = 'test/img.jpeg';

    if (!empty($filename) && file_exists($filepath)) {

        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Type: image/jpeg');  // Assuming it's a JPEG file
        header('Content-Transfer-Encoding: binary');

        readfile($filepath);
        exit;  // Make sure to exit after sending the file
    } else {
        echo "<br>The file doesn't exist.";
    }
} else {
    echo "<br>No file specified.";
}

?>
