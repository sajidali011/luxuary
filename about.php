<!doctype html>
<html lang="en">

  <head>
    <title>Realtors &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <!-- header include -->
      <?php include "header.php" ?>

  <div class="ftco-blocks-cover-1">
  <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-7">
          <h1 class="mb-2">About Us</h1>
          <p class="text-white">
            Luxuary Infra Pvt. Ltd. is one of India’s fastest-growing and most trusted real estate firms. Since 2014, we have been serving Gurgaon with property sales, purchases, and leasing for residential, commercial, and office spaces, including land, shops, and builder floors.
          </p>
          <button class="btn btn-primary" id="readMoreBtn">Read More</button>
          <div id="moreContent" style="display: none;">
            <p class="text-white">
              Our experienced team understands client needs and ensures the best deals at competitive prices. Whether you’re buying, selling, or renting in Gurgaon, we’re here to help.
            </p>
            <p class="text-white">
              <strong>Our Mission:</strong> We aim to create better living opportunities with integrity, trust, and top-notch service, always exceeding client expectations.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById("readMoreBtn").addEventListener("click", function() {
    document.getElementById("moreContent").style.display = "block";
    this.style.display = "none";
  });
</script>

    
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
          <h3 class="text-center mb-4">More Information About Signature Global Real Estate</h3>
<p class="text-center">Discover your perfect home with Signature Global – Where luxury meets lifestyle. Explore our exclusive properties designed for comfort, style, and investment potential. Your dream home is just a click away!</p>
<div class="text-center">
  <a href="https://signaturesgloble.com/" class="btn btn-primary py-3 px-4">Explore Our Properties</a>
</div>

            <p class="mt-5"><a href="contact.php" class="btn btn-primary text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- footer include -->
   <?php include "footer.php" ?>
  </body>

</html>

