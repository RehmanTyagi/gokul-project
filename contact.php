<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">
<?php include("header.php") ?>

<body>
  <!-- navbar -->
  <?php include("navbar.php") ?>
  <!-- navbar -->
  <!-- /w3l-innerblock -->
  <div class="w3l-innerblock">
  </div>
  <!--//w3l-innerblock-->
  <!-- /contact-section -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">Contact Us</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Send a Message</h3>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Visit Us</h6>
                <p>Address: H.No 216 A,GALI NO 09, Rajiv Nagar, Mandoli, Delhi, 110093</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:support@mail.com" class="mail">gokulwatertechnologies@gmail.com</a></p>
                <p><a href="mailto:contact@mail.com" class="mail">support@gokulwater.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">

              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" required="" />
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" required="" />
              <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input" required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="map-iframe mt-5 mb-lg-5 pb-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2600.750046667235!2d77.31044781409813!3d28.702964187642635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfbc06736bab9%3A0x36e4cc7cf9260e0c!2sBank%20Colony%2C%20Mandoli%2C%20Delhi%2C%20110093!5e1!3m2!1sen!2sin!4v1675717606094!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>

  <!-- //contact-section -->
  <!-- footer17 -->
  <section class="footer-17">
    <!-- footer -->
    <?php include("footer.php") ?>
    <!-- footer -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
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
    </div>
  </section>
  <!-- //footer17 -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>