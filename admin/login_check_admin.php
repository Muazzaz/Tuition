<?php   
 if(!isset($_SESSION['login_admin_success']))
 {
   $_SESSION['invalid access']='<h5 class="text-danger text-center">Login to Admin Panel First </h5><br>';
   header('location:'.url.'admin/Login_admin.php');
 }

?>