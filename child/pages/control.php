<?php
$con = new mysqli('localhost', 'root', '', 'child');

class Children
{

  function LogIn($name, $password)
  {
    global $con;
    $sql = $con->query("SELECT * FROM teachers WHERE name = '$name' AND password ='$password'");
    if (mysqli_num_rows($sql) != 1) {
      echo "Invalid login";
      return;
    }
    $rows = mysqli_fetch_assoc($sql);
    if ($password = $rows["password"]) {
      $_SESSION["id"] = $rows["id"];
      echo "Login Successfully";
    }
    return;
  }
  function addTeachers($name, $district, $phone, $role, $grdistrict,$megagroup, $region, $password)
  {

    global $con;
    $sql = $con->query("SELECT * FROM teachers WHERE name = '$name' AND district ='$district'");
    //  if( mysqli_num_rows($sql)==0){
    //       echo "please input result";
    //       return;
    //     }
    if (mysqli_num_rows($sql) == 1) {
      echo "teacher already exist";
      return;
    } else {
      $sql = $con->query("INSERT INTO teachers(name, district, phone, role, grdistrict, megagroup, region, password) VALUES('$name', '$district', '$phone','$role', '$grdistrict','$megagroup', '$region', '$password')");
      if ($sql) {
        echo "teacher added succefully";
        return;
      }
    }
  }
  /**
   * Summary of teachersRole
   * @param mixed $t
   * @return string
   */
  function teachersRole($t)
  {

    $role = '';
    if ($t == 8) {
      $role = "Group Cordinator";
    } else if ($t == 9) {
      $role = "District Cordinator";
    } else if ($t == 7) {
      $role = "teacher";
    }
    return $role;
  }
  function addChildren($surname, $firstname, $othername, $familyname, $sex, $birthdate, $address, $addressarea, $school, $class)
  {

    global $con;
    $sql = $con->query("SELECT * FROM children WHERE surname = '$surname' AND othername='$othername'");
    if (mysqli_num_rows($sql) == 1) {
      echo "child already exist";
      return;
    } else {
      $sql = $con->query("INSERT INTO children(surname, firstname, othername, familyname, sex, birthdate, address, addressarea, school, class) VALUES('$surname', '$firstname', '$othername','$familyname', '$sex', '$birthdate', '$address', '$addressarea', '$school', '$class')");
      if ($sql) {
        echo "child added succefully";
        return;
      }
    }
  }

  function addMaterials()
  {
    global $con;
    $name = $_POST['name'];
    $service = $_POST['service'];
    $vol = $_POST['vol'];
    //$file = $_POST['file'];
    $target = 'upload/';
    $targetfile = $target . $_FILES['file']['name']; //upload/picturename.jpg

    move_uploaded_file($_FILES['file']['tmp_name'], $targetfile);
    $sql = $con->query("INSERT INTO outlines(name, service, vol, file) VALUES('$name', '$service','$vol', '$targetfile')");
    if ($sql) {
      echo 'Material uploaded successfully';
    } else (
      "material not uploaded"
    );
  }
  function sQLx1($table, $key, $val, $pin)
  {
    global $con;
    $sql = $con->query("SELECT * FROM $table WHERE $key = '$val'");
    $row = mysqli_fetch_assoc($sql);
    return mysqli_num_rows($sql) > 0 ? $row[$pin] : '';
  }

  function submitReport($program, $teacher_id,  $b35, $g35, $b68, $g68, $b912, $g912)
  {
    global $con;
    $teacher_id = $_SESSION['id'];
    $t35 =$b35+$g35;
    $t68 = $b68+$g68;
    $t912 = $b912 + $g912;
    $sql = $con->query("SELECT * FROM reports WHERE program ='$program'");
    // if (mysqli_num_rows($sql) == 0) {
    //   echo "please input result";
      
    // }
      if (mysqli_num_rows($sql) == 1) {
      echo "report already exist";
      return;
    } else  {
      $sql = $con->query("INSERT INTO reports(program, teacher_id,  b35, g35,t35, b68, g68, t68, b912, g912,t912) VALUES('$program','$teacher_id',  '$b35', '$g35','$t35', '$b68', '$g68','$t68', '$b912', '$g912', '$t912')");
      if ($sql) {
        echo "report submitted successfully";
        //$this->addTeachers($name, $district, $phone, $role, $grdistrict, $region);
        return;
      }
    }
  }
  function programTitle()
  {
    global $con;
    $i = 1;
    //$day = date('D');

    $i = 0;
    while ($i <= 720) {
      $e = $i++;
      $actime = time() + 86400 * $e;
      $date = date('d-m-Y', $actime); //14-11-2023
      $day = date('D', $actime); //Tue
      $currentHour = date('H', $actime);
      $ymd = date('ymd', $actime);
      $year = date('Y', $actime);
      $month = date('m', $actime);
      $wk = date('W', $actime);


      $title2 = $title = '';
      if ($day == 'Mon') {
        $title = 'Monday Bible Study';
      } else if ($day == 'Thu') {
        $title = 'Thursday Revival Hour';
      } else if ($day == 'Sun') {
        $title = 'Sunday Worship Service';
        $title2 = 'Home Caring Fellowship';
      }
      // $status ='';

      if (!empty($title)) {
        $sql = $con->query("INSERT INTO programs(ymd,title, wk, month, year, date, status) VALUES('$e', '$title', '$wk','$month','$year','$date', '1')");
      }

      if (!empty($title2)) {
        $sql = $con->query("INSERT INTO programs(ymd,title, wk, month, year, date, status) VALUES('$e', '$title2', '$wk','$month','$year','$date', '1')");
      }
    }
    return;
  }
  function retreatReport($day){
    global $con;
    for($i =1; $i <=$day; $i++){

   


    $title3 = $title3 = $title2 =$title='';
    if($day ==1){
      $title = 'evening message';
    }
    else if($day==2){$title = 'Morning Message';
        $title2 = '1st GS Message';
        $title3 = 'Seminar';
        $title4 ='Evening Message';
    }
    elseif ($day ==3){
      $title = 'morning message';
      $title2 = '1st GS Message';
      $title3 = 'Seminar';
      $title4 ='Evening Message';
    }
    else if($day==4){$title = 'Morning Message';
      $title2 = '1st GS Message';
      $title3 = 'Seminar';
      $title4 ='Evening Message';
          
    }
    $sql = $con->query("INSERT INTO retreats(day)");
    }
  }
  function EditTeachers($tId, $name, $district, $phone, $role, $grdistrict, $megagroup, $region, $password)
  {
    global $con;
    // $id = $_GET['id'];
    $sql = $con->query("UPDATE teachers SET name='$name', district='$district', phone='$phone', role='$role', grdistrict='$grdistrict', megagroup='$megagroup', region='$region', password='$password' WHERE id = '$tId'");
    if ($sql) {
      echo "teacher updated succesfully";
    }
    else{
      echo "teacher not updated";
    }
  }
  function editChild($cId, $surname, $firstname, $othername, $familyname, $sex, $birthdate, $address, $addressarea, $school, $class)
  {
    global $con;
    // $id = $_GET['id'];
    $sql = $con->query("UPDATE children SET surname='$surname', firstname='$firstname', othername='$othername', familyname='$familyname', sex='$sex', birthdate='$birthdate', address='$address', addressarea='$addressarea', school='$school', class='$class' WHERE id = '$cId'");
  }
}

$pro = new Children();
//$pro->programTitle();
