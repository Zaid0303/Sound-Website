<?php 
include("includes/header.php");
// include("includes/sidebar.php");
// include("includes/topnav.php");
include("config.php");

?>
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.php" class="header-logo">
               <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Muzik</span> 
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active active-menu">
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li class="active"><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                        <li><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
                        <li><a href="albums.php"><i class="lar la-file-audio"></i>Albums</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="admin-category.php"><i class="ri-function-line"></i>Category</a></li>
                        <li><a href="admin-video.php"><i class="las la-video"></i>Video</a></li>
                        <li><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                        <li><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
                        <li><a href="profile-edit.php"><i class="las la-edit"></i>User Edit</a></li>
                        <li><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li>
                        <li><a href="user-list.php"><i class="las la-th-list"></i>User List</a></li>
                     </ul>
                  </li>
               
        
               </ul>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index.php" class="header-logo">
                        <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="pt-2 pl-2 logo-title">
                           <span class="text-primary text-uppercase">Muzik</span>
                        </div>
                     </a>
                  </div>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
                     <li class="active"><a href="index.php">Home</a></li>
                     <li><a href="latest.php">Latest</a></li>
                     <li><a href="albums.php">Albums</a></li>
                  </ul>
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon">
                        <div class="iq-search-bar">
                           <form action="#" class="searchbox">
                              <input type="text" class="text search-input" placeholder="Search Here..">
                              <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                              <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                           </form>
                        </div>
                     </li>
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span class="ripple rippleEffect " ></span>
                           <i class="ri-search-line text-black"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                           <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                        </form>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="las la-cog"></i>
                           <span class=" dots"></span>
                        </a>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="lar la-envelope"></i>
                           <span class="massage-icon dots badge badge-primary">5</span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Bni Emma Watson</h6>
                                          <small class="float-left font-size-12">13 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                          <small class="float-left font-size-12">20 Apr</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Why do we use it?</h6>
                                          <small class="float-left font-size-12">30 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Variations Passages</h6>
                                          <small class="float-left font-size-12">12 Sep</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                          <small class="float-left font-size-12">5 Dec</small>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="ri-notification-line block"></i>
                           <span class="notice-icon dots badge badge-primary">+</span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Emma Watson Barry</h6>
                                          <small class="float-right">Just Now</small>
                                          <p class="mb-0">95 MB</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <small class="float-right">5 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Two customer is left</h6>
                                          <small class="float-right">2 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded img-fluid" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New Mail from Fenny</h6>
                                          <small class="float-right">3 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="images/user/11.png" class="img-fluid rounded-circle" alt="user">
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="sign-in.php" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-card iq-realease">
                     <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="iq-header-title">
                           <h4 class="card-title">New Realeases</h4>
                        </div>
                     </div>
                     <div class="iq-card-body  iq-realeses-back">
                        <div class="row">
                           <div class="col-lg-5 iq-realese-box ">
                              <div class="iq-music-img">
                                 <div class="equalizer">
                                    <span class="bar bar-1"></span>
                                    <span class="bar bar-2"></span>
                                    <span class="bar bar-3"></span>
                                    <span class="bar bar-4"></span>
                                    <span class="bar bar-5"></span>
                                 </div>
                              </div>
                              <div class="player1 row">
                                 <div class="details1 music-list col-6 col-sm-6 col-lg-6">
                                    <div class="now-playing1"></div>
                                    <div class="track-art1"></div>
                                    <div>
                                       <div class="track-name1">Amy Winehouse </div>
                                       <div class="track-artist1">DaBaby Featuring Roddy</div>
                                    </div>
                                 </div>
                                 <div class="buttons1 col-6 col-sm-2 col-lg-3">
                                    <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                                    <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                                    <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-7">
                              <ul class="list-unstyled iq-song-slide mb-0 realeases-banner">
                              <?php 
                                          $fetch_music = "SELECT * FROM music";
                                          $fetch_music_result = mysqli_query($connection, $fetch_music);
                                          if(mysqli_num_rows($fetch_music_result) > 0){
                                             while($row = mysqli_fetch_assoc($fetch_music_result)){

                                       ?> 
                                 <li class="row">
                                    <div class="d-flex justify-content-between align-items-center">

                                       <div class="media align-items-center col-10 col-md-5">
                                          <div class="iq-realese-song ">
                                             <a href ="music-player.php?id=<?php echo $row['m_id']?>"><img src="<?php echo 'song-img/' . $row["m_img"] ?>" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                          </div>
                                          <div class="media-body text-white ml-3">
                                             <p class="mb-0 iq-music-title"><?php echo $row['m_name']?></p>
                                             <small><?php echo $row['m_artist']?></small>
                                          </div>
                                       </div>

                                       <p class="mb-0 col-md-2  iq-m-time">9:52</p>
                                       <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                       <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                       <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center  col-md-1">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle text-primary" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="ri-more-2-fill text-primary"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php 
                                             }
                                          }
                                       ?>
                                 </li>

                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Featured Albums</h4>
                        </div>
                        <div id="feature-album-slick-arrow" class="slick-aerrow-block"></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  feature-album iq-box-hover mb-0">
                        <?php 
                           $fetch_music = "SELECT * FROM music";
                           $fetch_music_result = mysqli_query($connection, $fetch_music);
                           if(mysqli_num_rows($fetch_music_result) > 0){
                              while($row = mysqli_fetch_assoc($fetch_music_result)){

                        ?> 
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href ="music-player.php">
                                          <img src="<?php echo 'song-img/' . $row["m_img"] ?>" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href ="music-player.php?id=<?php echo $row['m_id']?>">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0"><?php echo $row['m_name']?></h6>
                                       <p class="mb-0"><?php echo $row['m_artist']?></p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <?php 
                                 }
                              }
                           ?>
               
                        </ul>
                     </div>
                  </div>
               </div>
              
               <div class="col-lg-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between align-items-center">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Hot Songs</h4>
                              </div>
                              <div id="hot-song-slick-arrow" class="slick-aerrow-block"></div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="list-unstyled row hot-songs mb-0">
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/01.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">God Whispered Your Name</h6>
                                                <small>Maggie Rogers</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/02.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Mood Swings</h6>
                                                <small>Maren Morris</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent mb-0 mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/03.png"  class="img-fluid avatar-60" alt=""></a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Something Special</h6>
                                                <small>Rico Nasty</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/04.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Tell Me U Luv Me</h6>
                                                <small>Kali Uchis</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/05.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                                <small>Juice WRLD</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent mb-0 mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/06.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0">Up Up And Away</h6>
                                                <small>Black Eyed Peas</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/07.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                                <small>Juice WRLD</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/08.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">More Than My Hometown </h6>
                                                <small>Keith Urban</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent mb-0 mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/09.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">3 Headed Goat</h6>
                                                <small>Clairo</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between align-items-center">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Hot Video Songs</h4>
                              </div>
                              <div id="hot-video-slick-arrow" class="slick-aerrow-block"></div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="list-unstyled row iq-box-hover hot-video mb-0">
                                 <?php 
                                 $fetch_video = "SELECT * FROM videos";
                                 $fetch_result = mysqli_query($connection, $fetch_video);
                                 if(mysqli_num_rows($fetch_result) > 0){
                                    while($row = mysqli_fetch_assoc($fetch_result)){

                            
                                 ?>
                                 <li class="col-lg-6">
                                    <div class="iq-card  mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="iq-thumb">
                                             <video controls>
                                                <source src="<?php echo 'video-song/' . $row["v_file"] ?>" type="video/mp4" />
                                             </video>
                                          </div>
                                          <div class="feature-list text-center">
                                             <h6 class="font-weight-600  mb-0"><?php echo $row["v_name"] ?></h6>
                                             <p class="mb-0"><?php echo $row["v_artist"] ?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                    <?php 
                                      }
                                   }
                                 ?>
                          
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Footer -->
 <?php 
 include("includes/footer.php");
 ?>