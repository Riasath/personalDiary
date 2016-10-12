
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
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="personaldiary"; 
$tbl="writepostcheck"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = new mysqli($host, $username, $password, $db_name);




$id=$_GET['id'];


// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl WHERE id='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
    
    ?>
    <div class="container">
        <h1 class="text-center"> Delete Your Previous post</h1>
    </div>
    <table class=""success"" >
        



            


<div class="container col-md-offset-5 col-md-4">
<?php     
echo "post deleted Successfully";
echo "<br>";
echo "<a href='oldpost.php'>Oldpost page</a>";

}

else {
echo "ERROR";
}
?> 
        
        
</div>

<?php
// close connection 
mysql_close();
?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <hr>
    <hr>
  </body>
</html>