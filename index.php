<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <title>Home</title>
</head>

<body>
  <!-- MOBILE-MENU START -->
  <div class="mobile-menu">
    <div class="mobile-close">
      <div class="header-logo">
       <a href="index.php">
          <img src="images/logo.png" alt="" />
        </a>
        <a href="javascript:void(0)" id="menu-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
    </div>
    <div class="mobile-menu-body" id="mobile-menu-body"></div>
    <div class="header-social footer-socil mobile-menu-social">
      <ul>
        <li>
          <a href="javascript:void(0)">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- MOBILE-MENU END -->

  <!-- MAIN-SLIDER START -->
  <section class="main-banner">
    <!-- HEADER CSS START -->
    <header class="header">
      <div class="header-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
              <div class="header-logo">
                <a href="index.php">
                  <img src="images/logo.png" alt="" />
                </a>
                <div class="hamburger d-block d-lg-none">
                  <div class="hamburger-container">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 d-none d-lg-block">
              <div class="bottom-row">
              <ul class="list-inline navigation-list">
                  <li class="list-inline-item active">
                    <a href="./index.php">Home </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="./Jobs.php">Jobs</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="./about.php">About Us</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="./Blog.php">Blogs</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="./Contact.php">Contact</a>
                  </li>
                </ul>
                <ul class="contact-us">
                  <li class="list-inline-item">
                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">Sign in</a>
                  </li>
                  <li>
                    <a href="./PostaJob.php" class="primary-fur primary-btn">Post a Job</a>
                  </li>



                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->
    <div class="slider-content">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-md-10 col-sm-12">
            <div class="main-banner-content content">

              <h2><span>Get your new </span>dream <span>job today</span></h2>
              <p>
                25,478 Offers Worldwide
              </p>
              <div class="slect-index">
                <div class="jumbotron">
                  <div class="row ">
                    <div class="col-md-5 col-5 p-0">
                      <div class="jum-d-flex brd-1">
                      <i class="far fa-pencil-alt"></i>
                      <select id="multiple2" class="js-states form-control" multiple>
                        <option>Java</option>
                        <option>Javascript</option>
                        <option>PHP</option>
                        <option>Visual Basic</option>
                      </select>
                      </div>
                  
                    </div>
                    <div class="col-md-5 col-5 p-0">
                    <div class="jum-d-flex">
                    <i class="fal fa-map-marker-alt"></i>
                      <select id="multiple" class="js-states form-control" multiple>
                        <option>Java</option>
                        <option>Javascript</option>
                        <option>PHP</option>
                        <option>Visual Basic</option>
                      </select>
                    </div>
                    </div>

                    <div class="col-md-2 col-2 p-0">

                      <div class="btn-serach">
                        <a href="" class="primary-bt primary-bg">Search</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-5 d-lg-block d-none">
            <div class="main-banner-img">
              <img src="images/bg-1.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN-SLIDER END -->
  <!-- service-box-start -->
  <section class="counter___main">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10">
          <div class="counter___main_sec">
          
            <div class="counter">
              317,642
            </div>
            <h4>Jobs Landed</h4>
            <p>We’ve been building better teams since 2000.
              Seeking your next step?</p>
            <div class="counter___btn">
              <a href="#" class="primary-btn transparent-bg ">
                Submit Your Resume
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="explore-chantal">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-11 col-12">
          <div class="about-title content mb-4 text-center">
            <h4>Top Hiring <span> Companies</span></h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/card-1.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/acer.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/amazon.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/bbc.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/benz.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/fedex.png" alt="" />
            </div>

          </div>
        </div>



        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/google.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies//pinterest.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/puma.png" alt="" />
            </div>

          </div>
        </div>
        <div class="col">
          <div class="explore-chantal-box">
            <div class="chantel-logo">
              <img src="images/Companies/toyota.png" alt="" />
            </div>

          </div>
        </div>
   


      </div>
  </section>



  <!-- service section start  -->
  <section class="services-sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11 col-12">
          <div class="about-title main-title">
            <h4>Latest <span> Listings</span></h4>
            <p>Get Started with best jobs</p>
          </div>
        </div>
      </div>
      <div class="services-box">
        <div class="row services-box-slider">
          <div class="col-lg-12">
            <div class="services-boxs   ser-content">
              <div class="listing-card-img d-flex gap-2">
                <div class="listing-img">
                  <img src="./images/dell.png" alt="">
                </div>
                <div class="listing-content">
                  <h6>Dell Inc</h6>
                  <p>Posted 1 month ago</p>
                </div>
              </div>
              <div class="listing-title">
                <h4>Account Manager</h4>
                <p><span><i class="fal fa-map-marker-alt"></i></span> Toronto, Canada</p>
                <p><span><i class="far fa-clock"></i></span> time</p>


              </div>
              <div class="listing-bottom">
                <p class="d-color"> Project Management</p>
                <a href="apply-post.php" class="primary-btn primary-bg">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="services-boxs   ser-content">
              <div class="listing-card-img d-flex gap-2">
                <div class="listing-img">
                  <img src="./images/dell.png" alt="">
                </div>
                <div class="listing-content">
                  <h6>Dell Inc</h6>
                  <p>Posted 1 month ago</p>
                </div>
              </div>
              <div class="listing-title">
                <h4>Account Manager</h4>
                <p><span><i class="fal fa-map-marker-alt"></i></span> Toronto, Canada</p>
                <p><span><i class="far fa-clock"></i></span> time</p>


              </div>
              <div class="listing-bottom">
                <p class="d-color"> Project Management</p>
                <a href="apply-post.php" class="primary-btn primary-bg">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="services-boxs   ser-content">
              <div class="listing-card-img d-flex gap-2">
                <div class="listing-img">
                  <img src="./images/dell.png" alt="">
                </div>
                <div class="listing-content">
                  <h6>Dell Inc</h6>
                  <p>Posted 1 month ago</p>
                </div>
              </div>
              <div class="listing-title">
                <h4>Account Manager</h4>
                <p><span><i class="fal fa-map-marker-alt"></i></span> Toronto, Canada</p>
                <p><span><i class="far fa-clock"></i></span> time</p>


              </div>
              <div class="listing-bottom">
                <p class="d-color"> Project Management</p>
                <a href="apply-post.php" class="primary-btn primary-bg">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="services-boxs   ser-content">
              <div class="listing-card-img d-flex gap-2">
                <div class="listing-img">
                  <img src="./images/dell.png" alt="">
                </div>
                <div class="listing-content">
                  <h6>Dell Inc</h6>
                  <p>Posted 1 month ago</p>
                </div>
              </div>
              <div class="listing-title">
                <h4>Account Manager</h4>
                <p><span><i class="fal fa-map-marker-alt"></i></span> Toronto, Canada</p>
                <p><span><i class="far fa-clock"></i></span> time</p>


              </div>
              <div class="listing-bottom">
                <p class="d-color"> Project Management</p>
                <a href="apply-post.php" class="primary-btn primary-bg">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="services-boxs   ser-content">
              <div class="listing-card-img d-flex gap-2">
                <div class="listing-img">
                  <img src="./images/dell.png" alt="">
                </div>
                <div class="listing-content">
                  <h6>Dell Inc</h6>
                  <p>Posted 1 month ago</p>
                </div>
              </div>
              <div class="listing-title">
                <h4>Account Manager</h4>
                <p><span><i class="fal fa-map-marker-alt"></i></span> Toronto, Canada</p>
                <p><span><i class="far fa-clock"></i></span> time</p>


              </div>
              <div class="listing-bottom">
                <p class="d-color"> Project Management</p>
                <a href="apply-post.php" class="primary-btn primary-bg">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="services-boxs   ser-content">
              <div class="listing-card-img d-flex gap-2">
                <div class="listing-img">
                  <img src="./images/dell.png" alt="">
                </div>
                <div class="listing-content">
                  <h6>Dell Inc</h6>
                  <p>Posted 1 month ago</p>
                </div>
              </div>
              <div class="listing-title">
                <h4>Account Manager</h4>
                <p><span><i class="fal fa-map-marker-alt"></i></span> Toronto, Canada</p>
                <p><span><i class="far fa-clock"></i></span> time</p>


              </div>
              <div class="listing-bottom">
                <p class="d-color"> Project Management</p>
                <a href="apply-post.php" class="primary-btn primary-bg">View Details</a>
              </div>
            </div>
          </div>
        </div>





      </div>
    </div>
  </section>

  <section class="popular">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11 col-12">
          <div class="about-title main-title">
            <h4>Latest <span> Listings</span></h4>
            <p>Get Started with best jobs</p>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card popular-card">
            <div class="popular-card-content">
              <div class="img">
                <img src="./images/popular-1.png" alt="">
              </div>
              <div class="content-pop">
                <h6>Backend Development</h6>
                <p>6 Open Positions</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="learn-more">
    <div class="container">
      <div class="learn-more-sec">
        <div class="row align-items-center">
          <div class="col-md-7">
            <div class="learn-more-content">
              <h3>
                A serial entrepreneur an author, a motivational speaker, and a
                coach.
              </h3>
              <p>I have kicked off many startups in the past 10 years</p>
              <button class="transparent-bg primary-btn light">
                Learn More
              </button>
            </div>
          </div>
          <div class="col-md-5">
            <div class="learn-img">
              <img src="images/learn-img.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pre-order pdy">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 p-0">
          <div class="swiper testimional-section">
            <div class="swiper-wrapper">
              <div class="swiper-slide testimional-slider">
                <div class="testimioal-slider-items d-flex align-items-start">
                  <div class="testimioal-slider-items-img">
                    <img src="images/testimional/pexels-pixabay-220453.png" alt="" />
                  </div>
                  <div class="testimioal-slider-items-content">
                    <div class="testimioal-slider-title">
                      <h4>David M <span>Former Librarian</span></h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide testimional-slider">
                <div class="testimioal-slider-items d-flex align-items-start">
                  <div class="testimioal-slider-items-img">
                    <img src="images/testimional/pexels-pixabay-220453.png" alt="" />
                  </div>
                  <div class="testimioal-slider-items-content">
                    <div class="testimioal-slider-title">
                      <h4>David M <span>Former Librarian</span></h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide testimional-slider">
                <div class="testimioal-slider-items d-flex align-items-start">
                  <div class="testimioal-slider-items-img">
                    <img src="images/testimional/pexels-pixabay-220453.png" alt="" />
                  </div>
                  <div class="testimioal-slider-items-content">
                    <div class="testimioal-slider-title">
                      <h4>David M <span>Former Librarian</span></h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide testimional-slider">
                <div class="testimioal-slider-items d-flex align-items-start">
                  <div class="testimioal-slider-items-img">
                    <img src="images/testimional/pexels-pixabay-220453.png" alt="" />
                  </div>
                  <div class="testimioal-slider-items-content">
                    <div class="testimioal-slider-title">
                      <h4>David M <span>Former Librarian</span></h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>


        </div>

      </div>
    </div>
  </section>
  <!-- service section end  -->

  <!-- blog-page section start  -->
  <section class="blog-main">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="blog-main-box">
            <div class="blog-img">
              <img src="images/bl-1.png" alt="" class="img-fluid" />
              <div class="blog-date">25 <span>Nov</span></div>
            </div>
            <div class="blog-content">
              <h4 class="font-m">LOREM IPSUM</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown
              </p>
              <button class="transparent-bg primary-btn">More info</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="blog-main-box">
            <div class="blog-img">
              <img src="images/blogs/7.png" alt="" class="img-fluid" />
              <div class="blog-date">25 <span>Nov</span></div>
            </div>
            <div class="blog-content">
              <h4 class="font-m">LOREM IPSUM</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown
              </p>
              <button class="transparent-bg primary-btn">More info</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="blog-main-box">
            <div class="blog-img">
              <img src="images/blogs/5.png" alt="" class="img-fluid" />
              <div class="blog-date">25 <span>Nov</span></div>
            </div>
            <div class="blog-content">
              <h4 class="font-m">LOREM IPSUM</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown
              </p>
              <button class="transparent-bg primary-btn">More info</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- blog-page section end -->



  <!-- contact form -->
  <section class="news-letter" id="News-letter">
    <div class="news ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12">
            <h1 class="news-heading">Subscribe to newsletter</h1>
            <p class="des how-de">Subscribe to newsletter to get the latest notifications</p>
          </div>
          <div class="col-lg-7 col-md-12">
            <form action="">

              <input type="email" maxlength="50" required="" placeholder=" email">
              <button class="bt">Subscribe</button>

            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- FOOTER-SEC START -->




  <footer class="footer">
    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-3 d-flex align-items-center">
          <div class="logo-footer">
            <div class="logo">
              <img src="./images/logo-footer.png" alt="">
            </div>
            <div class="social-icons-footer d-flex gap-3">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-pinterest"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <ul>
            <li><a href="#">About Us </a></li>
            <li><a href="#">How It Works?</a></li>
            <li><a href="#">Wellness Journey</a></li>
            <li><a href="#">For Instructors</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6">
          <ul>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Privacy Policy </a></li>
            <li><a href="#">Copyright Policy </a></li>
            <li><a href="#">Data Deletion Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6">
          <ul>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Privacy Policy </a></li>
            <li><a href="#">Copyright Policy </a></li>
            <li><a href="#">Data Deletion Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-white">
      <div class="row">
        <h6 class="text-center py-3 text-dark">
          © 2023 Chantal Martin. All Rights Reserved.
        </h6>
      </div>
    </div>
  </footer>
  <!-- FOOTER-SEC END -->

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <ul class="course-tabs nav nav-tabs" id="myTab" role="tablist">

          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
              type="button" role="tab" aria-controls="contact" aria-selected="false">
              Sign in
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="archived-tab" data-bs-toggle="tab" data-bs-target="#archived" type="button"
              role="tab" aria-controls="archived" aria-selected="false">
              Sign up
            </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane show active fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="login login__bf">

              <form action="" class="form_login">
                <div class="row justify-content-center">
                  <div class="col-md-10">
                    <div class="form-group mb-3">

                      <input type="text" class="form-control" placeholder="email">
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group mb-3">

                      <input type="text" class="form-control" placeholder="password">
                    </div>
                  </div>

                  <div class="col-md-10">
                    <div class="form-group mb-3">

                      <a href="" class="primary-btn primary-bg">SIGN IN</a>
                    </div>
                  </div>
                </div>


              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="archived" role="tabpanel" aria-labelledby="archived-tab">
            <div class="login login__bf">

              <form action="" class="form_login">
                <div class="row justify-content-center">
                  <div class="col-md-5">
                    <div class="form-group mb-3">

                      <input type="text" class="form-control" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group mb-3">

                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-md-10">

                    <div class="form-group mb-3">

                      <input type="text" class="form-control" placeholder="email">
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group mb-3">

                      <input type="text" class="form-control" placeholder="password">
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group mb-3">

                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                      <label for="vehicle1">I agree with Terms & Conditions</label>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group mb-3">

                      <a href="" class="primary-btn primary-bg">SIGN UP</a>
                    </div>
                  </div>
                </div>


              </form>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>





  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <script>
$(document).ready(function() {
    // Get the initial value as a number
    let initialValue = parseInt($('.counter').text().replace(/,/g, ''), 10);
    
    // Set the target value (the number you want to count up to)
    const targetValue = 500000; // Change this to your desired target value
    
    // Set the duration for the counter animation (in milliseconds)
    const duration = 3000; // Change this to your desired duration
    
    // Calculate the increment value for each step of the animation
    const increment = Math.ceil((targetValue - initialValue) / (duration / 100));
    
    // Function to update the counter
    function updateCounter() {
        // Increase the counter value by the increment
        initialValue += increment;
    
        // Update the text content of the counter element with commas for every thousand
        $('.counter').text(initialValue.toLocaleString());
    
        // Check if the counter reached the target value
        if (initialValue < targetValue) {
            // Call the function again after a short delay
            setTimeout(updateCounter, 100);
        }
    }
    
    // Start the counter animation
    updateCounter();
});
</script>



  <script>
    $("#multiple2").select2({
      placeholder: "keyword",
      allowClear: true
    });
    $("#multiple").select2({
      placeholder: "Location",
      allowClear: true
    });
  </script>
  <script>
    function startCountdown(durationInSeconds) {
      var interval = setInterval(function () {
        var days, hours, minutes, seconds;

        days = Math.floor(durationInSeconds / (60 * 60 * 24));
        hours = Math.floor((durationInSeconds % (60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((durationInSeconds % (60 * 60)) / 60);
        seconds = durationInSeconds % 60;

        $('.days').text(days);
        $('.hours').text(hours);
        $('.minutes').text(minutes);
        $('.seconds').text(seconds);

        if (--durationInSeconds < 0) {
          clearInterval(interval);
        }
      }, 500);
    }

    $(document).ready(function () {
      var duration = 86400; // 1 day in seconds (change this as needed)
      startCountdown(duration); // Start the countdown for 1 day
    });
  </script>
  <script>
    var swiper = new Swiper(".testimional-section", {
      spaceBetween: 30,
      loop: true,
      autoplay: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>


</body>

</html>