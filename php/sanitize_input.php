<?php 

if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}

?> 



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <div> 
<label for="name">Name 
 </label>
 <input type="text" name="name">
 </div><br>
 <div>
 <label for="name">Age 
 </label>
 <input type="text" name="age">
 </div><br>
 <input type="submit" name="submit">
 </form>

<h1>Hail Mary</h1>