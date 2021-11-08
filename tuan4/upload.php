<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>upload</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    Tên:<br/>
    <input type="text" name="name"><br/>
    Thông điệp:<br/>
    <input type="text" name="description"><br/>
    Select image to upload:<br/>
    <input type="file" name="fileUpload" value="">
    <input type="submit" name="up" value="Upload">
</form>
<?php
if (isset($_POST['up']) && isset($_FILES['fileUpload']) ) {
    if (!isset($_POST['description']))
        echo "thiếu thông tin!";
    else {
        $description = $_POST['description'];
        $name = $_POST['name'];
        $date = date("mdy");
        $filename = 'C:/Users/Admin/Desktop/posts/post_'.$date.'.txt';
        $fp = fopen($filename, 'w');
        fwrite($fp,$description);
        fclose($fp);
        $fileimage =  'C:/Users/Admin/Desktop/posts/' . $_FILES['fileUpload']['name'];
        move_uploaded_file($_FILES['fileUpload']['tmp_name'],$fileimage);
        echo "Hi:".$name."<br>";
        echo "Thông Điệp:".$description."<br>";
        echo "<img src='".$fileimage."' width='300'>";
    }
}
?>
</body>
</html>