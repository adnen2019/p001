<?php session_start() ;
if(empty($_SESSION['nom'])){echo "<script>window.open('index.php#login','_self')</script>";}  ?>
<!DOCTYPE html>
<html>
 <head>
     <title>site</title>
     <link rel="icon" type="image/png" href="bs.ico" /> 
     
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <meta name="keywords" content="Grade Responsive web template, Bootstrap Web Templates, Flat Web Templates,   Android Compatible web template, 
     Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <!-- Style-CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 
     <link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
     <link rel="stylesheet" type="text/css" href="site.css">
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
     <!-- //css files -->
    
     <!--web font-->
     <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
     <!--//web font-->
 </head>
 <body>
     <div class="fluid-container">
         <header class="row">
             

  <div class="container" >
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <img src="bs1.png"  style="height:35px;width: 35px;">
  <a id="navhead" class="active navbar-brand" style="color:rgb(52,204,255);">Boost-Skills</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="cur nav-item ">
        <a class="nav-link" href="connectee.php">Home
        </a>
      </li>
      <li class="cur nav-item">
        <a class="nav-link" href="online.php">online</a>
      </li>
      <li class="cur nav-item ">
        <a class="nav-link" href="tutorials.php">tutorials</a>
      </li>
      <li class="cur nav-item dropdown">
        <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">documents
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
         <a class="dropdown-item" href="course.php">  course</a>
          <a class="dropdown-item" href="exercises.php">exercises</a>
          <a class="dropdown-item" href="concours.php">Concours</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
     
      
    <li class="cur nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Settings
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#foo">Contact</a>
          <a class="dropdown-item" href="myaccount.php">My account</a>
          <a class="dropdown-item" href="#">Language</a>
          <a class="dropdown-item" href="#foo">About Us</a>
          <a class="dropdown-item" href="index.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<!--/.Navbar -->
    
         </header>
           <div class="row abc"> e-learning site</div>
             <div class="row">  
             <div class="py-5 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img class="image" src="e/e-learning.png"title="" />
             </div>
            </div>
           
         <div class="container">


<div class="row">course</div>




</div>
            <div class="row">  
             <div class="py-5 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img class="image" src="e/e.jpg"title="" />
             </div>
            </div>
           <div class="row abc"> e-learning site</div>
         <footer id="foo" class="row">
             <div class="col-lg-12">
             <?php require 'footerC.php' ; ?>
             </div>      
         </footer>
     </div>
     <script type="text/javascript">
           //Pour masquer la division :
         /*  document.getElementById("inscri").style.display ="none" ;
            ///Pour afficher la division :
         function register() {
             document.getElementById("inscri").style.display ="block"; 
             document.getElementById("login").style.display ="none"; 
             }
         function signin() {
             document.getElementById("inscri").style.display ="none"; 
             document.getElementById("login").style.display ="block"; 
             }*/
     </script>
     <script src="js/jquery-2.2.4.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
 </body>
</html>
