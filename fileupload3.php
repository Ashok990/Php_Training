<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST" enctype = "multipart/form-data">
        <input type="file" name = "file">
        <input type = "submit" name = "submit" value = "submit">
        <ul>
            <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
            <li>File size: <?php echo $_FILES['file']['size'];  ?>
            <li>File type: <?php echo $_FILES['file']['type'] ?>
         </ul>
    </form>

    <?php
    if(isset($_FILES['file'])){

        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_temp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $extensions = array( "jpeg", "png", "jpg");

        if(in_array($file_ext, $extensions) === false){
            $errors[] = "Invalid FIle Format. Please choose the JPEG or PNG file";
        }

        if($file_size > 2097152){
            $errors[] = "File size must be exactly 2MB";
        }

        if(empty($errors) == true){
            move_uploaded_file($file_temp, "images/". $file_name);
                echo "File uploaded";
            }else {
                echo "File upload Failed";
            }
        }
    ?>
</body>
</html>