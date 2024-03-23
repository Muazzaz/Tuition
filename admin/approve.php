<?php
include('../config/connectiondb.php');
include('./login_check_admin.php');

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
        $sql= "UPDATE tutor SET catagory=1 where id='$id';";
                      
$res= mysqli_query($con,$sql);

if($res==TRUE)
{
    $_SESSION['Approved']= '<h5 class="text-success text-center">Updated</h5><br>';
}
else{
    $_SESSION['Approved']= '<h5 class="text-danger text-center">Failed </h5><br>';
}

 header('location:'.url.'admin/admin.php');



?>