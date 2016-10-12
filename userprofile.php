<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>personal diary</title>
    <link rel="icon" type="img/png" href="img/title.png">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

  </head>
  <body>
  <div class="container">
    <h1 class="text-center">
      Users Who Use <br><span class="animated infinite hinge">Personal Diary</span>
    </h1>
    
  </div>
  <hr>
  <hr>

    <?php

  
    $db=mysqli_connect('localhost','root','','personaldiary');
    $sql='SELECT *FROM registration ';
    $result=mysqli_query($db,$sql);
    foreach ($result as $row) {
    printf('<div class="container">
      <div class="row">
        
          <div class="col-sm-offset-2 col-sm-8">
         <h4 class="text-center"> Name: %s</h4>
         <h5 class="text-center">Email: %s</h5>
           <h5 class="text-center">contact: %s</h5>
        </div>     
      </div>

    </div>',
    htmlspecialchars($row['name']),
    htmlspecialchars($row['email']),
    htmlspecialchars($row['contact'])

    );

  }
  mysqli_close($db);
  ?>
  <div class="container">
     <div class="row">
       <div class="col-md-offset-3 col-md-6">
         <nav aria-label="...">
              <ul class="pager">
                
                <li><a href="index.php">Home</a></li>
              </ul>
            </nav>
       </div>
     </div>
   </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <hr>
    <hr>
  </body>
</html>