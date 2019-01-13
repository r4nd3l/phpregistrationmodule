<?php include('server.php');

  // If user is not logged in, they cannot access this page
  if (empty($_SESSION['username'])) {
    header('location: login.php');
  }

?>
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
          <h3 class="lift-zero">Home page</h3>
          <small>DevCorner territory</small>
        </div>

        <div class="content">
          <?php if (isset($_SESSION['success'])): ?>
            <div class="success">
              <p>
                <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                ?>
              </p>
            </div>
          <?php endif ?>

          <div class="lift-top">
            <?php if (isset($_SESSION["username"])): ?>
              <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
              <p><a href="index.php?logout='1'" stlye="color: red;">Log out</a></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
