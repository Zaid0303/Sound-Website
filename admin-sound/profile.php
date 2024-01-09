<?php 
include("includes/header.php");

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
                     <li>
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                           <li><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
                           <li><a href="albums.php"><i class="lar la-file-audio"></i>Albums</a></li>
                        </ul>
                     </li>
                     <li>
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="admin-category.php"><i class="ri-function-line"></i>Category</a></li>
                        <li><a href="admin-video.php"><i class="las la-video"></i>video</a></li>
                        <li><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                     </ul>
                  </li>

                     <li class="active active-menu">
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle" style="">
                           <li class="active"><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
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
               <div class="row profile-content">
                  <div class="col-12 col-md-12 col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page">
                           <div class="profile-header">
                              <div class="cover-container text-center">
                                 <img src="images/user/1.jpg" alt="profile-bg" class="rounded-circle img-fluid">
                                 <div class="profile-detail mt-3">
                                    <h3>Barry Tech</h3>
                                    <p class="text-primary">Web designer</p>
                                    <p>Phasellus faucibus mollis pharetra. Proin blandit ac massa.Morbi nulla dolor, ornare at commodo non, feugiat non nisi.</p>
                                 </div>
                                 <div class="iq-social d-inline-block align-items-center">
                                    <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                       </li>
                                       <li>
                                          <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                       </li>
                                       <li >
                                          <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Personal Details</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Birthday</h6>
                                    <p class="mb-0">3rd March</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Address</h6>
                                    <p class="mb-0">Landon</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Phone</h6>
                                    <p class="mb-0">(010)987 543 201</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Email</h6>
                                    <p class="mb-0">Barry@example.com</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Twitter</h6>
                                    <p class="mb-0">@Barry</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Twitter</h6>
                                    <p class="mb-0">@Barry_Tech</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Skill Progress</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Biography</h6>
                                    <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                       <div class="iq-progress-bar iq-bg-primary">
                                          <span class="bg-primary" data-percent="70"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Horror</h6>
                                    <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                       <div class="iq-progress-bar iq-bg-danger">
                                          <span class="bg-danger" data-percent="50"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Comic Book</h6>
                                    <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                       <div class="iq-progress-bar iq-bg-info">
                                          <span class="bg-info" data-percent="65"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between">
                                    <h6>Adventure</h6>
                                    <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                       <div class="iq-progress-bar iq-bg-success">
                                          <span class="bg-success" data-percent="85"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-8">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                 <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Latest Uploads</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <ul class="list-inline p-0 mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="profile-icon bg-secondary"><span><i class="ri-file-3-fill"></i></span></div>
                                       <div class="media-support-info ml-3">
                                          <h6>Documentation</h6>
                                          <p class="mb-0">48kb</p>
                                       </div>
                                       <div class="iq-card-toolbar ml-auto">
                                          <div class="dropdown">
                                             <span class="font-size-24" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false">
                                             <i class="ri-more-line"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right p-0" style"">
                                                <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                                <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="profile-icon bg-secondary"><span><i class="ri-image-fill"></i></span></div>
                                       <div class="media-support-info ml-3">
                                          <h6>Images</h6>
                                          <p class="mb-0">204kb</p>
                                       </div>
                                       <div class="iq-card-toolbar ml-auto">
                                          <div class="dropdown">
                                             <span class="font-size-24" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="false">
                                             <i class="ri-more-line"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right p-0" style"">
                                                <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                                <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="profile-icon bg-secondary"><span><i class="ri-video-fill"></i></span></div>
                                       <div class="media-support-info ml-3">
                                          <h6>Videos</h6>
                                          <p class="mb-0">509kb</p>
                                       </div>
                                       <div class="iq-card-toolbar ml-auto">
                                          <div class="dropdown">
                                             <span class="font-size-24" id="dropdownMenuButton03" data-toggle="dropdown" aria-expanded="false">
                                             <i class="ri-more-line"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right p-0" style"">
                                                <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                                <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="profile-icon bg-secondary"><span><i class="ri-file-3-fill"></i></span></div>
                                       <div class="media-support-info ml-3">
                                          <h6>Resources</h6>
                                          <p class="mb-0">48kb</p>
                                       </div>
                                       <div class="iq-card-toolbar ml-auto">
                                          <div class="dropdown">
                                             <span class="font-size-24" id="dropdownMenuButton04" data-toggle="dropdown" aria-expanded="false">
                                             <i class="ri-more-line"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right p-0" style"">
                                                <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                                <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="profile-icon bg-secondary"><span><i class="ri-refresh-line"></i></span></div>
                                       <div class="media-support-info ml-3">
                                          <h6>Celine Dion</h6>
                                          <p class="mb-0">204kb</p>
                                       </div>
                                       <div class="iq-card-toolbar ml-auto">
                                          <div class="dropdown">
                                             <span class="font-size-24" id="dropdownMenuButton05" data-toggle="dropdown" aria-expanded="false">
                                             <i class="ri-more-line"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right p-0" style"">
                                                <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                                <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                 <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Top Books</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <ul class="list-inline p-0 mb-0">
                                    <li>
                                       <div class="iq-details mb-2">
                                          <span class="title">Adventure</span>
                                          <div class="percentage float-right text-primary">95 <span>%</span></div>
                                          <div class="iq-progress-bar-linear d-inline-block w-100">
                                             <div class="iq-progress-bar">
                                                <span class="bg-primary" data-percent="95"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="iq-details mb-2">
                                          <span class="title">Horror</span>
                                          <div class="percentage float-right text-warning">72 <span>%</span></div>
                                          <div class="iq-progress-bar-linear d-inline-block w-100">
                                             <div class="iq-progress-bar">
                                                <span class="bg-warning" data-percent="72"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="iq-details mb-2">
                                          <span class="title">Comic Book</span>
                                          <div class="percentage float-right text-info">75 <span>%</span></div>
                                          <div class="iq-progress-bar-linear d-inline-block w-100">
                                             <div class="iq-progress-bar">
                                                <span class="bg-info" data-percent="75"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="iq-details mb-2">
                                          <span class="title">Biography</span>
                                          <div class="percentage float-right text-danger">70 <span>%</span></div>
                                          <div class="iq-progress-bar-linear d-inline-block w-100">
                                             <div class="iq-progress-bar">
                                                <span class="bg-danger" data-percent="70"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="iq-details">
                                          <span class="title">Mystery</span>
                                          <div class="percentage float-right text-success">80 <span>%</span></div>
                                          <div class="iq-progress-bar-linear d-inline-block w-100">
                                             <div class="iq-progress-bar">
                                                <span class="bg-success" data-percent="80"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Daily Sales</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="perfomer-lists m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="images/user/06.jpg" alt=""></div>
                                 <div class="media-support-info ml-3">
                                    <h5>Reading on the World</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center ml-auto">
                                    <span class="text-dark"><b>+$82</b></span>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="images/user/07.jpg" alt=""></div>
                                 <div class="media-support-info ml-3">
                                    <h5>Little Black Book</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center ml-auto">
                                    <span class="text-dark"><b>+$90</b></span>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="images/user/08.jpg" alt=""></div>
                                 <div class="media-support-info ml-3">
                                    <h5>See the More Story</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-cener ml-auto">
                                    <span class="text-dark"><b>+$85</b></span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Top Products</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="perfomer-lists m-0 p-0">
                              <li class="row mb-3 align-items-center justify-content-between">
                                 <div class="col-md-8">
                                    <h5>Find The Wave Book</h5>
                                    <p class="mb-0">General Book</p>
                                 </div>
                                 <div class="col-md-4 text-right">
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <span class="text-primary mr-3"><b>+$92</b></span>
                                       <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                          <div class="iq-progress-bar iq-bg-primary">
                                             <span class="bg-primary" data-percent="92"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="row mb-3 align-items-center justify-content-between">
                                 <div class="col-md-8">
                                    <h5>A man with those Faces</h5>
                                    <p class="mb-0">Biography Book</p>
                                 </div>
                                 <div class="col-md-4 text-right">
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <span class="text-danger mr-3"><b>+$85</b></span>
                                       <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                          <div class="iq-progress-bar iq-bg-danger">
                                             <span class="bg-danger" data-percent="85"></span>
                                          </div>
                                       </div>
                                    </div>
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