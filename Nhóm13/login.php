<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="musicaudio";
            $conn = mysqli_connect ($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Ket noi that bai: " . mysqli_connect_error());
            }
            
            
            if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $sql="select * from login where username ='$username' and password='$password'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $count=mysqli_num_rows($result);
                if($count==1){
                    header("Location:account.php");
                }else{
                    echo '<script>'
                    . 'window.location.href="index.php";'
                            . 'alert()"login failed."'
                            . '</script>';
                }
            }    
            $conn->close();
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <div class="back-website">
            <a href="index.php"><img src="image/back_logo.png" alt=""/></a>
        </div>
        <form id="form" action="login.php" method="POST">
            <p>Đăng nhập</p>
            <div class="user">
                <label for="name">Tên người dùng:</label>
                <input type="text" id="name" name="username" size="20" maxlength="50" placeholder="Nhập tên của bạn" required>
            </div>
            <div class="pass">
                <label for="pass">Mật khẩu:</label>
                <input type="password" id="pass" name="password" size="20" maxlength="20" placeholder="Nhập mật khẩu" required>
            </div>
            <a href="account.php" target="target"><input type="submit" value="Đăng nhập" name="submit"></a>
        </form>
    </body>
</html>