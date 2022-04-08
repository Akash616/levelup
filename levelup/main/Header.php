<?php session_start(); ?>
<html lang="en">

<head>
    <title>Level Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_contactus.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_gallery.css">
    <link rel="stylesheet" href="../css/style_services.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/stylevideo.css">

    <style>
        .carousel-inner img {
            width: 100%;

        }

    </style>
</head>

<body>


    <!-- Starting of header-->


    <div class="row">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <!-- Brand -->
           <a class="navbar-brand" href="#myPage"><img src="../images/1.jpg" height="50px"></a>
            <div class="col-md-9">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_us">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#videos">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_us">Contact Us</a>
                     </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#map">Map</a>
                    </li>


                </ul>
            </div>

            <div class="col-md-3">
                <ul>
                    <?php 

                if(isset($_SESSION['Userid']))
                {
                    echo    '<form action="includes/logout.php" method="POST">
                                <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">Logout</button></li>
                            </form>';
                }
                else
                {
                    echo '  <li class="nav-item"><a href="logindesign.php" class="btn btn-outline-light">Login</a>
                                <a href="signupdesign.php" class="btn btn-outline-light ml-3">Sign Up</a></li>';
                }

                ?>
                </ul>
            </div>
        </nav>
    </div>


    <!-- Ending of header-->

</body>

</html>
