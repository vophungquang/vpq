<?php
    require "connect.php";


    
   
    $mangdonhang=array();
    $query="SELECT d.id,u.id as idUser,s.tensanpham,d.soluong,d.ngaymuahang,d.giasanpham,t.name,s.sosanphamtonkho,s.hinhanhsanpham FROM donhang d INNER JOIN USER u ON d.id_user=u.id INNER JOIN sanpham s ON d.id_sanpham=s.id INNER JOIN thuonghieu t ON d.id_thuonghieu=t.id ";
    $data=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($data)){
        array_push($mangdonhang,new DonHang(
            $row['id'],
            $row['idUser'],
            $row['tensanpham'],
            $row['soluong'],
            $row['ngaymuahang'],
            $row['giasanpham'],
            $row['name'],
            $row['sosanphamtonkho'],
            $row['hinhanhsanpham'],
        ) );
    }

    echo json_encode($mangdonhang);

    class DonHang{
        function  __construct($id,$idUser,$tensanpham,$soluong,$ngaymuahang,$giasanpham,$tenthuonghieu,$sosanphamtonkho,$hinhanhsanpham)
        {
            $this->id=$id;
            $this->idUser=$idUser;
            $this->tensanpham=$tensanpham;
            $this->soluong=$soluong;
            $this->ngaymuahang=$ngaymuahang;
            $this->giasanpham=$giasanpham;
            $this->tenthuonghieu=$tenthuonghieu;
            $this->sosanphamtonkho=$sosanphamtonkho;
            $this->hinhanhsanpham=$hinhanhsanpham;
        }
    };
?>