<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="musicaudio";
            $conn = mysqli_connect ($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Ket noi that bai: " . mysqli_connect_error());
            }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/signup.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="back-website">
            <a href="index.php"><img src="image/back_logo.png" alt=""/></a>
        </div>
        <form id="form" action="signup.php" method="POST">
            <p>Đăng ký</p>
            <span class="lname">
                Họ: <input type="text" name="firstname" size="20" maxlength="20" placeholder="Nhập họ của bạn">
            </span><br>
            <span class="fname">
                Tên: <input type="text" name="lastname" size="20" maxlength="20" placeholder="Nhập tên của bạn" required>
            </span><br>
            <span class="email">
                E-Mail: <input type="email" name="email" size="20" maxlength="20" placeholder="Nhập Email của bạn" required>
            </span><br>
            <span class="date">
                Ngày sinh: <input type="date" name="date" required>
            </span><br>
            <span class="name">
                Tên người dùng: <input type="text" name="username" size="20" maxlength="20" placeholder="Nhập tên người dùng" required>
            </span><br>
            <span class="pass">
                Mật khẩu: <input type="password" name="password" size="20" maxlength="20" placeholder="Nhập mật khẩu" required>
            </span><br>
            <input type="submit" value="Đăng ký">
        </form>
    </body>
</html>
