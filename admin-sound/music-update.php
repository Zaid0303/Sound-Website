<?php
include("includes/header.php");
include("includes/topnav.php");
include("includes/sidebar.php");
include("config.php");
?>

<!-- Wrapper Start -->
<div class="wrapper">
   <?php 
   if (isset($_GET ['m-id'])){
      $music_id = $_GET ['m-id'] ;

      $fetch_record = "SELECT * from `music` where `m_id` = '$music_id'" ;
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
                        <h4 class="card-title">Add Music</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <form action="music-updatedata.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                          <?php
                        
                                 while($row = mysqli_fetch_assoc($record_result)){
                        
                          ?>
                           <div class="form-group col-md-6">
                              <label>Name:</label>
                              <input type="hidden" name="m-id" class="form-control"  value="<?php echo $row["m_id"] ?>" required>
                              <input type="text" name="m-name" class="form-control" id="vid-name" value="<?php echo $row["m_name"] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Year:</label>
                              <input type="text" name="m-year" class="form-control" id="vid-year" value="<?php echo $row["m_year"] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Artist:</label>
                              <input type="text" name="m-artist" class="form-control" id="vid-artist" value="<?php echo $row["m_artist"] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Album:</label>
                              <input type="text" name="m-album" class="form-control" id="vid-album" value="<?php echo $row["m_album"] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Genre:</label>
                              <input type="text" name="m-genre" class="form-control" id="vid-genre" value="<?php echo $row["m_genre"] ?>" required>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Language:</label>
                              <input type="text" name="m-language" class="form-control" id="vid-language" value="<?php echo $row["m_language"] ?>"  required>
                           </div>
                        </div>

                        <div class="row">

                           <div class="form-group col-md-6">
                              <label>Image url</label>
                              <div class="custom-file">
                                 <input type="file" name="m-images" class="custom-file-input" id="vid-file" value="<?php echo $row["m_img"] ?>" required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Music File</label>
                              <div class="custom-file">
                                 <input type="file" name="m-files" class="custom-file-input" id="vid-file" value="<?php echo $row["m_file"] ?>"required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                        </div>
                        <input  type="Submit" class="btn btn-primary" name="musicupdate" >
                        <!-- <a href="admin-music.php"></a> -->
                        <!-- <a href="#" class="btn btn-danger">Reset</a> -->
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Wrapper END -->


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