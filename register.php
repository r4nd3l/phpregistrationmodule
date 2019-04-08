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
      <div class="twelve columns">
        <div class="center">
          <div>
            <h2>Register</h2>
          </div>

          <form method="post" action="register.php">
            <!-- Display validation errors here! -->
            <?php include('errors.php'); ?>
            <div class="input-group lift-top">
              <label for="username">Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>">
            </div>

            <div class="input-group">
              <label for="email">Email</label>
              <input type="text" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="input-group">
              <label for="password_1">Password</label>
              <input type="password" name="password_1">
            </div>

            <div class="input-group">
              <label for="password_2">Confirm</label>
              <input type="password" name="password_2">
            </div>

            <div class="input-group">
              <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>
              Already a member? <a href="login.php">Sign in</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
