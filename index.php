<!DOCTYPE php>
<php lang="en">


<?php include 'menu.php';?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Masaj de relaxare</h3>
                            <p class="mx-md-5 px-5">O multitudine de tehnicii orientale combinate intr-o singura sedinta de terapie.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="programare.php">Programeaza-te</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Masaj facial</h3>
                            <p class="mx-md-5 px-5">Ideal pentru combaterea ridurilor de expresie si cearcanelor</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Programeaza-te</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Masaj Pietre Vulcanice</h3>
                            <p class="mx-md-5 px-5">Ideal pentru echilibrare energetica si sanatate de fier</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Programeaza-te</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Despre noi</h6>
                    <h1 class="mb-4"> CAND CAUTI UN SALON DE MASAJ  PREMIUM...</h1>
                    <p class="pl-4 border-left border-primary">
… opreste-te la ZEN Salon. De ce? Pentru ca vrem sa iti oferim cea mai placuta experienta de relaxare pe care o poti avea la un salon de masaj din Bucuresti.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">4</h3>
                                <h6 class="text-uppercase">Terapeute </h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">1293</h3>
                                <h6 class="text-uppercase">Clienti fericiti</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Serviciile noastre</h6>
                <h1>
Suntem gata sa te rasfatam in salonul din Bucuresti asa cum nu ai mai fost rasfatat vreodata.</h1>
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


    <!-- Pricing Start -->
    <div class="container-fluid bg-pricing" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/pricing.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">MIX 1</h5>
                                </div>
                                <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Relaxare</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Anticelulitic</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Shiatsu</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Facial Antirid</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Chocolate</p>
                                    <a href="" class="btn btn-primary my-2">Comanda acum</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">MIX 2</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Relaxare</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Anticelulitic</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Pietre Vulcanice</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Pietre Calde</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Reflexogen</p>
                                    <a href="" class="btn btn-primary my-2">Comanda acum</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">MIX VIP</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Pietre Calde</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Thai</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hawaian</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Balinez</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Facial Antirid</p>
                                    <a href="" class="btn btn-primary my-2">Comanda acum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Specialisti</h6>
                    <h1 class="mb-5">Teraupetele noastre</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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

    
     
    <div>
    <script>var jsonData = <?php include('poll.json');?>;</script>
</div>

<center>
<h2>Sondaj</h2>
<p>Vă rugăm să ne ajutați să îmbunătățim site-ul prin completarea acestui sondaj.</p>

<form action="in.php" method="post" >


  <label for="pret">Care este bugetul dumneavoastră pentru serviciul preferat></label><br>
  <input type="range" id="pret" name="pret" min="0" max="5000"><br><br>

  <label for="satisfactie">Cât de mulțumit sunteți de site-ul nostru?</label><br>
  <select id="satisfactie" name="satisfactie">
    <option value="5">Foarte mulțumit</option>
    <option value="4">Mulțumit</option>
    <option value="3">Nici mulțumit, nici nemulțumit</option>
    <option value="2">Nemulțumit</option>
    <option value="1">Foarte nemulțumit</option>
  </select><br><br>

  <label for="sugestii">Aveți sugestii pentru îmbunătățirea site-ului nostru?</label><br>
  <textarea id="sugestii" name="sugestii" rows="5"></textarea><br><br>

  <input type="submit" value="Trimite">
</form>
</center>
 
   
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