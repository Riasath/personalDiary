
<?php
session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="personaldiary"; 
$tbl_name="registration"; 


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$name=$_POST['name']; 
$password=$_POST['password']; 



$sql="SELECT * FROM $tbl_name WHERE name='$name' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count==1){

	$r = mysql_fetch_object($result);
    $a = $r->id;
    $_SESSION["IdValidation"] = $a;
    header('Location: '.'post.php');

;

}
else {
    $_SESSION["error"] = "Wrong Username or Password";
    header('Location: '.'loginregistration.php');
}
?>