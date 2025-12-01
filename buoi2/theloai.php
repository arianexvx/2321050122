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
        </style>
</head>
<body>
    <h1>Thông tin Người dùng</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>tên thể loại</th>
           
        </tr>
        <?php 
        include("connect.php");
        $sql = "SELECT * FROM `the_loai`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        
        
        <tr>
            <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ten_the_loai']; ?></td>
               
                <td>
                    <button>Sửa</button>
                    <a class="xoa" href="xoanguoidung.php?id=<?php echo $row["id"] ?>"> Xóa </a>
                </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>