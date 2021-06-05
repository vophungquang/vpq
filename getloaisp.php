<?php

    include "connect.php";

    $query ="SELECT *FROM loaisanpham";
    $data =mysqli_query($conn,$query);
    $mangloaisp=array();
    while ($row = mysqli_fetch_array($data)){
        array_push($mangloaisp,new  Loaisp(
            $row['id'],
            $row['tenloaisanpham'],
            $row['hinhloaisanpham']
        ) );
    }
    echo json_encode($mangloaisp);

    class Loaisp{
        function  __construct($id,$tenLoaisanpham,$hinhanhsanpham){
            $this->id=$id;
            $this->tenloaisp=$tenLoaisanpham;
            $this->hinhanhloaisanpham=$hinhanhsanpham;

        }
    }
?>