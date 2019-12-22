
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    // set session variables
    $_SESSION['username'] = "Ashok";
    print_r($_SESSION);
    $_SESSION['password'] = 123.45;

    // accessig the variables
    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";

    // check session variable is set or not

    if(isset($_SESSION['username'])){
        echo "Variable is set";
    }else{

        echo "Variable is not set";
    }

    // function of print_r key function

    $cars = array("toyota", "bugati", "Honda", "Mercedes");

    //print_r($cars);

    $result = print_r($cars, true);
    echo $result;

    // remove the session variables
    session_unset();

    // destroy the session
    session_destroy();
    echo "All the sessions variables are removed and session is destroyed";

    ?>
</body>
</html>