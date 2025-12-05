<?php
include 'connect.php'; 
    $id = $_GET['id'];
    if(!empty($_POST['ten-the-loai'])) {
        $tenTheLoai = $_POST['ten-the-loai'];
        
        $sql = "UPDATE the_loai
        SET ten_the_loai = '$tenTheLoai'
        WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=theloai'); 
       }else{
        echo '<p class="warning">Vui lòng nhập thông tin</p>';
       }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
    
    body {
    font-family: Arial, sans-serif;
    background: #f3f4f6;
    padding: 40px;
}

form {
    width: 350px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form div {
    margin-bottom: 15px;
}

p {
    margin-bottom: 5px;
    font-weight: bold;
    color: #444;
}

input, select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

input:focus, select:focus {
    border-color: #007bff;
    outline: none;
}

input[type="submit"] {
    background: #007bff;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.25s;
}

input[type="submit"]:hover {
    background: #0056b3;
}

/* Hiệu ứng hover nhẹ cho toàn form */
form:hover {
    transform: translateY(-1px);
    transition: 0.3s;
}

    </style>
  </head>
  <body>
    <?php
    $sql = "select * from the_loai where id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $quocGia = mysqli_fetch_assoc($result);
    ?>
    <div>
      <h1>Cập nhật thể loại</h1>
      <div>
        <form action="index.php?page_layout=capnhattheloai&id=<?php echo $id ?>" method="post">
          
          <div class="box">
            <p>Thể loại</p>
            <input type="text" name="ten-the-loai" value="<?php echo $quocGia['ten_the_loai']; ?>">
          </div>
          <div class="box">
            <input type="submit" value="Cập nhật" />
          </div>
        </form>
      </div>