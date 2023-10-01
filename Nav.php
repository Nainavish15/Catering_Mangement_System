<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <?php 
    // session_start();
                    error_reporting(E_ERROR | E_PARSE);
          
    ?>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="profile/<?php echo $_SESSION['user_img'];?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <br><br>
                <ul class="navbar-nav">
                    <?php 
                             if($_SESSION['user_type']==NULL){ ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Category</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Facility</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">SignIn</a></li>
                    <?php }
                    else if($_SESSION['user_type']=='admin') {?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="AddCategory.php#addcatgory">Add Category</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="ViewCategory.php#category">View Category</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="AddDishes.php#adddish">Add Dishes</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="ViewDishes.php#Dish">View Dishes</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="ViewBookin.php#booking">View Booking</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Action/Logot.php">Logout</a></li>
                    
                        <?php
                    }
                    else{?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="UserViewDishes.php">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="UserViewDishes.php#Dish">View Dishes</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Booking.php#booking">My Booking</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Action/Logot.php">Logout</a></li>
                    
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>