<?php
include('../config/connectiondb.php');
include('./login_check_admin.php');
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
              <li class="nav-item ">
                  <a class="nav-link" aria-current="page" href="./admin.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./admin_approve_tutor.php">Approve Tutor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./add_tution.php">Post Tution</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./delete_tution.php">Delete Tution</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./reg_Admin.php">Add Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./message_admin.php">Message</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-danger" href="../config/logout.php">Logout</a>
                </li>
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
          action="" method="post"
          >
            <div class="fw-bold mb-4 headlight">Hello Admin</div>
            <input type="text" placeholder="username" name="username"/>
            <input type="email" placeholder="email address" name="email"/>
            <input type="phone" placeholder="phone number" name="phone"/>
            <input type="password" placeholder="password" name="password"/>
            <input type="submit" value="Sign up" name="submit" class="btn" />
           
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
if(isset($_POST ['submit']))
{


    $Fullname = $_POST['username'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    
    $Password = md5($_POST['password']);
    $catagory= '0';


   $sql="INSERT INTO admin (name,email,phone,password,catagory)
   values('$Fullname','$Email','$Phone','$Password','$catagory');";

   
    $res= mysqli_query($con , $sql) or die('Error: ' . mysqli_error($con));;

    if($res==TRUE)
    {
    //echo 'inserted';
      $_SESSION['Admin_added']= '<h5 class="text-success text-center">Admin Added Successfully</h4>';
      header('location:'.url.'admin/admin.php');
      exit;
    }

    else{
      $_SESSION['Admin_added']= '<h4 class="text-danger text-center">Failed Try again</h4>';
      header('location:'.url.'admin/reg_admin.php');
      exit;
    }
}
?>