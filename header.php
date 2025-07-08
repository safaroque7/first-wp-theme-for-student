<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- Bootstrap icons link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <!-- External CSS Link  -->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md sticky-top bg-info">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand  " href="index.html">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-1.jpg'); ?>" alt="Main-logo" class="img-fluid" style="width: 80px;">
                        </a>



                        <div class="collapse navbar-collapse" id="navbarSupportedContent">



                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-ft-size">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="category.html">My Projects</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link" href="about-me.html">About Myself</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="photo-gallery.html">Photo Gallery</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="video-gallery.html">Video Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>


                            </ul>


                        </div>


                    </div>
                </div>
            </div>
        </div>



    </nav>
    <!-- Navbar End  -->