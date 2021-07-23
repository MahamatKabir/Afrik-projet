<?php
   session_start();

     define('SITEURL', 'http://localhost/food-order/');
     define('LOCALHOST' , 'localhost');
     define('DB_USENAME' , 'root');
     define('DB_PASSWORD' , '');
     define('DB_NAME' , 'food-order');

     
          /*partie tres important qui nous permet d inserer nos donneés dans le base de donneé*/
          $conn = mysqli_connect(LOCALHOST, DB_USENAME, DB_PASSWORD) or die(mysqli_error());
          $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>