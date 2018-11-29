<!doctype html>
<html lang="sr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title itemprop="name">Rajal Distillery - Najbolja domaća rakija! Rakija Rajal</title>
    <meta name="description"
          content="Dobrodošli na zvaničnu internet prezentaciju „Rajal Distillery“! Na prvom mestu nam je briga o našim kupcima, ljubiteljima i uživaocima u „Rajal“ proizvodima.">

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
                    <li class="nav-item mr-2 active-link">
                        <a class="nav-link " href="/"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item mr-2 d-block have-sublist">
                        <div class="d-flex">
                            <a id="nav-link-products" class="nav-link" href="#products">Rakija i Likeri</a>
                            <i class="fas fa-plus nav-item-products-btn"></i>
                        </div>
                        <ul class="list-unstyled ml-3 mt-3 mobile-sub-links-products">
                            <li class="mb-2">
                                <a href="#products" class="text-white">Rakija od dunja</a>
                            </li>
                            <li class="mb-2">
                                <a href="#products-kajsija">Rakija od kajsija</a>
                            </li>
                            <li class="mb-2">
                                <a href="#products-viljamovka">Rakija viljamovka</a>
                            </li>
                            <li class="mb-1">
                                <a href="#products-likeri">Likeri</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#about">O nama</a>
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
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="gallery.php">Galerija</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#contact-us">Kontakt</a>
                    </li>
                </ul>
                <div class="product-links-toggle px-3 py-1">
                    <a href="#products" class="d-block py-2">Rakija od dunja</a>
                    <a href="#products-kajsija" class="d-block py-2">Rakija od kajsija</a>
                    <a href="#products-viljamovka" class="d-block py-2">Rakija viljamovka</a>
                    <a href="#products-likeri" class="d-block py-2">Likeri</a>
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
<div class="content">

    <!-- Products -->
    <section id="products" class="py-5 fade">
        <div class="container p-5 bg-white-transparent fade">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Rakija i likeri</h2>
                </div>
            </div>

            <!--Dunja-->
            <div id="products-dunja" class="row mb-5 fade">
                <div class="col-lg-6 col-md-12 product-text">
                    <div class="products-heading d-flex justify-content-between">
                        <div class="align-self-center">
                            <h3>Rakija od Dunja</h3>
                            <p class="product-sub-header">Quince Brandy</p>
                        </div>
                        <img src="img/products/dunja-200w.png" alt="dunja">
                    </div>

                    <p>Naš najpoznatiji i najprodavaniji brend u regionu, prepoznat od strane ljubitelja po svom
                        kvalitetu i specifičnom ukusu i aromi. Rakija od dunje se priprema od najkvalitetnijih
                        vrsta voća sorte „Leskovčanka“ po recepturi, koja se ljubomorno čuva vekovima i po
                        specifičnom tehnološkom postupku, gde se nakon pečenja na strogo kontrolisanoj
                        temperature i destilacije, dodaje izvorska voda sa velikih dubina.</p>
                    <p>„Rajal“ rakija od dunja se plasira na tržištu u specifičnim staklenim bocama od 1 L, 0.7 L, 0.5 L
                        ili
                        0.25 L.</p>
                    <!--<p class=""><a href="#production-process" class="product-more-info-btn ">Detalji o procesu-->
                    <!--proizvodnje</a></p>-->

                </div>
                <div class="col-lg-6 col-md-12 products-images text-right">
                    <img src="img/products/rakija-dunja.jpg" alt="Rakija dunja">
                </div>
            </div>

            <!--Kajsija-->
            <div id="products-kajsija" class="row mb-5 pt-5 fade">
                <div class="col-lg-6 col-md-12 products-images text-left order-2-mobile">
                    <img src="img/products/rakija-kajsija.jpg" alt="Rakija kajsija">
                </div>
                <div class="col-lg-6 col-md-12 product-text">
                    <div class="products-heading d-flex justify-content-between">

                        <img src="img/products/kajsija-200w.png" alt="kajsija">
                        <div class="align-self-center">
                            <h3>Rakija od Kajsija</h3>
                            <p class="text-right product-sub-header">Apricot Brandy</p>
                        </div>
                    </div>

                    <p class="text-right">Naš drugi brend po značaju i potražnji na tržištu regiona i EU je rakija od
                        kajsija, koja je
                        dobila mnogobrojna priznanja na sajmovima u region i šire. Proizvodi se od šest sorti
                        voća kajsije sa različitih regiona uzgajanja, po staroj recepturi i savremenoj tehnologiji,
                        tako da je vrhunskog kvaliteta i arome. Sa sadržajem od 42 vol. % alkohola je vrlo pitka
                        i predstavlja pravi izazov za ljubitelje dobre i kvalitetne rakije.</p>
                    <p class="text-right">„Rajal“ rakija od kajsija se plasira na tržištu u specifičnim staklenim bocama
                        od 1 L, 0.7 L, 0.5 L ili 0.25 L.</p>
                    <!--<p class="text-right"><a href="#production-process" class="product-more-info-btn ">Detalji o-->
                    <!--procesu proizvodnje</a></p>-->
                </div>
            </div>

            <!--Viljamovka-->
            <div id="products-viljamovka" class="row mb-5 pt-5 fade">
                <div class="col-lg-6 col-md-12 product-text">
                    <div class="products-heading d-flex justify-content-between">
                        <div class="align-self-center">
                            <h3>Rakija Viljamovka</h3>
                            <p class="product-sub-header">Pear Brandy</p>
                        </div>
                        <img src="img/products/kruska-200w.png" alt="Viljamovka">
                    </div>
                    <p>Viljemovka je jedina rakija od voća, koja je standardizovanog imena, shodno Zakonu o
                        rakijama, pa se pod tim imenom podrazumeva svaka rakija dobijena od sorte kruške
                        Viljam. Naša Viljemovka je višestruko kvalitetnija od sličnih industijski dobijenih
                        rakija,što potvrđuju mnogobrojne nagrade za kvalitet. Proizvodi se po posebnim
                        recepturama i predstavlja proširenje asortimana već poznatih brendova rakija od dunja i
                        kajsija. „Rajal“ rakija od kruške sorte Vlijam sadrži 42 vol. % alkohola, prijatnog je ukusa
                        i arome.</p>
                    <p>„Rajal“ Viljamovka se plasira na tržištu u specifičnim staklenim bocama od 1 L, 0.7 L, 0.5 L ili
                        0.25 L.</p>
                    <!--<p class=""><a href="#production-process" class="product-more-info-btn ">Detalji o procesu-->
                    <!--proizvodnje</a></p>-->
                </div>
                <div class="col-lg-6 col-md-12 products-images text-right">
                    <img src="img/products/rakija-viljamovka.jpg" alt="Rakija dunja">
                </div>
            </div>

            <!--Likeri-->
            <div id="products-likeri" class="row mb-5 pt-5 fade likeri">
                <div class="col-lg-6 col-md-12 products-images text-left order-2-mobile">
                    <img src="img/products/likeri.jpg" alt="Likeri Dunja, Kajsija i Viljamovka">
                </div>
                <div class="col-lg-6 col-md-12 product-text">
                    <div class="products-heading d-flex justify-content-between">
                        <img src="img/products/likeri-200w.png" alt="Likeri Dunja, Kajsija i Viljamovka">
                        <div class="align-self-center">
                            <h3>Likeri Dunja, Kajsija i Viljamovka</h3>
                            <p class="text-right product-sub-header">Voćni liker sa medom</p>
                        </div>
                    </div>
                    <p class="text-right">Vrhunsko alkoholno piće za degustaciju i koktele – Rajal likeri od dunja,
                        kajsija i krušaka su naš najnoviji brend, koji će svojim kvalitetom izazvati poremećaje na
                        regionalnom tržištu sličnih proizvoda, jer je potražnja premašila sva očekivanja.</p>
                    <p class="text-right">Likeri su pravljeni po recepturi staroj više od dva veka, nakon višegodišnjeg
                        ispitivanja i odmeravanja svake dodavane komponente posebno, uspeli smo da harmonizujemo sve
                        potrebne ukuse i arome i dobijemo vrlo specifično alkoholno piće, karakteristično za ovo
                        područje. Tehnologija I receptura se prenosila sa kolenana koleno, a posebnu draž čini jedan od
                        baznih sastojaka – mad iz banatskih pustara.</p>
                    <p class="text-right">
                    <p class="text-right">„Rajal“ Likeri se plasiraju na tržištu u specifičnim staklenim bocama od 1 L,
                        0.7 L, 0.5 L ili
                        0.25 L.</p>
                    <!--<p class="text-right"><a href="#production-process" class="product-more-info-btn ">Detalji o-->
                    <!--procesu proizvodnje</a></p>-->

                </div>
            </div>

            <div class="row mb-5 justify-content-center selling-info-button fade">
                <a href="selling.php">Informacije o prodaji i cenama</a>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-5 fade">
        <div class="container p-5 bg-white-transparent">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">O nama</h2>
                </div>
            </div>

            <div class="row mb-5 fade">
                <div class="col-lg-6 col-md-12 product-text">
                    <p>RAJAL DISTILLERY DOO VRBAS je deo uspešnog poslovnog sistema kooperativa i
                        proizvođača kvalitetnog voća i maloprodajnog lanca u celoj Srbiji i regionu. Registrovano je u
                        APRu kao – Privredno društvo za destilacija, prečiščavanje i mešanje pića i jedno je jedno od
                        vodećih proizvođača rakija i likera od najkalitetnijeg domaćeg voća u Srbiji, sa dugom
                        tradicijom i recepturom, koja se generacijama prenosila sa kolena na koleno.</p>
                    <p>Sedište RAJAL DISTILLERY je u Vrbasu, gde je organizovana proizvodnja, pakovanje i
                        distribucija proizvoda. Proizvodni program i asortiman je podeljen spram vrstama voća koje se
                        destiliše i tehnologiji i recepturi, tako da se gotovi proizvodi dele na rakija od različitih
                        vrsta
                        najkvalitetnijeg voća i likere. Ulaganjem u nove i najsavremenije prerađivačke pogone, RAJAL
                        DISTILLERY svojim kapacitetima polako postaje lider na domaćem tržištu sa stanovišta
                        proizvodnje i distribucije domaćih rakija i likera od probranog voća.</p>
                </div>
                <div class="col-lg-6 col-md-12 products-images text-right">
                    <img src="img/about/img-1.jpg" alt="Tradicija slika">
                </div>
            </div>

            <div id="about-tradition" class="row mb-5 pt-5 fade">
                <div class="col-lg-6 col-md-12 tradition-img text-left order-2-mobile">
                    <img src="img/about/img-3.jpg" alt="Tradicija slika" width="507px" height="355px">
                </div>
                <div class="col-lg-6 col-md-12 product-text">
                    <div class="products-heading d-flex justify-content-end">
                        <div class="align-self-center">
                            <h3 class="ml-auto">Tradicija</h3>
                        </div>
                    </div>
                    <p class="text-right">Duga tradicija u proizvodnji i pečenju rakije i ostalih alkoholnih
                        pića se u porodici Mijatović zasniva na činjenici da je receptura i tehnologija prenošena sa
                        kolena na koleno i da je svaka generacija oplemenila finalni proizvod, tako da je danas rakija
                        "Rajal" prepoznatljiva po svom ukusu i aromi.</p>
                    <p class="text-right">Naime, receptura za proizvodnju i tehnološki
                        postupak se ljubomorno čuvaju vekovima, pa je specifičan ukus dobijen zahvaljujući izboru
                        najkvalitetnijih sorti voća i prirodne vode sa velikih dubina. Tehnologija je u funkciji
                        recepture i pažljivo je baždarrena temperatura pečenja voća i destilacije, tako da se finalni
                        proizvod odlikuje savršenom pitkošću i aromom, po čemu su naša rakija i likeri poznati širom
                        regiona.</p>

                </div>
            </div>

            <div class="row mb-5 pt-5 fade text-center counter">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 border-right-contact">
                    <i class="far fa-calendar-alt"></i>
                    <div class="counter-value" data-count="20">0</div>
                    <p>godina postojanja</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 border-right-contact">
                    <i class="fas fa-tint"></i>
                    <div class="counter-value" data-count="35000">0</div>
                    <p>litara proizvedeno.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <i class="fas fa-user-friends"></i>
                    <div class="counter-value" data-count="500">0</div>
                    <p>ugostiteljskih objekata</p>
                </div>
            </div>


            <div id="about-medals" class="row justify-content-center mb-5 pt-5">
                <h3 class="">Medalje i priznanja</h3>
            </div>
            <div class="row medals mb-5">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <img src="img/medalje/medalje-1.jpg" alt="Medalja">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <img src="img/medalje/medalje-2.jpg" alt="Medalja">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6 margin-top-30-mobile">
                    <img src="img/medalje/medalje-3.jpg" alt="Medalja">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6 margin-top-30-mobile">
                    <img src="img/medalje/medalje-4.jpg" alt="Medalja">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>RAJAL DISTILLERY je u sklopu svoje poslovne politike uzeo učešće na mnogobrojnim domaćim I
                        međunarodnim sajmovima prehrane i alkoholnih pica,kao što su međunarodni sajam u Beču,
                        Budimpešti
                        … . Gde je na poslednjem međunarodnom sajmu u Mađarskoj nagrađen bronzanom medaljom za
                        kvalitet.</p>
                </div>
            </div>
            <div id="" class="row justify-content-center mb-3 pt-5">
                <h3 class="">Misija i vizija</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Naša osnovna filozofija je da tržištu ponudimo najkvalitetnije proizvode – alkoholna pića,
                        proizvedena od najpoznatijih sorti voća i recepturi, koja se vekovima prenosi sa kolena na
                        koleno, tako da možemo da zadovoljimo prohteve hedonista na globalnom tržištu. </p>
                    <p>Imidž pouzdanog poslovnog partnera i dobrog domaćina kod svojih potrošača i kooperanata RAJAL
                        DISTILLERY je sticao godinama, a rezultat je snažnog i konstantnog napora svih zaposlenih da pre
                        svega svojim profesionalnom odnosom oplemene odnos sa njima i održe visok nivo kvaliteta
                        proizvoda</p>
                    <p>RAJAL DISTILLERY teži da se pozicionira na regionalnom i globalnom tržištu i bude konjukturan
                        kvalitetom i cenom najboljim svetskim alkoholnim pićima, što svakako zaslužuje i što predstavlja
                        imperativ u narednom periodu. Naša misija i vizija se bazira u naporima da se zadrži konkurentna
                        prednost nad ostalim proizvođačima u region, a zasniva se na lojalnosti naših dugogodišnjih
                        potrošača i zahtevima novih tržišta u EU. Naša vizija je snažna i jasna i mobiliše energiju svih
                        zaposlenih kod kojih je stvoren osećaj jedinstva i ponosa rada u porodičnom okruženju, što je
                        rezurtiralo vrhunskim kvalitetom naših proizvoda.</p>
                    <p>U tom smislu, težimo da uvodjenjem novih tehnologija u proizvodnju i distribuciju, potpuno
                        automatizujemo i putem IT i odredjenih softwarea pratimo proces proizvodnje i distrubucije na
                        najsavremniji način. Proizvodni informacioni sistem privrednog društva prolazi kroz nekoliko
                        faza integracije i transformacije. U prvoj fazi, modul za planiranje materijalnih resursa je
                        morao da se proširi i integriše sa modulima koji prate ostale proizvodne resurse. U sledećoj
                        fazi integracije javio se ERP (Enterprise Resourse Planning) koncept, čiji je glavni cilj
                        integrisanje svih odeljenja i funkcija privrednog društva u jedan IS koji zadovoljava sve
                        potrebe kompanije. Najnovija faza integracije se odnosi na povezivanje ERP softvera sa
                        aplikacijama ET. Naime, velika ekspanzija Interneta je poslednjih godina pružila velike
                        mogućnosti za razvoj elektronske trgovine, tako da je naša intencija da pružimo mogućnost što
                        većem broju potrošača i ljubitelja alkoholnih pića da na jednostavan i lak način dođu do naših
                        proizvoda</p>
                </div>
            </div>
        </div>
    </section>

    <!--Production process-->
    <!--<section id="production-process" class="py-5">-->
    <!--<div class="container p-5 bg-white-transparent">-->
    <!--<div class="row mb-3">-->
    <!--<div class="col-lg-12 text-center">-->
    <!--<h2 class="section-heading text-uppercase">Proces proizvodnje</h2>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="row mb-5">-->
    <!--<div class="col-lg-6 col-md-12 col-sm-12 product-text">-->
    <!--<div class="products-heading d-flex justify-content-between">-->
    <!--<div class="align-self-center">-->
    <!--<h3>Prirodna proizvodnja kao osnovni princip</h3>-->
    <!--</div>-->
    <!--</div>-->

    <!--<p>Rajal Distillery se bavi proizvodnjom visoko kvalitetnih alkoholnih pića, pre svega rakija i-->
    <!--likera. Mnogima smo poznati po našim proizvodima od dunje. Naša reputacija je građena godinama,-->
    <!--a održali smo je zahvaljujući bezkompromisno čistoj i prirodnoj proizvodnji. Naš osnovni princip-->
    <!--je da koristimo isključivo kvalitetno i potpuno zrelo voće. Sve rakije pravimo bez upotrebe-->
    <!--selektivnih kvasaca i bez dodatka hemijskih i drugih aditiva.</p>-->

    <!--</div>-->
    <!--<div class="col-lg-6 col-md-12 col-sm-12 products-images text-right">-->
    <!--<img src="img/production-process/img-1.jpg" alt="Dunje">-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="row">-->
    <!--<div class="col">-->
    <!--<img src="img/production-process/img-2.jpg" alt="Slika">-->
    <!--</div>-->
    <!--<div class="col">-->
    <!--<img src="img/production-process/img-3.jpg" alt="Slika">-->
    <!--</div>-->
    <!--<div class="col">-->
    <!--<img src="img/production-process/img-4.jpg" alt="Slika">-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->

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
<!--main content end-->

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
                            <p><a href="#products">Rakija i likeri</a></p>
                            <p><a href="#products">Rakija od dunja</a></p>
                            <p><a href="#products-kajsija">Rakija od kajsija</a></p>
                            <p><a href="#products-viljamovka">Rakija viljamovka</a></p>
                            <p><a href="#products-likeri">Likeri od dunje, kajsije i kruške</a></p>

                        </div>
                        <div class="col">
                            <p><a href="#about">O nama</a></p>
                            <p><a href="#about-tradition">Tradicija</a></p>
                            <p><a href="#about-medals">Medalje i priznanja</a></p>
                            <!--<p><a href="#production-process">Proces proizvodnje</a></p>-->
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
                            <a href="https://www.facebook.com/RajalDistillery/"><i
                                        class="fab fa-facebook-f"></i></a>
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
<script src="js/scripts.js"></script>
</body>
</html>