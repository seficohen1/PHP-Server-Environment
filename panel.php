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
</head>
<body>
  <h1>Hello <span><?php echo $user; ?></span>, you are now logged in to your panel</h1>
  <p>you're email is <span><?php echo $email;?></span></p>
  <button>Log out</button>
</body>
</html>