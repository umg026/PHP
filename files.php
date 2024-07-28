<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="enter file name">
        <br>
        <br>
        <input type="text" name="content" placeholder="enter content ">
        <br>
        <br>
        <button name="button" type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['button'])) {
    $fname = $_POST['fname'];
    $content = $_POST['content'];

    $myfile = fopen($fname, 'w') or die('unable to create file');
    fwrite($myfile, $content);
    echo 'file create succesfully';

}
?>