<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/url-logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="Sk-Modernist-Mono.otf">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/swiper.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5">
                <div class="container px-3">
                    <a href="#home" class="navbar-brand">
                        <img src="assets/imagenew/home.png" class="img-fluid" alt="">
                    </a>
                    <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <!-- <div class="collapse navbar-collapse" id="navbarCollapse"> -->
                    <!-- <div class="navbar-nav mx-auto py-0">
                            <a href="#home" class="nav-item nav-link active">Home</a>
                            <a href="#about" class="nav-item nav-link">About</a>
                            <a href="#feature" class="nav-item nav-link">Feature</a>
                            <a href="#pricing" class="nav-item nav-link">Pricing</a>
                            <a href="#review" class="nav-item nav-link">Review</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                        </div> -->
                    <a href="#shop" class="navbar-brand float-end me-0">
                        <img src="assets/imagenew/shop.png" class="img-fluid" alt="">
                    </a>
                    <!-- </div> -->
                </div>
            </nav>

            <div class="container-xxl hero-header" id="home">
                <!-- <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">The Revolutionary App That Helps To Control Your Own Fitness</h1>
                            <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="assets/img/screenshot-1.png" alt="">
                                <img class="img-fluid" src="assets/img/screenshot-2.png" alt="">
                                <img class="img-fluid" src="assets/img/screenshot-3.png" alt="">
                                <img class="img-fluid" src="assets/img/screenshot-4.png" alt="">
                                <img class="img-fluid" src="assets/img/screenshot-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl px-0 marquee" id="">
            <marquee behavior="" direction=""><?= $run1->running_2; ?></marquee>
        </div>
        <!-- About End -->