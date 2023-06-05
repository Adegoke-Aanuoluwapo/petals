<?php
function adduser()
{
	global $con;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		if (!empty($username) && !empty($password) && !is_numeric($username)) {
			$user_id = rand(999, 999999999999);

			$query = "INSERT INTO user (user_id, firstname, lastname, email, username, password) values
            ('$user_id', '$firstname', '$lastname', '$email', '$username', '$password')";

			mysqli_query($con, $query);

			header('location:signup.php#signin');
			die;
		} else {
			echo "enter some valid information";
		}
	}
	return;
}


function parentData($id, $option = '')
{
	if(is_null($id)){
		return '';
	}
	global $con;
	$sql = $con->query("SELECT * FROM parent WHERE id='$id'");
	$rows = mysqli_fetch_assoc($sql);
	if ($option == '') {
		return $rows['surname'] . ' ' . $rows['othernames'];
	} else {
		return $rows[$option];
	}
}
function studentData($id, $option = '')
{
	global $con;
	$sql = $con->query("SELECT * FROM student WHERE id = '$id' ");
	$rows = mysqli_fetch_assoc($sql);
	if ($option == '') {
		return $rows['surname'] . ' ' . $rows['othername'];
	} else {
		return $rows[$option];
	}
}

function EditUser($id)
{
	global $con;
	$surname = $_POST['surname'];
	$othername = $_POST['othername'];
	$dob = $_POST['dob'];
	$sex = $_POST['sex'];
	$class = $_POST['class'];
	$reg = $_POST['reg'];
	if (empty($surname) || empty($reg) || is_numeric($surname)) {
		echo "invalid information";
		return;
	}

	$sql = "UPDATE student SET
surname='$surname',
othername='$othername',
dob ='$dob',
sex='$sex',
class='$class'

";

	$con->query($sql) or mysqli_error($con);
	echo 'success';
}







function check_login($con)
{
	if (isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		$query = "select * from user where user_id = '$id' limit 1";

		$result = mysqli_query($con, $query);

		if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("location:login.php");

	return;
}


function loginUser()
{
	global $con;
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password) && !is_numeric($username)) {

			//save to database
			$query = "SELECT * FROM user WHERE username = '$username' limit 1 ";

			$result = mysqli_query($con, $query);

			if ($result) {
				if ($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);

					if ($user_data['password'] === $password) {
						$_SESSION['user_id'] = $user_data['user_id'];

						header("location: index.php");
					}
				}
			}

			echo "Wrong username and password!";
		} else {
			echo "please enter some valid information!";
		}
	}
	return;
}

function regStudent()
{
	global $con;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$surname = $_POST["surname"];
		$firstname = $_POST["firstname"];
		$dateofbirth = $_POST["dob"];
		$sex = $_POST["sex"];
		$class = $_POST["class"];
		$regno = $_POST["reg"];

		if (!empty($surname)) {
			$user_id = rand(1, 9999);

			$query = "INSERT INTO student ( surname, firstname, dob, sex, class, reg) values
				( '$surname', '$firstname', '$dateofbirth', '$sex', '$class', '$regno')";

			mysqli_query($con, $query);

			header('location:registerstud.php');
			die;
		} else {
			echo "enter some valid information";
		}
	}
	return;
}
function addParent()
{
	global $con;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$regno = $_POST['regno'];
		$surname = $_POST['surname'];
		$othernames = $_POST['othernames'];
		$email = $_POST['email'];
		$sex = $_POST['sex'];
		$phone = $_POST['phone'];


		$query = "INSERT INTO parent(regno, surname, othernames, email, sex, phone) VALUES('$regno','$surname', '$othernames', '$email', '$sex', '$phone' )";
		mysqli_query($con, $query);
	}
};

function addStaff()
{
	global $con;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$sex = $_POST['sex'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];

		$query = "INSERT INTO staff(firstname, lastname, phone, sex, dob, email) VALUES('$firstname', '$lastname', '$phone', '$sex', '$dob', '$email')";
		$result = mysqli_query($con, $query);
		if ($result) {
			echo "you have succesffully added staff";
		} else {
			die(mysqli_error($con));
		}
	}
}
function upadateParent($id, $regno, $surname, $othernames, $email, $sex, $phone)
{
	global $con;



	$con->query("UPDATE parent set  regno='$regno', surname='$surname', othernames='$othernames', email='$email', sex ='$sex', phone= '$phone' WHERE id ='$id'");

	echo 'success';
}

function Addclass()
{
	global $con;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$class = $_POST['class'];
		$note = $_POST['note'];

		$sql = "INSERT INTO class(class, note) VALUES('$class', '$note')";

		$result = mysqli_query($con, $sql);
		if ($result) {
			echo "class added successfully";
		}
	}
}


function Addresult($studentid, $class, $subject, $ca1, $ca2, $exam, $total)
{
	global $con;




	$sql = "INSERT INTO results(studentid, class, subject, ca1, ca2, exam, total) VALUES( '$studentid', '$class','$subject', '$ca1', '$ca2', '$exam', '$total' )";

	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "class added successfully";
	}
	return;
}
function sqL1($table, $col, $value)
{
	global $con;
	$sql = $con->query("SELECT * from $table where $col='$value'");
	return mysqli_num_rows($sql);
}


function addSubject()
{
	global $con;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$subject = $_POST['subject'];
		$note = $_POST['note'];

		$sql = "INSERT INTO subjects(subject, note) VALUES('$subject', '$note')";

		$result = mysqli_query($con, $sql);
		if ($result) {
			echo "subject added successfully";
		}
	}
}
function EditSubject($id, $subject, $note)
{
	global $con;
	$con->query("UPDATE subjects SET subject='$subject', note='$note' where id =''$id");
	echo 'Success';
	return;
}
function getAverage($subject, $class)
{
	global $con;
	$sql = $con->query("SELECT * FROM results WHERE subject='$subject' AND class='$class'");
	$num = mysqli_num_rows($sql);

	$sql = $con->query("SELECT SUM(total) AS all_score FROM results WHERE subject='$subject' AND class='$class'");
	$rows = mysqli_fetch_assoc($sql);
	return number_format($rows['all_score'] / $num, 2);
}
function getGrade($total)
{
	global $con;
	if ($total > 70 && $total <= 100) {
		$grade = 'A';
	} elseif ($total >= 60 && $total < 70) {
		$grade = "B";
	} elseif ($total >= 50 && $total < 60) {
		$grade = "C";
	} elseif ($total >= 40 && $total < 50) {
		$grade = "D";
	} elseif ($total >= 30 && $total < 40) {
		$grade = "E";
	} else {
		$grade = "F";
	}
	return $grade;
}

function getRemark($total)
{
	global $con;
	$remark = '';
	if ($total >= 70) {
		$remark = 'Excellence';
	} elseif ($total >= 60 && $total < 70) {
		$remark = 'Very Good';
	} elseif ($total >= 50 && $total < 60) {
		$remark = 'Good';
	} elseif ($total >= 40 && $total < 50) {
		$remark = 'Pass';
	} elseif ($total >= 0 && $total < 40) {
		$remark = 'Fail';
	}
	return $remark;
}

function SubjectPosition($id, $class, $subject){
global $con;
$i=1;
$sql = $con->query("SELECT * FROM results WHERE subject='$subject' AND class = '$class' ORDER BY total DESC");
while($row = mysqli_fetch_assoc($sql)){
	$e=$i++;
	if($row['studentid']==$id){
		return $e;
	}
}
}
