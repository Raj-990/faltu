
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
  
        <?php if(!isset($_SESSION['auth'])){

                      ?>
                      
                      <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="register.php">Register</a>
                      </li>
                      
                           <?php
                      
                      }else{
                      
                      ?>
                      
                      
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <?php  if(isset($_SESSION['auth_user']))
                        { 
                          echo  $_SESSION['auth_user']['name'];
                        }
                        else{ echo "User";
                        }
                         ?> 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="user_profile.php">Setting</a>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                      </li>

                      <?php
                      } ?>


      
       
       
       
      </ul>
   
      </form>
    </div>
  </div>
</nav>