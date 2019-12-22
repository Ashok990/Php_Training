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
    <input type="text" name = "text">
    <input type="submit" value = "submit">

</form>
    <?php
    $cookie_name = "user";
    $cookie_value = "ashok";

    setcookie($cookie_name, $cookie_value, time() + 60 * 60 );
    if($_COOKIE[$cookie_name] || $_COOKIE[$cookie_value]){
        echo "Cookie name is $cookie_name and cookie value is $cookie_value";
    }

    if(count($_COOKIE)){
        echo "Cookie is Enable";
    }else{
        echo "Cookie is disable";
    }
?>
</body>
</html>