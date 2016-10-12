 <?php
        session_start();
        if(empty($_SESSION["IdValidation"]))
        {
             header('Location: '.'loginregistration.php');
        }
        ?>

<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="personaldiary"; 
$tbl_name="writepostcheck"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = new mysqli($host, $username, $password, $db_name);

$date=$_POST['date']; 
$textarea=$_POST['textarea']; 
$userid = $_SESSION["IdValidation"];



$sql = "INSERT INTO writepostcheck (date, textarea, userid)
VALUES ('$date','$textarea','$userid')";

if ($conn->query($sql) === TRUE) {
    echo "New post publish successfully";
	?>
	
	 <br><a href="oldpost.php">preview post</a>
	 
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









?>