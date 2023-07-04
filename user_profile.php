<?php session_start(); ?>
<?php include_once('includes/header.php') ?>
<?php include_once('includes/navbar.php') ?>
<?php include_once('config/dbconnect.php'); ?>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Update Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                  <div class="container"> 
                    <div class="row"> 
                        <?php 
                        include_once ('config/dbconnect.php');
                        $id = $_SESSION['auth_user']['user_id'];
                       $sql2 = "SELECT * FROM user WHERE user_id= '$id'";
                       $fetch_run= mysqli_query($conn,$sql2);
                       if(mysqli_num_rows($fetch_run) > 0){ 
                      foreach($fetch_run as $row){ 
                        ?>
                                <form action="./auth/user_profile.php" method="post"> 
                            <div class="mb-3">
                                <label for="form-label"> Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>"> 
                            </div>

                            <div class="mb-3">
                                <label for="form-label"> Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo   $row['user_email'] ?>"> 
                            </div>

                            <div class="mb-3">
                                <label for="form-label"> Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo  $row['user_phone'] ?>"> 
                            </div>
                       
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary" name="update"> Update</button>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    var modalId = document.getElementById('modalId');

    modalId.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          let button = event.relatedTarget;
          // Extract info from data-bs-* attributes
          let recipient = button.getAttribute('data-bs-whatever');

        // Use above variables to manipulate the DOM
    });
</script>



                        <?php 
                      }

                       }
                        ?>
                


<div class="container mt-5"> 
    <div class="row"> 
        <div class="col-md-6 offset-md-3"> 
               <?php
    

    if(isset($_SESSION['message'])){
        ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
            <strong><?php echo $_SESSION['message']; ?></strong> 
        </div>
        

        <?php
        unset($_SESSION['message']);
    }
    
    
    ?>
        <div class="card"> 
            <div class="card-header bg-primary text-white"> 
                <h5>user Profile  <button type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalId">
                Edit
</button></h5>
            </div>
            </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  
                </tr>
              </thead>
              <?php
              $id = $_SESSION['auth_user']['user_id'];
              $sql = "SELECT * FROM user WHERE user_id = $id" ;
              $query= mysqli_query($conn, $sql);
              if(mysqli_num_rows($query) > 0){ 
                $data=mysqli_fetch_assoc($query);
                ?>
                 <tbody>
                <tr>
                  <!-- <th scope="row">1</th> -->
                  <td><?php echo $data['name'];?></td>
                  <td><?php echo $data['user_email'];?></td>
                  <td><?php echo $data['user_phone']; ?></td>
                </tr>

                <?php
              } 
              ?>
             
                
              </tbody>
            </table>

        </div>

    </div>
</div>


<?php include_once('includes/footer.php') ?>



