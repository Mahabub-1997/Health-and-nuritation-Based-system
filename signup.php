<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>



<table style="width: 100%">
    <div style="border: 1px solid black;background-color: #7FFFD4 ">
      <p class="ex1" style="font-size: 20px"><b>Health and Nutration Dairy</b> </p>
    </div>





</table>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}
	p.ex1 {
   
  padding-left: 50px;
}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

    body {
  background: url(25.jpg);
}
     
	</style>




<br>
</br>
<br>
</br>
</br>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Your name.."><br><br>
			<input id="text" type="password" name="password" placeholder="Enter Password.."><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>

<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>


	<div class="w3-container w3-teal" style="border: 1px solid black;background-color: #9932CC ">
  <footer style="width:100%; text-align: center;">
    <p>&copy; 2021 Health And Nurtation Dairy</p>
    <a href=" "> 24 hours service</a>
  </footer>

</div>
</body>
</html>