<?php
      require "connect.php";

    $email=$_POST['email'];
    $diachi=$_POST['diachi'];
    $username=$_POST['username'];
    
    


    $query="INSERT INTO user VALUES(null,'$username','$email','$diachi' )";

    if(mysqli_query($conn,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>