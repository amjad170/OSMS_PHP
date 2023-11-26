<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5" custom-nav>
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#Registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="#Login" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>

    </nav>
    <!-- End Navigation -->


    <!-- Start header Jumbotron -->
    <header class="jumbotron back-image" style="background-image: url(images/Banner1.jpeg);">
        <div class="myclass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OSMS</h1>
            <p class="font-italic">Customer's Happyness is our Aim</p>
            <a href="#" class="btn btn-success mr-4">Login</a>
            <a href="#" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </header>
    <!-- End header Jumbotron -->

    <!-- start Inroduction Section container-->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">OSMS Servieces</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae ab voluptas dolores, tenetur harum totam id non dolore quo explicabo assumenda molestiae accusantium inventore? Doloribus nemo quas ducimus recusandae possimus, perspiciatis deserunt obcaecati maxime ut in molestiae cumque, pariatur magnam itaque facere. Quam maxime omnis similique minima, assumenda nihil, ut, aut facilis exercitationem inventore praesentium. Quod, accusamus eveniet. Ea eum doloremque voluptatum totam tenetur vitae placeat adipisci deleniti non odit at commodi nam molestiae ad quae eius veritatis eligendi, accusantium quaerat nihil molestias?</p>
        </div>
    </div>
    <!-- End Inroduction Section container-->

    <!-- Start Services Section container-->
    <div class="container text-center border-bottom" id="Services">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div>
    <!-- End Services Section container-->

    <!-- Start Registration Form -->
   <?php include('userRegistration.php') ?>
    <!-- End Registration Form -->


    <!-- Start Happy Customer -->
    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" alt="avtar1.jpeg" class="img-fluid" style="border-radius: 100%; height:100px; width:100px;">
                            <h4 class="card-title">MD Amjad Hossain</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique nulla.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" alt="avtar1.jpeg" class="img-fluid" style="border-radius: 100%; height:100px; width:100px;">
                            <h4 class="card-title">Mirza Hossain</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique nulla.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" alt="avtar1.jpeg" class="img-fluid" style="border-radius: 100%; height:100px; width:100px;">
                            <h4 class="card-title">Kolpona Akter</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique nulla.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" alt="avtar1.jpeg" class="img-fluid" style="border-radius: 100%; height:100px; width:100px;">
                            <h4 class="card-title">Amir Hossain</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique nulla.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Happy Customer -->

<!-- Start Contact part -->
    <?php include('contactForm.php')?>
<!-- End Contact part -->

<!-- Start Footer -->
<footer class="container-fluid bg-dark mt-5  text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <span class="pr-2">Follow Us :</span>
                <a href="#" target="_blank" class="py-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="py-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="py-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="py-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" target="_blank" class="py-2 fi-color"><i class="fas fa-rss"></i></a>
            </div>

            <div class="col-md-6 text-right">
               <small>Design by AmjadHossain &copy; 2023</small>
               <small class="ml-2"><a href="#">Admin Login</a></small>
            </div>
        </div>
    </div>
</footer>











    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>