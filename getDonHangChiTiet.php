<?php
    require "connect.php";


    
   
    $mangDiscount=array();
    $query="SELECT *from chitietdonhang ";
    $data=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($data)){
        array_push($mangDiscount,new donhangchitiet(
            $row['id'],
            $row['id_user'],
            $row['tensanpham'],
            $row['soluong'],
            $row['ngaymuahang'],
            $row['giasanpham'],
            $row['diachigiaohang'],
            $row['hinhanhsanpham'],
           
        ) );
    }

    echo json_encode($mangDiscount);

    class donhangchitiet{
        function  __construct($id,$id_user,$tensanpham,$soluong,$ngaymuahang,$giasanpham,$diachigiaohang,$hinhanhsanpham)
        {
            $this->id=$id;
            $this->id_user=$id_user;
            $this->tensanpham=$tensanpham;
            $this->soluong=$soluong;
            $this->ngaymuahang=$ngaymuahang;
            $this->diachigiaohang=$diachigiaohang;
            $this->giasanpham=$giasanpham;
            $this->hinhanhsanpham=$hinhanhsanpham;
    
        }
    };
?>