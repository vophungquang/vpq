<?php
    require "connect.php";


    
   
    $mangsanpham=array();
    $query="SELECT *FROM sanpham  ";
    $data=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($data)){
        array_push($mangsanpham,new Sanpham(
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

    echo json_encode($mangsanpham);

    class Sanpham{
        function __construct($id,$tensp,$giasanpham,$hinhanhsanpham,$motasp,$idsanpham,
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
?>