<?php 
  session_start();

  if(!isset($_SESSION['user'])) {
    header("Location: index.php");
  } else {
   $user = $_SESSION["user"];
   $email = $_SESSION["email"];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel</title>
  <style>
    span {
      color: blue;
      font-weight: bold;
    }
  </style>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container">
  <h1>Hello <span><?= $user; ?></span>, you are now logged in to your panel</h1>
  <p>you're email is <span><?=$email;?></span></p>
  <a class="btn btn-outline-warning" href="close_session.php">Log out</a>
</div>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>