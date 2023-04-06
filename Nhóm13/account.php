
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nhóm 13</title>
        <link href="css/display.css" rel="stylesheet" type="text/css"/>
        <link href="css/info3.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/2d9b67a497.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>
        <nav class="navigation-bar">
            <div class="title-combo">
                <div class="website-logo">
                    <img src="image/website_logo.png" alt="">
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
                    <img src="image/website_logo.png" alt="">
                </div>
                <div class="title-combo">
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
            </div>   
        </nav>
        <main>
            <aside class="aside section">
                <div class="top">
                    <h1 style="margin-bottom: 12px;">Top Nghe Nhiều Nhất</h1>
                    <div class="top-content">
                        <div class="card" style="cursor: pointer">
                            <div>
                                <a href="Nhac.php"><img src="image/popular artists/eminem.jpg" alt=""/></a>
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>The Real Slim Shady</h3>
                                <p>4:45</p>
                            </div>
                            <div class="options">
                                <h1>#1</h1>
                                <p>227k</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <a href="Nhac.php"><img src="image/popular artists/bruno mars.jpg" alt=""/></a>
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>That Whats I Like</h3>
                                <p>3:31</p>
                            </div>
                            <div class="options">
                                <h1>#2</h1>
                                <p>213k</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <a href="Nhac.php"><img src="image/popular artists/billie eilish.jpg" alt=""/></a>
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Happier Than Ever</h3>
                                <p>5:15</p>
                            </div>
                            <div class="options">
                                <h1>#3</h1>
                                <p>209k</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <a href="Nhac.php"><img src="image/popular artists/adele.jpg" alt=""/></a>
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Hello</h3>
                                <p>6:06</p>
                            </div>
                            <div class="options">
                                <h1>#4</h1>
                                <p>195k</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <a href="Nhac.php"><img src="image/popular artists/ed sheeran.jpg" alt=""/></a>
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Shape Of You</h3>
                                <p>4:23</p>
                            </div>
                            <div class="options">
                                <h1>#5</h1>
                                <p>187k</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <a href="Nhac.php"><img src="image/popular artists/posty.png" alt=""/></a>
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Sun Flower </h3>
                                <p>2:41</p>
                            </div>
                            <div class="options">
                                <h1>#6</h1>
                                <p>156k</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="noibat">
                    <h1 style="margin-bottom: 12px;">Nghệ Sĩ Nổi Bật</h1>
                    <div class="noibat-noidung">
                        <div>
                            <a href="NgheSi/Adele.php"><img src="image/popular artists/adele.jpg" alt=""></a>
                            <p>Adele</p>
                        </div>
                        <div>
                            <a href="NgheSi/BillieEilish.php"><img src="image/popular artists/billie eilish.jpg" alt=""></a>
                            <p>Billie Eilish</p>
                        </div>
                        <div>
                            <a href="NgheSi/BrunoMars.php"><img src="image/popular artists/bruno mars.jpg"  alt=""></a>
                            <p>Bruno Mars</p>
                        </div>
                        <div>
                            <a href="NgheSi/EdSheeran.php"><img src="image/popular artists/ed sheeran.jpg" alt=""></a>
                            <p>Ed Sheeran</p>
                        </div>
                        <div>
                            <a href="NgheSi/Eminem.php"><img src="image/popular artists/eminem.jpg" alt=""></a>
                            <p>Eminem</p>
                        </div>
                        <div>
                            <a href="NgheSi/PostMalone.php"><img src="image/popular artists/posty.png" alt=""></a>
                            <p>Post Malone</p>
                        </div>
                    </div>
                </div>
                <h1 style="margin-bottom: 12px;">Video Nổi Bật</h1>
                <div class="anhnhac">
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" playsinline autoplay muted>
                                <source src="video/adele.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" playsinline autoplay muted>
                                <source src="video/billieeilish.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" playsinline autoplay muted>
                                <source src="video/brunomars.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" playsinline autoplay muted>
                                <source src="video/edsheeran.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" playsinline autoplay muted loop>
                                <source src="video/eminem.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <a href="Nhac.php">
                                <video width="320" height="240" playsinline autoplay muted loop>
                                    <source src="video/postmalone.mp4#t=30,45" type="video/mp4">
                                </video>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="aside section-2">
                <div class="heading">
                    <h1>Albums Nổi Bật</h1>
                </div>
                <div class="thuvien-noidung">
                    <div class="thuvien-muc">
                        <a href="Albums/eminem.php">
                            <div class="trai-noidung">
                                <div style="margin-right:4px;">01</div>
                                <div class="coverer">
                                    <img src="image/popular artists/eminem.jpg" alt=""/>
                                </div>
                                <div>
                                    <div>The Eminem Show</div>
                                    <p>Eminem</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="thuvien-muc">
                        <a href="Albums/brunomars.php">
                            <div class="trai-noidung">
                                <div style="margin-right:4px;">02</div>
                                <div class="coverer">
                                    <img src="image/popular artists/bruno mars.jpg" alt=""/>
                                </div>
                                <div>
                                    <div>24K Magic</div>
                                    <p>Bruno Mars</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="thuvien-muc">
                        <a href="Albums/adele.php">
                            <div class="trai-noidung">
                                <div style="margin-right:4px;">03</div>
                                <div class="coverer">
                                    <img src="image/popular artists/adele.jpg" alt=""/>
                                </div>
                                <div>
                                    <div>25</div>
                                    <p>Adele</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="thuvien-muc">
                        <a href="Albums/edsheeran.php">
                            <div class="trai-noidung">
                                <div style="margin-right:4px;">04</div>
                                <div class="coverer">
                                    <img src="image/popular artists/ed sheeran.jpg" alt=""/>
                                </div>
                                <div>
                                    <div>You Need Me</div>
                                    <p>Ed Sheeran</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="thuvien-muc">
                        <a href="Albums/postmalone.php">
                            <div class="trai-noidung">
                                <div style="margin-right:4px;">05</div>
                                <div class="coverer">
                                    <img src="image/popular artists/posty.png" alt=""/>
                                </div>
                                <div>
                                    <div>Stoney</div>
                                    <p>Post Malone</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="thuvien-muc">
                        <a href="Albums/billieeilish.php">
                            <div class="trai-noidung">
                                <div style="margin-right:4px;">06</div>
                                <div class="coverer">
                                    <img src="image/popular artists/billie eilish.jpg" alt=""/>
                                </div>
                                <div>
                                    <div>Happier Than Ever</div>
                                    <p>Billie Eilish</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>
        </main>
    </body>
</html>
<?php
    include("auth_session.php");
?>