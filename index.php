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
        <nav class="navbar sticky-lg-top navbar-expand-lg navbar-light bg-transparent">
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
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="./index.php">Home</a>
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


    <?php
    if(isset($_SESSION['login_user_success']))
    {
      ?>
 
    <section class="section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <form
              name="searchtutors"
              id="searchtutors"
              method="post"
              action="search_result.php"
            >
              <div class="row">
                <div class="d-flex flex-row  justify-content-center mt-3">
                <div class="d-flex">
                  <img
                    src="https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-search-vector-icon-png-image_696422.jpg"
                    width="25"
                    height="40"
                    alt=""
                  />
                  <h3 class="col-lg-12 ">Search For tuition</h3>
                </div>
              </div>
                
                <div class="col-lg-12 mt-3" id="form1">
                  <div class="row mt-3">
                    
                    <div class="col-lg-6 mt-3 mb-4">
                      <select
                        class="form-select form-select-sm form1 mt-1"
                        id="form"
                        aria-label=".form-select-lg example"
                      >
                        
                        <option value="2">Select Area</option>
                        <option value="2">Mirpur</option>
                        <option value="2">Mohammadpur</option>
                        <option value="2">Dhanmondi</option>
                        <option value="2">Farmgate</option>
                        <option value="2">Gulshan</option>
                        <option value="2">Banani</option>
                        <option value="2">Uttora</option>
                        <option value="2">Baridhara</option>
                        <option value="2">jatrabari</option>
                        <option value="2">Badda</option>
                        <option value="2">Banasree</option>
                      </select>
                    </div>

                    <div class="col-lg-6 mt-3 mb-4">
                      <select
                        class="form-select form-select-sm form1 mt-1"
                        id="form"
                        aria-label=".form-select-lg example"
                      >
                        <option selected>--Medium--</option>
                        <option value="Bangla Medium">Bangla Medium</option>
                        <option value="English Medium">English Medium</option>
                        <option value="Arabic Medium">Arabic Medium</option>
                        <option value="English Version">English Version</option>
                        <option value="Extra Curricular Activities">
                          Extra Curricular Activities
                        </option>
                        <option value="Language Learning">
                          Language Learning
                        </option>
                        <option value="Computer Learning">
                          Computer Learning
                      </select>
                    </div>

                    
                    <div class="col-lg-6 mb-4 d-flex justify-content-center">
                      <button class="button-64" role="button">Submit</button>
                    </div>
                    <div class="col-lg-6 mb-4 ">
                      <button class="button-33" role="button">Get call from Tutor</button>
                    </div>

                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 col-md-12 " >
            <img
              class="img-fluid" id="section2_image" 
              src="https://www.careerindia.com/img/2017/02/tuition-15-1487138519.jpg"
              alt="walpaper"
            />
          </div>
        </div>
      </div>
    </section>
    
  <?php
    }
    else
    {
      ?>

    <section class="section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <form
              name="searchtutors"
              id="searchtutors"
              method="post"
              action="search_result.php"
            >
              <div class="row">
                <div class="d-flex flex-row  justify-content-center mt-3">
                <div class="d-flex">
                  <img
                    src="https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-search-vector-icon-png-image_696422.jpg"
                    width="25"
                    height="40"
                    alt=""
                  />
                  <h3 class="col-lg-12 ">Search For Tutors</h3>
                </div>
              </div>
                
                <div class="col-lg-12 mt-3" id="form1">
                  <div class="row mt-3">
                    
                    <div class="col-lg-6 mt-3 mb-4">
                      <select
                        class="form-select form-select-sm form1 mt-1"
                        id="form"
                        aria-label=".form-select-lg example"
                      >
                        
                        <option value="2">Select Area</option>
                        <option value="2">Mirpur</option>
                        <option value="2">Mohammadpur</option>
                        <option value="2">Dhanmondi</option>
                        <option value="2">Farmgate</option>
                        <option value="2">Gulshan</option>
                        <option value="2">Banani</option>
                        <option value="2">Uttora</option>
                        <option value="2">Baridhara</option>
                        <option value="2">jatrabari</option>
                        <option value="2">Badda</option>
                        <option value="2">Banasree</option>
                      </select>
                    </div>

                    <div class="col-lg-6 mt-3 mb-4">
                      <select
                        class="form-select form-select-sm form1 mt-1"
                        id="form"
                        aria-label=".form-select-lg example"
                      >
                        <option selected>--Medium--</option>
                        <option value="Bangla Medium">Bangla Medium</option>
                        <option value="English Medium">English Medium</option>
                        <option value="Arabic Medium">Arabic Medium</option>
                        <option value="English Version">English Version</option>
                        <option value="Extra Curricular Activities">
                          Extra Curricular Activities
                        </option>
                        <option value="Language Learning">
                          Language Learning
                        </option>
                        <option value="Computer Learning">
                          Computer Learning
                        </option>
                      </select>
                    </div>

                    <div class="col-lg-6 mb-4">
                      <select
                        class="form-select form-select-sm form1 mt-1"
                        id="form"
                        aria-label=".form-select-lg example"
                      >
                        <option selected>--Class--</option>
                        <option value="Class 1">Class 1</option>
         <option value="Class 2">Class 2</option>
         <option value="Class 3">Class 3</option>
         <option value="Class 4">Class 4</option>
         <option value="Class 5">Class 5</option>
         <option value="Class 6">Class 6</option>
         <option value="Class 7">Class 7</option>
         <option value="Class 8">Class 8</option>
         <option value="Class 9">Class 9</option>
         <option value="Class 10">Class 10</option>
         <option value="Class 11">Class 11</option>
         <option value="Class 12">Class 12</option>
         <option value="HSC CANDIDATE">HSC CANDIDATE</option>
         <option value=" ADDMISSION CANDIDATE">ADDMISSION CANDIDATE</option>
         <option value="Standard I">Standard I</option>
         <option value="Standard II">Standard II</option>
         <option value="Standard III">Standard III</option>
         <option value="Standard IV">Standard IV</option>
         <option value="Standard V">Standard V</option>
         <option value="Standard VI">Standard VI</option>
         <option value="Standard VII">Standard VII</option>
         <option value="Standard VIII">Standard VIII</option>
         <option value="Standard IX">Standard IX</option>
         <option value="Standard X">Standard X</option>
         <option value="Standard XI">Standard XI</option>
         <option value="Standard XII">Standard XII</option>
         <option value="O LEVEL">O LEVEL</option>
         <option value="A LEVEL">A LEVEL</option>
         <option value="OTHERS">OTHERS</option>
          
                      </select>
                    </div>

                    <div class="col-lg-6 mb-4">
                      <select
                        class="form-select form-select-sm form1 mt-1"
                        id="form"
                        aria-label=".form-select-lg example"
                      >
                        <option selected>--Subject--</option>
                        <option value="All Subjects">All Subjects</option>
         <option value="Bangla">Bangla</option>
         <option value="English">English</option>
         <option value="Islam ">Islam </option>
         <option value="Business studies"> Business studies</option>
         <option value="Science">Science</option>
         <option value="BGS">BGS</option>
         <option value="Mathmetics">Mathmetics</option>
         <option value="ICT">ICT</option>
         <option value="Accogunting">Accogunting</option>
         <option value="Finance">Finance</option>
                      </select>
                    </div>
                    <div class="col-lg-6 mb-4 d-flex justify-content-center">
                      <button class="button-64" role="button">Submit</button>
                    </div>
                    <div class="col-lg-6 mb-4 ">
                      <button class="button-33" role="button">Get call from Tutor</button>
                    </div>

                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 col-md-12 " >
            <img
              class="img-fluid" id="section2_image" 
              src="http://bdtutors.com/cmsfiles/images/banner3(1).jpg"
              alt="walpaper"
            />
          </div>
        </div>
      </div>
    </section>
<?php
    }
  ?>


<section class="Section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center headlighter mb-3">
            Tutions Avialable Now 
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
                                  <div class="row m-3 justify-content-end">
                                  <a href="<?php echo url;?>tutor/signup.php" id="active_btn">Apply Now</a>
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

    


    <section class="Section-3">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center headlighter">Feature Tutor</div>
        </div>
        <div class="col-lg-12 mb-5" style="background:#09b7ec; height:5px;"></div>
        <div class="row ps-5">









<?php 
                      $sql= "SELECT * from tutor where catagory='1';";
                      
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
                                            
                                      </div>
                                    </div>
                                  </div>
                              
                                  
                                    

                                <?php 
                                
                                
                                
                                

                              }
                          }
                         
                      }
                      
                
                ?>
          


          

          


        </div>
      </div>
    </section>

    

<?php

include('./footer.php')
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

<?php



?>
