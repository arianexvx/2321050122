<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <style>
       table{
            width:100%;
            border-collapse: collapse;
        }
        
        .them{
            padding: 10px 10px;
            background:pink;
            margin-top:30px;
            border-radius:30px;
            justify-content:center;
            display:flex;
        }
        .them:hover{
            background:coral;
        }
        .capnhat{
            color:white;
            padding:0 10px;
            background: red;
            
        }
        .capnhat:hover{
            background:coral;
        }

        </style>
</head>
<body>
    <div style="display:flex;justify-content:space-between;align-item:center;">
    <h1>Thông tin Phim</h1>
     <a class="them" href="themphim.php?"> Thêm Phim  </a>
    </div>
    
    <table border=1 >
        <tr>
            <th>ID</th>
            <th>Tên phim</th>
            <th>Đạo Diễn</th>
            <th>năm phát hành</th>
            <th>poster</th>
            <th>Quốc Gia</th>
            <th>sô tập</th>
            <th>trailer</th>
            <th>mô tả</th>
        </tr>
        <?php 
        include("connect.php");
        $sql = "SELECT p.*, 
               q.ten_quoc_gia, 
               d.ho_ten AS ten_dao_dien
        FROM phim p
        JOIN quoc_gia q ON p.quoc_gia_id = q.id
        JOIN nguoi_dung d ON p.dao_dien_id = d.id
        ORDER BY p.id ASC";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        
        
        <tr>
            <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ten_phim']; ?></td>
                <td><?php echo $row['ten_dao_dien']; ?></td>
                <td><?php echo $row['nam_phat_hanh']; ?></td>
                <td><?php echo $row['poster']; ?></td>
                <td><?php echo $row['ten_quoc_gia']; ?></td>
                <td><?php echo $row['so_tap']; ?></td>
                <td><?php echo $row['trailer']; ?></td>
                <td>
                <td>
                    <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row["id"] ?>"> Cập nhật </a>
                    <a class="xoa" href="xoaphim.php?id=<?php echo $row["id"] ?>"> Xóa </a>
                </td>
        </tr>
        <?php } ?>
    </table>
</body>
    
</body>
</html>