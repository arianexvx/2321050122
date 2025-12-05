<?php
include 'connect.php'; 
    $id = $_GET['id'];
    if(!empty($_POST['ten-phim']) && 
       !empty($_POST['dao-dien-id']) &&
       !empty($_POST['nam-phat-hanh']) &&
       !empty($_POST['poster']) &&
       !empty($_POST['quoc-gia-id']) &&
       !empty($_POST['so-tap']) &&
       !empty($_POST['trailer']) &&
       !empty($_POST['mo-ta'])) {
        $tenPhim = $_POST['ten-phim'];
        $daoDien = $_POST['dao-dien-id'];
        $namPhatHanh = $_POST['nam-phat-hanh'];
        $poster = $_POST['poster'];
        $quocGia = $_POST['quoc-gia-id'];
        $soTap = $_POST['so-tap'];
        $trailer = $_POST['trailer'];
        $moTa = $_POST['mo-ta'];
        $sql = "UPDATE phim 
        SET ten_phim = '$tenPhim',
            dao_dien_id = '$daoDien',
            nam_phat_hanh = '$namPhatHanh',
            poster = '$poster',
            quoc_gia_id = '$quocGia',
            so_tap = '$soTap',
            trailer = '$trailer',
            mo_ta ='$moTa'
        WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=phim'); 
       }else{
        echo '<p class="warning">Vui lòng nhập đầy đủ thông tin</p>';
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
    $sql = "select * from phim where id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $phim = mysqli_fetch_assoc($result);
    ?>
    <div>
      <h1>Cập nhật phim</h1>
      <div>
        <form action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post">
          <div class="box">
            <p>Tên phim</p>
            <input name="ten-phim" type="text" placeholder="Tên phim" value="<?php echo $phim['ten_phim'] ?>"/>
          </div>
          <div class="box">
             <p>đạo diễn</p>
             <input type="number" name="dao-dien-id" value="<?php echo $phim['dao_dien_id'] ?>">
          </div>
          <div class="box">
             <p>Năm phát hành</p>
             <input type="number" name="nam-phat-hanh" value="<?php echo $phim['nam_phat_hanh'] ?>">
          </div>
          <div class="box">
               <p>Poster</p>
               <input type="text" name="poster" value="<?php echo $phim['poster'] ?>">
          </div>
          
          <div class="box">
           <p>Trailer</p>
           <input type="text" name="trailer" value="<?php echo $phim['trailer'] ?>">
          </div>
        <div class="box">
            <p>Số tập</p>
            <input type="number" name="so-tap" value="<?php echo $phim['so_tap'] ?>">
        </div>

          <div class="box">
            <p>Quốc gia</p>
            <select name="quoc-gia-id">
                <option value="1"  <?php echo $phim['quoc_gia_id'] == 1 ? "selected" : "" ?>>Việt Nam</option>
                <option value="2"  <?php echo $phim['quoc_gia_id'] == 2 ? "selected" : "" ?>>Mỹ</option>
                <option value="3"  <?php echo $phim['quoc_gia_id'] == 3 ? "selected" : "" ?>>Hàn Quốc</option>
                <option value="4"  <?php echo $phim['quoc_gia_id'] == 4 ? "selected" : "" ?>>Nhật Bản</option>
                <option value="5"  <?php echo $phim['quoc_gia_id'] == 5 ? "selected" : "" ?>>Anh</option>
                <option value="6"  <?php echo $phim['quoc_gia_id'] == 6 ? "selected" : "" ?>>Pháp</option>
                <option value="7"  <?php echo $phim['quoc_gia_id'] == 7 ? "selected" : "" ?>>Đức</option>
                <option value="8"  <?php echo $phim['quoc_gia_id'] == 8 ? "selected" : "" ?>>Trung Quốc</option>
                <option value="9"  <?php echo $phim['quoc_gia_id'] == 9 ? "selected" : "" ?>>Thái Lan</option>
                <option value="10" <?php echo $phim['quoc_gia_id'] == 10 ? "selected" : "" ?>>Ấn Độ</option>
            </select>
          </div>
          <p>Mô tả</p>
            <textarea name="mo-ta"><?php echo $phim['mo_ta'] ?></textarea>
         </div>
          <div class="box">
            <input type="submit" value="Cập nhật" />
          </div>
        </form>
      </div>
    
   
  </body>
</html>