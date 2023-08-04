<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Test Pay</title>
</head>

<body>




  <div class="container">
    <div class="header">Partner with God</div>
    <form id="paymentForm">
      <div class="details" style="display: block; ;">
        <div class="box" style="margin-left: 170px;">
          <span class="details">Email</span>
          <input type="email" placeholder="Enter Your Email" name="Email" id="email-address" required>

        </div>
        <div class="box" style="margin-left: 170px;">
          <span class="details">Amount</span>
          <input type="tel" placeholder="Enter Amount" name="Password" id="amount" required>
        </div>
        <div class="box" style="margin-left: 170px;">
          <span class="details">First Name</span>
          <input type="text" placeholder="Enter First Name" name="firstname" required id="first-name" />
        </div>
        <div class="box" style="margin-left: 170px;">
          <span class="details">Last Name</span>
          <input type="text" placeholder="Enter Lastname" name="firstname" id="last-name" required id="first-name" />
        </div>

        <div class="button">
          <button type="submit" class="button" onclick="payWithPaystack()"> Proceed to Support</button>


        </div>
      </div>
    </form>
  </div>


  <script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
      e.preventDefault();

      let handler = PaystackPop.setup({
        key: 'pk_test_eb064e623b2d625c58884613fff1b7a40c273846', // Replace with your public key
        email: document.getElementById("email-address").value,
        amount: document.getElementById("amount").value * 100,
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function() {
          alert('Window closed.');
        },
        callback: function(response) {
          let message = 'Payment complete! Reference: ' + response.reference;
          alert(message);
        }
      });

      handler.openIframe();
    }
  </script>
  <script src="https://js.paystack.co/v1/inline.js"></script>

</body>

</html>