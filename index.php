<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (fr
        ee version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       
   
  
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Category</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Facility</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">SignIn</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        HOME
                        <span class="text-primary">KITCHEN</span>
                    </h1>
                    <div class="subheading mb-5">
                        220/10,Narmda road near south avenue mall jabalpur madhya pradesh 482008
                        <a href="mailto:name@email.com">nainavishwakarma121@email.com</a>
                    </div>
                    <p class="lead mb-5">We have an excellent management with professional administrative system. Every order is a challenge for us and we consider the same as ours, resulting to make the party most memorable for every guest. We are well equipped and committed to offer personalized services to cater to your modern theme party requirements as well as traditional functions. We can also ensure you a quality ambiance for business meetings and conferences. Our extra ordinary services can only be experienced and believed. Shagun Caterers assure you that you will be pleased and enthralled with our warm and cordial hospitality.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://instagram.com/_natasha_131201?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <?php require_once './Experience.php'; ?>
            <hr class="m-0" />
            <!-- Category-->
            <?php require_once './Categorydiv.php'; ?>

            <hr class="m-0" />
            <!-- Facility-->
            <?php require_once './Facility.php'; ?>
            <hr class="m-0" />
            <!-- Reviews-->
            <?php require_once './Reviews.php'; ?>
            <hr class="m-0" />
            <!-- SignIn-->
            <?php
            require_once './SignIn.php';
            ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
