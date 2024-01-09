<?php 
include('includes/header.php');
include('admin-sound/config.php');
?>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo" style="display: flex; justify-content: space-between;">
                        <a href="./index.php"><img src="img/logo.png" alt="" height="50px"></a>
                        <h2 style="font-weight: bold; color: white;">MUZIK</h2>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about.php">About</a></li>
                                <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./videos.php">Videos Song</a></li>
                                    <li><a href="./audio.php">Audio Song</a></li>
                                    <li><a href="./artist.php">Artist Details</a></li>
                                </ul>
                            </li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Videos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Video Section Begin -->
    <section class="videos spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>YOutube feed</h2>
                        <h1>Latest videos</h1>
                    </div>
                    <div class="videos__large__item set-bg" data-setbg="img/videos/large-item.jpg">
                        <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                        <div class="videos__large__item__text">
                            <h4>Martin Garrix & Pierce Fulton feat. Mike Shinoda - Waiting For Tomorrow (Official Video)
                            </h4>
                            <ul>
                                <li>02:35:18</li>
                                <li>Dec 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="videos__slider owl-carousel">
                            
                            <div class="col-lg-3">
                                <div class="videos__item">

                                    <div class="videos__item__pic set-bg" data-setbg="img/videos/videos-1.jpg">
                                        <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1"
                                            class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Electric Love Festival 2019 - The Opening Ceremony</h5>
                                        <ul>
                                            <li>02:35:18</li>
                                            <li>Dec 17, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                 
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="img/videos/videos-2.jpg">
                                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1"
                                            class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Tiësto - Live Electric Daisy Carnival Las Vegas 2019</h5>
                                        <ul>
                                            <li>02:35:18</li>
                                            <li>Dec 17, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="img/videos/videos-3.jpg">
                                        <a href="https://www.youtube.com/watch?v=3nQNiWdeH2Q?autoplay=1"
                                            class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Martin Garrix - Live @ Ultra Music Festival Miami 2019</h5>
                                        <ul>
                                            <li>02:35:18</li>
                                            <li>Dec 17, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="img/videos/videos-4.jpg">
                                        <a href="https://www.youtube.com/watch?v=Srqs4CitU2U?autoplay=1"
                                            class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Armin van Buuren live at Tomorrowland 2019</h5>
                                        <ul>
                                            <li>02:35:18</li>
                                            <li>Dec 17, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="img/videos/videos-3.jpg">
                                        <a href="https://www.youtube.com/watch?v=vBGiFtb8Rpw?autoplay=1"
                                            class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Martin Garrix - Live @ Ultra Music Festival Miami 2019</h5>
                                        <ul>
                                            <li>02:35:18</li>
                                            <li>Dec 17, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

<?php 
include('includes/footer.php')
?>