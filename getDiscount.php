<?php
    require "connect.php";


    
   
    $mangDiscount=array();
    $query="SELECT *from discount ";
    $data=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($data)){
        array_push($mangDiscount,new Discount(
            $row['id'],
            $row['ten'],
            $row['tiengiamgia'],
           
           
        ) );
    }

    echo json_encode($mangDiscount);

    class Discount{
        function  __construct($id,$ten,$giagiam)
        {
            $this->id=$id;
            $this->ten=$ten;
            $this->giagiam=$giagiam;
           
            
    
        }
    };
?>