<?php session_start(); ?>
<?php include ('connect.php'); ?>
<html>

<head>
    <style>
        body {
            color: #fff;
            font: 87.5%/1.5em 'Open Sans', sans-serif;
            background: url(images/vn.jpg)no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }



        .form-wrapper {
            width: 300px;
            height: 450px;
            position: absolute;
            top: 50%;
            left: 48%;
            margin: -184px 0px 0px -155px;
            background: rgba(0, 0, 0, 0.27);
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.6), inset 0px 1px 0px rgba(255, 255, 255, 0.04);
        }

        .form-item {
            width: 100%;
        }


        h3 {
            font-size: 25px;
            font-weight: 640;
            margin-bottom: 10px;
            color: #e7e7e7;
            padding: 6px;
            font-family: 'sans-serif', 'helvetica';
        }



        .form-item input {
            border: none;
            background: transparent;
            color: #fff;
            margin-top: 11px;
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2em;
            height: 49px;
            padding: 0 16px;
            width: 100%;
            padding-left: 55px;

        }

        input[type='password'] {
            background: transparent url("images/pass.jpg") no-repeat;
            background-position: 10px 50%;
        }

        input[type='text'] {
            background: transparent url("images/user.jpg") no-repeat;
            background-position: 10px 50%;

        }

        .form-item input:focus {
            outline: none;
            border: 1.4px solid #cfecf0;
        }

        .button-panel {
            margin-bottom: 20px;
            padding-top: 10px;
            width: 100%;
        }

        .button-panel .button {
            background: #00b6df;
            border: none;
            color: #fff;
            cursor: pointer;
            height: 50px;
            font-family: 'helvetica', 'Open Sans', sans-serif;
            font-size: 1.2em;
            text-align: center;
            text-transform: uppercase;
            transition: background 0.6s linear;
            width: 100%;
            margin-top: 10px;
        }

        .button:hover {
            background: #6eb7cb;
        }

        .form-item input,
        .button-panel .button {
            border-radius: 2px
        }

        .reminder {
            text-align: center;
        }

        .reminder a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .reminder a:hover {
            color: #cab6bf;
        }
    </style>
</head>

<body>
    <div class="form-wrapper">

        <form action="dangnhap.php" method="post">
            <h3>Đăng Nhập</h3>


            <div class="form-item">
                <input type="text" name="username" required="required" placeholder="username" autofocus
                    required></input>
            </div>

            <div class="form-item">
                <input type="password" name="password" required="required" placeholder="password" required></input>
            </div>


            <div class="button-panel">
                <input type="submit" class="button" title="login" name="login" value="Đăng Nhập"></input>
            </div>
        </form>
        <?php
         if (isset($_POST['login'])) {
            
            $username = ($_POST['username']);
            $password = ($_POST['password']);
    
            if (!$username || !$password) {
                echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
    
            $password = md5($password);
    
            $query = "SELECT username, password FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
            if (!$result) {
                echo "Tên đăng nhập hoặc mật khẩu không đúng!";
            } else {
                echo "Đăng nhập thành công!";
                header("Location: ./admin/posts_main.php");
            }
    
            
    
        }
        ?>
        <div class="reminder">
            <p>Chưa có tài khoản? <a href="dangky.php">Đăng Ký</a></p>
            <p><a href="index.php">Quay lại</a></p>
        </div>

    </div>

</body>

</html>