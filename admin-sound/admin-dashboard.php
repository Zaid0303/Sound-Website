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
                  <li>
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                        <li><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
                        <li><a href="albums.php"><i class="lar la-file-audio"></i>Albums</a></li>
                     </ul>
                  </li>
                  <li class="active">
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li class="active"><a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li>
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
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Artist</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>352</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-primary ml-3"> <i class="ri-inbox-fill"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Album</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-success font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>987</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-success ml-3"><i class="ri-price-tag-3-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Followers</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>2.5K</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-danger ml-3"><i class="ri-radar-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Comments</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>5.2M</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-info ml-3"><i class="ri-refund-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div id="progress-chart-2"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Best artist</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style "">
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
                        <ul class="list-inline p-0 m-0">
                           <li class="d-flex mb-3 align-items-center p-3 sell-list border border-primary rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/01.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Pete Sariya</h6>
                                 <p class="mb-0 font-size-12">24 jan, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-primary">157</div>
                              </div>
                           </li>
                           <li class="d-flex mb-3 align-items-center p-3 sell-list border border-success rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/02.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Anna Mull</h6>
                                 <p class="mb-0 font-size-12">15 feb, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-success">280</div>
                              </div>
                           </li>
                           <li class="d-flex align-items-center p-3 sell-list border border-danger rounded">
                              <div class="user-img img-fluid">
                                 <img src="images/user/03.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                              </div>
                              <div class="media-support-info ml-3">
                                 <h6>Alex john</h6>
                                 <p class="mb-0 font-size-12">05 March, 2020</p>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="badge badge-pill badge-danger">200</div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div id="progress-chart-1"></div>
                        <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Album</th>
                                       <th scope="col">Song No</th>
                                       <th scope="col">Review</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Like That</td>
                                       <td>#1525</td>
                                       <td>3.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                    </tr>
                                    <tr>
                                       <td>Said Sum</td>
                                       <td>#1200</td>
                                       <td>4.5<i class="ri-star-fill text-warning pl-2"></i></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-smile-o"></i>
                               </div>
                               <div class="iq-card-text pl-3">
                                   <h5>Positive Comment</h5>
                                   <div class="d-block line-height">
                                       <span class="font-size-11 text-warning">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span>                                             
                                    </div>
                               </div>
                           </div>
                           <p class="mb-1">50/100</p>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-smile-o"></i>
                               </div>
                               <div class="iq-card-text pl-3">
                                   <h5>Average Comment</h5>
                                   <div class="d-block line-height">
                                       <span class="font-size-11 text-warning">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span>                                             
                                    </div>
                               </div>
                           </div>
                           <p class="mb-1">25/100</p>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-top justify-content-between">
                           <div class="media align-items-center">
                               <div class="music-icon-2 text-center text-danger">
                                   <i class="fa fa-meh-o"></i>
                               </div>
                              <div class="iq-card-text pl-3">
                                <h5>Negative Comment</h5>
                                <div class="d-block line-height">
                                    <span class="font-size-11 text-warning">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>                                             
                                 </div>
                              </div>
                           </div>
                           <p class="mb-1">05/100</p>
                        </div>
                    </div>
               </div>
               <div class="iq-card mb-0">
                  <div class="iq-card-body p-2">
                     <div id="menu-chart-demo3"></div>
                  </div>
               </div>
            </div>
               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <h2 class="mb-0"><span class="counter" style="visibility: visible;">3450</span></h2>
                        <p class="mb-0">Music Followers</p>
                        <h6 class="mb-4"><span class="text-success mr-2">20%</span>Positive reviews</h6>
                        <a href="javascript:void();" class="btn btn-danger d-block mt-5 mb-4"> Add Song</a>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Songs</p>
                              <h4 class="counter" style="visibility: visible;">81</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-primary-light iq-progress-bar-icon">
                                 <span class="bg-primary" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Albems</p>
                              <h4 class="counter" style="visibility: visible;">124</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-success-light iq-progress-bar-icon">
                                 <span class="bg-success" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Videos</p>
                              <h4 class="counter" style="visibility: visible;">74</h4> 
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-danger-light iq-progress-bar-icon">
                                 <span class="bg-danger" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Song Table</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <button class="btn btn-outline-primary">View All</button>
                        </div>
                     </div>
                     <div class="iq-card-body rec-pat">
                        <div class="table-responsive">
                           <table class="table table-striped mb-0 table-borderless">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Song</th>
                                    <th>Name</th>
                                    <th>File Size</th>
                                    <th>Date</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Life Is Good</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/01.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Pete Sariya</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>20.04 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Harry Styles</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/02.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Cliff Hanger</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>45.00 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-o"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-danger">Pending</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Die From A..</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/03.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Terry Aki</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>26.08 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-half-o"></i>                                             
                                             <i class="fa fa-star-half-o"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Life's A Mess</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/04.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Rock lai</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>15.04 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-danger">Pending</span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Rags2Riches</td>
                                    <td>
                                       <div class="media align-items-center">
                                          <img src="images/user/05.jpg" class="img-fluid avatar-35 rounded" alt="image">
                                          <div class="media-body ml-3">
                                             <p class="mb-0">Anna Mull</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>10.03 Mb</td>
                                    <td>20/08/2020</td>
                                    <td>
                                       <div class="d-block line-height">
                                          <span class="font-size-11 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </span>                                             
                                       </div>
                                    </td>
                                    <td>
                                       <span class="badge badge-success">Success</span>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
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