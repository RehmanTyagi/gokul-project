<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">
<?php include("header.php") ?>

<body>
  <?php include("navbar.php") ?>
  <!--/w3l-innerblock-->
  <div class="w3l-innerblock">
  </div>
  <!--//w3l-innerblock-->

  <!-- section -->
  <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3 py-2">
        <h3 class="title-subhny"> Services We Offer</h3>
        <h3 class="title-w3l mx-0 mb-md-5 mb-4">We Provide Comprehensive Services<br> To Property Investors.</h3>
        <div class="row">
          <div class="col-lg-5 mb-lg-0 mb-md-5 mb-4 align-self pr-lg-5">
            <img src="assets/images/g4.jpg" alt="" class="radius-image img-fluid">
          </div>
          <div class="col-lg-7">
            <div class="row position-relative">
              <div class="col-md-6 col-7">
                <img src="assets/images/g5.jpg" alt="" class="radius-image img-fluid">
              </div>
              <div class="col-md-5 col-5 pl-lg-5 pl-0 mt-lg-5">
                <img src="assets/images/g6.jpg" alt="" class="radius-image img-fluid">
              </div>
            </div>
            <p class="mt-md-5 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
              ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
              elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
              dolor sit, amet elit. Dolor ipsum non velit, culpa!</p>
            <a href="#get" class="btn btn-style btn-primary mt-md-5 mt-4">Read More <span class="fa fa-arrow-right ml-3"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //section -->
  <!--/gallery-->
  <section class="w3l-portfolio-8 py-5">
    <div class="portfolio-main py-lg-5 py-md-4 py-2">
      <div class="container">
        <div class="title-content text-center">
          <h3 class="title-subhny">Services</h3>
          <h3 class="title-w3l">Featured Services</h3>
        </div>
        <div class="row galler-top mx-lg-5 mt-5">
          <div class="col-lg-6 col-md-6">
            <div class="protfolio-item hover14 pr-lg-2">
              <a href="#url" data-lightbox="example-set" data-title="Affordable Urban House">
                <figure>
                  <img src="assets/images/g1.jpg" alt="product" class="img-fluid radius-image">
                  <div class="p-4">
                    <p>Services 1</p>
                    <a href="#url" class="mb-5 img-title">Affordable Urban House</a>
                  </div>
                </figure>
              </a>
            </div>
            <div class="protfolio-item hover14 mt-4 pl-lg-2">
              <a href="#url" data-lightbox="example-set" data-title="Villa on Hollywood Boulevard">
                <figure>
                  <img src="assets/images/g2.jpg" alt="product" class="img-fluid radius-image">
                  <div class="p-4">
                    <p>Services 2</p>
                    <a href="#url" class="mb-5 img-title">Villa on Hollywood Boulevard</a>
                  </div>
                </figure>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-lg-0 mt-4">
            <div class="protfolio-item hover14 pr-lg-2">
              <a href="#url" data-lightbox="example-set" data-title="Home in Metric Way">
                <figure>
                  <img src="assets/images/g4.jpg" alt="product" class="img-fluid radius-image">
                  <div class="p-4">
                    <p>Services 3</p>
                    <a href="#url" class="mb-5 img-title">Home in Metric Way</a>
                  </div>
                </figure>
              </a>
            </div>
            <div class="protfolio-item hover14 mt-4 pl-lg-2">
              <a href="#url" data-lightbox="example-set" data-title="Luxurious Apartments">
                <figure>
                  <img src="assets/images/g3.jpg" alt="product" class="img-fluid radius-image">
                  <div class="p-4">
                    <p>Services 4</p>
                    <a href="#url" class="mb-5 img-title">Luxurious Apartments</a>
                  </div>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="#get" class="btn btn-style btn-primary mt-md-5 mt-4">See all works <span class="fa fa-arrow-right ml-3"></span></a>
        </div>
      </div>
    </div>
  </section>
  <!--//gallery-->
  <!-- why-choose-us-section -->
  <?php include('choose_us.php') ?>
  <!-- why-choose-us-section -->
  <!-- most demanded product -->
  <?php include("demanded_product.php") ?>
  <!-- most demanded product -->
  <?php include("footer.php") ?>
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