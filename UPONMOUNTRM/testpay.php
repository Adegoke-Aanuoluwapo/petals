<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Pay</title>
</head>

<body>
  <form action="reg.html" method="GET">
    <div>
      <label for="name">First Name:</label><br>
      <input type="text" ; placeholder="FirstName" input class="fname"><br>
    </div>
    <div>
      <label for="Lastname">Last Name</label><br>
      <input type="text" ; placeholder="Last Name" ; input class="Lname"><br>
    </div>
    <div>
      <label for="Number">Phone Number</label><br>
      <input type="number" ; placeholder="Phone Number" input class="number"><br>
    </div>
    <div>
      <label for="mail">Email</label><br>
      <input type="text" ; placeholder="Email" input class="Email"><br>
    </div>
    <div>
      <label for="Date">Date of Birth</label>:<br>
      <input type="date" ; placeholder="date" input class="fname" f><br>
    </div>
    <div>
      <label for="color">Select your favorite color</label><br>
      <input type="color" ; placeholder="Color"><button class="color" ; value="rgb">color</button><br>
    </div>
    <div>
      <label for="Sex">Sex</label>:<br>
      <select name="sex" ; id="sex">
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
      </select><br>
    </div>

    <button>Submit</button>


  </form>


  <form id="paymentForm">
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email-address" required />
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="tel" id="amount" required />
    </div>
    <div class="form-group">
      <label for="first-name">First Name</label>
      <input type="text" id="first-name" />
    </div>
    <div class="form-group">
      <label for="last-name">Last Name</label>
      <input type="text" id="last-name" />
    </div>
    <div class="form-submit">
      <button type="submit" onclick="payWithPaystack()"> Pay </button>
    </div>
  </form>
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