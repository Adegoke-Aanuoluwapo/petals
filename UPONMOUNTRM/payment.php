<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>paystack</title>
</head>

<body>
 <script>
  function payWithPaystack() {
   var handler = PaystackPop.setup({
    key: 'pk_test_eb064e623b2d625c58884613fff1b7a40c273846',
    email: 'customer@email.com',
    amount: 100000,
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


 <script src="https://js.paystack.co/v1/inline.js"></script>
 <button type="button" onclick="payWithPaystack()"> Pay </button>
</body>

</html>