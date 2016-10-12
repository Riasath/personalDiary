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
      Personal Diaries
    </h1>
    <h1 class="text-center animated infinite swing">
     Old Post
     </h1>
  </div>
  <hr>
  <hr>

    <?php
	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="personaldiary"; 
	$tbl_name="registration";
	$conn = new mysqli($host, $username, $password, $db_name);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$userid = $_SESSION["IdValidation"];
    $sql="SELECT *FROM writepostcheck WHERE userid='$userid'";
	$result = $conn->query($sql);
    
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	?>
	
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<h4 class="text-center"> Posted Date:<br><?php echo $row['date'] ?></h4>
			<h5 class="text-center">Your post: <br><?php echo $row['textarea'] ?></h5>
        </div> 
	
	</div>
	<div class="container">
     <div class="row">
       <div class="col-md-offset-3 col-md-6">
         <nav aria-label="...">
              <ul class="pager">
                 <li><a href="delete.php?id= <?php echo $row["id"]   ?>">Delete post</a></li>
              </ul>
            </nav>
       </div>
     </div>
   </div>
	
	
	<?php
	}	
	}
	else
	{?>
		<div class="container">
			<div class="col-sm-offset-2 col-sm-8">
				<h1>This User Has No Data.</h1>
				
			</div> 
	
		</div>
		
	<?php 
	}
	
	
	
	
	
	
	
    
  
  ?>
  <div class="container">
     <div class="row">
       <div class="col-md-offset-3 col-md-6">
         <nav aria-label="...">
              <ul class="pager">
                <li><a href="writepost.php">Write a new post</a></li>
                <li><a href="post.php">Back to post page</a></li>
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