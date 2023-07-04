<?php session_start(); ?>
<?php include_once('includes/header.php') ?>
<?php include_once('includes/navbar.php') ?>



<div class="container-fluid mt-5"> 
    <div class="row"> 
        <div class="col-md-6 offset-md-3">
            <div class="card"> 
                <div class="card-header bg-primary text-white"  > 
                    <h5>Login </h5>
                </div>
                <div class="card-body">
                    <form action="./auth//login.php" method="post"> 
                       
                        <div class="mb-3">
                            <label for="form-label">Email</label> 
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>

                       

                        <div class="mb-3">
                            <label for="form-label">Password</label> 
                            <input type="password" name="password" class="form-control" placeholder="*******">
                        </div>

                        
                       

                        <div class="mb-3">
                        <button type="submit"  name="login" class="btn btn-primary">Login</button>
                        <a href="login.php">Register</a>
                        </div>
                    </form> 

                </div>
            </div> 

        </div>

    </div>
</div>









<?php include_once('includes/footer.php') ?>