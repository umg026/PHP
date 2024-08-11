<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
        <div>
            <label for="">Email :</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Subject :</label>
            <input type="text" name="subject">
        </div>
        <div>
            <label for="">Mesaage :</label>
            <input type="text" name="message">
        </div>
        <div>
            <button type="submit" name="send">Send Mail</button>
        </div>
    </form>
</body>
</html>