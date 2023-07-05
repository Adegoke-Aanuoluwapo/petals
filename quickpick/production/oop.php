<?php


class User{
  //Properties are attributes that belong to a class
  public $name;
  public $email;
  public $password;
}

//instatiate
$user1 = new User();
$user1->name = "Gbemiga";

echo $user1->name;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     javascsript
    </title>
    <style>
      .container{
        display: grid;
        background-color: aliceblue; 
       
        grid-template-areas: 'a  b ''d c';
        
      }
      .a{
        background-color: red;
        border-color: 1px solid grey;
        grid:a;
        
        border-top-left-radius: 100%;
         height:200px;
        width: 200px;
    
        padding-right: -25%;
        
      }
      .b{
        background-color: blue;
        border-color: 1px solid grey;
         border-top-right-radius: 100%;
        height:200px;
        width: 200px;
       
        grid: b;
      }
      .c{
        background-color: black;
        border-color: 1px solid grey;
        
         height:100px;
        width: 100px;
       
        grid: c;
        border-bottom-left-radius: 100%;
      }
      .d{
        background-color: purple;
        border-color: 1px solid grey;
       
         height:200px;
        width: 200px;
        grid:d;
        border-bottom-right-radius: 100%;
        
      }
    </style>
    </head>


    <body>
      <div class="container">
        <div class="a"></div>
         <div class="b"></div>
          <div class="c"></div>
           <div class="d"></div>
      </div>
      
    </body>

</html>
    