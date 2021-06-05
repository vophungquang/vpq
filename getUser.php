<?php
    require "connect.php";


    
   
    $mangUser=array();
    $query="SELECT *from user ";
    $data=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($data)){
        array_push($mangUser,new User(
            $row['id'],
            $row['username'],
            $row['email'],
            $row['address']
           
        ) );
    }

    echo json_encode($mangUser);

    class User{
        function  __construct($id,$username,$email,$address)
        {
            $this->id=$id;
            $this->username=$username;
            $this->email=$email;
            $this->address=$address;
            
    
        }
    };
?>