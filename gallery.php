<!doctype html>
<html lang="sr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title itemprop="name">Galerija - Rajal Distillery - Najbolja domaća rakija! Rakija Rajal</title>
    <meta name="description" content="Dobrodošli na zvaničnu internet prezentaciju „Rajal Distillery“! Na prvom mestu nam je briga o našim kupcima, ljubiteljima i uživaocima u „Rajal“ proizvodima.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.ico">
</head>

<body>

<!--audio-->
<audio id="myAudio" src="track.mp3" autoplay loop controls preload="auto"></audio>
<!--background img>-->
<img class="d-block w-100 full zoom background-image" src="img/background.jpg" alt="Background">


<header>
    <div class="row header-info py-2">
        <div class="col-12">
            <div class="container d-flex">
                <p class="mb-0">
                    <span><i class="fas fa-phone"></i> +381 64 2339564</span>
                    <span><i class="far fa-envelope ml-3"></i> rakijarajal@gmail.com</span></p>
                <a href="" class="ml-auto border-right-contact mr-2 pr-2">
                    <img src="img/flags/sr.png" alt="">
                </a>
                <a href=""><img src="img/flags/en.png" alt=""></a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/logo/rajal-logo.jpg" alt="Rakija Rajal">
            </a>

            <button class="navbar-toggler hamburger" type="button">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse position-relative" id="mobileNav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item mr-2">
                        <a class="nav-link " href="/"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item mr-2 d-block have-sublist">
                        <div class="d-flex">
                            <a id="nav-link-products" class="nav-link" href="/#products">Rakija i Likeri</a>
                            <i class="fas fa-plus nav-item-products-btn"></i>
                        </div>
                        <ul class="list-unstyled ml-3 mt-3 mobile-sub-links-products">
                            <li class="mb-2">
                                <a href="/#products" class="text-white">Rakija od dunja</a>
                            </li>
                            <li class="mb-2">
                                <a href="/#products-kajsija">Rakija od kajsija</a>
                            </li>
                            <li class="mb-2">
                                <a href="/#products-viljamovka">Rakija viljamovka</a>
                            </li>
                            <li class="mb-1">
                                <a href="/#products-likeri">Likeri</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/#about">O nama</a>
                    </li>
                    <li class="nav-item mr-2 d-block have-sublist">
                        <div class="d-flex">
                            <a id="nav-link-selling" class="nav-link" href="selling.php">Prodaja</a>
                            <i class="fas fa-plus nav-item-selling-btn"></i>
                        </div>
                        <ul class="list-unstyled ml-3 mt-3 mobile-sub-links-selling">
                            <li class="mb-2">
                                <a href="selling.php" class="text-white">Prodaja i distribucija</a>
                            </li>
                            <li class="mb-2">
                                <a href="selling.php#marketing">Marketing</a>
                            </li>
                            <li class="mb-2">
                                <a href="selling.php#price-list">Cenovnik</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="quality.php">Kvalitet i sertifikati</a>
                    </li>
                    <li class="nav-item mr-2 active-link">
                        <a class="nav-link" href="gallery.php">Galerija</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#contact-us">Kontakt</a>
                    </li>
                </ul>
                <div class="product-links-toggle px-3 py-1">
                    <a href="/#products" class="d-block py-2">Rakija od dunja</a>
                    <a href="/#products-kajsija" class="d-block py-2">Rakija od kajsija</a>
                    <a href="/#products-viljamovka" class="d-block py-2">Rakija viljamovka</a>
                    <a href="/#products-likeri" class="d-block py-2">Likeri</a>
                </div>

                <div class="selling-links-toggle px-3 py-1">
                    <a href="selling.php" class="d-block py-2">Prodaja i distribucija</a>
                    <a href="selling.php#marketing" class="d-block py-2">Marketing</a>
                    <a href="selling.php#price-list" class="d-block py-2">Cenovnik</a>
                </div>
            </div>
        </div>


    </nav>
</header>

<!--main content-->
<div class="content gallery">

    <!-- Gallery -->
    <section id="gallery" class="py-5">
        <div class="container p-5 bg-white-transparent">
            <div class="row mb-3">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Galerija</h2>
                </div>
            </div>
                    <div class="row gallery-row justify-content-center">
                        <a href="img/gallery/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/1.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/2.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/3.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6 ">
                            <img src="img/gallery/4.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/5.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/6.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/7.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/7.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/8.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/8.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/9.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/9.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/10.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/10.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/11.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/11.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/12.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <img src="img/gallery/12.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/13.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <img src="img/gallery/13.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/14.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <img src="img/gallery/14.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/15.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <img src="img/gallery/15.jpg" class="img-fluid">
                        </a>
                        <a href="img/gallery/16.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <img src="img/gallery/16.jpg" class="img-fluid">
                        </a>



                    </div>


        </div>
    </section>


    <!--Contact-->
    <section id="contact-us" class="py-5 fade">
        <div class="container bg-white-transparent p-5">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Kontakt</h2>
                </div>
            </div>
            <h3>Informacije i prodaja:</h3>
            <div class="row text-center mb-5">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 border-right-contact">
                    <i class="fas fa-phone "></i>
                    <p>+381 64 2339564</p>
                    <p>+381 63 7319158</p>
                    <p>+381 21 790088</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 border-right-contact">
                    <i class="fas fa-home"></i>
                    <p>Sivč Jovgena bb, 21460 Vrbas, Srbija</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <i class="far fa-envelope"></i>
                    <p>rakijarajal@gmail.com</p>
                </div>
            </div>

            <form method="post" id="myForm" action="">
                <h3>Pošaljite nam poruku!</h3>

                <div class="form-row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input id="name" name="name" type="text" class="form-control" placeholder="Ime (obavezno)">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 margin-top-05-mobile">
                        <input id="email" name="email" type="text" class="form-control" placeholder="Email (obavezno)">
                    </div>
                    <div class="col-12 mt-2">
                        <textarea id="message" name="message" rows="10" placeholder="Poruka ..."
                                  class="form-control"></textarea>
                    </div>
                    <div class="col-12 mt-2">
                        <input type="submit" class="w-100 send-message-btn py-2 btn" value="POŠALJI">
                    </div>
                </div>
            </form>

            <div class="success">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Vaša poruka je uspešno poslata.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h3>Pronađite nas na mapi:</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.1655364688136!2d19.661576415682898!3d45.5671096345913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b45596760d0f5%3A0xcb3f66e1b8679184!2sSiv%C4%8D+Jovgena%2C+Vrbas!5e0!3m2!1sen!2srs!4v1541808930345"
                            width="auto" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</div>


<footer>
    <div class="footer-wrapper py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4>Podaci o kompaniji</h4>
                    <div class="footer-line my-3"></div>
                    <p><strong>Poslovno ime:</strong> RAJAL DISTILLERY DOO VRBAS</p>
                    <p><strong>Adresa: </strong>Sivč Jovgena bb, 21460 Vrbas</p>
                    <p><strong>Pretežna delatnost:</strong> 1101 – Destilacija, prečiščavanje i mešanje pića</p>
                    <p><strong>Matični broj:</strong> 21086444</p>
                    <p><strong>PIB:</strong> 108882218</p>
                    <p><strong>Tekući račun u banci INTESA:</strong><br>
                        160-0000000423702-58</p>
                    <p><strong>Odgovorno lice:</strong> Stevan Bobić i Miloš Mijatović</p>
                    <p><strong>Telefon:</strong> +381 21 790088</p>
                    <p><strong>Email:</strong> rakijarajal@gmail.com</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4>Linkovi</h4>
                    <div class="footer-line my-3"></div>
                    <div class="row">
                        <div class="col">
                            <p><a href="/#products">Rakija i likeri</a></p>
                            <p><a href="/#products">Rakija od dunja</a></p>
                            <p><a href="/#products-kajsija">Rakija od kajsija</a></p>
                            <p><a href="/#products-viljamovka">Rakija viljamovka</a></p>
                            <p><a href="/#products-likeri">Likeri od dunje, kajsije i kruške</a></p>

                        </div>
                        <div class="col">
                            <p><a href="/#about">O nama</a></p>
                            <p><a href="/#about-tradition">Tradicija</a></p>
                            <p><a href="/#about-medals">Medalje i priznanja</a></p>
                            <!--<p><a href="/#production-process">Proces proizvodnje</a></p>-->
                            <p><a href="quality.php">Kvalitet i sertifikati</a></p>
                            <p><a href="gallery.php">Galerija</a></p>
                        </div>
                        <div class="col">
                            <p><a href="selling.php">Prodaja</a></p>
                            <p><a href="selling.php">Distribucija</a></p>
                            <p><a href="selling.php#marketing">Marketing</a></p>
                            <p><a href="selling.php#price-list">Cenovnik</a></p>
                        </div>
                    </div>
                    <div class="row mt-2 follow-us">
                        <div class="col-12">
                            <h4>Pratite nas na Facebook-u:</h4>
                            <a href="https://www.facebook.com/RajalDistillery/"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-credits"><p>© 2018 Copyright: Rajal Distillery</p></div>
</footer>


<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<script src="js/scripts.js"></script>

</body>
</html>