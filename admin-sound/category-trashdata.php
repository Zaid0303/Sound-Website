<?php 
include("includes/header.php");
include("includes/topnav.php");
include("includes/sidebar.php");
include("config.php");
?>
<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

<!-- Wrapper Start -->
   <div class="wrapper">
   <?php

$fetch_category = "SELECT * FROM categories where status = '0' ";
$fetch_result = mysqli_query($connection, $fetch_category);
if(mysqli_num_rows($fetch_result) > 0){

      ?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Category Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="admin-add-category.php" class="btn btn-primary">Add New Category</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                             <thead>
                                 <tr>
                                     <th>Category Name</th>
                                     <th>Category Year</th>
                                     <th>Category Artist</th>
                                     <th>Category Album</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                              <?php 
                             
                                 while($row = mysqli_fetch_assoc($fetch_result)){

                           
                              ?>
                                 <tr>
                                     <td><?php echo $row['c_genre']?></td>
                                     <td><?php echo $row['c_year']?></td>
                                     <td><?php echo $row['c_artist']?></td>
                                     <td><?php echo $row['c_album']?></td>
                                     <td>
                                        <div class="flex align-items-center list-user-action">
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restore"  href="category-restore.php?id=<?php echo $row["c_id"] ?>"><i class="ri-pencil-line"></i></a>
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"  href="category-delete.php?c-id=<?php echo $row["c_id"] ?>"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                     </td>
                                 </tr>
                                 <?php 
                                       }
                                    }                           
                                 ?>
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
<footer class="iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="player row">
               <div class="details col-6 col-sm-4 col-md-4 col-lg-4">
                  <div class="now-playing"></div>
                  <div class="track-art"></div>
                  <div>
                     <div class="track-name">Pop Smoke </div>
                     <div class="track-artist">Cascada</div>
                  </div>
               </div>
               <div class="slider_container slider_music col-sm-5 col-md-4 col-lg-4">
                  <div class="current-time">00:00</div>
                  <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                  <div class="total-duration">00:00</div>
               </div>
               <div class="buttons col-6  col-sm-3 col-md-2  col-lg-2">
                  <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
                  <div class="playpause-track" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-3x"></i></div>
                  <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
               </div>
               <div class="slider_container sound col-sm-6 col-md-2  col-lg-2">
                  <i class="fa fa-volume-down"></i>
                  <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                  <i class="fa fa-volume-up"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer END -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<!-- Appear JavaScript -->
<script src="js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="js/core.js"></script>
<!-- am charts JavaScript -->
<script src="js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="js/chart-custom.js"></script>
<!-- Music js -->
<script src="js/music-player.js"></script>
<!-- Music-player js -->
<script src="js/music-player-dashboard.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>
</body>

</html>