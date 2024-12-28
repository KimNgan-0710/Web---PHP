
<?php include "header.php";?>
<h3><marquee>Chào mừng bạn đến với website Dulich.Vn</marquee></h3>
<!DOCTYPE html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            
            background-color: #f4f4f4;
            background-image: url(./img/image.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        a{
            text-decoration: none;
            color: #f4f4f4;
        }

        .btn {
            text-align: center;
            margin-right: auto;
            flex-direction: column;
            margin-top: 15px;
        }

        .btn button {
            font-family: Times New Roman Georgia, serif;
            font-size: 15px;
            padding: 20px;
            margin: 5px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            
        }
    </style>
</head>

    <div class="main">
        <div class="btn">
            <button class="cauhoi">
                <a href="dangnhap.php">Đăng Nhập</a>
            </button>
            <button class="user">
                <a href="dangky.php">Đăng Ký</a>
            </button>
        
        </div>
    </div>


</body>
</html>
<?php

?>
<?php include "footer.php";?>
