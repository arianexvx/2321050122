<?php
include 'connect.php';

    if(!empty($_POST['ten-phim']) && 
       !empty($_POST['dao-dien']) &&
       !empty($_POST['nam-phat-hanh']) &&
       !empty($_POST['poster']) &&
       !empty($_POST['quoc-gia']) &&
       !empty($_POST['so-tap']) &&
       !empty($_POST['trailer']) &&
       !empty($_POST['mo-ta'])) {

        $tenPhim = $_POST['ten-phim'];
        $daoDien = $_POST['dao-dien'];
        $namPhatHanh = $_POST['nam-phat-hanh'];
        $poster = $_POST['poster'];
        $quocGia = $_POST['quoc-gia'];
        $soTap = $_POST['so-tap'];
        $trailer = $_POST['trailer'];
        $moTa = $_POST['mo-ta'];

        $sql = "INSERT INTO phim 
                (ten_phim, dao_dien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta)
                VALUES 
                ('$tenPhim', '$daoDien', '$namPhatHanh', '$poster', '$quocGia', '$soTap', '$trailer', '$moTa')";
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=phim'); 
       }else{
        echo '<p class="warning">Vui lòng nhập đầy đủ thông tin</p>';
       }

       // Lấy danh sách đạo diễn
        $sqlDaoDien = "SELECT id, ten_dang_nhap FROM nguoi_dung ORDER BY ten_dang_nhap";
        $dsDaoDien = mysqli_query($conn, $sqlDaoDien);

        // Lấy danh sách quốc gia
        $sqlQuocGia = "SELECT id, ten_quoc_gia FROM quoc_gia ORDER BY ten_quoc_gia";
        $dsQuocGia = mysqli_query($conn, $sqlQuocGia);
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
    background: pink;    
    font-weight: bold;
    cursor: pointer;
    transition: 0.25s;
}

input[type="submit"]:hover {
    background: pink;
}

/* Hiệu ứng hover nhẹ cho toàn form */
form:hover {
    transform: translateY(-1px);
    transition: 0.3s;
}

    </style>
  </head>
  <body>
    <div>
      <h1>Thêm phim</h1>
      <div>
        <form action="index.php?page_layout=themphim" method="post">
          <div class="box">
            <p>Ten phim</p>
            <input name="ten-phim" type="text" placeholder="Tên phim"/>
          </div>
          <div class="box">
            <p>Đạo diễn</p>
            <select name="dao-dien">
              <option value="">Dao dien</option>
              <?php while($row = mysqli_fetch_assoc($dsDaoDien)) : ?>
                <option value="<?= $row['id'] ?>"><?= $row['ten_dang_nhap'] ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="box">
            <p>Nam phat hanh</p>
            <input name="nam-phat-hanh" type="number" placeholder="Năm phát hành"/>
          </div>
          <div class="box">
            <p>Poster</p>
            <input name="poster" type="text" placeholder="Poster"/>
          </div>
          <div class="box">
            <p>Quốc gia</p>
            <select name="quoc-gia">
              <option value="">Quoc gia</option>
              <?php while($row = mysqli_fetch_assoc($dsQuocGia)) : ?>
<option value="<?= $row['id'] ?>"><?= $row['ten_quoc_gia'] ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="box">
            <p>So tap</p>
            <input name="so-tap" type="number" placeholder="Số tập"/>
          </div>
          <div class="box">
            <p>Trailer</p>
            <input name="trailer" type="text" placeholder="Trailer"/>
          </div>
          <div class="box">
            <p>Mo ta</p>
            <input name="mo-ta" type="text" placeholder="Mô tả"/>
          </div>
          <div class="box">
            <input type="submit" value="Thêm mới" />
          </div>
        </form>
      </div>
    </div>
    
  </body>
</html>