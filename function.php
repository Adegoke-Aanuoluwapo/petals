<?php include('connection.php');
function AddStudent(){
    global $db;
        $surname = $_POST["surname"];
        $othername = $_POST["othername"];
        $dob = $_POST["dateofbirth"];
        $sex = $_POST["sex"];
        $class = $_POST["class"];
        $reg = $_POST["reg"];

        if(empty($surname) || empty($reg) || is_numeric($surname)) {
			echo "invalid information";
			return;
		}
            $regno = rand(999, 999999999999);

            $query = "INSERT INTO studentuser (regno, surname, othername, dateofbirth, sex, class, reg) values
            ('$regno', '$surname', '$othername', '$dob', '$sex', '$class', '$reg')";

            $db->query($query) or mysqli_error($db);

            
            echo 'success';
       
  
    return;
} 

function parentData($sn,$option=''){
global $con;
$sql = $con->query("SELECT * FROM parentuser WHERE sn='$sn' ");
$row = mysqli_fetch_assoc($sql);
if($option==''){
return $row['surname'].' '.$row['othername'];
}else{
	return $row[$option];	
}
}

function EditUser($sn){
    global $con;
        $surname = $_POST["surname"];
        $othername = $_POST["othername"];
        $dob = $_POST["dateofbirth"];
        $sex = $_POST["sex"];
        $class = $_POST["class"];
        $reg = $_POST["reg"];

        if(empty($surname) || empty($reg) || is_numeric($surname)) {
			echo "invalid information";
			return;
		}
           
            $query = "UPDATE studentuser SET surname='$surname', othername='$othername', dateofbirth='$dob', sex='$sex', class='$class', reg='$reg' WHERE sn='$sn' ";

            $con->query($query) or mysqli_error($db);

            //header('location:index.php');
            //die;
            echo 'success';
    return;
} 

function check_login($con)
{
	if(!isset($_SESSION['regno']))
	{ header("location:login.php"); return; }

		$id =$_SESSION['regno'];
		$query = "SELECT * FROM studentuser WHERE regno = '$id' limit 1";
		$result = mysqli_query($con,$query);
		if (mysqli_num_rows($result)==0) { header("location:login.php"); return; }
		
    return;

}


function addUser(){
    global $con;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!empty($username) && !empty($password) && !is_numeric($username)) {
            $user_id = rand(999, 999999999999); 

            $query = "INSERT INTO user (user_id, firstname, lastname, email, username, password) values
            ('$user_id', '$firstname', '$lastname', '$email', '$username', '$password')";

            mysqli_query($con, $query);

            header('location:signup.php#signin');
            die;
        }else{
            echo "enter some valid information";
        }
    }  
    return;
}   




function loginUser(){
    global $con;
if ($_SERVER['REQUEST_METHOD'] == "POST" ) 
 		{
 			//something was posted
 			$username = $_POST['username'];
 			$password = $_POST['password'];

 			if(!empty($username) && !empty($password) && !is_numeric($username))
 			{

 				//save to database
 				$query = "SELECT * FROM user WHERE username = '$username' limit 1 ";

 				$result = mysqli_query($con, $query);

 				if ($result) 
 				{
 					if ($result && mysqli_num_rows($result) > 0) 
					{
						$user_data = mysqli_fetch_assoc($result);

						if($user_data['password'] === $password)

						{
							$_SESSION['user_id'] = $user_data['user_id'];
                            
							header("location: index.php");
						}
					}
 				}

 				echo "Wrong username and password!";

 			}else{
 				echo "please enter some valid information!";
 			}
 		}
        return;
    }

	function sqL1($table,$col,$value){
		global $db;
		$sql = $con->query("SELECT * FROM $table WHERE $col='$value' ");
		return mysqli_num_rows($sql);
	}

	function AddClass($class,$note){
		global $db;

	if(sqL1('class','class',$class)>0){echo 'Error'; return; }
			if(empty($class)) { echo 'Error'; return; }
	
				$query = "INSERT INTO class (class,note) values
				('$class','$note')";
	
				$db->query($query);
				echo 'Success';

		  
		return;
	} 

	function EditClass($sn,$class,$note)
	{global $db;
	$db->query("UPDATE class SET class='$class', note='$note' WHERE sn='$sn' ");
	echo 'success';
	return;
	}


	function AddParent(){
		global $db;
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$phone = $_POST["phone"];
			$sex = $_POST["sex"];
			$email = $_POST["email"];
	
			if(empty($firstname) || empty($phone) || is_numeric($firstname)) {
				echo "invalid information";
				return;
			}
				$user_id = rand(999, 999999999999);
	
				$query = "INSERT INTO parentuser (regno, surname, othername, phone, sex, email) values
				('$user_id', '$firstname', '$lastname', '$phone', '$sex', '$email')";
	
				$db->query($query) or mysqli_error($db);
	
				
				echo 'success';
		   
	  
		return;
	} 
	function checklogin($con)
{
	if(!isset($_SESSION['user_id']))
	{ header("location:login.php"); return; }

		$id =$_SESSION['user_id'];
		$query = "SELECT * FROM parentuser WHERE user_id = '$id' limit 1";
		$result = mysqli_query($con,$query);
		if (mysqli_num_rows($result)==0) { header("location:login.php"); return; }
		
    return;

}
function EditParent($sn){
	global $db;
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$phone = $_POST["phone"];	
		$sex = $_POST["sex"];
		$email = $_POST["email"];		
		if(empty($firstname) || empty($phone) || is_numeric($firstname)) {
			echo "invalid information";
			return;
		}
		   
			$query = "UPDATE parentuser SET surname='$firstname', othername='$lastname',phone='$phone', sex='$sex', email='$email'  WHERE sn='$sn' ";

			$db->query($query) or mysqli_error($db);

			//header('location:index.php');
			//die;
			echo 'success';
	return;
} 


function AddStaff(){
	global $db;
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$phone = $_POST["phone"];
		$sex = $_POST["sex"];
		$email = $_POST["email"];
		$dob = $_POST["dob"];

		if(empty($firstname) || empty($phone) || is_numeric($firstname)) {
			echo "invalid information";
			return;
		}
			$user_id = rand(999, 999999999999);

			$query = "INSERT INTO staffuser (user_id, surname, othername, phone, sex, email, dob) values
			('$user_id', '$firstname', '$lastname', '$phone', '$sex', '$email', '$dob')";

			$db->query($query) or mysqli_error($db);

			
			echo 'success';
	   
  
	return;
} 
function EditStaff($sn){
	global $db;
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$phone = $_POST["phone"];	
		$sex = $_POST["sex"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];		
		if(empty($firstname) || empty($phone) || is_numeric($firstname)) {
			echo "invalid information";
			return;
		}
		   
			$query = "UPDATE staffuser SET surname='$firstname', othername='$lastname', phone='$phone', sex='$sex', dob='$dob', email='$email'  WHERE sn='$sn' ";

			$db->query($query) or mysqli_error($db);

			//header('location:index.php');
			//die;
			echo 'success';
	return;
} 


	 
 

function AddSubject($subject,$note){
	global $db;

//if(sqL1('subjectuser','subject',$subject)>0){echo 'Error'; return; }
	//	if(empty($subject)) { echo 'Error'; return; }

			$query = "INSERT INTO subjectuser (subject,note) values
			('$subject','$note')";
			$db->query($query);
			echo 'Success';

	  
	return;
} 

function EditSubject($sn,$subject,$note)
{global $db;
$db->query("UPDATE subjectuser SET subject='$subject', note='$note' WHERE sn='$sn' ");
echo 'success';
return;
}

function AddStaffClass($sfclass,$note){
	global $db;

if(sqL1('staffclass','staff',$sfclass)>0){echo 'Error'; return; }
		if(empty($sfclass)) { echo 'Error'; return; }

			$query = "INSERT INTO staffclass (staff, note) values
			('$sfclass','$note')";

			$db->query($query);
			echo 'Success';

	  
	return;
} 

function EditStaffClass($sn,$sfclass,$note)
{global $db;
$db->query("UPDATE staffclass SET staff='$sfclass', note='$note' WHERE sn='$sn' ");
echo 'success';
return;
}



?>

	
	
	














