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
                <li class="nav-item active">
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

    <section class="section-3">
      <div class="login-page">
        <div class="form">
          <form class="login-form" action="" method="post">
            <div class="fw-bold mb-3 headlight">Add Tution Details</div>

    <?php
    if(isset($_SESSION['added']))
    {
        echo $_SESSION['added'];
        unset($_SESSION['added']); 
    }
    ?>
            <input
              type="text"
              class="text-uppercase"
              placeholder="Class"
              name="class"
              required
            />
            <input
              type="text"
              class="text-uppercase"
              placeholder="Subject"
              name="subject"
              required
            />
            <input type="text" placeholder="Days Per Week" name="day" />
            <input
              type="text"
              placeholder="Salary"
              name="salary"
              required
            />
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
            <input type="submit" value="Add" name="submit" class="btn" />
   
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


    $Class = $_POST['class'];
    $Subject = $_POST['subject'];
    $Salary = $_POST['salary'];
    $Day=$_POST['day'];
    $Address = $_POST['address'];
    


   $sql="INSERT INTO tution (class,subj,days,salary,Location)
   values('$Class','$Subject','$Day','$Salary','$Address');";

   
    $res= mysqli_query($con , $sql) or die('Error: ' . mysqli_error($con));;

    if($res==TRUE)
    {
      $_SESSION['added']= '<h5 class="text-success text-center">Tution Added Successfully</h4>';
      header('location:'.url.'admin/tution_available_admin.php');
      exit;
    }

    else{
      $_SESSION['added']= '<h4 class="text-danger text-center">Failed Try again</h4>';
      header('location:'.url.'admin/tution_available_admin.php');
      exit;
    }
}
?>
