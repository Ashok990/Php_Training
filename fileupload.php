<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Upload FIle</h1>
    <form action="" method = "post" enctype = "multipart/form-data">
    <input type="file" name = 'filename'>
    <input type = "submit" value = "send">
    </form>
<?php
if(isset($_POST['submit'])){
    $source_name = $_FILES['file_name']['name'];
    $temp_name = $_FILES['file_name']['tmp_name'];
    if(move_uploaded_file($temp_name, $source_name) ){

        echo "File is upload";
    }else{
        echo "File is not uploaded";
    }

}
    
?>
</body>
</html>