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
  
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personaldiary";

 

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM writepostcheck";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    


     <table class="table table-hover">
          
             <tr>
              <th>Date</th>
                <th>Post</th> 
              
            </tr>
    <?php
    while($row = $result->fetch_assoc()) {
        ?>
        <tr class="warning">
        <td>
            <?php echo $row["date"]   ?>
            
        </td>
        <td>
            <?php echo $row["textarea"]   ?>    
        </td> 
        
            
        <td>
            <a href="delete.php?id= <?php echo $row["id"]   ?>">Delete now</a>
            
        </td>
      </tr>
</table>
        
    <?php
    }
} else {
    echo "No post is here";
}
$conn->close();
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