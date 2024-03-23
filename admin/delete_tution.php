<?php
include('../config/connectiondb.php');
include('./login_check_admin.php');

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
        $sql= "DELETE from tution where id='$id';";
                      
$res= mysqli_query($con,$sql);

if($res==TRUE)
{
    $_SESSION['deleted']= '<h5 class="text-success text-center">Updated</h5><br>';
}
else{
    $_SESSION['deleted']= '<h5 class="text-danger text-center">Failed </h5><br>';
}

 header('location:'.url.'admin/tution_available_admin.php');



?>