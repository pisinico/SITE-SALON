<?php
session_start();

// initializing variables
$email = "";
$telefon    = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'date-logare');

// REGISTER USER
if (isset($_POST['inregistrare'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $telefon = mysqli_real_escape_string($db, $_POST['telefon']);
  $parola = mysqli_real_escape_string($db, $_POST['parola']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($telefon)) { array_push($errors, "Telefon is required"); }
  if (empty($parola)) { array_push($errors, "parola is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same email and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' or telefon='$telefon' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
   
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
    if ($user['telefon'] === $telefon) {
        array_push($errors, "Telefon already exists");
      }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$parola = md5($parola);//encrypt the parola before saving in the database

  	$query = "INSERT INTO users (email,telefon, parola) 
  			  VALUES('$email','$telefon' '$parola')";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $parola = mysqli_real_escape_string($db, $_POST['parola']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($parola)) {
  	array_push($errors, "parola is required");
  }

  if (count($errors) == 0) {
  	$parola = md5($parola);
  	$query = "SELECT * FROM users WHERE email='$email' AND parola='$parola'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email/parola combination");
  	}
  }
}

?>