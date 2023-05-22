
<!DOCTYPE php>
<php lang="en">
<?php


@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $parola = md5($_POST['parola']);

   $select = " SELECT * FROM inregistrare WHERE email = '$email' && parola = '$parola' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:index.php');

      }
     
   }else{
      $error[] = 'incorrect email or parola!';
   }

};
?>
<?php include 'menu.php'?> 

<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
</div>
</div>

<body>

        <center>
        <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 300px;">
                    <div class="position-relative h-100">
        <img class="img-fluid"  src="https://images.pexels.com/photos/3865712/pexels-photo-3865712.jpeg?cs=srgb&dl=pexels-elina-fairytale-3865712.jpg&fm=jpg"alt="" width="600" height="450"allowfullscreen="" >
         </div>
         </div>
                <div class="col-lg-4  pt-4 pb-lg-4" size="100px">
                    <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                    <div class="position-relative h-100">
                        <h2 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Bine ai venit!</h2>
                        <?php if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
                        <form action="" method="post" autocomplete="off">
                    

                 <br><br><br><label><h5 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">E-mail</label></h5>

                   <input type="text" name="email" placeholder="Introdu adresa de e-mail"><br>

             
                   <br><br><label><h5 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Parola</label></h5>

                      <input type="parola" name="parola" placeholder="Introdu parola"><br> 

                        <br><button type="submit" class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Logheaza-te</button>
                        <a href="contnou.php" button type="submit" class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Nu am cont</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


    
   <?php include 'footer.php';?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</php>