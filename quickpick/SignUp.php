<?php
include "connect.php";
include "functions.php";

if(isset($_POST["AddUsers"])){
	global $con;
addUsers();
}




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

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
     

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
              <h1>Create Account</h1>
              <div>
               
                <input type="text" class="form-control" placeholder="Enter your name" required="" name="name" />
              </div>

              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email" />
              </div>

              <div>
                <input type="tel" class="form-control" placeholder="Phone number" required="" name="phone" />
              </div>
              <br>

              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  name="password"/>
              </div>
              <div>
                <button type="submit" name="AddUsers" class="btn btn-success" >Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="signin.php" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

               
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>