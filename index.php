<?php get_header(); ?>

<body>

    <div id="loader">
        <h1 id="loader-text">Loading...</h1>
        <h2 id="brand-text">Zero</h2>
    </div>
    
    <div id="content" style="display: none;">
    
        <!--- Section One -->
        <section class="full-banner">
            <div class="banner-image">
                <div><img src="<?php echo get_template_directory_uri(); ?>/asset/img/A1.png" alt="Product Image" class="active img-fluid" /></div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/asset/img/A2.png" alt="Product Image" class="img-fluid" /></div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/asset/img/A3.png" alt="Product Image" class="img-fluid" /></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-5 col-md-3 order-sm-2">
                        <div class="side-logo">
                            <div class="logo">
                                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/asset/img/ttlogo.png" alt="">
                                <hr id="logo-hr">
                            </div>
                            <br>
                            <div class="menu">
                                <ul class="menu-list">
                                    <li class="menu-item">
                                        <hr>
                                        <a href="#" id="about-link">
                                            <br>
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/menu.png" alt="Menu Image" />
                                            <span class="span">ABOUT</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#footer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/location.png" alt="Location Image" />
                                            <span class="span">LOCATION</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
    
        <section class="section-two">
            <div class="container">
                <div class="row">
                    <!-- Row with 2 Columns -->
                    <div class="col-md-6 col-lg-6">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/ator-1.jpeg" class="img-fluid custom-img" alt="Image 1">
                            <figcaption class="image-caption-1">New Arrival</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/ator-2.jpg" class="img-fluid custom-img" alt="Image 2">
                            <figcaption class="image-caption-2">New Arrival</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="section-three mt-3">
            <div class="container">
                <div class="row">
                    <!-- Row with 2 Columns -->
                    <div class="col-md-6 col-lg-6">
                        <h2 class="subscription">Subscribe Us</h2>
                        <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <button type="submit" class="btn btn-secondary">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="badge-icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/tripadvisor-logo.png" class="img-fluid badge-icon" alt="Badge 1">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/service-logo.png" class="img-fluid badge-icon" alt="Badge 2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </div>

<?php get_footer(); ?>
