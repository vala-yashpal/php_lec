<!-- footer -->
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
      <div class="container py-lg-4">
          <div class="row footer-top-29">
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                  <div class="footer-logo mb-3">
                      <a class="navbar-brand" href="index.html">DigitalEdu</a>
                  </div>
                  <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                      tempufddfel. Lorem ipsum dolor sit amet Semper at elit.</p>
                  <div class="main-social-footer-29 mt-4">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                  <ul>
                      <h6 class="footer-title-29">Usefull Links</h6>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="services.html">Courses</a></li>
                      <li><a href="#pricing"> Pricing plans</a></li>
                      <li><a href="#careers"> Careers</a></li>
                      <li><a href="blog.html"> Blog posts</a></li>
                      <li><a href="contact.html">Contact us</a></li>
                  </ul>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                  <h6 class="footer-title-29">More Info</h6>
                  <ul>
                      <li><a href="#profile">Profile</a></li>
                      <li><a href="#vision">Vision & Values</a></li>
                      <li><a href="#history">History</a></li>
                      <li><a href="#leader">Leadership</a></li>
                      <li><a href="#help">Help</a></li>
                      <li><a href="#support"> Support</a></li>
                  </ul>

              </div>
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                  <h6 class="footer-title-29">Contact Info </h6>
                  <p><strong>Address :</strong> DigitalEdu, 343 Honey Avenue street, NY - 62617.</p>
                  <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 23456799">+12 23456799</a></p>
                  <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- //footer -->

<!-- copyright -->
<section class="w3l-copyright">
  <div class="container">
      <div class="row bottom-copies">
          <p class="col-lg-8 copy-footer-29">© 2020 DigitalEdu. All rights reserved. Design by <a
                  href="https://w3layouts.com/" target="_blank">
                  W3Layouts</a></p>

          <div class="col-lg-4 footer-list-29">
              <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
                  <li><a href="#careers"> Careers</a></li>
                  <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
                  <li><a href="contact.html">Contact us</a></li>
              </ul>
          </div>

      </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
  </button>
  <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
          scrollFunction()
      };

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
          } else {
              document.getElementById("movetop").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
  </script>
  <!-- /move top -->
</section>
<!-- //copyright -->
<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
          $("#site-header").addClass("nav-fixed");
      } else {
          $("#site-header").removeClass("nav-fixed");
      }
  });
</body>

</html>