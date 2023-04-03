<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vivek Music Player</title>
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
            <div class="access">
                    <a href="login.php"><input type="submit" value="Đăng Nhập" name="submit"></a>                    
                    <a href="signup.php"><input type="submit" value="Đăng Ký" name="submit"></a>
            </div>
        </nav>
        <main>
            <aside class="aside section">
                <div class="top">
                    <h1 style="margin-bottom: 12px;">Top Nghe Nhiều Nhất</h1>
                    <div class="top-content">
                        <div class="card">
                            <div>
                                <img src="image/songs/willow.jpeg" alt="">
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Willow</h3>
                                <p>Dec , 2020</p>
                            </div>
                            <div class="options">
                                <label for="top-checkbox"><i class="fas fa-ellipsis-h" style="cursor: pointer;"></i></label>
                                <input type="checkbox" id="top-checkbox">
                                <div class="top-dropdown">
                                    <div class="drop-item">
                                        <p><i class="fas fa-play-circle"></i><a href="Info.php">Nghe</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-list-ul"></i><a href="#">Mua</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-music"></i><a href="#">Thêm vào giỏ hàng</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-info-circle"></i><a href="#">Thông tin</a></p>
                                    </div>
                                </div>
                                <p>3:35</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="image/songs/Weeknd.jpg" alt="">
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Blinding Lights</h3>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="options">
                                <label for="top-checkbox2"><i class="fas fa-ellipsis-h" style="cursor: pointer;"></i></label>
                                <input type="checkbox" id="top-checkbox2">
                                <div class="top-dropdown">
                                    <div class="drop-item">
                                        <p><i class="fas fa-play-circle"></i><a href="Info.php">Nghe</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-list-ul"></i><a href="#">Mua</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-music"></i><a href="#">Thêm vào giỏ hàng</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-info-circle"></i><a href="#">Thông tin</a></p>
                                    </div>
                                </div>
                                <p>3:20</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="image/songs/DaBaby.jpg" alt="">
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>ROCKSTAR</h3>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="options">
                                <label for="top-checkbox3"><i class="fas fa-ellipsis-h" style="cursor: pointer;"></i></label>
                                <input type="checkbox" id="top-checkbox3">
                                <div class="top-dropdown">
                                    <div class="drop-item">
                                        <p><i class="fas fa-play-circle"></i> <a href="Info.php">Nghe</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-list-ul"></i><a href="#">Mua</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-music"></i><a href="#">Thêm vào giỏ hàng</a></p>
                                    </div>
                                    <hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-info-circle"></i><a href="#">Thông tin</a></p>
                                    </div>
                                </div>
                                <p>3:02</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="image/songs/dynamite.jpg" alt="">
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Dynamite</h3>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="options">
                                <label for="top-checkbox4"><i class="fas fa-ellipsis-h" style="cursor: pointer;"></i></label>
                                <input type="checkbox" id="top-checkbox4">
                                <div class="top-dropdown">
                                    <div class="drop-item">
                                        <p><i class="fas fa-play-circle"></i><a href="Info.php">Nghe</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-list-ul"></i><a href="#">Mua</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-music"></i><a href="#">Thêm vào giỏ hàng</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-info-circle"></i><a href="#">Thông tin</a></p>
                                    </div>
                                </div>
                                <p>3:19</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="image/songs/shit.png" alt="">
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>WAP</h3>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="options">
                                <label for="top-checkbox5"><i class="fas fa-ellipsis-h" style="cursor: pointer;"></i></label>
                                <input type="checkbox" id="top-checkbox5">
                                <div class="top-dropdown">
                                    <div class="drop-item">
                                        <p><i class="fas fa-play-circle"></i> <a href="Info.php">Nghe</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-list-ul"></i><a href="#">Mua</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-music"></i><a href="#">Thêm vào giỏ hàng</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-info-circle"></i><a href="#">Thông tin</a></p>
                                    </div>
                                </div>
                                <p>4:44</p>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="image/songs/falling.jpg" alt="">
                            </div>
                            <div class="song" style="margin: auto 10%;">
                                <h3>Falling </h3>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="options">
                                <label for="top-checkbox6"><i class="fas fa-ellipsis-h" style="cursor: pointer;"></i></label>
                                <input type="checkbox" id="top-checkbox6">
                                <div class="top-dropdown">
                                    <div class="drop-item">
                                        <p><i class="fas fa-play-circle"></i> <a href="Info.php">Play Now</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-list-ul"></i><a href="#">Mua</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-music"></i><a href="#">Thêm vào giỏ hàng</a></p>
                                    </div><hr>
                                    <div class="drop-item">
                                        <p><i class="fas fa-info-circle"></i><a href="#">Thông tin</a></p>
                                    </div>
                                </div>
                                <p>2:39</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="noibat">
                    <h1 style="margin-bottom: 12px;">Popular Artists</h1>
                    <div class="noibat-noidung">
                        <div>
                            <a href="NgheSi/Adele.php"><img src="image/popular artists/adele.jpg" alt=""></a>
                            <p> Adele</p>
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
                            <video width="320" height="240" controls autoplay muted>
                                <source src="video/video2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" controls autoplay muted>
                                <source src="video/video2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="outer-div">
                        <div class="inner-div">
                            <video width="320" height="240" controls autoplay muted>
                                <source src="video/video2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="aside section-2">
                <div class="heading">
                    <h1>Thư Viện</h1>
                </div>
                <div class="thuvien-noidung">
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">01</div>
                            <div class="coverer">
                                <img src="image/playlist/austin-neill-kKlVSrFbjYY-unsplash.jpg" alt="">
                            </div>
                            <div>
                                <div>Alone</div>
                                <p>Alan Walker</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">02</div>
                            <div class="coverer">
                                <img src="image/playlist/after.jpg" alt="">
                            </div>
                            <div>
                                <div>Alone Again</div>
                                <p>Weeknd</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">03</div>
                            <div class="coverer">
                                <img src="image/playlist/stoney.jpg" alt="">
                            </div>
                            <div>
                                <div>White Iverson</div>
                                <p>Post Malone</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">04</div>
                            <div class="coverer">
                                <img src="image/playlist/stoney.jpg" alt="">
                            </div>
                            <div>
                                <div>Go Flex</div>
                                <p>Post Malone</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">05</div>
                            <div class="coverer">
                                <img src="image/playlist/stoney.jpg" alt="">
                            </div>
                            <div>
                                <div>Better Now</div>
                                <p>Post Malone</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">06</div>
                            <div class="coverer">
                                <img src="image/playlist/after.jpg" alt="">
                            </div>
                            <div>
                                <div>Hardest To Love</div>
                                <p>Weeknd</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">07</div>
                            <div class="coverer">
                                <img src="image/playlist/beer.jpg" alt="">
                            </div>
                            <div>
                                <div>Pysco
                                </div>
                                <p>Post Malone</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">08</div>
                            <div class="coverer">
                                <img src="image/playlist/beer.jpg" alt="">
                            </div>
                            <div>
                                <div>Rockstar</div>
                                <p>Post Malone & 21 Savage</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">09</div>
                            <div class="coverer">
                                <img src="image/playlist/stoney.jpg" alt="">
                            </div>
                            <div>
                                <div>Deja Vu</div>
                                <p>Post Malone & Justin Beiber</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">10</div><div class="coverer">
                                <img src="image/popular artists/billie eilish.jpg" alt="">
                            </div>
                            <div>
                                <div>Bad Guy</div>
                                <p>Billie Eilish</p>
                            </div>
                        </div>
                    </div>
                    <div class="thuvien-muc">
                        <div class="trai-noidung">
                            <div style="margin-right:4px;">11</div>
                            <div class="coverer">
                                <img src="image/songs/sorry.jpg" alt="">
                            </div>
                            <div>
                                <div>Sorry</div>
                                <p>Justin Bieber</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </main>
    </body>
</html>