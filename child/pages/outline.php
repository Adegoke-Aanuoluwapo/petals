<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Book Store</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <style>
  body {
   padding: 20px;
  }

  .book-list {
   margin-top: 20px;
  }

  .book {
   border: 1px solid #ddd;
   padding: 15px;
   margin-bottom: 20px;
   border-radius: 5px;
  }

  .book img {
   max-width: 100%;
   height: auto;
  }
 </style>
</head>

<body>

 <div class="container">
  <h2 class="text-center">Available Books</h2>

  <div class="book-list">
   <!-- Book 1 -->
   <div class="book">
    <div class="row">
     <div class="col-md-3">
      <img src="book1.jpg" alt="Book 1 Image">
     </div>
     <div class="col-md-9">
      <h4>Book Title 1</h4>
      <p>Author: Author Name</p>
      <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      <p>Price: $19.99</p>
      <button class="btn btn-primary">Add to Cart</button>
     </div>
    </div>
   </div>

   <!-- Book 2 -->
   <div class="book">
    <div class="row">
     <div class="col-md-3">
      <img src="book2.jpg" alt="Book 2 Image">
     </div>
     <div class="col-md-9">
      <h4>Book Title 2</h4>
      <p>Author: Author Name</p>
      <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      <p>Price: $24.99</p>
      <button class="btn btn-primary">Add to Cart</button>
     </div>
    </div>
   </div>

   <!-- Add more books as needed -->

  </div>
 </div>

 <!-- Bootstrap JS and Popper.js (Optional) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>