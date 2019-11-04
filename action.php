<html>
	<body>
<?php
$user_name=$_POST['username'];
$password=$_POST['psw'];
$con=mysqli_connect("localhost","root","");
if (!$con) {
	die("Could not connect");
}
mysqli_select_db($con,"tindog");
mysqli_query($con,"insert into users values('$user_name','$password')");
mysqli_close($con);
include 'login.html';
 ?>
 </body>
 </html>
