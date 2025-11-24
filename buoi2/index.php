<?php
   //sesion lưu server, tính bảo mật cao 
    session_start();
    $_SESSION["name"] = "Hai Anh 123";
    echo $_SESSION
    //cookie lưu ở phía ng dùng và sdung trong trường hợp ttin kh nhạy cảm, ít qtrong
    $cookieName="user";
    $cookieValue="Hải Anh";

    //86400=30 ngay
    // setcookie($cookieName, $cookieValue,time() +(86400), "/" )
    if(isset($_COOKIE[cookieName]) ){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie ch tồn tại";
    }
?>