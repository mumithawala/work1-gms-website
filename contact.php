<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Redox HTML Template">

  <title>Redox - Creative Agency and Portfolio HTML Template</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/fontawesome.min.css">
  <link rel="stylesheet" href="assets/vendor/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/vendor/meanmenu.min.css">
  <link rel="stylesheet" href="assets/vendor/magnific-popup.css">
  <link rel="stylesheet" href="assets/vendor/animate.min.css">
    <script src="https://kit.fontawesome.com/555d59b0c9.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="body-wrapper dark body-page-inner font-heading-sequelsans-romanbody">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>

      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <div class="loading-form">Loading...</div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- side toggle start -->
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href="index.html">
              <img src="assets/imgs/logo/logo-2-light.png" alt="site logo">
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="mobile-menu d-xl-none fix"></div>
        <div class="offset-button">
          <a href="contact.html" class="rr-btn">
            <span class="btn-wrap">
              <span class="text-one">Let's Talk</span>
              <span class="text-two">Let's Talk</span>
            </span>
          </a>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Contact US</h2>
          <div class="contact-meta">
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              <span class="text">3891 Ranchview Dr. Richardson</span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-envelope"></i></span>
              <span class="text"><a href="mailto:hello@redoxagency.com">hello@redoxagency.com</a></span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-phone"></i></span>
              <span class="text"><a href="tel:(505)555-0125">(505) 555-0125</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>
  <!-- side toggle end -->

  <!-- Header area start -->
  <?php  require_once 'elements/header.php'
  ?>
  <!-- Header area end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">

      <main>

        <!-- page title area start  -->
        <section class="page-title-area">
          <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
              <div class="page-title-wrapper">
                <h2 class="page-title fade-anim">Contact</h2>
              </div>
            </div>
          </div>
        </section>
        <!-- page title area end  -->

        <!-- contact area start  -->
        <section class="contact-area-contact-page">
          <div class="container large">
            <div class="contact-area-contact-page-inner section-spacing-top">
              <div class="section-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle">Contact</span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title font-sequelsans-romanbody">Let’s drop us a line
                      and get the project
                      started.</h2>
                  </div>
                </div>
              </div>
              <div class="section-content-wrapper fade-anim">
                <div class="section-content">
                  <div class="contact-mail">
                    <p class="title">Get in touch</p>
                    <p class="text">We’re excited to hear from you
                      and let’s start something special
                      together <br>
                      <a href="mailTo:info@gandhimediasolutions.com">info@gandhimediasolutions.com</a>
                    </p>
                  </div>
                  <div class="contact-social">
                    <p class="title">Follow</p>
                    <div class="social-links">
                      <a href="#">Facebook</a>
                      <a href="#">Twitter</a>
                      <a href="#">LinkedIn</a>
                      <a href="#">Instagram</a>
                      <a href="#">Justdial</a>
                      
                    </div>
                  </div>
                </div>
                <div class="contact-wrap">
                  <form id="contact__form" method="POST" action="./mail.php">
                    <div class="contact-formwrap">
                      <div class="contact-formfield">
                        <input type="text" name="name" id="name" placeholder="Name*">
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="email" id="email" placeholder="Email*">
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="phone" id="phone" placeholder="Phone*">
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="company" id="company" placeholder="Company">
                      </div>
                      <div class="contact-formfield">
                        <select name="Budget" id="Budget">
                          <option value="0" disabled selected>Budget*</option>
                          <option value="1">5,000 - 10,000</option>
                          <option value="2">10,000 - 15,000</option>
                          <option value="3">15,000 - 20,000</option>
                          <option value="4">20,000 - 25,000</option>
                          <option value="5">25,000 - Above</option>
                        </select>
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="solution" id="solution" placeholder="Solution*">
                      </div>
                      <div class="contact-formfield message">
                        <input type="text" name="message" id="message" placeholder="Message*">
                      </div>
                    </div>
                    <div class="submit-btn">
                      <button type="submit" class="rr-btn">
                        <span class="btn-wrap">
                          <span class="text-one">Send Message</span>
                          <span class="text-two">Send Message</span>
                        </span>
                      </button>
                    </div>
                    <div id="response-message"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact area end  -->

      </main>

      <!-- footer area start  -->
      <?php require_once 'elements/footer.php' 
      ?>
      <!-- footer area end  -->

    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.magnific-popup.min.js"></script>
  <script src="assets/vendor/swiper-bundle.min.js"></script>
  <script src="assets/vendor/ajax-form.js"></script>
  <script src="assets/vendor/gsap.min.js"></script>
  <script src="assets/vendor/ScrollSmoother.min.js"></script>
  <script src="assets/vendor/ScrollToPlugin.min.js"></script>
  <script src="assets/vendor/ScrollTrigger.min.js"></script>
  <script src="assets/vendor/SplitText.min.js"></script>
  <script src="assets/vendor/TextPlugin.js"></script>
  <script src="assets/vendor/customEase.js"></script>
  <script src="assets/vendor/jquery.meanmenu.min.js"></script>
  <script src="assets/vendor/backToTop.js"></script>
  <script src="assets/vendor/matter.js"></script>
  <script src="assets/vendor/throwable.js"></script>
  <script src="assets/js/magiccursor.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>