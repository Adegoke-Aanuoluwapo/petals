<?php 


function addCategory(){
 global $con;
 if($_SERVER["REQUEST_METHOD"] == "POST"  ){
  $title = $_POST['title'];
  $note = $_POST['note'];
 
  
  $sql = "INSERT INTO category (title, note) VALUES('$title', '$note')";
  $result = mysqli_query($con, $sql);
  	if ($result) {
		echo "class added successfully";
	}
 }
}

function addItems(){
 global $con;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $catid = $_POST['cat_id'];
  $title = $_POST['title'];
  $note = $_POST['note'];
  $picture = $_POST['picture'];
  $created = $_POST['created_at'];
  $status = $_POST['status'];

  $sql = "INSERT INTO items(cat_id, title, note, picture, created_at status) VALUES('$catid', '$title', '$note', '$picture', '$created', '$status')";
  $result = mysqli_query($con, $sql);

  return $result;


 }
}