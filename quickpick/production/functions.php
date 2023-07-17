<?php 

include("connect.php");

if(isset($_GET['val'])){
  $val = $_GET['val'];
  $sn = $_GET['sn'];
  $con->query("UPDATE carts SET quantity = '$val' WHERE sn = '$sn'");
}
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

$sn = $_GET['sn'];
 $title = $_POST['title'];
 $note = $_POST['note'];
 

 $sql = "UPDATE category SET title = '$title', note = '$note'  WHERE sn = '$sn'";
 $con->query($sql) or mysqli_error($con);
 return;
}


function UpdateItems($sn){
 global $con;

 if(array_key_exists('updateItems', $_POST)){

  $cat_id = $_POST['cat_id'];
$title = $_POST['title'];
$note = $_POST['note'];
$sn = $_GET['sn'];


$target = 'upload/';
$targetfile = $target.$_FILES['picture']['name'];  //upload/picture.jpg

move_uploaded_file($_FILES['picture']['tmp_name'],$targetfile);

$sql = "UPDATE items SET cat_id = '$cat_id', title = '$title', note = '$note', picture = '$targetfile' WHERE sn = '$sn'";
$con->query($sql) or mysqli_error($con);


}

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

function addPayment(){
 global $con;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $trid = rand(0, 9999);
  $user_id = $_POST['user_id'];
  $amount = $_POST['amount'];
  
 

  $sql = "INSERT INTO payments(trid, user_id, amount) VALUES('$trid', '$user_id', '$amount')";
  $result = mysqli_query($con, $sql);
   header("location:paymentlist.php");
  return $result;


 }
}

function addUsers(){
global $con;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $name = $_POST['name'];
 $user_id = rand(0, 9999);
 $email= $_POST['email'];
 $phone = $_POST['phone'];
 $password =$_POST['password'];
 

 $sql = "INSERT INTO users(name, user_id, email, phone, password) VALUES('$name', '$user_id', '$email','$phone', '$password')";
 $result= mysqli_query($con, $sql);
 return $result;
}
}
function loginUser(){
  global $con;
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($email) && !empty($password)){
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($con, $sql);
    
      if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] == $password)
        {
          $_SESSION['email'] = $user_data['email'];
          header("location: index.php"); exit;
        }
      
    }
    echo "Wrong email and password";

  }
  else{
    echo "Please enter some valid information";
  }
  return;
}



  

// function EditUsers(){
//   global $con;
//   if(isset($_POST['edituser'])){
//     $sn = $_GET['sn'];
//      $name = $_POST['name'];
//  $email= $_POST['email'];
//  $password =$_POST['password'];
//  $address = $_POST['address'];
//  $target = 'upload/';
// $targetfile = $target.$_FILES['picture']['name'];  //upload/picture.jpg

// move_uploaded_file($_FILES['picture']['tmp_name'],$targetfile);

//  $sql =("UPDATE users SET name= '$name', email = '$email', password = '$password', address = '$address', picture = '$targetfile' WHERE sn = '$sn'");
// $con->query($sql)or mysqli_error($con);
// return;
//   }
// }

function SqLx($table, $key, $val, $pin){
 global $con;
 $sql= $con->query("SELECT * FROM $table WHERE $key='$val'");
 $row = mysqli_fetch_assoc($sql);
 return $row[$pin];
}

function Qty($cat_id){
 global $con;
 
 $sql= $con->query("SELECT * FROM items WHERE cat_id='$cat_id'");
 return mysqli_num_rows($sql);
}

function QuantStock($item_id){
  global $con;
  $sql = $con->query("SELECT * FROM stock where item_id='$item_id'");
  return mysqli_num_rows($sql);
}


function totalQty($item_id){
  global $con;
  $sql = $con->query("SELECT SUM(quantity)  AS total FROM stock WHERE item_id = '$item_id'");
  $rows = $sql->fetch_assoc();
  return $rows['total'];
}

function CurrentPrice($item_id){
  global $con;

  $sql = $con->query("SELECT * FROM stock WHERE item_id = '$item_id' ORDER BY sn DESC LIMIT 1");
  $rows = $sql->fetch_assoc();
  return $rows['selling_price'];
}

function AddStock(){
 global $con;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $trid = rand(0, 9999);
 $item_id= $_POST['item_id'];
 $quantity =$_POST['quantity'];
 $cost_price = $_POST['cost_price'];
 $selling_price = $_POST['selling_price'];

 $sql = "INSERT INTO stock(trid,item_id, quantity, cost_price, selling_price) VALUES('$trid','$item_id', '$quantity', '$cost_price', '$selling_price')";
 mysqli_query($con, $sql);
 return;
}

}

function AddCart(){
  global $con;
     
    
    $item_id = $_POST['item_id'];
     $quantity = $_POST['quantity'];
     $sales_id = rand(0, 9999);
      $selling_price = $_POST['selling_price'];

      $sql= "INSERT INTO carts(item_id, quantity,sales_id, selling_price) VALUES( '$item_id', '$quantity', '$sales_id', '$selling_price')";
      mysqli_query($con, $sql);
      return;
  }

function checkOut(){
  global $con;
  $sales_id = $_POST['sale_id'];
  $user_id = $_POST['user_id'];
  $sql = "INSERT INTO checkout(sales_id, user_id) values('$sales_id', '$user_id')";
  mysqli_query($con, $sql);
  return;
}

