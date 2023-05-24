<?php
session_start();
include("connection.php");
include("function.php");

if($_)

if (isset($_POST['update'])) {
 $id = $_POST['update'];
 upadateParent($id);
}
$id = $_GET['updateid'];
$sql = "SELECT from parent where id =$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <!-- Meta, title, CSS, favicons, etc. -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Gentelella Alela! | </title>

 <?php include("header.php"); ?>
</head>

<body class="nav-md">
 <div class="container body">
  <div class="main_container">
   <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
     <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
     </div>

     <div class="clearfix"></div>

     <?php include("nav.php"); ?>

     <!-- page content -->
     <div class="right_col" role="main">
      <div class="">
       <div class="page-title">
        <div class="title_left">
         <h3>Form Elements</h3>
        </div>

        <div class="title_right">
         <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
           <input type="text" class="form-control" placeholder="Search for...">
           <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
           </span>
          </div>
         </div>
        </div>
       </div>
       <div class="clearfix"></div>
       <div class="row">
        <div class="col-md-12 col-sm-12 ">
         <div class="x_panel">
          <div class="x_title">
           <h2>Student <small>Register Student</small></h2>
           <div class="clearfix"></div>
          </div>
          <div class="x_content">



           <br />
           <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            <div class="item form-group">
             <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Registration Number</label>
             <div class="col-md-6 col-sm-6 ">
              <input id="middle-name" class="form-control" type="text" name="regno" autocomplete="off">
             </div>
            </div>
            <div class="item form-group">
             <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Surname <span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 ">
              <input type="text" id="first-name" name="surname" required="required" class="form-control " autocomplete="off">
             </div>
            </div>
            <div class="item form-group">
             <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Other Names <span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name" name="othernames" required="required" class="form-control" autocomplete="off">
             </div>
            </div>

            <div class="item form-group">
             <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 ">
              <input type="email" id="last-name" name="email" required="required" class="form-control" autocomplete="off">
             </div>
            </div>
            <div class="item form-group">
             <label class="col-form-label col-md-3 col-sm-3 label-align">Sex<span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 ">
              <select class="form-control" name="sex">
               <option>Gender</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
              </select>
             </div>
            </div>
            <div class="item form-group">
             <label class="col-form-label col-md-3 col-sm-3 label-align">Phone <span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 ">
              <input id="birthday" class="date-picker form-control" name="phone" placeholder="phone" type="text" required="required" type="tel" autocomplete="off">

             </div>
            </div>
            <div class="ln_solid"></div>
            <div class="item form-group">
             <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" name="update" class="btn btn-success">Update</button>
             </div>
            </div>

           </form>