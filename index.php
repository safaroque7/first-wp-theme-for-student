<?php
get_header();
?>

<!-- *******Welcome Section Start ****** -->
<div class="container-fluid px-0">

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/welcome-banner-1.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/welcome-banner-2.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/welcome-banner-3.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<!-- *******Welcome Section End ****** -->

<!--***** Our courses section start  ******-->

<div class="container-fluid py-5 bg-body-tertiary">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="text-center mb-3 fw-bold">My Projects</h2>
                <p class="text-center">
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit amet consectetur adipisicing elit.
                    <br>
                    Facere, alias consequatur. Hic, ex dolor esse sequi ex
                    dolor esse sequi!
                </p>

            </div>

            <!--** photo-card start ** -->

            <!-- item start  -->
            <div class="col-md-4">
                <div class="card shadow rounded-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/project-1.jpg'); ?>" class="card-img-top rounded-0 img-fluid" alt="...">
                    <div
                        class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                        <div
                            class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                            <i class="bi bi-filetype-html fs-2 icon-color"></i>
                        </div>
                        <h5 class="card-title mt-5 mb-3">Happiness Institute</h5>
                        <a href="https://masudrana93.github.io/happiness-institute/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                    </div>

                </div>
            </div>
            <!-- item end  -->

            <!-- item start  -->
            <div class="col-md-4 mt-md-0 mt-5">
                <div class="card shadow rounded-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/project_2.jpg'); ?>" class="card-img-top rounded-0 img-fluid" alt="...">
                    <div
                        class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                        <div
                            class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                            <i class="bi bi-filetype-html fs-2 icon-color"></i>
                        </div>
                        <h5 class="card-title mt-5 mb-3">Naem Nizam Blog</h5>
                        <a href="https://masudrana93.github.io/naem-nizam/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                    </div>

                </div>
            </div>
            <!-- item end  -->

            <!-- item start  -->
            <div class="col-md-4 mt-md-0 mt-5">
                <div class="card shadow rounded-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/project-3.jpg'); ?>" class="card-img-top rounded-0 img-fluid" alt="...">
                    <div
                        class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                        <div
                            class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                            <i class="bi bi-filetype-html fs-2 icon-color"></i>
                        </div>
                        <h5 class="card-title mt-5 mb-3">Saimon IELTS</h5>
                        <a href="https://masudrana93.github.io/saimons-ielts/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                    </div>

                </div>
            </div>
            <!-- item end  -->

            <!-- item start  -->
            <div class="col-md-4 mt-5">
                <div class="card shadow rounded-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/project-4.jpg'); ?>" class="card-img-top rounded-0 img-fluid" alt="...">
                    <div
                        class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                        <div
                            class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                            <i class="bi bi-filetype-html fs-2 icon-color"></i>
                        </div>
                        <h5 class="card-title mt-5 mb-3">Madrasha</h5>
                        <a href="https://masudrana93.github.io/madrasha-website/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                    </div>

                </div>
            </div>
            <!-- item end  -->

            <!-- item start  -->
            <div class="col-md-4 mt-5">
                <div class="card shadow rounded-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/project-5.jpg'); ?>" class="card-img-top rounded-0 img-fluid" alt="...">
                    <div
                        class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                        <div
                            class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                            <i class="bi bi-filetype-html fs-2 icon-color"></i>
                        </div>
                        <h5 class="card-title mt-5 mb-3">University</h5>
                        <a href="https://masudrana93.github.io/university-website/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                    </div>

                </div>
            </div>
            <!-- item end  -->

            <!-- item start  -->
            <div class="col-md-4 mt-5">
                <div class="card shadow rounded-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/project-6.jpg'); ?>" class="card-img-top rounded-0 img-fluid" alt="...">
                    <div
                        class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                        <div
                            class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                            <i class="bi bi-filetype-html fs-2 icon-color"></i>
                        </div>
                        <h5 class="card-title mt-5 mb-3">Landview Group</h5>
                        <a href="https://masudrana93.github.io/landiview_group/" class="btn rounded-pill brand-color">View More</a>
                    </div>

                </div>
            </div>
            <!-- item end  -->


            <!--** photo-card end ** -->
        </div>
    </div>
</div>

<!--***** Our courses section start  ******-->

<?php
get_footer();
?>