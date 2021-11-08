<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <?php
        const PI = 3.14;
        function ConvertDo($ra){
            return $ra*180/PI;
        }
        function ConvertRadian($do){
            return PI*$do/180;
        }
        if(isset($_POST['action'])){
            $number = $_POST['number'];
            $do = ConvertDo($number);
        }else if(isset($_POST['action1'])){
            $number = $_POST['number'];
            $radian = ConvertRadian($number);
        }
    ?>
    <form action="" method="post">
        input:<br><input type="text" name="number" size="10" value="<?php echo $number;?>"><br>
        <input type="submit" value="Convert Radian To Do" name="action" >
        <input type="submit" value="Convert Do To Radian" name="action1">
    </form>
    <div>
        Kết quả:<?php if (isset($do)) echo $do; else echo $radian; ?>
    </div>
</body>
</html>