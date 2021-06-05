<?php
      require "connect.php";



  

    $id_user=$_POST['id_user'];
    $id_sanpham=$_POST['idsanpham'];
    $soluong=$_POST['soluong'];
    $ngaymuahang=$_POST['ngaymuahang'];
    $giasanpham=$_POST['price'];
    $thuonghieu=$_POST['thuonghieu'];
  


    $query="INSERT INTO donhang VALUES(null,'$id_user','$id_sanpham','$soluong','$ngaymuahang','$giasanpham','$thuonghieu' )";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>