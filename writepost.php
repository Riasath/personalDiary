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
        <h1 class="text-center"> Personal Diary</h1>
      </span>
    </div>
    <hr>
  <form method="post" action="writepostcheck.php">
     <div class="container">
     <div class="well bs">
       <div class="row">
       <div class="col-md-offset-3 col-md-3">
        <h4 class="text-center">Select Date:</h4>
        <input class="form-control" type="date" name="date">
      
       </div>
  
         <div class="col-lg-offset-3 col-lg-8">
         <h4 class="text-center">What's on your mind?</h4>
            <textarea class="form-control" type="text" rows="12" name="textarea"></textarea>
         </div>
       </div>
       <br>
       <div class="row">
         <div class="col-lg-offset-10 col-lg-2">

      <input class="btn btn-success" type="submit" value="Post">
         </div>
       </div>
     </div>
   </div>
  </form>
   <hr>
   <div class="container">
     <div class="row">
       <div class="col-md-offset-3 col-md-6">
         <nav aria-label="...">
              <ul class="pager">
                <li><a href="post.php">Previous</a></li>
                <li><a href="index.html">home</a></li>
              </ul>
            </nav>
       </div>
     </div>
   </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>