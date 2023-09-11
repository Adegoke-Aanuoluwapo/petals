<?php

require_once("constant.php");

class Profile
{

  function __construct()
  {
    if (array_key_exists('login', $_POST)) {
      $this->SignIn();
    } else if (array_key_exists('register', $_POST)) {
      $this->SignUp();
    } elseif (isset($_POST['createCategory'])) {
      $this->Cat();
    } elseif (isset($_POST['createArm'])) {
      $this->Arm();
    } elseif (isset($_POST['addparent'])) {
      $this->AddParent();
    } elseif (isset($_POST['addstudent'])) {
      $this->AddStudent();
    } elseif (isset($_POST['addstaff'])) {
      $this->AddStaff();
    } elseif (isset($_POST['addsubject'])) {
      $this->AddSubject();
    } elseif (isset($_POST['createClass'])) {
      $this->createClass();
    } elseif (isset($_POST['assignSubject'])) {
      $this->AssignSubjects();
    } elseif (isset($_POST['editsubject'])) {
      $sn  = $_POST['sn'];
      $this->editSubject($sn);
    } elseif (isset($_POST['editclass'])) {
      $sn  = $_POST['sn'];
      $this->editClass($sn);
    } elseif (isset($_POST['EditArm'])) {
      $sn  = $_POST['sn'];
      $this->editArm($sn);
    } elseif (isset($_POST['createfees'])) {
      $this->createFees();
    } elseif (isset($_POST['setfees'])) {
      $this->setFees();
    } elseif (isset($_POST['editfees'])) {
      $sn  = $_POST['sn'];
      $this->editFees($sn);
    } elseif (isset($_POST['UpdatePermission'])) {
      $this->Updatepermission();
    } elseif (isset($_POST['UpdateAllPermission'])) {
      $this->UpdateAllPermission();
    }
  }
  public function SignUp()
  {
    global $con;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";
    mysqli_query($con, $sql);
    return;
  }
  function AssignSubjects()
  {
    global $con;
    $subject = $_POST['subject'];
    $class   = $_POST['class'];
    $teacher = $_POST['teacher'];
    $sql = "INSERT INTO assign_subjects(subject, class, teacher) VALUES('$subject', '$class', '$teacher')";
    mysqli_query($con, $sql);
    return;
  }
  public function SignIn()
  {
    global $con;
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
      $sql = "SELECT * FROM users WHERE email = '$email' ";
      $result = mysqli_query($con, $sql);

      if ($result && mysqli_num_rows($result) == 1) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['password'] == $password) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("location: index.php");
          exit;
        }
      }
      echo "Wrong email and password";
    } else {
      echo "Please enter some valid information";
    }
    return;
  }
  function Updatepermission()
  {
    global $con, $report, $count;
    $staffid = $_POST['UpdatePermission'];
    $p1 = $_POST['p1'] ?? 0;
    $p2 = $_POST['p2'] ?? 0;
    $p3 = $_POST['p3'] ?? 0;
    $p4 = $_POST['p4'] ?? 0;
    $sql = "UPDATE permissions SET p1 = '$p1', p2 = '$p2', p3=  '$p3', p4 ='$p4' WHERE staffid = '$staffid'";
    $con->query($sql);
    $report = 'operation successful';
    return;
  }


  function Alert()
  {
    global $count, $report;
    return $count == 1 ? "toastr.error('" . $report . "')" : "toastr.success('" . $report . "')";
  }
  function  Cat()
  {
    global $con;
    $class = $_POST['class'];

    $sql = "INSERT INTO class(class) VALUE('$class')";
    mysqli_query($con, $sql);
    return;
  }
  function updateCat()
  {
    global $con;
    $sn = $_GET['sn'];
    $class = $_POST['class'];
    $sql = $con->query("UPDATE  class  SET class = '$class' WHERE sn = '$sn'");
    $con->query($sql);
    return;
  }
  function sqL1($table, $col, $val)
  {
    global $con;
    $sql = $con->query("SELECT * FROM $table WHERE $col = '$val'");
    return mysqli_num_rows($sql);
  }

  function sqLx1($table, $col, $val, $ret)
  {
    global $con;
    $sql = $con->query("SELECT * FROM $table WHERE $col = '$val'");
    $row = mysqli_fetch_assoc($sql);
    return $row[$ret];
  }


  function  AddSubject()
  {
    global $con;
    $subject = $_POST['subject'];

    $sql = "INSERT INTO subjects(subject) VALUE('$subject')";
    mysqli_query($con, $sql);
    return;
  }
  function UpdateAllPermission()
  {
    global $con, $report;
    $staff = $_POST['staffid'];
    $i = 0;
    while ($i < count($staff)) {
      $e = $i++;
      $staffid = $_POST['staffid'][$e];
      $p1 = $_POST['p1'][$staffid] ?? 0;
      $p2 = $_POST['p2'][$staffid] ?? 0;
      $p3 = $_POST['p3'][$staffid] ?? 0;
      $p4 = $_POST['p4'][$staffid] ?? 0;
      $sql = "UPDATE permissions SET p1 = '$p1', p2 = '$p2', p3= '$p3', p4 ='$p4' WHERE staffid = '$staffid'";
      $con->query($sql);
    }
    $report = 'Ok ' . json_encode($staff);
    return;
  }

  function  Arm()
  {
    global $con, $report, $count;
    $arm = $_POST['arm'];

    $sql = "INSERT INTO arm(arm) VALUE('$arm')";
    mysqli_query($con, $sql);
    $report = 'operation successful';
    return;
  }
  function  createClass()
  {
    global $con;
    $class = $_POST['class'];
    $level = $_POST['level'];

    $sql = "INSERT INTO create_class(class, level) VALUE('$class', '$level')";
    mysqli_query($con, $sql);
    return;
  }

  function  createFees()
  {
    global $con;
    $category = $_POST['category'];
    $description = $_POST['description'];

    $sql = "INSERT INTO fees(category, description) VALUES('$category', '$description')";
    mysqli_query($con, $sql);
    return;
  }
  function editSubject($sn)
  {
    global $con, $report, $count;
    $subject = $_POST['subject'];
    $sql = "UPDATE subjects SET subject = '$subject' WHERE sn = '$sn' ";
    $con->query($sql);
    $report = 'operation successful';
    return;
  }
  function editArm($sn)
  {
    global $con;
    $arm = $_POST['arm'];
    $sql = "UPDATE arm SET arm = '$arm' WHERE sn = '$sn' ";
    $con->query($sql);
    return;
  }
  function editClass($sn)
  {
    global $con;
    $class = $_POST['class'];
    $sql = "UPDATE class SET class = '$class' WHERE sn = '$sn' ";
    $con->query($sql);
    return;
  }
  function editFees($sn)
  {
    global $con;
    $category = $_POST['category'];
    $description = $_POST['description'];
    $sql = "UPDATE fees SET category = '$category', description = '$description' WHERE sn = '$sn' ";
    $con->query($sql);
    return;
  }
  function AddParent()
  {
    global $con;
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    $sql = "INSERT INTO parents(name, address, email, phone, state, lga) VALUES('$name', '$address', '$email', '$phone', '$state', '$lga')";
    mysqli_query($con, $sql);
    return;
  }
  function setFees()
  {
    global $con;
    $fee_class = $_POST['fee_class'];
    $fee_category = $_POST['fee_category'];
    $fee_amount = $_POST['fee_amount'];
    $sql = $con->query("SELECT * FROM students WHERE class = '$fee_class'");
    while($rows = mysqli_fetch_assoc($sql)){
    $studentid = $rows['sn'];
    $sq = "INSERT INTO set_fee(fee_class, fee_category, fee_amount, studentid ) VALUES('$fee_class', '$fee_category', '$fee_amount', '$studentid')";
    
    mysqli_query($con, $sq);
    }
    return;
  }
 
  function total_Fees()
  {
    global $con;
    $sql = $con->query("SELECT sum(fee_amount)  as total FROM set_fee");
    $rows = mysqli_fetch_assoc($sql);
    return $rows['total'];
  }
  function AddStaff()
  {
    global $con;
    $name = $_POST['name'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    $sql = "INSERT INTO staff(name, email, phone, role) VALUES('$name', '$email', '$phone', '$role')";
    mysqli_query($con, $sql);
    return;
  }
  function staffRole($role)
  {
    $post = '';
    if ($role == 7) {
      $post = 'Teacher';
    } elseif ($role == 8) {
      $post = 'Accountant';
    } elseif ($role == 9) {
      $post = 'Administrator';
    }
    return $post;
  }

  function SqLx($table, $key, $value, $pin)
  {
    global $con;
    $sql = $con->query("SELECT * FROM $table WHERE $key = '$value'");
    $row = mysqli_fetch_assoc($sql);
    return $row[$pin];
  }

  function Total($table)
  {
    global $con;
    $sql = $con->query("SELECT * FROM $table");
    return mysqli_num_rows($sql);
  }
  function AddStudent()
  {
    global $con;
    $guardian = $_POST['guardian'];
    $class = $_POST['class'];
    $arm = $_POST['arm'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $othernames = $_POST['othernames'];
    $gender = $_POST['gender'];
    $reg = $_POST['reg'];
    $sql = "INSERT INTO students(guardian, class, arm, surname,firstname, othernames, gender, reg) VALUES('$guardian', '$class', '$arm', '$surname', '$firstname', '$othernames', '$gender', '$reg')";
    mysqli_query($con, $sql);
    return;
  }
}

$pro = new Profile();
