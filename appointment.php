<!DOCTYPE php>
<php lang="en">

<?php include 'menu.php';?>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Programeaza-te</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Acasa</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Programeaza-te</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Programare</h6>
                    <h1 class="mb-5">Vrei si tu un serviciu autentic?</h1>
                </div>
            </div>
            <div class="row justify-content-center bg-appointment mx-0">
                <div class="col-lg-6 py-5">
                    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                        <h1 class="text-white text-center mb-4">Fa o programare</h1>
                        <form action="programare.php" method="POST">
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="nume" class="form-control bg-transparent p-4" placeholder="Nume" required="required" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="mail" class="form-control bg-transparent p-4" placeholder="Email" required="required" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" name="data" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Data" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" name="timp" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Ora" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                            <option selected>Selecteaza un serviciu</option>
                                            <option value="1">Masaj/terapie-CORP</option>
                                            <option value="2">Masaj/terapie-FATA</option>
                                            <option value="3">Sauna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Programeaza=te</button>
                                    <script>
   document.getElementById("programare-form").addEventListener("submit", function(event) {
  event.preventDefault();
 
                             var data = document.getElementById("daa").value;
                             var ora = document.getElementById("time").value;
 
  alert("Ati programat un serviciu pentru data " + data + " la ora " + ora + ".");
});
</script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->




    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/opening.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Ore de functionare</h6>
                        <h1 class="mb-4">GATA PENTRU ECHILIBRARE ENERGETICA?</h1>
                        <p>Ne poti gasi in urmatoarele intervale orare pentru a te bucura de terapii si masaje autentice.</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>LUNI-VINERI : 9:00 AM - 7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>SAMBATA : 9:00 AM - 6:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>DUMINICA : INCHIS</li>
                        </ul>
                        <a href="appointment.php" class="btn btn-primary mt-2">Programeaza-te</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->

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