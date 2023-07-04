<?php session_start(); ?>
<?php include_once('includes/header.php') ?>
<?php include_once('includes/navbar.php') ?>



<?php if(isset($_SESSION['message'])){ 
    ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['message']; ?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php 
    unset($_SESSION['message']);
} ?>



  <div class="container"> 
    <div class="row"> 

    </div>
  </div>

  <?php include_once('includes/footer.php') ?>

    
