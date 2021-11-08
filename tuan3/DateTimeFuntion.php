<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
    Your name 1:<input type="text" name="name1" size="10"><br><br>  
    <span >
        Day:
    </span>
    <span style="margin-left: 40px;">
        <select name="day1">
            <?php
             for ($i=1; $i <= 31 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select> 
    </span>
    <span>
        <select name="month1" value = "">
            <?php
             for ($i=1; $i <= 12 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select>
    </span>
    <span>
        <select name="year1">
        <?php
             for ($i=1997; $i <= 2010 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select>
    </span>
    <br><br>
    Your name 2:<input type="text" name="name2" size="10"><br><br>  
    <span >
        Day:
    </span>
    <span style="margin-left: 40px;">
        <select name="day2">
            <?php
             for ($i=1; $i <= 31 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select> 
    </span>
    <span>
        <select name="month2" value = "">
            <?php
             for ($i=1; $i <= 12 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select>
    </span>
    <span>
        <select name="year2">
        <?php
             for ($i=1997; $i <= 2010 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select>
    </span>
    <br><br>
    <input type="submit" value="Submit" name="s">
    <input type="submit" value="Reset" name="s1">
    </form>
    <?php
        if(isset($_POST['s'])){
            $name1 = $_POST['name1'];
            $year1 = $_POST['year1'];
            $day1 = $_POST['day1'];
            $month1 =$_POST['month1'];
            $name2 = $_POST['name2'];
            $year2= $_POST['year2'];
            $day2 = $_POST['day2'];
            $month2 =$_POST['month2'];
            $age1 = date('Y') - $year1;
            $age2 = date('Y') - $year2;
            print "$name1 Date: $day1/$month1/$year1<br>";
            print "$name1 : $age1 years old<br>";
            print "$name2 Date: $day2/$month2/$year2<br>";
            print "$name2 : $age2 years old<br>";
            $age = abs($age1 - $age2);
            if ($age1 > $age2) {
                print "$name1 > $name2 : $age years old<br>";
            }else if($age1 < $age2){
                print "$name1 < $name2 : $age years old<br>";
            }else {
                print "$name1 = $name2<br>";
            }
        }    
    ?>
</body>

</html>
