<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name='user' placeholder="user name">
        <br><br>
        <button name="button" value="set">Set Cookie</button>
        <button name="button" value="get">Get Cookie</button>
        <button name="button" value="delete">Delete Cookie</button>
    </form>
</body>
</html>

<?php

if (isset($_POST['button'])) {

    if ($_POST['button'] == 'set') {
        $val = $_POST['user'];
        setcookie('User', $val);
    }

    if ($_POST['button'] == 'get') {
        echo $_COOKIE['User'];
    }

    if ($_POST['button'] == 'delete') {
        setcookie('User', null);
        echo "cookie delete success" ;
    }

}

?>