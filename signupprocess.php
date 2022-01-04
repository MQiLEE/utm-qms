<?php

//Connect to DB
include ('dbconnect.php');

//Retrieve data from form

$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
$password2= $_POST['password2'];
$data = $_POST;

  
$duplicate=mysqli_query($con,"SELECT * from tb_user where u_username='$username' or u_email='$email'");

if (mysqli_num_rows($duplicate)>0)
{

header('Location: signup.php');
    }else if($data['password'] != $data['password2'])

    {
	header('Location: signuperror.php');

    
}else{


//SQL INSERT (CREATE) Operation
$sql= "INSERT INTO tb_user (u_username , u_pwd, u_email, u_type) 
		VALUES('$username','$password','$email','2')";


//Execute SQL
mysqli_query($con,$sql);

//Close connection
mysqli_close($con);

//Redirect or successful notification
header('Location: signin.php');
}


?>