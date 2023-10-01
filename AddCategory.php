<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
       
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <?php
        session_start();
        if($_SESSION["user_type"]==NULL){
            header("location:index.php#awards");
        }
        ?>
        <!-- Navigation-->
         <?php require_once './Nav.php';?>
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
<section class="resume-section" id="awards">
    <div class="resume-section-content" style="" id="addcatgory">
        <h2 class="mb-5" >Enter Category</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <form action="Action/CategoryAction.php" method="POST">
                                    <div class="form-group">
                                        <label for="dish_name">Select Dish Category</label>
                                        <input type="text" name="dish_name" class="form-control">
                                    </div>
                                    <br>
                                       <input type="submit" value="Add Category" name="addcategory" class="form-control" id="add_cat"/>
                                       
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</section>                   
 <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>


