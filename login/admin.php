<?php
require('db.php');
session_start()

if($_SESSION['usertype'] == 2 ) 
{
   echo hi
}
else {
    
   header("Location: login.php"); 
    
}
?>



<p>HIIII ADMIN PAGE</p>