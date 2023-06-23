<?php 

include("connect.php");
function addCategory(){
 global $con;
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  
 
  $title = $_POST['title'];
  $note = $_POST['note'];
		$sql = "INSERT INTO category (title, note) VALUES('$title', '$note')";
  mysqli_query($con, $sql);
  
  return;
 }
}
function updateCategory($sn){
 global $con;

$sn =$_POST['updatecate'];
 $title = $_POST['title'];
 $note = $_POST['note'];

 $sql = "UPDATE category SET title = '$title', note = '$note' WHERE sn = '$sn'";
 $con->query($sql) or mysqli_error($con);
 return;
}

function addItems(){
 global $con;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $cat_id = $_POST['cat_id'];
  $title = $_POST['title'];
  $note = $_POST['note'];
 

  $sql = "INSERT INTO items(cat_id, title, note) VALUES('$cat_id', '$title', '$note')";
  $result = mysqli_query($con, $sql);
   header("location:itemslist.php");
  return $result;


 }
}