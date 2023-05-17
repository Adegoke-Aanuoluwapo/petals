<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

 <title>crud operation</title>
</head>

<body>
 <div class="container">
  <form method="post">
   <div class="mb-3">
    <label  class="form-label">Full Names</label>
    <input type="email" class="form-control" name="fullname">
    
   </div>
   <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="tel" class="form-control"  name="phone">
   </div>
   <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
    <div class="mb-3">
     <label  class="form-label">Sex</label>
     <select name="position" id="" class="form-control">
      <option>Sex</option>
      <option value="member">Male</option>
      <option value="worker">Female</option>
     </select>

    </div>
    <div class="mb-3">
     <label  class="form-label">Status</label>
     <select name="status" id="" class="form-control">
      <option>Status</option>
      <option value="member">Member</option>
      <option value="worker">Worker</option>

     </select>


    </div>
    <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">State</label>
     <select name="position" id="" class="form-control">
      <option>State</option>
      <option value="abuja">Abuja</option>
      <option value="lagos">Lagos</option>
      <option value="ondo">Ondo</option>
     </select>

    </div>

   </div>
   <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>


</body>

</html>