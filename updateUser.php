<?php

require "connect.php";
    $idUser=$_POST['idUser'];
    $username=$_POST['username'];
    $address=$_POST['address'];
    $email=$_POST['email'];
   

    $query="UPDATE user SET username ='$username',email ='$email',address ='$address' WHERE id = '$idUser'  ";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>