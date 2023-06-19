<?php 
include("connection.php");

function addCategory(){
 global $con;
 if(isset($_SERVER['REQUEST METHOD']) == 'POST'  ){
  $title = $_POST['title'];
  $note = $_POST['note'];
 
  
  $sql = "INSERT INTO category(title, note) VALUES('$title', '$note', )";
  mysqli_query($con, $sql);

 }
}