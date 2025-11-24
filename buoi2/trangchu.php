<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header('location.php');
    }
    ?>
    <h1>Trang Chủ</h1>
    <?php
        echo "xin chhaof" . $_SESSION["username"];
    ?>
</body>
</html>