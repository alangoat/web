<?php
if (!isset($_GET['action']) || $_GET['action']=="") 
{
    $chuoi="";
    $yeucau="";  
    $ketqua="";
} 
else 
{    
     $chuoi=$_GET['chuoi'];
     $yeucau=$_GET['yeucau'];
     if(empty($chuoi) || empty($yeucau)) 
     {        
          echo 'Canh bao: Ban nhap thieu du lieu !!!';       
          exit();    
     }
     if ($yeucau == 'strlen') 
     {        
            $ketqua=strlen($chuoi);    
     }    
     else if ($yeucau == 'strtolower') 
     {        
             $ketqua=strtolower($chuoi);    
      }    
      else if ($yeucau == 'trim') 
      {        
             $ketqua=trim($chuoi);    
      }    
      else if ($yeucau == 'strtoupper') 
      {        
             $ketqua=strtoupper($chuoi);    
      }    
      else 
      {        
             echo 'Canh bao: ham xu li ban nhap vao khong chinh xac !!!';        
             exit();    
       }
}
?>

<!DOCTYPE html>
<html>    
<head>        
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
  <title></title>    
</head>    
<body>
    <form action="" method="get">    
        chuỗi:<br><input type="text" name="chuoi" value="<?php echo $chuoi ?>" size="10">    
        <br>
        hàm xử lí(strlen,strtoupper,strtolower,trim):<br><input type="text" name="yeucau" value="<?php echo $yeucau ?>" size="10"><br>    
        kết quả:<br> <input type="text" value="<?php echo $ketqua ?>" size="10"><br>    
        <input type="submit" value="kết quả" name="action">
    </form>
</body>
</html>