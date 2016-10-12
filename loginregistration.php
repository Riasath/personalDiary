<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Personal diary</title>
   <link rel="icon" type="img/png" href="img/title.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

   
  </head>
  <body>
    <div class="Container animated shake">
      <span>
        <h1 class="text-center"> Personal Diary</h1>
      </span>
    </div>
   <div class="container">
    <div class="well">
       <div class="row">
      <div class="col-md-6">
       <div class="row">
          <div class="col-md-offset-2 col-md-6">
            <h1 class="text-center">Login</h1>
            <hr>
            <br>
          </div>
        </div>

        <form class="form-horizontal "  method="post" action="logincheck.php">
        
          <fieldset>
            <div class="form-group ">
              <label for="inputEmail" class="col-lg-2 control-label">Name</label>
              <div class="col-lg-6">
                <input type="name" name="name" class="form-control" id="inputEmail" placeholder="name">                
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword"  class="col-lg-2 control-label">Password</label>
              <div class="col-lg-6">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-6 col-lg-offset-2">
              <input class="btn bz btn-default" type="submit" value="login">
               
              </div>
              <?php
                if(!empty($_SESSION["error"]))
                    {
                        echo $_SESSION["error"];
                        session_unset();
                        session_destroy();
                    }
                ?>   
            </div>
          </fieldset>
</form>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-offset-2 col-md-6">
            <h1 class="text-center">Registration</h1>
            <hr>
            <br>
          </div>
        </div>
        <form class="form-horizontal "  method="post" action="registrationcheck.php">
          <fieldset>
            <div class="form-group">
              <label class="col-lg-2 control-label">Name</label>
              <div class="col-lg-6">
                <input type="name" name="name" class="form-control" id="inputEmail" placeholder="name">
              </div>
            </div>
            <div class="form-group">
              <label  class="col-lg-2 control-label">Email*</label>
              <div class="col-lg-6">
                <input type="email" name="email"  class="form-control" id="inputPassword" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Contact</label>
              <div class="col-lg-6">
                <input type="Number" name="contact" class="form-control" id="inputPassword" placeholder="mobile Number">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Password*</label>
              <div class="col-lg-6">
                <input type="password" name="password" class="form-control" placeholder="password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-6 col-lg-offset-2">
                <input class="btn bz btn-default" type="submit" value="signup">
              </div>
            </div>
          </fieldset>
</form>
      </div>
    </div>
     </div>
    </div>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-md-offset-2 col-md-6">
         <nav aria-label="...">
                <ul class="pager">
                  
                  <li><a href="index.php">Homepage</a></li>
                </ul>
              </nav>
       </div>
     </div>
   </div>

   <footer class="container ikhlas">
     <blockquote>
  

        <h5>This site Designend And Developed By <em>Ikhlas Rahman</em></h5>
            <footer> Supervised By Md Riasath Arif Prodhan.</footer>
</blockquote>
   </footer>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>