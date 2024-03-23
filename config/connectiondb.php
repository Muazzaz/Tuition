<?php 

        ob_start();
        session_start();


        
        define('url','http://localhost/tutor/');
        define('LocalHost','localhost');
        define('Db_Username','root');
        define('Db_Password','');
        define('Db_name','tutor');





    $con= mysqli_connect(LocalHost,Db_Username,Db_Password) or die(mysqli_error());
    $db_select=mysqli_select_db($con,Db_name) or die (mysqli_error());



?>