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
         td{
            padding:10px;
            
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
    <div style="display:flex;justify-content:space-between;align-item:center;">
    <h1>Thông tin Quốc gia</h1>
     <a class="them" href="themquocgia.php?"> Thêm quốc gia  </a>
    </div>
      <table border=1>
        <tr>
            <th>ID</th>
            <th>Quốc gia</th>
           
        </tr>
        <?php 
        include("connect.php");
        $sql = "SELECT * FROM `quoc_gia`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        
        
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['ten_quoc_gia']; ?></td>
             <td>
                    
                    <a class="capnhat" href="capnhatquocgia.php?id=<?php echo $row["id"] ?>"> Cập nhật </a>
                    <a class="xoa" href="xoaquocgia.php?id=<?php echo $row["id"] ?>"> Xóa </a>
            </td>  
                
        </tr>
        <?php } ?>
    </table>
</html>