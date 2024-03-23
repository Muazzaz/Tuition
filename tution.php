<?php
include('./config/connectiondb.php');
include("./logincheck_tutor.php");

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
    <link rel="stylesheet" href="./css/style.css" />
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
                <li class="nav-item active">
                  <a class="nav-link" href="./tution.php">Tutions</a>
                </li>
                <li class="nav-item">
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
                      <a href="./config/logout.php" class="text-danger"
                        >Logout</a
                      >
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

    <section class="Section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center headlighter mb-3">
            Tutions
          </div>

          <div
            class="col-lg-12 mb-5"
            style="background: #09b7ec; height: 5px"
          ></div>
        </div>
        <div class="container">
          <div class="row d-flex justify-content-around">




 

<?php 
                      $sql= "SELECT * from tution;";
                      
                      $res= mysqli_query($con,$sql);


                      if ($res==TRUE)
                      {
                          $count= mysqli_num_rows($res);

                          if ($count>0)
                          {
                              while($rows=mysqli_fetch_assoc($res))
                              {
                                $id= $rows['id'];
                                $Class= $rows['class'];
                                $Subject= $rows['subj'];
                                $Day= $rows['days'];
                                $Salary=$rows['salary'];
                                $Address=$rows['Location'];
                                


                                ?>
                                <div class="col-lg-5 p-3 mb-3" id="glass">
                                  <div class="row">
                                    <div class="col-sm-12 text-center"><?php echo $Address ?></div>
                                  </div>
                                  <div
                                    class="col-sm-12 mb-3"
                                    style="background: #09b7ec; height: 5px"
                                  ></div>
                                  <div class="row m-3">
                                    <div class="col-sm-6 text-start">Tution id:</div>
                                    <div class="col-sm-6 text-center"><?php echo $id ?></div>
                                  </div>
                                  <div class="row m-3">
                                    <div class="col-sm-6 text-start">Class:</div>
                                    <div class="col-sm-6 text-center"><?php echo $Class ?></div>
                                  </div>
                                  <div class="row m-3">
                                    <div class="col-sm-6 text-start">Subject:</div>
                                    <div class="col-sm-6 text-center"><?php echo $Subject ?></div>
                                  </div>
                                  <div class="row m-3">
                                    <div class="col-sm-6 text-start">Days:</div>
                                    <div class="col-sm-6 text-center"><?php echo $Day ?></div>
                                  </div>
                                  <div class="row m-3">
                                    <div class="col-sm-6 text-start">Salary:</div>
                                    <div class="col-sm-6 text-center"><?php echo $Salary ?> TK</div>
                                  </div>
                                  <div class="row m-3">
                                    <div class="col-sm-6 text-start">Location:</div>
                                    <div class="col-sm-6 text-center"><?php echo $Address ?></div>
                                  </div>
                                </div>

                                <?php 
                                
                                
                                
                                

                              }
                          }
                         
                      }
                      
                
                ?>


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
