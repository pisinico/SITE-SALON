<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stil.css">

</head>
<body>
   
<div class="container">

   <div class="content">
   
      <h1>Bine ai venit, <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Aceasta este o pagina de utilizator.</p>
      <a href="index.php" class="btn">Inapoi la site</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>