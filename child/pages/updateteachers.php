<?php
include("control.php");
// session_start();
// if($_SESSION['logged_in'] == true && $_SESSION['role'] == 0){
// }else{
//     header("Location: register.php");
// }

if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $i = 1;
 $sql = $con->query("SELECT * FROM teachers WHERE id = '$id' ");
}

?>

<div class="modal fade" id="editStaffModal">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <p class="modal-title text-bold">Edit Children Teachers: <span id="myname"></span> </p>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <form method="POST" class="row">

     <div class="col-md-6 form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control name" placeholder="Enter Name" id="namex" class="name" required>
     </div>


     <div class="col-md-6 form-group">
      <label>District</label>
      <input type="text" name="district" class="form-control district" placeholder="Alaba" id="district" required>
     </div>
     <div class="col-md-6 form-group">
      <label>Phone</label>
      <input type="text" name="phone" class="form-control phone" placeholder="09000000000" id="phone" required>
     </div>
     <div class="col-md-6 form-group">
      <label>Role</label>
      <select name="rolex" class="form-control role select2bs4" style="width: 100%;" id="rolex">
       <option selected disabled>Select Role</option>
       <option value="8">Group Cordinator</option>
       <option value="9">District Coordinator</option>
       <option value="7">Teacher</option>
      </select>
     </div>
     <div class="col-md-6 form-group">
      <label>Group</label>

      <input name="group" class="form-control grdistrict" placeholder="Futa" id="grdistrictx" required>

     </div>
     <div class="col-md-6 form-group">
      <label>Region</label>

      <input name="region" class="form-control region" placeholder="Akure" id="regionx" required>

     </div>
     <div class="col-md-6 form-group">
      <label>Password</label>

      <input name="password" class="form-control password" placeholder="password" id="passwordx" required>

     </div>



     <div class="col-12 form-group">
      <button type="button" class="btn btn-secondary float-right addStaff " name="editteacher" onclick="editTeachers()">Edit Teacher</button>
     </div>
    </form>
    <span id="output"></span>
   </div>


  </div>
 </div>
</div>
<script>
 function editTeachers() {

  var name = document.getElementsByName("name")[0].value;

  var district = document.getElementsByName("district")[0].value;
  alert(district);
  var grdistrict = document.getElementsByName("grdistrict")[0].value;

  var phone = document.getElementsByName("phone").value;
  var role = document.getElementsByName("rolex").value;

  var password = document.getElementsByName("password").value;
  var region = document.getElementsByName("region").value;

  var p = localStorage.getItem('tId');
  $.ajax({
   type: 'get',
   url: 'myclass.php?id=' + p + '&name=' + name + '&district=' + district + '&grdistrict=' + grdistrict + '&phone=' + phone + '&role=' + role + '&region=' + region + '&password=' + password + '&type=editteacher'
  }).done(function(data) {
   alert(data)
  })
 }


 function teachersDetails(v) {
  localStorage.setItem('tId', v);
  //alert(t);
  $.ajax({
   type: 'get',
   url: 'myclass.php?id=' + t + '&type=teacherdetail'
  }).done(function(data) {
   // alert(data);


   var teacherdetail = JSON.parse(data);
   //alert(teacherdetail.region);
   $("#myname").html(teacherdetail.name);
   $("#namex").val(teacherdetail.name);
   $("#districtx").val(teacherdetail.district);
   $("#grdistrictx").val(teacherdetail.grdistrict);
   $("#phonex").val(teacherdetail.phone);
   $("#rolex").val(teacherdetail.role);


   $("#regionx").val(teacherdetail.region);
   $("#passwordx").val(teacherdetail.password);

   $('#editStaffModal').modal('show');
   // console.log(teacherdetail.name);
   // console.log(teacherdetail.district);

  })

 }
 teachersDetails();
</script>