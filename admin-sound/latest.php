<?php 
include("includes/header.php");
// include("includes/topnav.php");
// include("includes/sidebar.php");
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
                        <li><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                        <li class="active"><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
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
                     <li><a href="index.php">Home</a></li>
                     <li class="active"><a href="latest.php">Latest</a></li>
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
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Featured Albums</h4>
                        </div>
                        <div id="feature-album-slick-arrow" class="slick-aerrow-block"></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  feature-album iq-box-hover mb-0">
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Doja Cat</h6>
                                       <p class="mb-0">Annie Lennox</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Justin Bieber</h6>
                                       <p class="mb-0">Sade Adu</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Pop Smoke </h6>
                                       <p class="mb-0">Cascada</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Miranda Lambert</h6>
                                       <p class="mb-0">Natasha </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Future Featuring</h6>
                                       <p class="mb-0">Sophie Ellis</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Powfu Featuring</h6>
                                       <p class="mb-0">Cheryl Cole</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Pop Smoke</h6>
                                       <p class="mb-0">Patricia Kaas</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Asylum</h6>
                                       <p class="mb-0">Shreya Ghoshal</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Before You Go</h6>
                                       <p class="mb-0">Lewis Capaldi</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-2 iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/feature-album/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Don't Start Now</h6>
                                       <p class="mb-0">Dua Lipa</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Top Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="albums.php">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row iq-box-hover mb-0">
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Enjoy Yourself</h6>
                                       <p class="mb-0">cupcakKe </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Pretty Heart</h6>
                                       <p class="mb-0">Niki</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">The Climb Back</h6>
                                       <p class="mb-0">King Princess</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Got It On Me</h6>
                                       <p class="mb-0">Bulow</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Stuck With U</h6>
                                       <p class="mb-0">Tierra Whack</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Be Like That</h6>
                                       <p class="mb-0">Ravyn Lenae</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">God Whispered </h6>
                                       <p class="mb-0">Amber Mark</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">One Of Them Girls</h6>
                                       <p class="mb-0">Rina</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Mood Swings</h6>
                                       <p class="mb-0">Yaeji</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Something Special</h6>
                                       <p class="mb-0">Morgan</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Tell Me U Luv</h6>
                                       <p class="mb-0">BbyMutha</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Up Up And Away</h6>
                                       <p class="mb-0">Britney</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/13.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Fighting Demons</h6>
                                       <p class="mb-0">Kylie</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/14.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">More Than My Ho</h6>
                                       <p class="mb-0">Fiona Apple</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/15.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Girl Of My Dreams</h6>
                                       <p class="mb-0">Frank</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/16.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0"> In My Feelings</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/17.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Does To Me</h6>
                                       <p class="mb-0">Elvis Presley</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/18.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Man Of The Year</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/19.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Dollaz On</h6>
                                       <p class="mb-0">Celine Dion</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/20.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Enjoy Yourself</h6>
                                       <p class="mb-0">Prince</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/21.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">The Climb Back</h6>
                                       <p class="mb-0">Elton John</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/22.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">More Than My </h6>
                                       <p class="mb-0">Morgan Wallen</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/23.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Girl Of My Dreams</h6>
                                       <p class="mb-0">Rod Wave</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/24.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">3 Headed Goat</h6>
                                       <p class="mb-0">Mariah Carey</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/25.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Something..</h6>
                                       <p class="mb-0">Pop Smoke</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/26.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">I Love My Country</h6>
                                       <p class="mb-0">Florida Georgia</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/27.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Girls Like You</h6>
                                       <p class="mb-0">DaBaby</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card  mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/28.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">I Like It</h6>
                                       <p class="mb-0">Post Malone</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/29.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Meant To Be</h6>
                                       <p class="mb-0">Luke Combs</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/30.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">God's Plan</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Popular Hindi Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="albums.php">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  iq-box-hover mb-0">
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card ">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Said Sum</h6>
                                       <p class="mb-0">Moneybagg Yo</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Toosie Slide</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Girls In The Hood</h6>
                                       <p class="mb-0">Megan Thee </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Supalonely</h6>
                                       <p class="mb-0">BENEE Featuring</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Walk Em Down</h6>
                                       <p class="mb-0">NLE Choppa</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Blood On</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">One Big Country</h6>
                                       <p class="mb-0">LOCASH</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Righteous</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0  mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got What I Got</h6>
                                       <p class="mb-0">Jason Aldean</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">I Love My Country</h6>
                                       <p class="mb-0">Florida Georgia</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got It On Me</h6>
                                       <p class="mb-0">Summer Walker</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Like That</h6>
                                       <p class="mb-0">Stefflon Don</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Featured Albums</h4>
                        </div>
                        <div id="feature-album-artist-slick-arrow" class="slick-aerrow-block"></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row feature-album-artist mb-0">
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Pixie Lott</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/02.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Jessie Ware</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/03.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Alesha Dixon</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/04.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Sarah Connor</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/05.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Agnes</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/06.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Rebecca</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/07.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Grace </h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/08.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Courtney</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/09.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Billie Eilish</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.php">
                                    <img src="images/dashboard/feature-album-artist/10.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.php">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Normani</h6>
                              </div>
                           </li>
                        </ul>
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