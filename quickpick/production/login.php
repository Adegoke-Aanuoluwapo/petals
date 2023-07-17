<?php
session_start();
include "connect.php";
include "functions.php";

if(isset($_POST["AddUsers"])){
	global $con;
addUsers();
}
if(isset($_POST["login"])){
	global $con;
loginUser();
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

   <?php include("header.php")?>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                
                <div>
                <button type="submit" name="login" class="btn btn-success" >Log in</button>
                  <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              
             

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

              
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
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
                  <a href="#signin" class="to_register"> Log in </a>
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