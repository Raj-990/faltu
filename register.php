<?php session_start(); ?>
<?php include_once('includes/header.php') ?>
<?php include_once('includes/navbar.php') ?>

<?php
if(isset($_SESSION['auth'])){

    $_SESSION['message'] = "You are already logged In";
    header('Location:index.php');
}
?>



<div class="container-fluid mt-5"> 
    <div class="row"> 
        <div class="col-md-6 offset-md-3">
            <?php if(isset($_SESSION['success'])){ 
                ?>
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?php echo  $_SESSION['success']; ?></strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

                <?php 
                unset($_SESSION['success']);

            } ?>

<?php if(isset($_SESSION['error'])){ 
                ?>
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?php echo  $_SESSION['error']; ?></strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

                <?php 
                unset($_SESSION['error']);

            } ?>
           


            <div class="card"> 
                <div class="card-header bg-primary text-white"  > 
                    <h5>Register </h5>
                </div>
                <div class="card-body">
                    <form action="./auth//register.php" method="post"> 
                        <div class="mb-3">
                            <label for="form-label">Name</label> 
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="mb-3">
                            <label for="form-label">Email</label> 
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="mb-3">
                            <label for="form-label">Phone</label> 
                            <input type="text" name="phone" class="form-control" placeholder="Enter Mobile Number">
                        </div>

                        <div class="mb-3">
                            <label for="form-label">Password</label> 
                            <input type="password" name="password" class="form-control" placeholder="*******">
                        </div>

                        <div class="mb-3">
                            <label for="form-label">Confirm Password</label> 
                            <input type="password" name="confirm_password" class="form-control" placeholder="******" >
                        </div>
                       

                        <div class="mb-3">
                        <button type="submit"  name="submit" class="btn btn-primary">Register</button>
                        <a href="register.php">Login</a>
                        </div>
                    </form> 

                </div>
            </div> 

        </div>

    </div>
</div>









<?php include_once('includes/footer.php') ?>