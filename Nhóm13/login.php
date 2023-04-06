<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="css/login-signup.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <div class="back-website">
            <a href="index.php"><img src="image/back_logo.png" alt=""/></a>
        </div>
        <?php
            $con = mysqli_connect("localhost","root","","LoginSystem");
            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            if (isset($_POST['username'])) {
                $username = stripslashes($_REQUEST['username']);    
                $username = mysqli_real_escape_string($con, $username);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                $query    = "SELECT * FROM `users` WHERE username='$username'
                             AND password='" . md5($password) . "'";
                $result = mysqli_query($con, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                if ($rows == 1) {
                    $_SESSION['username'] = $username;
                    header("Location: account.php");
                } else {
                    echo "<script>\n alert('Sai Tên Đăng Nhập Hoặc Mật Khẩu');\n";
                    echo "window.location='login.php'";
                    echo "</script>";
                }
            } else {
        ?>
            <form class="form" method="post" name="login">
                <h1 class="login-title">Đăng Nhập</h1>
                <input type="text" class="login-input" name="username" placeholder="Nhập Tên Đăng Nhập" autofocus="true"/>
                <input type="password" class="login-input" name="password" placeholder="Nhập Mật Khẩu"/>
                <input type="submit" value="Đăng Nhập" name="submit" class="login-button"/>
                Chưa Có Tài Khoản?<p class="link"><a href="signup.php">Đăng Ký Ngay</a></p>
            </form>
        <?php
            }
        ?>
    </body>
</html>