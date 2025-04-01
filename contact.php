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

<?php include "header.php" ?>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Get In Touch</h1>
              <p class="text-white">Feel free to reach out to us. We’re here to help!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Contact Us</h2>
          <p>We’d love to hear from you! Whether you have a question, feedback, or just want to say hello, drop us a message, and we’ll get back to you soon!</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
          <form id="enquiryForm">
    <div class="form-group row">
        <div class="col-md-6 mb-4 mb-lg-0">
            <input type="text" id="name" name="name" class="form-control form-control-sm" placeholder="Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" id="mobile" name="mobile" class="form-control form-control-sm" placeholder="Mobile" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <textarea id="message" name="message" class="form-control form-control-sm" cols="30" rows="5" placeholder="Message" required></textarea>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 mr-auto">
            <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5">Send Message</button>
        </div>
    </div>
</form>


<script>
$(document).ready(function () {
    $('#enquiryForm').on('submit', function (e) {
        e.preventDefault(); // Prevent form from reloading page

        var formData = $(this).serialize();

        $.ajax({
            url: 'enquire_now.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            beforeSend: function () {
                Swal.fire({
                    title: 'Processing...',
                    text: 'Please wait while we send your enquiry.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function (response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: '✅ Enquiry sent successfully!',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        $('#enquiryForm')[0].reset();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: '❌ Email sending failed!',
                        text: response.message,
                        confirmButtonText: 'Try Again'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: '❌ Something went wrong!',
                    text: 'Please try again later.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});
</script>

          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>luxuary infra Private Limited. office no. 545 5th floor Satya The Hive sec. 102,</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+919717941119</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


 
    <?php include "footer.php" ?>
  </body>
  
<!-- Include jQuery & SweetAlert -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

