<?php
include ('connect.php');
if(isset($_GET['deleteid'])){
 $id =$GET['deleteid'];

 $sql= "DELETE FROM members where id=$id";
 $result=mysqli_query($con, $sql);
 if($result){
  echo "deleted successfully";
 }else{
  die(mysqli_error($con));
 }
}
