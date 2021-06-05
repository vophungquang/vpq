<?php

require "connect.php";

$query="SELECT *FROM sanpham ORDER BY id desc limit 6";
    $data=mysqli_query($conn,$query);

class Sanphammoinhat{
    function  __construct($id,$tensp,$giasanpham,$hinhanhsanpham,$motasp,$idsanpham,
    $id_thuonghieu,$sosanphamdaban,$sosanphamtonkho,$diemdanhgia)
    {
        $this->id=$id;
        $this->tensp=$tensp;
        $this->giasp=$giasanpham;
        $this->hinhanhsp=$hinhanhsanpham;
        $this->motasp=$motasp;
        $this->idsanpham=$idsanpham;
        $this->id_thuonghieu=$id_thuonghieu;
        $this->sosanphamtonkho=$sosanphamtonkho;
        $this->sosanphamdaban=$sosanphamdaban;
        $this->diemdanhgia=$diemdanhgia;

    }
};

    $mangmoinhat=array();
    
    while($row=mysqli_fetch_assoc($data))
    {
        array_push($mangmoinhat,new Sanphammoinhat(
            $row['id'],
            $row['tensanpham'],
            $row['giasanpham'],
            $row['hinhanhsanpham'],
            $row['motasanpham'],
            $row['idsanpham'],
            $row['id_thuonghieu'],
            $row['sosanphamdaban'],
            $row['sosanphamtonkho'],
            $row['diemdanhgia']
        ) );
    }

    echo json_encode($mangmoinhat);

   
?>


