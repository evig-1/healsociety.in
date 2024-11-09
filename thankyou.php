
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThankYou</title>

    <?php include 'link.php' ?>
    <?php include 'db.php' ?>


    
</head>



<body>

    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->

    <!-- Navbar START -->

    <?php include 'nav.php' ?>
    <div class="banner">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">Admin Info</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                Admin Info
                            </li>
                        </ul>
                    </div>
                </div>
               
                <div class="banner__polygon d-none d-lg-block">
                    <img src="assets/img/polygon.svg" alt="image">
                </div>
            </div>
        </div>
    </div>


    <div class="contact global__py pt-0">
        <div class="container p-sm-0">
            <div class="row contact__form">

                <div class="col-12 col-md-9 col-lg-8 text-center m-auto aos-init">
                    <h3 class="global__text">Thank You</h3>
                    <h2 class="global__heading">Your Data Has Been Successfully Submitted!!</h2>
                    <div class="col-12 text-center">
                        <a href="admininfo.php" class="btn menu__btn menu__btn-in mb-3 mb-lg-0"
                            fdprocessedid="o5rk8j">Back to Admin Info Page</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

   <!--  Join_US START -->

   <div class="join">
        <div class="container p-sm-0">
            <div class="row">
                <div class="card join__card">
                    <img src="assets/img/BG-Element.png" class="img-fluid join__card-img" alt="image">
                    <div class="card-img-overlay join__card-layer">
                        <div class="col-11 col-md-7">
                            <!-- <h3 class="join__text global__text">Become a volenteer</h3> -->
                            <h2 class="join__heading global__heading" style="
    color: #fff;
">Every Bite Brings Brightness
                            </h2>
                            <button class="join__card-layer--btn global__btn"
                                onclick="window.location.href='gallery.php'">Discover More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Join_US END -->

    <?php include 'footer.php' ?>

</body>

</html>