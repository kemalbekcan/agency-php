<?php get_header(); ?>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/loader.png" alt="Loader Image">
  </div>
</div>

<!-- preloader end -->


<div id="particles-js"></div>

<!--header start-->

<header id="site-header" class="header">
  <div id="header-wrap">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.html">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo"> </a>
              
            <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
              </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <!-- Left nav -->
              <ul class="nav navbar-nav mx-auto">
                <!-- Home -->
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="index.html">Home 01</a>
                    </li>
                    <li>
                      <a href="index-2.html">Home 02</a>
                    </li>
                    <li>
                      <a href="index-3.html">Home 03</a>
                    </li>
                    <li>
                      <a href="index-4.html">Home 04</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="about-us.html">About Us</a>
                    </li>
                    <li>
                      <a href="team.html">Team</a>
                    </li>
                    <li>
                      <a href="team-single.html">Team Single</a>
                    </li>
                    <li>
                      <a href="price-table.html">Price Table</a>
                    </li>
                    <li>
                      <a href="faq.html">Faq</a>
                    </li>
                    <li>
                      <a href="login.html">Login</a>
                    </li>
                    <li>
                      <a href="coming-soon.html">Coming Soon</a>
                    </li>
                    <li>
                      <a href="error-404.html">Error 404</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="product-grid.html">Product Grid</a>
                    </li>
                    <li>
                      <a href="product-list.html">Product List</a>
                    </li>
                    <li>
                      <a href="product-single.html">Product Single</a>
                    </li>
                    <li>
                      <a href="product-cart.html">Cart</a>
                    </li>
                    <li>
                      <a href="product-checkout.html">Checkout</a>
                    </li>
                    <li>
                      <a href="order-complete.html">Order Completed</a>
                    </li>
                    <li>
                      <a href="forgot-password.html">Forgot Password</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="services.html">Service 01</a>
                    </li>
                    <li>
                      <a href="services-2.html">Service 02</a>
                    </li>
                    <li>
                      <a href="services-single.html">Service Single</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Portfolio</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="portfolio-masonry.html">Portfolio Masonry</a>
                    </li>
                    <li>
                      <a href="portfolio-grid-2.html">Portfolio Grid 2</a>
                    </li>
                    <li>
                      <a href="portfolio-grid-3.html">Portfolio Grid 3</a>
                    </li>
                    <li>
                      <a href="portfolio-slider.html">Portfolio Slider</a>
                    </li>
                    <li>
                      <a href="portfolio-single.html">Portfolio Single</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">News</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-single.html">Blog Single</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="contact.html">Contact 1</a>
                    </li>
                    <li>
                      <a href="contact-2.html">Contact 2</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="header-right d-flex align-items-center">
              <a class="header-btn" href="contact.html">Let's Chat <i class="bi bi-arrow-right"></i>
              </a>
              <a href="#" class="ht-nav-toggle">
                <i class="bi bi-grid-fill"></i>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<nav id="ht-main-nav">
  <a href="#" class="ht-nav-toggle">
    <i class="bi bi-x-lg"></i>
  </a>
  <a class="navbar-brand logo" href="index.html">
  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo"> </a>
  <p class="mt-3">Seoland Digital Marketing Agency Template Is fully responsible, Build whatever you like with the Seoland, Seoland is the creative, modern HTML5 Template suitable for Your Business Marketing.</p>
  <div class="form-info">
    <h4 class="mb-4">Contact Info</h4>
    <div class="contact-link">
      <ul class="contact-info list-unstyled">
        <li>
          <i class="flaticon flaticon-gps-1"></i>
          <span>Address:</span>
          <p>5th Street, 21st Floor, New York, USA</p>
        </li>
        <li>
          <i class="flaticon flaticon-email"></i>
          <span>Email:</span>
          <a href="mailto:themeht23@gmail.com">themeht23@gmail.com</a>
        </li>
        <li>
          <i class="flaticon flaticon-mobile"></i>
          <span>Phone:</span>
          <a href="tel:+91-234-567-8900">+91-234-567-8900</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="social-icons mt-5">
    <ul class="list-inline">
      <li>
        <a href="#">
          <i class="flaticon-facebook-app-symbol"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="flaticon-twitter-2"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="flaticon-instagram"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="flaticon-linkedin-1"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>

<!--header end-->


<!--hero section start-->

<section class="banner overflow-hidden">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 order-lg-1 ps-lg-8">
        <div class="banner-img animate__animated animate__fadeInRight animate__slow">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/banner/01.png" alt="Banner Image">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mt-10 mt-lg-0">
        <div class="animate__animated animate__shakeX animate__slow">
          <h6>Welcome To <span></span>
            <span></span>
            <span></span>
            <span></span>
          </h6>
        </div>
        <h1 class="mb-4 animate__animated animate__shakeX animate__slow">Digital Marketing <span>Agency</span>
        </h1>
        <p class="lead mb-5 animate__animated animate__zoomIn animate__slow">We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers growing.</p>
        <div class="d-sm-flex align-items-center animate__animated animate__fadeInUp animate__slow">
          <a class="themeht-btn primary-btn" href="#">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <a class="video-btn is-play popup-youtube ms-7" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg">
    <div class="video-btn-outer-circle has-scale-animation"></div>
    <div class="video-btn-outer-circle has-scale-animation has-delay-short"></div>
    <div class="video-btn-icon is-play">
      <i class="flaticon flaticon-play"></i>
    </div></a>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-shape">
    <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
      <linearGradient id="bannerwave" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
        <stop class="stop-color1" offset="0%" stop-opacity="1" />
        <stop class="stop-color2" offset="100%" stop-opacity="1" />
      </linearGradient>
      <path fill="url(#bannerwave)">

        <animate  repeatCount="indefinite" attributeName="d" dur="10s"
        
        values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
        c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
        c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
        c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;
        
        
        M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
        c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
        c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
        C48.9,198.6,57.8,191,51,171.3z;
        
        M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
        c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
        c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
        c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  "/>

        </path>
    </svg>
  </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

<!--feature start-->

<section class="pt-0">

<div class="rocket-shade">
<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/shape-small-1.png" alt="Shape Image">
</div>
  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-4 col-md-6">
        <div class="featured-item style-1 text-center">
          <div class="featured-icon">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/01.png" alt="">
          </div>
          <div class="featured-title">
            <h4>Online Marketing</h4>
          </div>
          <div class="featured-desc">
            <p>Get high rankings with multi-team collaboration that will help you optimize off-page SEO.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
        <div class="featured-item style-1 featured-active text-center">
          <div class="featured-icon">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/02.png" alt="">
          </div>
          <div class="featured-title">
            <h4>Data Analysis</h4>
          </div>
          <div class="featured-desc">
            <p>Get high rankings with multi-team collaboration that will help you optimize off-page SEO.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
        <div class="featured-item style-1 text-center">
          <div class="featured-icon">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/03.png" alt="">
          </div>
          <div class="featured-title">
            <h4>SEO Optimization</h4>
          </div>
          <div class="featured-desc">
            <p>Get high rankings with multi-team collaboration that will help you optimize off-page SEO.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--feature end-->


<!--about start-->

<section class="pt-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="shape-img-bg">
          <img class="mask-img" src="<?php echo get_template_directory_uri(); ?>/images/about/01.jpg" alt="">
          <div class="img-bg-shape">
            <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
<linearGradient id="imagewave" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
  <stop class="stop-color2" offset="0%" stop-opacity="1" />
  <stop class="stop-color1" offset="100%" stop-opacity="1" />
</linearGradient>
<path fill="url(#imagewave)">

  <animate  repeatCount="indefinite" attributeName="d" dur="5s"
  
  values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
  c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
  c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
  c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;
  
  
  M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
  c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
  c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
  C48.9,198.6,57.8,191,51,171.3z;
  
  M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
  c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
  c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
  c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  "/>

  </path>

</svg>


          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
        <div class="theme-title mb-4">
          <h6>About Us</h6>
          <h2>Everything starts with a <span>Marketing</span> Agency. </h2>
          <p>Seoland agency makes it easy to create content that engages your audience by taking the guesswork out of research, strategy, and writing.</p>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3">
            <ul class="list-unstyled list-icon style-1">
              <li>
                <i class="flaticon flaticon-check-mark"></i>Amazing communication.
              </li>
            </ul>
          </div>
          <div class="col-sm-6 mb-3">
            <ul class="list-unstyled list-icon style-1">
              <li>
                <i class="flaticon flaticon-check-mark"></i> Best trending designing.
              </li>
            </ul>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <ul class="list-unstyled list-icon style-1">
              <li>
                <i class="flaticon flaticon-check-mark"></i> Get quality Lead click.
              </li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="list-unstyled list-icon style-1">
              <li>
                <i class="flaticon flaticon-check-mark"></i> Mitigate Business Policy.
              </li>
            </ul>
          </div>
        </div>
        <a class="themeht-btn secondary-btn mt-5" href="#">
          <span>Discover More</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--marquee start-->

<section class="overflow-hidden p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="marquee-wrap">
          <div class="marquee-text">
            <span>Analysis</span>
            <i class="bi bi-square-fill"></i>
            <span>SEO</span>
            <i class="bi bi-square-fill"></i>
            <span>Marketing</span>
            <i class="bi bi-square-fill"></i>
            <span>Digital</span>
            <i class="bi bi-square-fill"></i>
            <span>Agency</span>
            <i class="bi bi-square-fill"></i>            
            <span>Digital Marketing</span>
            <i class="bi bi-square-fill"></i>
            <span>Business Solutions</span>
            <i class="bi bi-square-fill"></i>
            <span>Marketing Strategy</span>
            <i class="bi bi-square-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--marquee end-->


<!--service start-->

<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="theme-title">
          <h6>Services</h6>
          <h2>Features Loved Our Digital Marketing Services!</h2>
        </div>
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/about/02.png" alt="">
      </div>
      <div class="col-lg-7 ps-lg-8">
        <div class="row">
          <div class="col-md-6">
            <div class="service-item style-1">
              <div class="service-item-inner">
                <div class="service-icon">
                  <i class="flaticon flaticon-seo-3"></i>
                </div>
                <div class="service-desc">
                  <div class="service-title">
                    <h4>SEO Marketing</h4>
                  </div>
                  <p>Our strategy includes consistently evolving, to ensure weâ€™re SEO for business. Get more traffic with powerful SEO services.</p>
                  <a class="arrow-btn" href="services-single.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-6">
            <div class="service-item style-1 service-active">
              <div class="service-item-inner">
                <div class="service-icon">
                  <i class="flaticon flaticon-content-marketing"></i>
                </div>
                <div class="service-desc">
                  <div class="service-title">
                    <h4>Content Marketing</h4>
                  </div>
                  <p>Our strategy includes consistently evolving, to ensure weâ€™re SEO for business. Get more traffic with powerful SEO services.</p>
                  <a class="arrow-btn" href="services-single.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-6 mt-md-0">
            <div class="service-item style-1">
              <div class="service-item-inner">
                <div class="service-icon">
                  <i class="flaticon flaticon-digital-marketing"></i>
                </div>
                <div class="service-desc">
                  <div class="service-title">
                    <h4>Digital Marketing</h4>
                  </div>
                  <p>Our strategy includes consistently evolving, to ensure weâ€™re SEO for business. Get more traffic with powerful SEO services.</p>
                  <a class="arrow-btn" href="services-single.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-6">
            <div class="service-item style-1">
              <div class="service-item-inner">
                <div class="service-icon">
                  <i class="flaticon flaticon-email-2"></i>
                </div>
                <div class="service-desc">
                  <div class="service-title">
                    <h4>Email Marketing</h4>
                  </div>
                  <p>Our strategy includes consistently evolving, to ensure weâ€™re SEO for business. Get more traffic with powerful SEO services.</p>
                  <a class="arrow-btn" href="services-single.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--service end-->


<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 order-lg-1">
        <div class="shape-img-bg">
          <img class="mask-img" src="<?php echo get_template_directory_uri(); ?>/images/about/03.jpg" alt="">
          <div class="img-bg-shape">
            <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
              <linearGradient id="imagewave2" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop class="stop-color2" offset="0%" stop-opacity="1" />
                <stop class="stop-color1" offset="100%" stop-opacity="1" />
              </linearGradient>
              <path fill="url(#imagewave2)">

                <animate  repeatCount="indefinite" attributeName="d" dur="5s"
                
                values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
                c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
                c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
                c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;
                
                
                M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
                c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
                c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
                C48.9,198.6,57.8,191,51,171.3z;
                
                M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
                c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
                c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
                c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  "/>

                </path>

              </svg>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 pe-lg-10">
        <div class="theme-title mb-4">
          <h6>What We Do</h6>
          <h2>SEO Analytics & Strategy Skill</h2>
          <p>Scale your software operations through a custom engineering team. Meet the demand of your companyâ€™s operations with a high-performing nearshore team skilled in the technologies you need.</p>
        </div>
        <div class="ht-progress-bar">
          <div class="progress-parcent">
            <span>92</span>%
          </div>
          <div class="flex-grow-1">
            <h4>SEO Optimization</h4>
            <div class="progress" data-value="92">
              <div class="progress-bar"></div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <div class="progress-parcent">
            <span>74</span>%
          </div>
          <div class="flex-grow-1">
            <h4>Data Integration</h4>
            <div class="progress" data-value="74">
              <div class="progress-bar"></div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <div class="progress-parcent">
            <span>86</span>%
          </div>
          <div class="flex-grow-1">
            <h4>Analytics Success</h4>
            <div class="progress" data-value="86">
              <div class="progress-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--step start-->

<section class="step-process-area position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="step-item style-1 text-white">
          <div class="step-icon">
            <i class="flaticon flaticon-search-analysis"></i>
          </div>
          <h4>Research</h4>
          <p class="mb-0">Migrating your rank Google Analytics to another solution.</p>
          <span>1st Step</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-6 mt-md-0">
        <div class="step-item style-1 text-white step-bg">
          <div class="step-icon">
            <i class="flaticon flaticon-market-analysis"></i>
          </div>
          <h4>Customize</h4>
          <p class="mb-0">Migrating your rank Google Analytics to another solution.</p>
          <span>2nd Step</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-6 mt-lg-0">
        <div class="step-item style-1 text-white">
          <div class="step-icon">
            <i class="flaticon flaticon-target"></i>
          </div>
          <h4>Targeting</h4>
          <p class="mb-0">Migrating your rank Google Analytics to another solution.</p>
          <span>3rd Step</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-6 mt-lg-0">
        <div class="step-item style-1 text-white step-bg">
          <div class="step-icon">
            <i class="flaticon flaticon-results"></i>
          </div>
          <h4>Result</h4>
          <p class="mb-0">Migrating your rank Google Analytics to another solution.</p>
          <span>4th Step</span>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-bg ht-bg-move"></div>
</section>

<!--step end-->


<!--pricing start-->

<section class="price-section">
  <div class="container-fluid px-lg-10">
    <div class="row align-items-center my-6">
      <div class="col-lg-4 col-md-12 ps-lg-8 order-lg-1">
        <div class="theme-title z-index-1">
          <h6>Pricing Plan</h6>
          <h2>Unbeatable Pricing Find Your Perfect Plan Now</h2>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="row gx-lg-2 align-items-center">
          <div class="col-lg-4 col-md-6">
            <div class="price-table">
              <h3 class="price-title">Basic</h3>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>
                    <i class="flaticon flaticon-check"></i>Increase Traffic 130%
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>SEO Optimization
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Social Media Management
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Content Marketing
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>24/7 Hours Support
                  </li>
                </ul>
              </div>
              <div class="price-value">
                <h2>
                  <sup>$</sup>24
                </h2>
                <span>/Month</span>
              </div>
              <a class="themeht-btn primary-btn" href="#">
                <span>Choose Plan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
            <div class="price-table price-active">
              <div class="price-label">Popular</div>
              <h3 class="price-title">Premium</h3>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>
                    <i class="flaticon flaticon-check"></i>Increase Traffic 130%
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>SEO Optimization
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Social Media Management
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Content Marketing
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>24/7 Hours Support
                  </li>
                </ul>
              </div>
              <div class="price-value">
                <h2>
                  <sup>$</sup>48
                </h2>
                <span>/Month</span>
              </div>
              <a class="themeht-btn dark-btn" href="#">
                <span>Choose Plan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
            <div class="price-table">
              <h3 class="price-title">Advanced</h3>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>
                    <i class="flaticon flaticon-check"></i>Increase Traffic 130%
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>SEO Optimization
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Social Media Management
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Content Marketing
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>24/7 Hours Support
                  </li>
                </ul>
              </div>
              <div class="price-value">
                <h2>
                  <sup>$</sup>72
                </h2>
                <span>/Month</span>
              </div>
              <a class="themeht-btn primary-btn" href="#">
                <span>Choose Plan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--pricing end-->


<!--marquee start-->

<section class="overflow-hidden p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="marquee-wrap">
          <div class="marquee-text">
            <span>Analysis</span>
            <i class="bi bi-square-fill"></i>
            <span>SEO</span>
            <i class="bi bi-square-fill"></i>
            <span>Marketing</span>
            <i class="bi bi-square-fill"></i>
            <span>Digital</span>
            <i class="bi bi-square-fill"></i>
            <span>Agency</span>
            <i class="bi bi-square-fill"></i>            
            <span>Digital Marketing</span>
            <i class="bi bi-square-fill"></i>
            <span>Business Solutions</span>
            <i class="bi bi-square-fill"></i>
            <span>Marketing Strategy</span>
            <i class="bi bi-square-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--marquee end-->


<!--portfolio start-->

<section>
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-6 col-md-12">
        <div class="theme-title">
          <h6>Portfolio</h6>
          <h2>Letâ€™s Check Latest Work from here</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked">All</button>
          <button data-filter=".cat1">Design</button>
          <button data-filter=".cat2">Marketing</button>
          <button data-filter=".cat3">Branding</button>
          <button data-filter=".cat4">Development</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="light-bg position-relative z-index-1">
  <div class="container">
    <div class="row mt-n15">
      <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row popup-gallery">
          <div class="grid-sizer"></div>
          <div class="grid-item cat3">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/01.jpg" alt="">
                <a class="portfolio-btn" href="portfolio-single.html">
                  <i class="bi bi-arrow-down-right"></i>
                </a>
              </div>
              <div class="portfolio-title">
                <span>Branding</span>
                <h4><a href="portfolio-single.html">SEO Tracking Analysis</a></h4>
              </div>
            </div>
          </div>
          <div class="grid-item cat3">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/02.jpg" alt="">
                <a class="portfolio-btn" href="portfolio-single.html">
                  <i class="bi bi-arrow-down-right"></i>
                </a>
              </div>
              <div class="portfolio-title">
                <span>Branding</span>
                <h4>
                  <a href="portfolio-single.html">Email Marketing Solution</a>
                </h4>
              </div>
            </div>
          </div>
          <div class="grid-item cat4">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/03.jpg" alt="">
                <a class="portfolio-btn" href="portfolio-single.html">
                  <i class="bi bi-arrow-down-right"></i>
                </a>
              </div>
              <div class="portfolio-title">
                <span>Development</span>
                <h4>
                  <a href="portfolio-single.html">Offline SEO Marketing</a>
                </h4>
              </div>
            </div>
          </div>
          <div class="grid-item cat2">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/04.jpg" alt="">
                <a class="portfolio-btn" href="portfolio-single.html">
                  <i class="bi bi-arrow-down-right"></i>
                </a>
              </div>
              <div class="portfolio-title">
                <span>Marketing</span>
                <h4>
                  <a href="portfolio-single.html">Article Data Analysis</a>
                </h4>
              </div>
            </div>
          </div>
          <div class="grid-item cat2">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/05.jpg" alt="">
                <a class="portfolio-btn" href="portfolio-single.html">
                  <i class="bi bi-arrow-down-right"></i>
                </a>
              </div>
              <div class="portfolio-title">
                <span>Marketing</span>
                <h4>
                  <a href="portfolio-single.html">Online Media Management</a>
                </h4>
              </div>
            </div>
          </div>
          <div class="grid-item cat1">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/06.jpg" alt="">
                <a class="portfolio-btn" href="portfolio-single.html">
                  <i class="bi bi-arrow-down-right"></i>
                </a>
              </div>
              <div class="portfolio-title">
                <span>Design</span>
                <h4>
                  <a href="portfolio-single.html">Design System & Ul Kit</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wave-shape top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,224L24,197.3C48,171,96,117,144,106.7C192,96,240,128,288,160C336,192,384,224,432,208C480,192,528,128,576,122.7C624,117,672,171,720,186.7C768,203,816,181,864,154.7C912,128,960,96,1008,69.3C1056,43,1104,21,1152,21.3C1200,21,1248,43,1296,74.7C1344,107,1392,149,1416,170.7L1440,192L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
    </svg>
  </div>
</section>

<!--portfolio end-->


<!--testimonial start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <div class="theme-title">
          <h6>Testimonial</h6>
          <h2>See Feedback Why customers love working with us</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-lg-10">
    <div id="testimonial" class="testimonial-carousel carousel slide z-index-1" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <div class="testimonial-box">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/01.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/02.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/03.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/04.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/05.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/06.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/07.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial style-2">
                  <div class="testimonial-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/08.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                    <p>Seoland Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    <div class="testimonial-caption">
                      <h5>Roxie Payne</h5>
                      <label>CEO of Seoland</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="controls">
        <ul class="nav justify-content-center ms-0">
          <li class="active" aria-current="true" data-bs-target="#testimonial" data-bs-slide-to="0">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/01.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="1">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/02.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="2">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/03.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="3">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/04.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="4">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/05.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="5">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/06.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="6">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/07.jpg" alt="">
          </li>
          <li data-bs-target="#testimonial" data-bs-slide-to="7">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/08.jpg" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--testimonial end-->


<!--blog start-->

<section class="pt-0">
  <div class="container">
    <div class="row align-items-end mb-8">
      <div class="col-lg-6 col-md-12">
        <div class="theme-title mb-0">
          <h6>Blog Post</h6>
          <h2>Latest News & Articles</h2>
          <p>Our campaigns get your business in front of the right people at the right time to increase organic traffic and boost engagement. </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 text-end">
        <a class="themeht-btn primary-btn" href="blog-right-sidebar.html">
          <span>See All Blogs</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <div class="post-card">
          <div class="post-meta">
            <ul class="list-inline">
              <li>
                <i class="bi bi-person"></i> By ThemeHt
              </li>
              <li class="list-inline-item">
                <i class="bi bi-tag"></i> Marketing
              </li>
            </ul>
          </div>
          <div class="post-image">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/blog/01.jpg" alt="">
            <a class="post-btn" href="blog-single.html">
              <i class="bi bi-arrow-down-right"></i>
            </a>
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h4>
                <a href="blog-single.html">Simple ways to Optimize Website For SEO</a>
              </h4>
            </div>
            <p>SEO strategies people are getting themselves enrolled in coding and on their own....</p>
            <div class="post-date"> 04 Mar, 2024 </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-6 mt-lg-0">
        <div class="post-card">
          <div class="post-meta">
            <ul class="list-inline">
              <li>
                <i class="bi bi-person"></i> By ThemeHt
              </li>
              <li class="list-inline-item">
                <i class="bi bi-tag"></i> Marketing
              </li>
            </ul>
          </div>
          <div class="post-image">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/blog/02.jpg" alt="">
            <a class="post-btn" href="blog-single.html">
              <i class="bi bi-arrow-down-right"></i>
            </a>
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h4>
                <a href="blog-single.html">How Chatbots Can Help You Drive More Sales</a>
              </h4>
            </div>
            <p>SEO strategies people are getting themselves enrolled in coding and on their own....</p>
            <div class="post-date"> 04 Mar, 2024 </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-6 mt-lg-0">
        <div class="post-card">
          <div class="post-meta">
            <ul class="list-inline">
              <li>
                <i class="bi bi-person"></i> By ThemeHt
              </li>
              <li class="list-inline-item">
                <i class="bi bi-tag"></i> Marketing
              </li>
            </ul>
          </div>
          <div class="post-image">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/blog/03.jpg" alt="">
            <a class="post-btn" href="blog-single.html">
              <i class="bi bi-arrow-down-right"></i>
            </a>
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h4>
                <a href="blog-single.html">Leveraging Feedback on Insights best SEO</a>
              </h4>
            </div>
            <p>SEO strategies people are getting themselves enrolled in coding and on their own....</p>
            <div class="post-date"> 04 Mar, 2024 </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 


<!--footer start-->

<?php get_footer(); ?>