
<?php
$uname=$_POST['name'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","");
if (!$con) {
	die("Could not connect");	# code...
}
mysqli_select_db($con,"tindog");
if($uname=='' || $pass=='')
{
	    echo '<script language="javascript">';
			echo 'alert("username or password is wrong")';
			echo '</script>';
      include 'login.html';
}
$qry=mysqli_query($con,"SELECT * FROM users WHERE user_name='$uname'");
if(!$qry)
{
die("Query Failed: ". mysqli_error());
}
else
{
   $row=mysqli_fetch_array($qry);
if($uname==$row['user_name'])
{
    if($uname==$row['user_name'] && $pass==$row['password'])
    {
            include 'selection.html';
    }
    else
    {
          include 'login.html';
    }
}
else{
	echo '<script language="javascript">';
	echo 'alert("username or password is wrong")';
	echo '</script>';
	include 'login.html';
}
}
  mysqli_close($con);
  ?>
