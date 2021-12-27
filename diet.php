<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" id="logo11" href="icon.png" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <title>Gym Management</title>
</head>

<body>
    <!--NAVBAR START-->
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark nav1" id="headNav">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-2">
                <li class="nav-item active">
                    <a class="nav-link" data-scroll href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll href="diet.php">Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll href="week.php">Weekly-Routine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll href="health.php">Healthy-Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll href="videos.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll href="#contactus">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-success" data-scroll href="join.php">Join</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand nav1"> GYM MANAGEMENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <!--NAVBAR END-->

    <!--CONTENT START-->
    <section class="section">
        <div class="py-5">
            <h3 class="text-center"> Diet Guide</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/w-g.jpg" alt="Biryani image">
                        <div class="card-body">
                            <h3 class="card-text">Weight Gain Guide
                            </h3>
                            <a href="weight_gain.php" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/w-l.jpg" alt="Biryani image">
                        <div class="card-body">
                            <h3 class="card-text">Weight Loss Guide
                            </h3>
                            <a href="weight_loss.php" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTENT END-->


    <!--FOOTER SECTION START-->
    <footer class="footer text-center bg-dark" id="contactus">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div id="soci" class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location <i class="fas fa-map-marker-alt"></i></h4>
                    <p class="lead mb-0">
                        Gym Management System
                        <br />
                        India&nbsp; <img id="india" src="images/india.png">
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 id="social12">Get in touch <i class="fas fa-handshake"></i></h4>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <a class="btn  btn-social " href="#"><i class="fab fa-fw fa-facebook-f icon"></i></a>
                    <a class="btn  btn-social" href="#"><i class="fab fa-fw fa-instagram icon"></i></a>
                    <a class="btn  btn-social" href="#"><i class="fab fa-fw fa-twitter icon"></i></a>
                    <a class="btn  btn-social" href="#"><i class="fab fa-fw fa-youtube icon"></i></a>

                </div>
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4 btn1 btn2">Contact us <i class="fas fa-phone-square-alt"></i>
                    </h4>

                    <div id="contact">
                        <p class="lead mb-0">
                        <p>&nbsp;&nbsp;&nbsp;<i class="fas fa-envelope"></i>&nbsp;E-mail :- gym@gmail.com</p>
                        <p><i class="fas fa-phone-alt"></i>&nbsp;Phone no :- +91 92-5654-5455</p> </br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section Start-->
    <div class="copyright py-4 text-center text-white footer">
        <div class="container"><small>Copyright © 2021 | All Rights Reserved | <a href="http://localhost/gyms/"
                    class="getS"> Gym
                    Management System</a></small></div>
    </div>
    <!-- Copyright Section End-->
    <!--FOOTER SECTION END-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>