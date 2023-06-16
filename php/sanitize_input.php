<?php 

if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=34">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <label for="name">Name 
 </label>
 <input type="text" name="name"><br>
 <label for="name">Age 
 </label>
 <input type="text" name="age"><br>
 <input type="submit" name="submit">
 </form>

<h1>Hail Mary</h1>