<?php require 'connection.php';
if(isset($_POST["submit"])){
    $nume=$_POST["nume"];
    $subiect=$_POST["subiect"];
    $mesaj=$_POST["mesaj"];

   $query="INSERT INTO tb_data VALUES('','$nume','','$subiect','$mesaj')";
   mysqli_query($conn,$query);
   echo"<script>alert('Mesaj trimis cu succes')</script>";
}
?> 
<!DOCTYPE php>
<php lang="en">


<?php include 'menu.php';?>
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Contact</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                            <iframe class="position-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2850.2915999154006!2d26.198553176714697!3d44.406661703374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fec27f94c42d%3A0x747afd3dc1d21ef!2sBd.%20Theodor%20Pallady%2C%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1683403378785!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                        <h1 class="mb-4">Contacteaza-ne</h1>
                        <!--<div id="success"></div>-->
                        <form action="" method="post" >
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control border-0 p-4" name="nume" id="name" placeholder="Nume"
                                        required="required" data-validation-required-message="Introdu numele" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control border-0 p-4" name="mail" id="mail" placeholder="Email"
                                        required="required" data-validation-required-message="Introdu adresa de email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="subiect" id="subject" placeholder="Subiect"
                                    required="required" data-validation-required-message="Introdu subiectul" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" name="mesaj" id="message" placeholder="Mesaj"
                                    required="required"
                                    data-validation-required-message="Te rog introdu mesajul"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary py-3 px-4" type="submit" >Trimite</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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