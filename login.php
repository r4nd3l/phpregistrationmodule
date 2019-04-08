<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <link rel="shortcut icon" href="img/favicon.svg">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/style.css">

  <title>DevCorner</title>
</head>
<body>

  <div class="container lift">
    <div class="row">
      <div class="twelve columns center">
        <div>
          <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
          <!-- Display validation errors here! -->
          <?php include('errors.php'); ?>
          <div class="input-group lift-top">
            <label for="username">Username</label>
            <input type="text" name="username">
          </div>

          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
          </div>

          <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
          </div>
          <p>
            Not yet a member? <a href="register.php">Sign up</a>
          </p>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
