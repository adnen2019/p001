<?php session_start() ;
if(empty($_SESSION['nom'])){echo "<script>window.open('index.php#login','_self')</script>";}  ?>
<?php
 // Create connection
//$bdd= new PDO('mysql:host=sql210.hebergratuit.net;dbname=heber_24275120_mydb','heber_24275120','adnen1997',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
 $bdd= new PDO('mysql:host=localhost;dbname=mydb','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
 // Check connection
 //if ($bdd->connect_error) {
   // die("Connection failed: " . $bdd->connect_error);  }

        
?>
<!DOCTYPE html>
<html>
 <head>
     <title>contact</title>
     <link rel="icon" type="image/png" href="bs.ico" /> 

<!--<link rel="icon" type="image/png" href="images/favicon.png" />  -->

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
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
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
     
      
    <li class="cur nav-item dropdown active">
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

             <div class="row">
       <?php
        
         if (isset($_POST['send']))
          {
           if( empty($_POST["nom"])|| empty($_POST["email"])|| empty($_POST["msg"])){ 
             echo "<script>alert('ERREUR : tous les champs n ont pas ete renseignes');</script>";
             }
           
              else 
                {        $requete = $bdd->prepare('INSERT INTO contact(nom,email,opt,msg) VALUES(?,?,?,?)') ;
            $requete->execute(array($_POST['nom'],$_POST['email'],$_POST["opt"],$_POST['msg'])) ;
             echo "<script>alert('votre message a éte envoyée avec succee');</script>";
           }
             
         }   
        ?>

   </div>     
<div class="row">
    <div class="col-lg-2 col-md-1 "></div>
 <div class="col-lg-8 col-md-10 col-sm-12">
    
<!-- Default form contact -->
<form class="text-center border border-light p-5" method="POST">

    <p class="h4 mb-4">Contact us</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="nom">

    <!-- Email -->
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Subject -->
    <label>Subject</label>
    <select class="browser-default custom-select mb-4" name="opt">
        <option value="" disabled>Choose option</option>
        <option value="Feedback" selected>Feedback</option>
        <option value="Report a bug">Report a bug</option>
        <option value="Feature request">Feature request</option>
        
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="msg" ></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="button" name="send"
    id="send" onclick="msgVerif()">Send</button>

</form>
<!-- Default form contact -->
</div>
<div class="col-lg-2 col-md-1 "></div>
 </div>




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
        
        nom=document.getElementById("defaultContactFormName") ;  
        email=document.getElementById("defaultContactFormEmail") ;
        msg=document.getElementById("exampleFormControlTextarea2") ; 
        send=document.getElementById("send") ;  

         function msgVerif(){
          if(nom.value==""){ 
                send.type="button" ;
                nom.focus() ;}
           else if(email.value==""){ 
                send.type="button" ;
                email.focus() ;
            }
               else if (msg.value==""){ 
                send.type="button" ;
                msg.focus() ;    }
                else{send.type="submit" ;}}
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
