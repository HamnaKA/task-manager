<?php

session_start();//by defining session here we dont need to call session in each and every page
 /*create constants to save database
 constants will always be in capital letters while variables will be in small.define is used to define constants*/

 define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','task_manager');
 define('SITEURL','http://localhost/task-manager/');
 ?>
