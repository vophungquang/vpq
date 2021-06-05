<?php

require "connect.php";
    $idUser=$_POST['idUser'];
    $trangthai=$_POST['trangthai'];
    

    $query="UPDATE donhang SET trangthai =1 WHERE id_user = '$idUser'  ";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>