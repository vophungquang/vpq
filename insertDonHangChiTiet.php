<?php
      require "connect.php";

  
    $id_user=$_POST['id_user'];
    $tensanpham=$_POST['tensanpham'];
    $soluong=$_POST['soluong'];
    $giasanpham=$_POST['giasanpham'];
    $ngaymuahang=$_POST['ngaymuahang'];
    $diachigiaohang=$_POST['diachigiaohang'];
    $hinhanhsanpham=$_POST['hinhanhsanpham'];
    
    
    
   
  


    $query="INSERT INTO chitietdonhang VALUES(null,'$id_user','$tensanpham','$soluong','$ngaymuahang','$giasanpham','$diachigiaohang','$hinhanhsanpham' )";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>