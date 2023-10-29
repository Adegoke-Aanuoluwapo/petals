<!DOCTYPE html>
<html>

<head>
 <style>
  .container {
   display: grid;
   grid-template-columns: 1fr 1fr;
  }

  form {
   grid-column: 1;
  }

  table {
   grid-column: 2;
  }
 </style>
</head>

<body>

 <div class="container">
  <form>
   <input type="text" name="name" placeholder="Enter your name">
   <input type="submit" value="Submit">
  </form>

  <table>
   <thead>
    <tr>
     <th>Name</th>
     <th>Email</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td>John Doe</td>
     <td>john.doe@example.com</td>
    </tr>
    <tr>
     <td>Jane Doe</td>
     <td>jane.doe@example.com</td>
    </tr>
   </tbody>
  </table>
 </div>

</body>

</html>