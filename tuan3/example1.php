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
    Your name:<input type="text" name="name" size="10"><br><br>  
    <span >
        Day:
    </span>
    <span style="margin-left: 40px;">
        <select name="day">
            <?php
             for ($i=1; $i <= 31 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select> 
    </span>
    <span>
        <select name="month">
            <?php
             for ($i=1; $i <= 12 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select>
    </span>
    <span>
        <select name="year">
        <?php
             for ($i=1997; $i <= 2010 ; $i++) { 
                 print "<option value=\"$i\">$i</option>";
             }
            ?>
        </select>
    </span>
    <br><br>
    <span>
        Time:
    </span>
    <span style="margin-left: 34px;">
        <select name="hour">
        <?php
            for ($i=0; $i < 24 ; $i++) { 
                print "<option value=\"$i\">$i</option>";
            }
        ?>
        </select>
    </span>
    <span>
        <select name="minute">
        <?php
            for ($i=0; $i < 60 ; $i++) { 
                print "<option value=\"$i\">$i</option>";
            }
        ?>
        </select>
    </span>
    <span>
        <select name="second">
        <?php
            for ($i=0; $i < 60 ; $i++) { 
                print "<option value=\"$i\">$i</option>";
            }
        ?>
        </select>
    </span>
    <br>
    <input type="submit" value="Submit" name="s">
    <input type="submit" value="Reset" name="s1">
    </form>
    <?php
    if(isset($_POST['s'])){
         $name = $_POST['name'];
         $year = $_POST['year'];
         $day = $_POST['day'];
         $month =$_POST['month'];
         $second = $_POST['second'];
         $minute = $_POST['minute'];
         $hour = $_POST['hour'];
         print "Hi $name !<br>";
         print "You have choose to have an appointment on $hour:$minute:$second,$day/$month/$year<br>";
         print "More information<br>";
         if($hour > 12){
             $hour = $hour - 12;
         }
         print "In 12 hour, the time and the date is $hour:$minute:$second,$day/$month/$year<br>";
         if(($year%400 == 0) || ($year%4 == 0 && $year%100 != 0)){
             print "This month has 29 day";
         }else{
             print "This month has 30 day";
         }
    }
    ?>
</body>
</html>
