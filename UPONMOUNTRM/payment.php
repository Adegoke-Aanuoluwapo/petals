<?php include("nav.php") ?>
s
<section class="section-box box-gray-100 mt-120 mb-20">
        <div class="container">
          <div class="icon-wave">
            <div class="row">
              <div class="col-lg-12 mb-60"><span class="text-body-capitalized text-uppercase"></span>
                <h2 class="text-heading-3 color-gray-900 mt-10">Partner with God</h2>
                <p class="text-body-text color-gray-600 mt-20">Let your resource be deposited where no moth could destroy.<br class="d-lg-block d-none"> God will surely rebuke devourers for your sake</p>
              </div>
             
              <div class="col-lg-8">
                <div class="row">
                  <form  style="margin-left: 50%;" id="paymentForm" >
                  <div class="col-lg-6">
                    <div class="form-group">
                       <span class="details">First Name</span>
              
                      <input class="form-control" type="text" name="FirstName" placeholder="Enter Your First Name" id="first-name">
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                       <span class="details">Last Name</span>
              
                      <input class="form-control" type="text" name="LastName" placeholder="Enter Your Last Name" id="last-name">
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                       <span class="details">Email Address</span>
              
                      <input class="form-control" type="email" name="email-address" placeholder="Enter Your Email" id="first-name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <span class="details">Amount</span>
                      <input class="form-control" type="number" value="" placeholder="Your email"  name="amount" id="amount">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                       <span class="details">Phone Number</span>
                      <input class="form-control" type="text" name="phone" placeholder="Phone number">
                    </div>
                  </div>
                 
                  <div class="col-lg-12 mt-15">
                    <button class="btn btn-black icon-arrow-right-white mr-40 mb-20" type="submit" onclick="payWithPaystack()">Donate</button><br class="d-lg-none d-block">
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- 
  <div class="container">
    <form id="paymentForm">

      
      <div class="container">
        <div class="header">God Loves a cheeful giver</div>
        <form  method="POST">
          <div class="details">
            <div class="box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter Your First Name" name="FirstName" id="first-name">

            </div>
            <div class="bo">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter Your Last Name" name="Last Name" id="last-name">
            </div>
            <div class="box">
              <span class="details">Email</span>
              <input type="email" placeholder="Enter Your mail" name="Email" id="email-address">
            </div>
            <div class="box">
              <span class="details">Amount</span>
              <input type="email" placeholder="Enter Your mail" name="amount" id="amount">
            </div>
            <div class="box">
              <span class="details">Phone</span>
              <input type="email" placeholder="Enter Your mail" name="phone" id="phone">
            </div>

        </form>
      </div> -->

      <script src="https://js.paystack.co/v1/inline.js"></script>

      <script>
        paymentForm.addEventListener("submit", payWithPaystack);
        function payWithPaystack() {
          var handler = PaystackPop.setup({
            key: 'pk_test_eb064e623b2d625c58884613fff1b7a40c273846',
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            phone:document.getElementById("phone"),
            ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
              custom_fields: [{
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
              }]
            },
            callback: function(response) {
              alert('success. transaction ref is ' + response.reference);
            },
            onClose: function() {
              alert('window closed');
            }
          });
          handler.openIframe();
        }
      </script>
      <div class="button" style="margin-left:50px; ">
        <button class="btn btn-primary" type="submit" onclick="payWithPaystack()"> Pay </button>
      </div>

      <script src="https://js.paystack.co/v1/inline.js"></script>


<?php include("footer.php") ?>
<script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/wow.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/isotope.js"></script>
    <script src="assets/js/vendors/scrollup.js"></script>
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/vendors/jquery.elevatezoom.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/noUISlider.js"></script>
    <script src="assets/js/vendors/slider.js"></script>
    <script src="assets/js/main.js?v=1.0"></script>
  </body>
</html>