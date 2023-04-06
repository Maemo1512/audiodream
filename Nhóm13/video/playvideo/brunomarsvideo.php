<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../css/display.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/2d9b67a497.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <style>
            form{
                top: 50%;   
                left: 50%;
                position: absolute;
                transform: translate(-50%,-50%);
                box-sizing: border-box;
                padding-top: 25px;
                width: 35%;
                height: 80%;
                background: rgb(137,247,226);
                background: radial-gradient(circle, rgba(137,247,226,1) 18%, rgba(245,150,243,1) 100%);
                box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            }
            .form-cart{
                top: 50%;   
                left: 50%;
                position: absolute;
                transform: translate(-50%,-50%);
                box-sizing: border-box;
                padding-top: 25px;
                width: 320px;
                background: transparent;
                font-size: 25px;
                font-weight: bold;    
            }
            .price-container{
                display: flex;
                align-items: center;
                border-radius: 5px;
                padding: 10px;
                max-width: 50%;
                margin: auto;
                flex-direction: column;
                border: 1px solid black;
            }
            .price {
                font-size: 24px;
                font-weight: bold;
            }
            .buy-btn {
                background-color: #d700ff;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
            }
            .form-cart audio{
                margin-top: 5px; 
                margin-bottom: 0.1px;
            }
            .form-cart h3,h5{
                text-align: center;
            }
            .playvid{
                text-align: center;
            }
            .playvid button{
                margin-bottom: 5px;
                border: none;
                border-radius: 20px;
                height: 40px;
                width: 20%;
                background: #ffc3fc;
                cursor: pointer;
                transition: all 0.3s;
            }
	</style>
    </head>
    <body>
        <nav class="navigation-bar">
            <div class="title-combo">
                <div class="website-logo">
                    <img src="../../image/website_logo.png" alt=""/>
                </div>
                <div class="website-name">
                    <h2>Studio</h2>
                    <h6>Music Player</h6>
                </div>
            </div>
            <div class="search-bar">
                <div>
                    <i class="fas fa-search search-ico"></i>
                </div>
                <input type="text" name="search" placeholder="Search">
            </div>
            <div class="title-combo">
                <div class="profile-picture">
                    <img src="../../image/profile_picture.png" alt=""/>
                </div>
                <div class="profile">
                    <h4>
                         <a href="#queue-option-box">Queue</a>
                         <a href="#">
                             <i class="fas fa-chevron-circle-down"></i>
                         </a>
                    </h4>
                    <div class="queue-options" id="queue-option-box">
                        <p><a href="" style="color:#007bff; font-weight:bolder;">Tài Khoản</a></p>
                        <hr>
                        <p><a href="" style="color:#007bff; font-weight:bolder;">Giỏ Hàng</a></p>
                        <hr>
                        <p><a href="index.php" style="color:red; font-weight:bolder;">Đăng Xuất</a></p>
                    </div>
                </div>
            </div>    
        </nav>
        <form>
            <div class="form-cart">
                <div class="text">
                    <h3>That's What I Like</h3>
                    <h5>Bruno Mars</h5>
                </div>
                <div class="playvid">
                    <video id="video" width="320" height="240" autoplay >
                        <source src="../brunomars.mp4" type="video/mp4">
                    </video>
                    <button onclick="playAudio()" type="button"><i class="fa fa-play"></i></button>
                    <button onclick="pauseAudio()" type="button"><i class="fa fa-pause-circle"></i></button> 
                    <script>
                    var x = document.getElementById("video"); 
                    function playAudio(){ 
                        x.play(); 
                    }
                    function pauseAudio(){ 
                        x.pause(); 
                    }
                    </script>
                    <script>
                        var video = document.getElementById("video");
                        video.autoplay = true;
                        video.load();
                    </script>
                </div>
                <div class="price-container">
                    <div class="price">10000/đồng</div>
                    <button class="buy-btn"><i class="fa fa-shopping-cart"></i>Mua</button>
                </div>
            </div>
	</form>
    </body>
</html>
