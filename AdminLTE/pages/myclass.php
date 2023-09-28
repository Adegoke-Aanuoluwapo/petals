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
    } elseif (isset($_POST['AddResult'])) {
      $this->AddResult();
    } elseif (isset($_POST['AddTerm'])) {
      $this->Term();
    } elseif (isset($_POST['updateSetup'])) {
      $this->ResultSetup();
    } elseif (isset($_POST['setgrade'])) {
      $this->Gradeset();
    } elseif (isset($_POST['UpdateSchoolInfo'])) {
      $this->editSchoolInfo();
    } elseif (isset($_POST['Activate'])) {
      $this->Activate();
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

  function Grade($score, $type = 1)
  {
    $Grade = '';
    if ($score >= 75) {
      $Grade = 'A';
      $Remark = 'Excellent';
    } else if ($score >= 60) {
      $Grade = 'B';
      $Remark = 'Very Good';
    } else if ($score >= 50) {
      $Grade = 'C';
      $Remark = 'Good';
    } else if ($score >= 45) {
      $Grade = 'D';
      $Remark = 'Pass';
    } else if ($score >= 40) {
      $Grade = 'E';
      $Remark = 'Fair';
    } else {
      $Grade = 'F';
      $Remark = 'Fail';
    }
    return $type == 1 ? $Grade : $Remark;
  }


  function Remark($Grade)
  {
    $Remark = '';
    if ($Grade == 'A') {
      $Remark = 'Excellent';
    } else if ($Grade == 'B') {
      $Remark = 'Very Good';
    } else if ($Grade == 'C') {
      $Remark = 'Good';
    } else if ($Grade == 'D') {
      $Remark = 'Pass';
    } else if ($Grade == 'E') {
      $Remark = 'Fair';
    } else if ($Grade == 'F') {
      $Remark = 'Fail';
    }
    return $Remark;
  }

  function Gradeset()
  {
    global $con, $report, $count;

    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    $D = $_POST['D'];
    $E = $_POST['E'];
    $F = $_POST['F'];
    $ar = $_POST['ar'];
    $br = $_POST['br'];
    $cr = $_POST['cr'];
    $dr = $_POST['dr'];
    $er = $_POST['er'];
    $fr = $_POST['fr'];

    $con->query("UPDATE result_setup SET A = '$A', B = '$B', C = '$C', D = '$D', E = '$E', F = '$F', ar = '$ar', br = '$br', cr = '$cr', dr ='$dr', er = '$er', fr = '$fr' WHERE sn = 1 ");
    $report = 'Operation Successful';
    return;
  }
  function ResultSetup()
  {
    global $con,
      $report, $count;
    $ca1 = $_POST['ca1'];
    $ca2 = $_POST['ca2'];
    $ca3 = $_POST['ca3'];
    $exam = $_POST['exam'];

    $con->query("UPDATE result_setup SET ca1= '$ca1', ca2=  '$ca2',  ca3= '$ca3',exam = '$exam'");
    $report = 'Operation Successful';
    return;
  }
  function editSchoolInfo()
  {
    global $con, $report;
    $school_name = $_POST['school_name'];

    $email = $_POST['email'];
    $website = $_POST['website'];
    $phone = $_POST['phone'];
    $alt_phone = $_POST['alt_phone'];
    $motto = $_POST['motto'];
    $address = $_POST['address'];
    $con->query("UPDATE school_info SET school_name = '$school_name', email = '$email', website= '$website', phone= '$phone', alt_phone='$alt_phone', motto= '$motto',address= '$address' WHERE sn =1");
    $report = 'Operation Successful';
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
    global $con, $report, $count;
    $subject = $_POST['subject'];
    if (empty($subject)) {
      $report = 'input the subject';
      $count = 1;
      return;
    }
    $sql = "INSERT INTO subjects(subject) VALUE('$subject')";
    mysqli_query($con, $sql);
    $report = 'Operation successful';
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
    global $con, $report, $count;
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    if (empty($name) || empty($address) || empty($email) || empty($phone) || empty($state) || empty($lga)) {
      $report = 'enter all the entries';
      $count = 1;
      return;
    }
    $sql = "INSERT INTO parents(name, address, email, phone, state, lga) VALUES('$name', '$address', '$email', '$phone', '$state', '$lga')";
    mysqli_query($con, $sql);
    $report = 'operation successful';
    return;
  }
  function setFees()
  {
    global $con;
    $fee_class = $_POST['fee_class'];
    $fee_category = $_POST['fee_category'];
    $fee_amount = $_POST['fee_amount'];
    $sql = $con->query("SELECT * FROM students WHERE class = '$fee_class'");
    while ($rows = mysqli_fetch_assoc($sql)) {
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
    global $con, $report, $count;
    $guardian = $_POST['guardian'];
    $class = $_POST['class'];
    $arm = $_POST['arm'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $othernames = $_POST['othernames'];
    $gender = $_POST['gender'];
    $reg = $_POST['reg'];
    if (empty($guardian) || empty($class) || empty($arm) || empty($surname) || empty($firstname) || empty($othernames) || empty($gender) || ($reg)) {
      $report = 'enter all entries';
      $count = 1;
      return;
    }
    $sql = "INSERT INTO students(guardian, class, arm, surname,firstname, othernames, gender, reg) VALUES('$guardian', '$class', '$arm', '$surname', '$firstname', '$othernames', '$gender', '$reg')";
    mysqli_query($con, $sql);
    $report = 'students added successfully';
    return;
  }
  function Term()
  {
    global $con, $count, $report;
    $session = $_POST['session'];
    if (empty($session)) {
      $report = 'Select a session';
      $count = 1;
      return;
    }
    $i = 0;
    while ($i < 3) {
      $i++;
      $sql = "INSERT INTO terms(term, session) VALUES('$i', '$session')";
      mysqli_query($con, $sql);
    }
    $report = "Section successfully added";
    return;
  }

  function Activate()
  {
    global $con, $count, $report;
    $sn = $_POST['Activate'];
    $result= $con->query("UPDATE terms SET status = 0 ");
    $result= $con->query("UPDATE terms SET status =  1 WHERE sn = '$sn' ");
    if(!empty($result)){
 $report = 'term updated successfully ' . $sn;
    }
   
    echo $sn;
    return;
  }
  function resultSum($sid){
    global $con;
    
    $term = $_POST['term'];
    $session = $_POST['session'];
    $sql= $con->query("SELECT * FROM result_sum WHERE sid ='$id' AND term = '$term' AND session = '$session' ");
    if(mysqli_num_rows($sql)==0){
      $sq = "INSERT into result_sum(sid, term, session) VALUES('$id', '$term', '$session')";
      $result = $rows['sn'];
      return $result;

    }

  }

  

  function AddResult()
  {
    global $con, $report, $count;


    $studentid = $_POST['studentid'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $ca1 = $_POST['ca1'];
    $ca2 = $_POST['ca2'];
    $exam = $_POST['exam'];

    $i = 0;

    while ($i < count($studentid)) {
      $e = $i++;

      $student = $studentid[$e];

      $c1 = $ca1[$e];
      $c2 = $ca2[$e];
      $exa = $exam[$e];
      $total = (int)$c1 + (int)$c2 + (int)$exa;
      if (empty($c1) || empty($c2) || empty($exa)) {
        $report = 'input all fields';
        $count = 1;
        return;
      }

      $sql = "INSERT  INTO results(studentid, class, subject, ca1, ca2,  exam, total) VALUES( '$student', '$class', '$subject', '$c1', '$c2', '$exa', '$total')";
      mysqli_query($con, $sql);
    }
    $report = 'results added succesfully';
    return;
  }
}















$pro = new Profile();
