<?php 
if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

if ($username=='ranga' && $password='pass') {
	echo "login succesful";
}else{
	echo "inavalid username or password";
}	

}?>

<!DOCTYPE html>
<html>
<head>
	<title>post method</title>
</head>
<body>
<form action="post.php" method="post"><br>
username:<input type="text" name="username" id=""><br>
password:<input type="password" name="password" id=""><br>
<input type="submit" value="log in" name="submit">
</form>


</body>
</html>