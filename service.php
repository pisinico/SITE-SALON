<!DOCTYPE php>
<php lang="en">

<?php include 'menu.php';?>

 <!-- Header Start -->
 <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Tratamente</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Acasa</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Servicii</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Tratamente</h6>
                <h1>Servicii de Spa&Frumusete</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Masaj facial de relaxare</h4>
                    <p class="text-white px-3 mb-3">O multitudine de tehnicii orientale combinate intr-o singura sedinta de terapie.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Programeaza-te</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-2.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Masaj cu roci vulcanice</h4>
                    <p class="text-white px-3 mb-3">Ideal pentru echilibrare energetica si sanatate de fier</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Programeaza-te</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Masaj capilar</h4>
                    <p class="text-white px-3 mb-3">Elibereaza stresul psihic, insomniile si durerile de cap</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Programeaza-te</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-4.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Masaj Ayurveda</h4>
                    <p class="text-white px-3 mb-3">Masaj terapeutic pentru o piele stralucitoare si un par de invidiat</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Programeaza-te</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-5.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Sauna</h4>
                    <p class="text-white px-3 mb-3">Sauna reuneşte într-un singur concept sănătatea, frumuseţea şi relaxarea!</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Programeaza-te</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-6.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Tratament facial</h4>
                    <p class="text-white px-3 mb-3">Tratamentul facial este un ritual de ingrijire absolut necesar doamnelor</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Programeaza-te</a>
                    </div>
                </div>
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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


     <!-- Testimonial Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/testimonial.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Recenzii</h6>
                    <h1 class="mb-4">Ce spun clientii nostri?</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Andra</h6>
                                    <span>Avocat</span>
                                </div>
                            </div>
                            <p class="m-0">Da, recomand ZEN Salon pentru toată lumea. Este cea mai eficientă metodă de îmbunătățire a aspectului pielii</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Maria</h6>
                                    <span>Profesor</span>
                                </div>
                            </div>
                            <p class="m-0">La ZEN Salon am reusit sa patrund intr-o stare maxima de relaxare, va multumesc pentru experienta oferita.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Crina</h6>
                                    <span>Model</span>
                                </div>
                            </div>
                            <p class="m-0">Pielea mea are nevoie de mai multe sedinte de masaj la ZEN Salon, recomand cu drag.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <script type="text/javascript">
(function(d,s,id,u){
  if (d.getElementById(id)) return;
  var js, sjs = d.getElementsByTagName(s)[0],
      t = Math.floor(new Date().getTime() / 1000000);
  js=d.createElement(s); js.id=id; js.async=1; js.src=u+'?'+t;
  sjs.parentNode.insertBefore(js, sjs);
}(document, 'script', 'os-widget-jssdk', 'https://www.opinionstage.com/assets/loader.js'));
</script><div id="os-widget-1141604" class="os_poll" data-path="/polls/2902525" data-of="nicoleta3" data-opinionstage-widget="fdcfc407-b5fb-451f-a24a-e72ea525eb5c"></div>

     


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