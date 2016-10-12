 <?php
        session_start();
        if(empty($_SESSION["IdValidation"]))
        {
             header('Location: '.'loginregistration.php');
        }
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>personal Diary</title>
    <link rel="icon" type="img/png" href="img/title.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    
  </head>
  <body>
   <div class="Container">
      <span>
        <h1 class="text-center animated infinite pulse"> Personal Diary</h1>
      </span>
    </div>
   <div class="container">
     <div class="well bs">
       <div class="row">
         <div class="col-md-6">
           <div class="row">
             <div class="col-md-offset-3 col-md-6 ">
               <a class="btn bt btn-default" href="writepost.php" role="button"><b>Write a new<br> POST</b></a>
             </div>
           </div>
         </div>
      
         <div class="col-md-6">
           
           <div class="row">
             <div class="col-md-offset-3 col-md-6 ">
               <a class="btn bt btn-default" href="oldpost.php" role="button"><b>See Old Post<br> POST</b></a>
             </div>
           </div>
        
         </div>
       </div>
     </div>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-md-offset-3 col-md-6">
         <nav aria-label="...">
              <ul class="pager">
                <li><a href="loginregistration.php">Previous</a></li>
                <li><a href="index.php">home</a></li>
              </ul>
            </nav>
       </div>
     </div>
   </div>
     <div class="container ikhlas">
     <blockquote>
  

        <h5>This site Designend And Developed By <em>Ikhlas Rahman</em></h5>
            <footer> Supervised By Md Riasath Arif Prodhan.</footer>
</blockquote>
   </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>