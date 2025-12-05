<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:100%;
            border-collapse: collapse;
        }
       .capnhat{
            color:white;
            padding:0 10px;
            background: red;
            
        }
        .capnhat:hover{
            background:coral;
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
        </style>
</head>
<body>
    <div style="display:flex;justify-content:space-between;align-item:center;">
         <h1>Thông tin thể loại</h1>
         <a class="btn them" href="themtheloai.php?"> Thêm thể loại </a>
    </div>
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
                    <a class="capnhat" href="capnhattheloai.php?id=<?php echo $row["id"] ?>"> Cập nhật </a>
                     <a class="xoa" href="xoatheloai.php?id=<?php echo $row["id"] ?>"> Xóa </a>
                </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>