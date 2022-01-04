<?php
session_start();

//Connect to DB
include ('dbconnect.php');

//Retrieve data from form
$fusername = $_POST['fusername'];
$fpwd = $_POST['fpwd'];

//Get user data based on login information (RETRIEVE) operation
$sql = "SELECT * FROM tb_user WHERE u_username='$fusername' AND u_pwd='$fpwd'";

//Execute SQL
$result= mysqli_query($con, $sql);  //Execute SQL statement
$row = mysqli_fetch_array($result); //Retrieve result 
$count = mysqli_num_rows($result);  //Count result found

//Check login
if($count == 1) //User foundhahaha
{
	//set session
	$_SESSION['u_username'] = session_id() ;
	$_SESSION['u_username'] = $fusername ;


	if($row['u_type'] == 1) //Admin
	{
		header ('Location: admin.php');
	}
	else if($row['u_type'] == 2)//Employee
	{
		header ('Location: employee.php');
	}
	else if($row['u_type'] == 3)//Customer
	{
		header ('Location: customer.php');
	}

}
else //User not found
{
	header ('Location: signinerror.php');
}

//Close connection
mysqli_close($con);


?>
