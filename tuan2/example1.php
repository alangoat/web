<?php
if (!isset($_GET['action']) || $_GET['action']=="") 
{
    $so_thu_nhat="";  
    $so_thu_hai="";
    $toan_tu="";$ketqua="";
} 
else 
{    
     $so_thu_nhat=$_GET['so_thu_nhat'];    
     $so_thu_hai=$_GET['so_thu_hai'];    
     $toan_tu=$_GET['toan_tu'];
     if (empty($so_thu_nhat) || empty($toan_tu) || empty($so_thu_hai)) 
     {        
          echo 'Canh bao: Ban nhap thieu du lieu !!!';       
          exit();    
     }
    if (!is_numeric($so_thu_nhat) || !is_numeric($so_thu_hai )) 
    {        
           echo 'Canh bao: Ban phai nhap so !!!';        
           exit();    
     }
    if ($toan_tu == '+') 
     {        
            $ketqua=$so_thu_nhat + $so_thu_hai;    
     }    
     else if ($toan_tu == '-') 
     {        
             $ketqua=$so_thu_nhat - $so_thu_hai;    
      }    
      else if ($toan_tu == '/') 
      {        
             $ketqua=$so_thu_nhat / $so_thu_hai;    
      }    
      else if ($toan_tu == '*') 
      {        
             $ketqua=$so_thu_nhat * $so_thu_hai;    
      }    
      else 
      {        
             echo 'Canh bao: Toan tu ban nhap vao khong chinh xac !!!';        
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
        Số thứ 1:<br><input type="text" name="so_thu_nhat" value="<?php echo $so_thu_nhat ?>" size="10">    
        <br>    
        toán tứ:<br><input type="text" name="toan_tu" value="<?php echo $toan_tu ?>" size="10"><br>    
        số thứ 2:<br><input type="text" name="so_thu_hai" value="<?php echo $so_thu_hai ?>" size="10"><br>    
        kết quả:<br> <input type="text" value="<?php echo $ketqua ?>" size="10"><br>    
        <input type="submit" value="Tính" name="action">
    </form>
</body>
</html>