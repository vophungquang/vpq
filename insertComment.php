<?php
      require "connect.php";

    $id_user=$_POST['id_user'];
    $id_sanpham=$_POST['idsanpham'];
    $content=$_POST['content'];
    $ngaycomment=$_POST['ngaycomment'];
    


    $query="INSERT INTO comment VALUES(null,'$id_user','$id_sanpham','$content','$ngaycomment' )";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>