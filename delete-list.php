<?php

//echo "delete list page";

//include constants.php

include('config/constants.php');

//connect database

$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
/*if($conn==true)
   {
    echo "database is connected";
   }
*/

//select database
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
//check database is connected or not
/*
   if($db_select==true)
   {
       echo "database is connected";
   }
*/

?>
