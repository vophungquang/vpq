<?php

require "connect.php";
    $iddonhang=$_POST['iddonhang'];
    $soluong=$_POST['soluong'];
    

    $query="UPDATE donhang SET soluong ='$soluong' WHERE id = '$iddonhang'  ";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>