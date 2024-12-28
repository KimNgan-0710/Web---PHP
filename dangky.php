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

        <form action="dangky.php" method="post">
            <h3>Đăng Ký</h3>
            <div class="form-item">
                <input type="text" name="name" required="required" placeholder="Name" autofocus required></input>
            </div>

            <div class="form-item">
                <input type="text" name="username" required="required" placeholder="Username" autofocus required></input>
            </div>

            <div class="form-item">
                <input type="password" name="password" required="required" placeholder="Password" required></input>
            </div>
            <div class="form-item">
                <input type="text" name="role_id" required="required" placeholder="Role ID" required></input>
            </div>

            <div class="button-panel">
                <input type="submit" class="button" title="register" name="register" value="Đăng Ký"></input>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $role_id = $_POST["role_id"];
            $sql = "INSERT INTO users (name, username, password, role_id) VALUES ('$name','$username', '$password', '$role_id')";
            if ($conn->query($sql) === TRUE) {
                echo "";
            } else {
                echo "" . $sql . "<br>" . $error_message; 
            }
        }

        ?>
        <div class="reminder">
            <p>Đã có tài khoản? <a href="dangnhap.php">Đăng Nhập</a></p>
            <p><a href="index.php">Quay lại</a></p>
        </div>

    </div>

</body>

</html>