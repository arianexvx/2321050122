<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php 
        //in ra màn hình
        echo "hello world! <br>";

        echo"Hi!";
        //khai báo biến
        //cú pháp $ + tên biến = gtri of biến
        $ten ="Hai Anh iu";
        $tuoi= 19; 

        echo $ten . " " . $tuoi . "tuổi <br>";
         
        //hằng
        define("soPi", "3.14");
        echo soPi;

        //phân việt '' và " "
        echo '$ten' . "<br>";
        echo "$ten" . "<br>";

        //chuỗi 
        #kiểm tra độ dài của chuỗi
         echo strlen($ten) . "<br>";
         #đếm số từ
         echo str_word_count($ten) . "<br>";
        #tìm kiếm kí tự trong chuỗi
        echo strpos($ten,"A") ."<br>"; //vị trí nào
        #thay thế kí tự trong chuỗi
         echo str_replace("Anh","Enh", $ten) . "<br>";
        //toán tử 
        $soThuNhat = 10;
        $soThuHai = 5;
        $tong = $soThuNhat + $soThuHai;
        #cộng,trừ,nhân,chia y chang
        # += -= *= /= %=
        #so sánh == != > < >= <= ===
        //echo $soThuNhat %= $soThuHai;

        //câu điều kiện
        if ($tong < 15) {
           echo "tổng < 15";
        } 
        elseif ($tong == 15) {
           echo "tổng = 15";
        } 
        else {
           echo "tổng > 15";
        }

        //switch case
        $color="red";
        switch($color) {
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo"no color";
                break;
        }

        //vòng lặp for
       // for(%i=0; $i<100; $i++) {
         //   echo $i . "<br>";
        //}
        //mảng
        $mang = ["An","Nhat Anh", "Vu Anh"] ;
        //đếm phần tử 
        echo count($mang);
        echo $mang[1] . "<br>";
        print_r($mang);
        $mang[0] = "Hai Anh"; #đổi ptu
        #xóa
        unset($mang[1]);
    ?>
</body>
</html>