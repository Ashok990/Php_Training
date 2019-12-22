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
        <input type="file" name = "myfile">
        <input type="submit" value = 'submit' name = 'submit'>
    </form>

    <?php

    $fileName = $_FILES['myfile']['name'];
    $tempName = $_FILES['myfile']['tmp_name'];
    $folder = "images/".$fileName;
    echo $folder;

    if(move_uploaded_file($tempName,$folder)){
        echo "<img src='$folder' height = '100' width = '100'>";
    }else{
        echo " File Upload Failed";
    }
    
    
    
    
    
    // if(move_uploaded_file($_FILES['myfile']['tmp_name'], 'images/'. $_FILES['myfile']['name'])){
    //     echo "File uploaded";
    // } else{
    //     echo "File Upload Failed";  
    // }
    ?>
    
</body>
</html>