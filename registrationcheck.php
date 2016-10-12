
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="personaldiary"; 
$tbl_name="registration"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = new mysqli($host, $username, $password, $db_name);

$name=$_POST['name']; 
$email=$_POST['email']; 
$contact=$_POST['contact']; 
$password=$_POST['password']; 



$sql = "INSERT INTO registration (name, email, contact,password)
VALUES ('$name','$email','$contact','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New User created successfully";
	?>
	
	 <br><a href="loginregistration.php">login Now</a>
	 
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>