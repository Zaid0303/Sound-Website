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

        <!-- Track Section Begin -->
        <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="#" class="primary-btn border-btn">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="track__content nice-scroll">
                        <?php 
                        $fetch_music = "SELECT * FROM music";
                        $fetch_music_result = mysqli_query($connection, $fetch_music);
                        if(mysqli_num_rows($fetch_music_result) > 0){
                        while($row = mysqli_fetch_assoc($fetch_music_result)){

                        ?>
                        <div class="single_player_container">
                            <h4><?php echo $row['m_name']?></h4>
                            
                            <audio controls>
                            <source src="<?php echo 'admin-sound/audio-song/' . $row["m_file"] ?>">
                            </audio>
                            <!-- <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    Player Controls
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    Progress Bar
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    Volume Controls
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <?php 
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="track__pic">
                        <img src="img/track-right.jpg" alt="">
                    </div>
                </div>
                                <!-- <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div> -->
                <!-- <style>
                    *{
                    margin: 0;
                    padding: 0;
                }
                .rate {
                    float: left;
                    height: 46px;
                    padding: 0 10px;
                }
                .rate:not(:checked) > input {
                    position:absolute;
                    top:-9999px;
                }
                .rate:not(:checked) > label {
                    float:right;
                    width:1em;
                    overflow:hidden;
                    white-space:nowrap;
                    cursor:pointer;
                    font-size:30px;
                    color:#ccc;
                }
                .rate:not(:checked) > label:before {
                    content: '★ ';
                }
                .rate > input:checked ~ label {
                    color: #ffc700;    
                }
                .rate:not(:checked) > label:hover,
                .rate:not(:checked) > label:hover ~ label {
                    color: #deb217;  
                }
                .rate > input:checked + label:hover,
                .rate > input:checked + label:hover ~ label,
                .rate > input:checked ~ label:hover,
                .rate > input:checked ~ label:hover ~ label,
                .rate > label:hover ~ input:checked ~ label {
                    color: #c59b08;
                }
                </style> -->
            </div>
        </div>
    </section>
    <!-- Track Section End -->






<?php 
include('includes/footer.php')
?>