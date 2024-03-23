<?php
include('./config/connectiondb.php')
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trust Tution</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
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
                <img src="./image/brand.png" alt="Trust Tution" />
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
                  <a class="nav-link" aria-current="page" href="./index.php"
                    >Home</a
                  >
                </li>

                <?php
      if(isset($_SESSION['login_user_success']))
      {
?>
<?php
      }
else{

?>
                <li class="nav-item">
                  <a class="nav-link" href="./search.php">Search Tutor</a>
                </li>
                <?php

}
?>
              
                <li class="nav-item">
                  <a class="nav-link" href="./tution.php">Tutions</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./contact.php">Contact</a>
                </li>


                <?php 
    if (isset($_SESSION['login_user_success']))
  {
    ?>
                <li class="nav-item">
                  <div class="nav-link ms-5">

                   <div class="d-flex flex-column">
                    <a href="./dashboard_tutor.php" class="fs-bold">
                      <?php 
                       echo $_SESSION['username_Tutor'];
                      ?>
                    </a>
                    <a href="./config/logout.php" class="text-danger">Logout</a>
                    </div>
                    
                  </div>
                </li>

<?php 
          }
          else 
          {
           ?>
            <li class="nav-item active">
                  <div class="nav-link ms-5" href="#">
                    <a href="./tutor/signin.php">Login</a> OR
                    <a href="./tutor/signup.php">Registration</a>
                  </div>
                </li>
                <?php       
          }
?>

                
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>


    <section class="section_search ms-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 m-auto mb-3">
            <img
              src="http://bdtutors.com/cmsfiles/images/contact-us-banner%20(1).jpg"
              alt=""
              style="width:100%"
            />
          </div>
        </div>
        <div class="row">
        <div class="col-md-7 m-auto" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 0px 0px 7px rgb(58, 56, 56) ;">
            <form
              action="#"
              method="post"
              class="bg-white p-md-5 p-4 mb-5 border"
            >
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control" name = "username"/>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control" name="mobile" />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" name="email" />
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea
                    name="message"
                    id="message"
                    class="form-control"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input
                    type="submit"
                    value="Send Message"
                    class="btn btn-primary text-white font-weight-bold"
                    name="submit"
                  />
                </div>
              </div>
            </form>
          </div>
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


    $name = $_POST['username'];
    $Phone = $_POST['mobile'];
    $Email = $_POST['email'];
    $messagename=$_POST['message'];
   

   $sql="INSERT INTO contact (name,email,phone,message)
   values('$name','$Email','$Phone','$messagename');";

   
    $res= mysqli_query($con , $sql) or die('Error: ' . mysqli_error($con));;
}  