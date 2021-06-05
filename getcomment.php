<?php
    require "connect.php";


    
   
    $mangbinhluan=array();
    $query="SELECT  c.id,u.username,s.tensanpham,c.content FROM COMMENT c INNER JOIN USER u ON c.id_user=u.id INNER JOIN sanpham s ON c.id_sanpham=s.id ";
    $data=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($data)){
        array_push($mangbinhluan,new Comment(
            $row['id'],
            $row['username'],
            $row['tensanpham'],
            $row['content']
           
        ) );
    }

    echo json_encode($mangbinhluan);

    class Comment{
        function  __construct($id,$username,$tensanpham,$content)
        {
            $this->id=$id;
            $this->username=$username;
            $this->tensanpham=$tensanpham;
            $this->content=$content;
            
    
        }
    };
?>