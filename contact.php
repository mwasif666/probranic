<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" />
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

  <!-- HEADER CSS START -->
  <header class="header py-4">
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


  <!-- MAIN-SLIDER START -->
  <div class="banner-title">
    <h4>Contact  Us</h4>
  </div>
  <!-- MAIN-SLIDER END -->
  <!-- service-box-start -->
  <section style="padding: 80px 0px">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-md-12 form-contact">
          <div class="contant-form ">
            <h4>Get In <span class="d-color"> Touch </span></h4>
            <p>Got a question about using Probrainiac? We’re here to help!</p>
          </div>

          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
         
                  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="6"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-lg-6  col-md-12 contact-info">
          <h2>Contact Information</h2>
          <ul class="contact-list ">
            <li>
              <div class="contat-add">
              Phone:<span>+1234567878</span>
              </div>
            </li>
            <li>
              <div class="contat-add">
              Email:<span> probrainiac@gmail.com</span>
              </div>
            </li>
            <li>
              <div class="contat-add">
              Address:<span> Street Address, Avenue Calisfornia</span>
              </div>
            </li>
            <li>
              <div class="contat-add">
              Support:<span>  support@probrainiac.com</span>
              </div>
            </li>

           
           

          </ul>
   
      

          <h2>Working Hours</h2>
          <div class="row">
            <div class="col-4">
              <p>Monday - Friday</p>
            </div>
            <div class="col">
              <p>9am - 6pm EST</p>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <p>Saturday - Sunday</p>
            </div>
            <div class="col">
              <p>OFF</p>
            </div>
          </div>

          <div class="social-icons-footer d-flex gap-3">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- service-box-end -->
  <section>
      <div class="container-fluid p-0">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17941.854612714287!2d-121.95518537525264!3d37.349568693911884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2s!4v1702740886601!5m2!1sen!2s"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>
  <!-- about after slider s -->



  <!-- 
  <section class="pre-oder">
    <div class="pre-image-banner">
      <img src="images/pre-img.png" alt="">
    </div>
    <div class="container"></div>
  </section> -->

  <!-- service section end  -->
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

              <input type="email" maxlength="50" required="" placeholder="  email ">
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