<?php

require "connect.php";
    $iddonhang=$_POST['iddonhang'];
    $query="DELETE FROM donhang WHERE id='$iddonhang' ";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }


?>