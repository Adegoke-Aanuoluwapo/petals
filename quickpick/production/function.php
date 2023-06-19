<?php 


function addCategory(){
 global $con;
 if($_SERVER["REQUEST_METHOD"] == "POST"  ){
  $title = $_POST['title'];
  $note = $_POST['note'];
 
  
  $sql = "INSERT INTO `category` (title, note) VALUES('$title', '$note')";
  $result = mysqli_query($con, $sql);
  	if ($result) {
		echo "class added successfully";
	}
return ;
 }
}