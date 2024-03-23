<?php
include('../config/connectiondb.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trust Tution</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <section class="Section-1">
      <div class="header">
        <nav
          class="navbar sticky-lg-top navbar-expand-lg navbar-light bg-transparent"
        >
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <div class="d-flex">
                <img src="../image/brand.png" alt="Trust Tution" />
                <span>
                  <p class="first_title text-decoration-underline">
                   <span class="first_title1">Trust</span> Tution BD
                  </p>

                  <p class="second_title">
                    Simply Search for Tutors and tutions
                  </p>
                </span>
              </div>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="ms-auto"></div>
              <ul class="navbar-nav">
                

                <?php
                    if(isset($_SESSION['login_admin_success']))
                    {
                      header('location:'.url.'admin/admin.php');
                    }
                    else{
                ?>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../index.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../search.php">Search Tutor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../contact.php">Contact</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../tution.php">Tutions</a>
                </li>


                <?php  } ?>



              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>

    <section class="section-3">
      <div class="login-page">
        <div class="form">
          <form class="login-form"
          action="" Method="post">
         
            <div class="fw-bold mb-3 headlight">Login As Admin</div>
            <?php

if(isset($_SESSION['login_admin_failed']))
{
  echo $_SESSION['login_admin_failed'];
  unset($_SESSION['login_admin_failed']);
}
if(isset( $_SESSION['invalid access']))
{
  echo  $_SESSION['invalid access'];
  unset( $_SESSION['invalid access']);
}


?>
            <input type="text" placeholder="username" name="username" />
            <input type="password" placeholder="password" name="password" />

            <input type="submit" value="Sign in" name="submit" class="btn" />
            
          </form>
        </div>
      </div>
    </section>






    <?php
include('../footer_admin.php')
?>





    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/a3324cfcf7.js"
      crossorigin="anonymous"
    ></script>
 
  </body>
</html>














<?php 

      if(isset($_POST['submit']))
      {
          $username = $_POST['username'];
          $pass= md5($_POST['password']);

         $sql="SELECT * FROM admin WHERE email='$username' or name='$username';"; //;AND admin.password='$pass';"

        $res= mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));

        if($res==TRUE)
        {
          $count = mysqli_num_rows($res);

          if($count==1)
          {
              $rows=mysqli_fetch_assoc($res);
              
              if($pass==$rows['password'])
              {
                $_SESSION['login_admin_success']= '<h5 class="text-success text-center">Welcome </h5><br>';
                header('location:'.url.'admin/admin.php');
                $_SESSION['username_admin']=$username;
               
              }
              else{
                $_SESSION['login_admin_failed']= '<h5 class="text-danger text-center">Username or Password Incorrect</h5><br>';
                header('location:'.url.'admin/Login_admin.php');
              }
                
          }
          else{
            $_SESSION['login_admin_failed']= '<h5 class="text-danger text-center">User Not Found</h5><br>';
            header('location:'.url.'admin/Login_admin.php');
          }
        }

      }
     
?>