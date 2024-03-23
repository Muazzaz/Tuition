<?php   
 if(!isset($_SESSION['username_Tutor']))
 {
   $_SESSION['invalid_tutor_access']='<h5 class="text-danger text-center">Login As Tutor First </h5><br>';
   header('location:'.url.'tutor/signin.php');
 }

?>