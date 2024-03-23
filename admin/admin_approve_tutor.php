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
    <link rel="stylesheet" href="../css/style.css" />
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
        <nav class="navbar sticky-lg-top navbar-expand-lg navbar-light bg-transparent">
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
                  <a class="nav-link" aria-current="page" href="./admin.php">Dashboard</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./admin_approve_tutor">Approve Tutor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./add_tution.php">Post Tution</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./delete_tution.php">Delete Tution</a>
                </li>
                <li class="nav-item">
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



      <section class="Section-3">
      <div class="container ">

<?php
if(isset($_SESSION['Approved']))
{
   echo $_SESSION['Approved'];
   unset($_SESSION['Approved']);
}


?>


        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center headlighter">Requested Tutor</div>
        </div>
        <div class="col-lg-12 mb-5" style="background:#09b7ec; height:5px;"></div>
        <div class="row ps-5">








<?php 
                      $sql= "SELECT * from tutor where catagory='0';";
                      
                      $res= mysqli_query($con,$sql);


                      if ($res==TRUE)
                      {
                          $count= mysqli_num_rows($res);

                          if ($count>0)
                          {
                              while($rows=mysqli_fetch_assoc($res))
                              {
                                $id= $rows['id'];
                                $Full_Name= $rows['name'];
                                $Gmail= $rows['email'];
                                $Mobile= $rows['phone'];
                                $Address=$rows['address'];
                                $Salary=$rows['salary']
                                


                                ?>

                                  <div class="col-lg-3 col-md-6">
                                    <div class="a-box">
                                      <div class="img-container">
                                        <div class="img-inner">
                                          <div class="inner-skew">
                                            <img src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="text-container">
                                            <p class="name"><?php echo $Full_Name ?></p>
                                            <p class="Contact"><?php echo $Mobile ?></p>
                                            <p class="district"><?php echo $Address ?></p>
                                            <p class="money d-flex justify-content-end"><?php echo $Salary ?> tk/month</p>
                                            <a href="<?php echo url;?>admin/approve.php?id=<?php echo $id ?>" id="active_btn">Approve</a>
                                            
                                      </div>
                                    </div>
                                  </div>
                              
                                  
                                    

                                <?php 
                                
                                
                                
                                

                              }
                          }
                         
                      }
                      
                
                ?>
          

<!-------------------php end--------------------->
          

          


        </div>



        <!---reqed tutor---->





       


















      </div>
    </section>

    


    <?php
include('../footer_admin.php')
?>

   

      
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/a3324cfcf7.js" crossorigin="anonymous"></script>
  </body>
</html>
