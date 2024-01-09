<?php
include("includes/header.php");
include("includes/topnav.php");
include("includes/sidebar.php");
include("config.php");
?>
<!-- Wrapper Start -->
<div class="wrapper">
  <?php 
  if (isset($_GET ['v-id'])){
   $video_id = $_GET ['v-id'] ;

   $fetch_record = "SELECT * from `videos` where `v_id` = '$video_id'" ;
   $record_result = mysqli_query($connection, $fetch_record) ;
   if($record_result){
      if(mysqli_num_rows($record_result)> 0){
  ?>
   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Add Video</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <form action="video-updatedata.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                        <?php
                        
                                 while($row = mysqli_fetch_assoc($record_result)){
                        
                        ?>
                           
                           <div class="form-group col-md-6">
                              <label>Name:</label>
                              <input type="hidden" name="v-id" class="form-control"  value="<?php echo $row["v_id"] ?>" required>
                              <input type="text" name="v-name" class="form-control" id="vid-name" value="<?php echo $row['v_name'] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Year:</label>
                              <input type="text" name="v-year" class="form-control" id="vid-year" value="<?php echo $row['v_year'] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Artist:</label>
                              <input type="text" name="v-artist" class="form-control" id="vid-artist" value="<?php echo $row['v_artist'] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Album:</label>
                              <input type="text" name="v-album" class="form-control" id="vid-album" value="<?php echo $row['v_album'] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Genre:</label>
                              <input type="text" name="v-genre" class="form-control" id="vid-genre" value="<?php echo $row['v_genre'] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Language:</label>
                              <input type="text" name="v-language" class="form-control" id="vid-language" value="<?php echo $row['v_language'] ?>" required>
                           </div>
                        </div>

                        <div class="row">

                           <div class="form-group col-md-6">
                              <label>Image url</label>
                              <div class="custom-file">
                                 <input type="file" name="v-images" class="custom-file-input" id="vid-file" value="<?php echo $row['v_img'] ?>" required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Video File</label>
                              <div class="custom-file">
                                 <input type="file" name="v-files" class="custom-file-input" id="vid-file" value="<?php echo $row['v_file'] ?>" required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                        </div>
                        <input type="Submit" class="btn btn-primary" name="updated" id="vid-add">
                        <!-- <a href="admin-video.php"></a> -->
                        <!-- <a href="#" class="btn btn-danger">Reset</a> -->
                        <?php
                                   }
                                 }
                              }
                           }
                        ?>
                     </form>
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