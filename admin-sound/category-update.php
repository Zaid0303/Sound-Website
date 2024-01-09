<?php 
include("includes/header.php");
include("includes/topnav.php");
include("includes/sidebar.php");
include("config.php");
?>
   <!-- Wrapper Start -->
   <div class="wrapper">
      <?php 
      
       if (isset($_GET ['c-id'])){
         $category_id = $_GET ['c-id'] ;

         $fetch_record = "SELECT * from `categories` where `c_id` = '$category_id'" ;
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
                           <h4 class="card-title">Add Categories</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form action="category-updatedata.php" method="POST">
                           <div class="row">


                           <?php
                        
                                 while($row = mysqli_fetch_assoc($record_result)){
                        
                           ?>

                              <div class="col">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="hidden" name="cat-id" class="form-control"  value="<?php echo $row["c_id"] ?>" required>
                                    <input type="text" name="cat-genre" class="form-control"  value="<?php echo $row["c_genre"] ?>" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                    <label>Year:</label>
                                    <input type="text" name="cat-year" class="form-control"  value="<?php echo $row["c_year"] ?>" required>
                                </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col">
                                <div class="form-group">
                                    <label>Artist:</label>
                                    <input type="text" name="cat-artist" class="form-control"  value="<?php echo $row["c_artist"] ?>" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                    <label>Album:</label>
                                    <input type="text" name="cat-album" class="form-control"  value="<?php echo $row["c_album"] ?>" required>
                                </div>
                              </div>
                           </div>

                           
                           <input type="Submit" class="btn btn-primary" name="categoryupdate">
                           <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
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