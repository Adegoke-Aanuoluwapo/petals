<?php 
function adduser(){
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


function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id =$_SESSION['user_id'];
		$query = "select * from user where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);

		if ($result && mysqli_num_rows($result) > 0) 
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("location:login.php");
	
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

	function regStudent(){
		global $con;
	
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$surname = $_POST["surname"];
			$firstname = $_POST["firstname"];
			$dateofbirth = $_POST["dob"];
			$sex = $_POST["sex"];
			$class = $_POST["class"];
			$regno = $_POST["reg"];
	
			if(!empty($surname)) {
				$user_id = rand(1, 9999);
	
				$query = "INSERT INTO student (user_id, surname, firstname, dob, sex, class, reg) values
				('$user_id', '$surname', '$firstname', '$dateofbirth', '$sex', '$class', '$regno')";
	
				mysqli_query($con, $query);
	
				header('location:registerstud.php');
				die;
			}else{
				echo "enter some valid information";
			}
		}  
		return;
	}
	function addParent(){
		global $con;
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$regno = $_POST['regno'];
		$surname =$_POST['surname'];
		$othernames=$_POST['othernames'];
		$email = $_POST['email'];
		$sex =$_POST['sex'];
		$phone=$_POST['phone'];


		$query = "INSERT INTO parent(regno, surname, othernames, email, sex, phone) VALUES('$regno','$surname', '$othernames', '$email', '$sex', '$phone' )";
		 mysqli_query($con, $query);
	}
	};

   
?>  















