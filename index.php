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
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum sequi dignissimos cumque. Animi perferendis nam necessitatibus accusamus, maiores quas consequatur quis illo? Non laborum architecto nam tempora, sed qui obcaecati.

git commit
  <?php include_once('includes/footer.php') ?>

    
