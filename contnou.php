

<!DOCTYPE php>
<?php
@include 'config.php';

if(isset($_POST['submit'])){

   $telefon = mysqli_real_escape_string($conn, $_POST['telefon']);
   $telefon = mysqli_real_escape_string($conn, $_POST['telefon']);
   $pass = md5($_POST['parola']);
   $uparola = md5($_POST['uparola']);
 

   $select = " SELECT * FROM inregistrare WHERE telefon = '$telefon' && parola = '$parola' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($parola != $uparola){
         $error[] = 'parola not matched!';
      }else{
         $insert = "INSERT INTO inregistrare(email, telefon, parola) VALUES('$email','$telefon','$parola')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>
<php lang="en">
<?php include 'menu.php';?>
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
                        <h2 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Creeaza un cont nou</h2>
    
    
                        <form action="contnou.php" method="post">

                       
                 <br><br><br><label><h5 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2" input="text" id="telefon" telefon="telefon">E-mail</label></h5>

                   <input type="text" telefon="telefon" placeholder="Introdu adresa de e-mail"><br>
                   <br><br><br><label><h5 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2" input="number" id="telefon" telefon="telefon">Telefon</label></h5>

                    <input type="text" telefon="telefon" placeholder="Introdu numarul de telefon"><br>
             
                   <br><br><label><h5 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2" input="parola" id="parola" telefon="parola" >Parola</label></h5>

                      <input type="parola" telefon="uparola" placeholder="Introdu parola"><br> 
                      <br><br><label><h5 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2" input="parola" id="parola" telefon="parola" >Confirma parola</label></h5><br>

                       <input type="parola" telefon="parola" placeholder="Introdu parola"><br> 

                        <br><button type="submit" class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Inregistreaza-te</button>
                     
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