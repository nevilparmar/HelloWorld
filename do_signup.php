<?php 
include 'connect.php';
?>


<?php 

if(isset($_POST["submit"]))
{
	$email=$_POST["txtemail"];
    $pass=$_POST["psw"];
     

$query=mysqli_query($con,"INSERT INTO register (email,pass) VALUES ('$email','$pass')");
	if($query){
		header("Location:index.html");
		
	}
	
	else
	{
		echo"fail query";
	}
	
}
?>