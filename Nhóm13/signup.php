
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Đăng Ký Thành Công</h3><br/>
                  <p class='link'>Nhấp vào <a href='login.php'>Đây</a> Để Đăng Nhập</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Đăng Ký</h1>
        <input type="text" class="login-input" name="username" placeholder="Nhập Tên Đăng Nhập" required />
        <input type="text" class="login-input" name="email" placeholder="Email">
        <input type="password" class="login-input" name="password" placeholder="Nhập Mật Khẩu">
        <input type="submit" name="submit" value="Đăng Ký" class="login-button">
        Đã có tài khoản?<p class="link"><a href="login.php">Đăng nhập ở đây</a></p>
    </form>
<?php
    }
?>
    </body>
</html>
