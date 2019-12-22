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
        $passErr = $cpassErr = "";
        $pass = $cpass = "";
        
        // for password
        if(isset($_POST['submit'])){
            if (empty($_POST["pass"]) || (strlen($_POST["pass"]) < 8)) {
                $passErr = " Unconditional passowrd";
              } else {
                $pass = $_POST["pass"];
              }
        }

        // for confirm password
        if(empty($_POST['cpass']) || ($_POST['pass'] != ($_POST['cpass']))){
            $cpassErr = "Unmatched Password";
        }else {
            $cpass = $_POST['cpass'];
        }

?>

<form action="" method = "post">

<input type="password" name="pass" placeholder = "Password">
<span class="error"> <?php echo $passErr;?></span>
<br><br>

<input type="password" name="cpass" placeholder = "Confirm Password">
<span class="error"> <?php echo $cpassErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>