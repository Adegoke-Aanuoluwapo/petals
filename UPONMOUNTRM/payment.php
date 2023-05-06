<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="form.css">
 <title>paystack</title>
</head>

<body>
 <div style="background-color:blue; margin-left:500px;margin-top: 300px ">
  <form id="paymentForm">

   <!-- <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
   </div> -->
   <div class="box">
    <span class="details">First Name</span>
    <input type="text" placeholder="Enter Your First Name" name="First Name">

   </div>
   <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
   </div>
   <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
   </div>
   <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
   </div>
   <div class="container">
    <div class="header">Registration</div>
    <form action="login.html" method="GET">
     <div class="details">
      <div class="box">
       <span class="details">First Name</span>
       <input type="text" placeholder="Enter Your First Name" name="First Name">

      </div>
      <div class="box">
       <span class="details">Last Name</span>
       <input type="text" placeholder="Enter Your Last Name" name="Last Name">
      </div>


    </form>
   </div>

   <script src="https://js.paystack.co/v1/inline.js"></script>

   <script>
    function payWithPaystack() {
     var handler = PaystackPop.setup({
      key: 'pk_test_eb064e623b2d625c58884613fff1b7a40c273846',
      email: document.getElementById("email-address").value,
      amount: document.getElementById("amount").value * 100,
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
   <div class="form-submit" style="margin-left:500px">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
   </div>

   <script src="https://js.paystack.co/v1/inline.js"></script>

</body>

</html>