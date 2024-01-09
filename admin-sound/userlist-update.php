<?php
include("includes/header.php");
include("includes/topnav.php");
include("includes/sidebar.php");
include("config.php");
?>

 <div class="wrapper">
       
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add New User Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form action="userlist-updatedata.php" method="POST">
                                 <div class="row">
                                    
                                    <?php
                                    if (isset($_GET['id'])){
                                       $user_id = $_GET['id'] ;

                                       $fetch_record = "SELECT * from `users` where `u_id` = '$user_id'" ;
                                       $record_result = mysqli_query($connection, $fetch_record) ;
                                       if($record_result){
                                          if(mysqli_num_rows($record_result)> 0){
                                             while($row = mysqli_fetch_assoc($record_result)){
                                    
                                    ?>
                                    <input type="hidden" name="u-id" class="form-control" required
                                    value="<?php echo $row["u_id"] ?>">
                                    <div class="form-group col-md-6">
                                       <label for="fname">Name:</label>
                                       <input type="hidden" name="u-id" class="form-control"  value="<?php echo $row["u_id"] ?>" required>
                                       <input type="text" class="form-control" id="fname" name="u-name" placeholder="Name" value="<?php echo $row['u_name'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="mobno">Mobile Number:</label>
                                       <input type="number" class="form-control" id="mobno" name="u-phone" placeholder="Mobile Number" value="<?php echo $row['u_phone'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="cname">Address:</label>
                                       <input type="text" class="form-control" id="cname" name="u-address" placeholder="Address" value="<?php echo $row['u_address'] ?>" required>
                                    </div>
                                 </div>
                                 <hr>
                                 <h5 class="mb-3">Security</h5>
                                 <div class="row">
                                    <div class="form-group col-md-12">
                                       <label for="uname">Email:</label>
                                       <input type="email" class="form-control" id="uname" name="u-email" placeholder="Email" value="<?php echo $row['u_email'] ?>" required>
                                    </div>

                                 </div>
                                 <div class="checkbox">
                                    <label><input class="mr-2" type="checkbox" required>Enable Two-Factor-Authentication</label>
                                 </div>
                                 <input type="submit" name="userupdate" class="btn btn-primary" value="Add User">
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
      </div>
      <!-- Wrapper END -->
                        
                     
<!-- Footer -->

<?php
include("includes/footer.php");
?>