<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:100%;
        }
        .xoa{
            color:white;
            padding:0 10px;
            background: red;
        }
        td{
            padding:10px;
            
        }
        .them{
            padding: 10px 10px;
            background:floralwhite;

        }
        .them:hover{
            background:coral;
        }

        </style>
</head>
<body>
   
    <div style="display:flex;justify-content:space-between;align-item:center;">
         <h1>Thông tin Người dùng</h1>
         <a class="btn them" href="themnguoidung.php?"> Thêm người dùng  </a>
    </div>

    <table border=1>
        <tr>
            <th>Tên đăng nhập</th>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php 
        include("connect.php");
        $sql = "SELECT nd.*, vt.ten_vai_tro FROM nguoi_dung nd JOIN vai_tro vt ON nd.vai_tro_id = vt.id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        
        
        <tr>
            <td><?php echo $row['ten_dang_nhap']; ?></td>
                <td><?php echo $row['ho_ten']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['sdt']; ?></td>
                <td><?php echo $row['ten_vai_tro']; ?></td>
                <td><?php echo $row['ngay_sinh']; ?></td>
                <td>
                <td>
                     <a class="sua" href="suanguoidung.php?id=<?php echo $row["id"] ?>"> Sửa </a>
                    <a class="xoa" href="xoanguoidung.php?id=<?php echo $row["id"] ?>"> Xóa </a>
                </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>