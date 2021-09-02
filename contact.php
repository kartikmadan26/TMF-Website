<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>
      LoveUs - Charity and Fundraising HTML Template | LoveUs Contact Us
    </title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- Responsive File -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- Color File -->
    <link href="css/color.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
  </head>

  <body>
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"><div class="icon"></div></div>

      <!-- Main Header -->
      <?php   include "header.php"  ?>
      <!-- End Main Header -->

      <!-- Page Banner Section -->
      <section class="page-banner">
        <div
          class="image-layer lazy-image"
          data-bg="url('images/background/bg-banner-1.jpg')"
        ></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
          <h1>Contact Us</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </section>
      <!--End Banner Section -->

      <!--Contact Info Section-->
      <section class="contact-info-section">
        <div class="auto-container">
          <div class="sec-title centered">
            <div class="sub-title">Contact Us</div>
            <h2>Get In Touch</h2>
            <div class="text">Cupidatat non proident sunt</div>
          </div>

          <div class="info-boxes">
            <div class="row clearfix">
              <!--Info Box-->
              <div class="info-box col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                  <div
                    class="image-layer lazy-image"
                    data-bg="url('images/resource/contact-image-1.jpg')"
                  ></div>
                  <div class="icon-box">
                    <span class="flaticon-home-location-marker"></span>
                  </div>
                  <h4>Our Location</h4>
                  <ul>
                    <li>SMART DIAGNOSTIC CENTER, Kids Kingdom School, Fatima Mourh, Sahadatpura, Mau, Uttar Pradesh 275101</li>
                  </ul>
                </div>
              </div>
              <!--Info Box-->
              <div class="info-box col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                  <div
                    class="image-layer lazy-image"
                    data-bg="url('images/resource/contact-image-2.jpg')"
                  ></div>
                  <div class="icon-box">
                    <span class="flaticon-phone-call"></span>
                  </div>
                  <h4>Phone Number</h4>
                  <ul>
                    <li>
                      <a href="tel:(+55)654-545-5418">(+91) 6387217257 <br> <br> <br> <br> </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--Info Box-->
              <div class="info-box col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                  <div
                    class="image-layer lazy-image"
                    data-bg="url('images/resource/contact-image-3.jpg')"
                  ></div>
                  <div class="icon-box">
                    <span class="flaticon-email"></span>
                  </div>
                  <h4>Email Address</h4>
                  <ul>
                    <li>
                      <a href="mailto:info@example.com">taramangalf@gmail.com<br> <br> <br>
                       <br></a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Contact Section-->
      <section class="contact-section">
        <div class="outer-container clearfix">
          <div class="form-column clearfix">
            <div class="inner clearfix">
              <div class="sec-title centered">
                <div class="sub-title">Inquiry</div>
                <h2>Leave a Message</h2>
                <div class="text">Feel free to reach out</div>
              </div>

              <!-- Contact Form-->
              <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                  <div class="row clearfix">
                    <div class="col-md-6 col-sm-12 form-group">
                      <input
                        type="text"
                        name="username"
                        placeholder="Your name"
                        required=""
                      />
                    </div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <input
                        type="email"
                        name="email"
                        placeholder="Your Email"
                        required=""
                      />
                    </div>

                    <div class="col-md-12 col-sm-12 form-group">
                      <textarea
                        name="message"
                        placeholder="Write your message"
                      ></textarea>
                    </div>

                    <div class="col-md-12 col-sm-12 form-group text-center">
                      <button
                        class="theme-btn btn-style-one"
                        type="submit"
                        name="submit-form"
                      >
                        <span class="btn-title">Send Message</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="map-column clearfix">
            <div
              class="map-canvas"
              data-zoom="12"
              data-lat="-37.817085"
              data-lng="144.955631"
              data-type="roadmap"
              data-hue="#ffc400"
              data-title="Envato"
              data-icon-path="images/icons/map-marker.png"
              data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
            ></div>
          </div>
        </div>
      </section>

      <!-- Call To Action Section -->
      <section class="call-to-action-two">
        <div class="auto-container">
          <div class="inner clearfix">
            <div class="title-box wow fadeInLeft" data-wow-delay="0ms">
              <h2>Become A Volunteer</h2>
            </div>
            <div class="link-box wow fadeInRight" data-wow-delay="0ms">
              <a href="contact.html" class="theme-btn btn-style-five"
                ><span class="btn-title">Get Involved</span></a
              >
            </div>
          </div>
        </div>
      </section>
      <!--End Gallery Section -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <div class="auto-container">
          <!--Widgets Section-->
          <div class="widgets-section">
            <div class="row clearfix">
              <!--Column-->
              <div class="column col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget logo-widget">
                  <div class="widget-content">
                    <div class="footer-logo">
                      <a href="index.html"
                        ><img
                          class="lazy-image"
                          src="images/resource/image-spacer-for-validation.png"
                          data-src="images/footer-logo.png"
                          alt=""
                      /></a>
                    </div>
                    <div class="text">
                      Lorem ipsum dolor amet consetetur adi pisicing elit sed
                      eiusm tempor incididunt ut labore dolore magna aliqua enim
                      ad minim veniam quis nostrud exercita.
                    </div>
                    <ul class="social-links clearfix">
                      <li>
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="fab fa-vimeo-v"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!--Column-->
              <div class="column col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget links-widget">
                  <div class="widget-content">
                    <h3>Services</h3>
                    <ul>
                      <li><a href="#">Donate</a></li>
                      <li><a href="#">Sponsor</a></li>
                      <li><a href="#">Fundraise</a></li>
                      <li><a href="#">Volunteer</a></li>
                      <li><a href="#">Partner</a></li>
                      <li><a href="#">Jobs</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!--Column-->
              <div class="column col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget info-widget">
                  <div class="widget-content">
                    <h3>Contacts</h3>
                    <ul class="contact-info">
                      <li>
                        Flat 20, Reynolds Neck, North Helenaville, FV77 8WS
                      </li>
                      <li>
                        <a href="tel:+2(305)587-3407">+2(305) 587-3407</a>
                      </li>
                      <li>
                        <a href="mailto:info@chireno.com"
                          >info@loveuscharity.com</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!--Column-->
              <div class="column col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget news-widget">
                  <div class="widget-content">
                    <h3>Top News</h3>
                    <!--News Post-->
                    <div class="news-post">
                      <div class="post-thumb">
                        <a href="#"
                          ><img
                            class="lazy-image"
                            src="images/resource/image-spacer-for-validation.png"
                            data-src="images/resource/post-thumb-1.jpg"
                            alt=""
                        /></a>
                      </div>
                      <h5><a href="#">School for African Childrens</a></h5>
                      <div class="date">July 25, 2019</div>
                    </div>
                    <!--News Post-->
                    <div class="news-post">
                      <div class="post-thumb">
                        <a href="#"
                          ><img
                            class="lazy-image"
                            src="images/resource/image-spacer-for-validation.png"
                            data-src="images/resource/post-thumb-2.jpg"
                            alt=""
                        /></a>
                      </div>
                      <h5><a href="#">School for African Childrens</a></h5>
                      <div class="date">July 25, 2019</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="nav-box clearfix">
              <div class="inner clearfix">
                <ul class="footer-nav clearfix">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Causes</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>

                <div class="donate-link">
                  <a href="donate.html" class="theme-btn btn-style-one"
                    ><span class="btn-title">Donate Now</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
          <div class="auto-container">
            <!--Scroll to top-->
            <div class="clearfix">
              <div class="copyright">LoveUs &copy; 2019 All Right Reserved</div>
              <ul class="bottom-links">
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="flaticon-up-arrow"></span>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/lazyload.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/script.js"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
  </body>
</html>
