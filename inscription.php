
<!DOCTYPE html>
<html>
 <head>
     <title>sign up</title>
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
 <body onload="First()">
     <div class="fluid-container">
         <header class="row">
             <?php require 'header.php' ; ?>    
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
 // Create connection
//$bdd= new PDO('mysql:host=sql210.hebergratuit.net;dbname=heber_24275120_mydb','heber_24275120','adnen1997',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
 $bdd= new PDO('mysql:host=localhost;dbname=mydb','root','') ;
 // Check connection
 //if ($bdd->connect_error) {
   // die("Connection failed: " . $bdd->connect_error);  }   
        // if (isset($_POST['signup']))
          if(isset($_POST["signup"])){$numrow=0;
           if( empty($_POST["nom"])|| empty($_POST["prenom"])|| empty($_POST["email"])|| empty($_POST["mdp"])){ 
             echo "<script>alert('ERREUR : tous les champs obligatoires n ont pas ete renseignes');</script>";
             }
             else if(empty($_POST["tel"]))
                { $reponse= $bdd->prepare('SELECT * FROM logins  where email=?  ') ;
                     $reponse->execute(array($_POST['email'])) ;
                   // $donnees=$reponse->fetch() ;
                      while($donnees=$reponse->fetch())
                 {$numrow+=1;
                  echo "<script>alert('ERREUR :email déja utilisée');</script>";}
                     if($numrow==0){       $requete = $bdd->prepare('INSERT INTO logins(nom,prenom,email,mdp) VALUES(?,?,?,?)') ;
            $requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'])) ;
        echo 'votre compte a éte crée avec succee' ;}
             }
              else 
                { $reponse= $bdd->prepare('SELECT * FROM logins  where email=?  ') ;
                     $reponse->execute(array($_POST['email'])) ;
                   // $donnees=$reponse->fetch() ;
                      while($donnees=$reponse->fetch())
                 {$numrow+=1;
                  echo "<script>alert('ERREUR :email déja utilisée');</script>";}
                     if($numrow==0){       $requete = $bdd->prepare('INSERT INTO logins(nom,prenom,email,mdp,tel) VALUES(?,?,?,?,?)') ;
            $requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'])) ;
            echo "<script>window.open('index.php#login','_self')</script>" ;
            echo "<script>alert('votre compte a été crée avec succée');</script>";}
             }
         } 
        ?>

  

   </div>     

<div id="inscri" class="row inscription">
 <div class="col-lg-2 col-md-1 "></div>
 <div class="col-lg-8 col-md-10 col-sm-12">
 <!-- Default form register -->
 <form  class="text-center border border-light p-5" method="POST">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col-sm-12 col-md-6 mb-4">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="nom">
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="prenom">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="mdp">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters 
    </small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="tel">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>
    <div id="alerte"></div>
    <!-- Sign up button -->
        
    <button id="signup" onclick="formVerif()"  class="btn btn-info my-4 btn-block" type="button" name="signup">Sign up</button>

    <!-- Social register -->
   

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>
 </p>
  </form>
 <!-- Default form register -->
 </div>
 <div class="col-lg-2 col-md-1 "></div></div>







</div>
            <div class="row">  
             <div class="py-5 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img class="image" src="e/e.jpg"title="" />
             </div>
            </div>
           <div class="row abc"> e-learning site</div>
         <footer id="foo" class="row">
             <div class="col-lg-12">
             <?php require 'footer.php' ; ?>
             </div>      
         </footer>
     </div>
     <script type="text/javascript">
        first_name=document.getElementById("defaultRegisterFormFirstName") ;
        last_name=document.getElementById("defaultRegisterFormLastName") ;
        email=document.getElementById("defaultRegisterFormEmail") ;
        mdp=document.getElementById("defaultRegisterFormPassword") ;
        signup=document.getElementById("signup") ;  
         alerte=document.getElementById("alerte") ;
        function formVerif(){
            if(first_name.value==""){ 
                signup.type="button" ;
                first_name.focus() ;
            }
               else if (last_name.value==""){ 
                signup.type="button" ;
                last_name.focus() ;                
               }
               else if (email.value==""){
                signup.type="button" ;
                email.focus() ;              
               }
                  else if     (mdp.value==""){
                signup.type="button" ;
                mdp.focus() ;
                
               }
               else if     (mdp.value.length<8){
                signup.type="button" ;
                mdp.focus() ;
                alert("At least 8 characters");
               }
                else {signup.type="submit" ;
                
                }
        }
        // When the user clicks on the password field, show the message box
function First() { first_name.focus() ;
}

//mdp.onfocus = function() { document.getElementById("message").style.display = "block";}

// When the user clicks outside of the password field, hide the message box
/*mdp.onblur = function() {
  document.getElementById("message").style.display = "none";
}
// When the user starts to type something inside the password field
mdp.onkeyup = function() { 
// Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}*/

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
<?php //$bdd->close(); ?>