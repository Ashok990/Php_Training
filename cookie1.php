<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <input type="text" name = "text">;
        <input type="submit" name = "submit" value = "submit">
    </form>
    <?php
    $cookieName = "Ashok";
    $cookieValue = "asd";

    setcookie($cookieName, $cookieValue, time() + 60*60*24*1);
    ?>
</body>
</html>