<?php include('../config/connectiondb.php');
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
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../index.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../search.php">Search Tutor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../tution.php">Tutions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../contact.php">Contact</a>
                </li>

                

                <li class="nav-item active">
                  <div class="nav-link ms-5" href="#">
                    <a href="./signin.php">Login</a> OR
                    <a href="./signup.php">Registration</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>

    <section class="section-3">
      <div class="login-page">
        <div class="form mb-0">
          <form class="login-form"
          action="" method="post">
            <div class="fw-bold mb-2 headlight">Hello</div>
            <input type="text" class="text-uppercase" placeholder="username" name="fullname"/>
            <input type="email" placeholder="Enter Your Email Address" name="email" />
            <input type="phone" placeholder="Your Phone Number" name="mobile" />
            <select name="address" id="District" class="form-letter">
              <option value="0">Select Area</option>
              <option value="Mirpur">Mirpur</option>
              <option value="Mohammadpur">Mohammadpur</option>
              <option value="Dhanmondi">Dhanmondi</option>
              <option value="Farmgate">Farmgate</option>
              <option value="Gulshan">Gulshan</option>
              <option value="Banani">Banani</option>
              <option value="Uttora">Uttora</option>
              <option value="Baridhar">Baridhara</option>
              <option value="jatrabari">jatrabari</option>
              <option value="Badda">Badda</option>
              <option value="Banasree">Banasree</option>
            </select>
            
            <input type="password" placeholder="Enter a Password" name="password" />
            <input type="password" placeholder="Confirm Password" name="confirm_password" />
            <input type="file"  placeholder ="Filename" name="Choosefile"/>
            <input type="submit" value="Sign in" name="submit" class="btn" />
            <p class="message">registered? <a href="./signin.php">Login</a></p>
          </form>
        </div>
      </div>
    </section>

    <?php

include('./footer.php')
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


    $Fullname = $_POST['fullname'];
    $Phone = $_POST['mobile'];
    $Email = $_POST['email'];
    $Address=$_POST['address'];
    $Password = md5($_POST['password']);
    $catagory= '0';


   $sql="INSERT INTO tutor (name,email,phone,password,address,catagory)
   values('$Fullname','$Email','$Phone','$Password','$Address','$catagory');";

   
    $res= mysqli_query($con , $sql) or die('Error: ' . mysqli_error($con));;

    if($res==TRUE)
    {
    //echo 'inserted';
      $_SESSION['User_added']= '<h5 class="text-success text-center">Admin Added Successfully</h4>';
      header('location:'.url.'index.php');
      exit;
    }

    else{
      $_SESSION['User_added']= '<h4 class="text-danger text-center">Failed Try again</h4>';
      header('location:'.url.'signup.php');
      exit;
    }
}
?>