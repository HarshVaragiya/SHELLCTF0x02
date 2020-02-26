<!DOCTYPE">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Meme Login</title>
</head>

<body bgcolor="#fff" style="text-align:center;">
<div style="padding-top:10px; font-size:15px;">

<h2>Meme Login</h2>

<form action="" name="form" method="post">
	<div style="margin-top:15px; height:30px;">Username :
	    <input type="text"  name="username" value=""/>
	</div>
	<br>
	<div> Password  :
		<input type="password" name="password" value=""/>
	</div></br>
	<div style=" margin-top:9px;margin-left:90px;">
		<input type="submit" name="submit" value="Submit" />
	</div>
</form>

</div>
<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font size="3" color="#000">

<?php
//including the Mysql connect parameters.
include("connect.php");


echo 5;
// take the variables
if(isset($_POST['username']) && isset($_POST['password']))
{

	$uname1=$_POST['username'];
	$passwd1=$_POST['password'];
	$fp=fopen('result.txt','a');
	fwrite($fp,'User Name:'.$uname1);
	fwrite($fp,'Password:'.$passwd1."\n");
	fclose($fp);
	echo 5;
	$uname = mysqli_real_escape_string($con,$uname1);
	$passwd= mysqli_real_escape_string($con,$passwd1);
	// mysqli_query($con,"SET NAMES gbk");
	// echo 5;
	@$sql="SELECT username, password FROM users WHERE username='$uname' and password='$passwd' LIMIT 0,1";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($con,$result);
	if($row)
	{
  		echo "<br>";
		echo '<font color= "#FFFF00" font size = 4>';
		echo '<font size="3" color="#0000ff">';
		echo "<br>";
		echo 'Your Login name:'. $row['username'];
		echo "<br>";
		echo 'Your Password:' .$row['password'];
		echo "<br>";
		echo "</font>";
		echo "<br>";
		echo "<br>";
		echo '<img src="https://i.kym-cdn.com/photos/images/newsfeed/000/096/044/trollface.jpg?1296494117"  />';

  		echo "</font>";
  	}
	else
	{
		echo '<img style="width:30%" src="';
		$a = rand(2,4);
		if($a == 2) echo "https://www.stayathomemum.com.au/wp-content/uploads/2017/12/Seriously.gif";
		elseif($a == 3) echo "https://media2.giphy.com/media/MfIGtdhq6Q9aM/source.gif";
		else echo "https://lh3.googleusercontent.com/proxy/8EcaBUoQ-CsK2SD1SMC0a5tWGVulvnio4bBHzDqH7hFLmMzFmxlhRomf48xFJ0-Sjn9ozW2eOHG2Sy0-0tKcVY-_qm31W1CdL42FCqXx5WzfFY5Gt-7zKtkq7UU";
		echo '" />';
	}
}else {
	// code...
	echo '<img  style="width:20%" src="https://i.kym-cdn.com/photos/images/newsfeed/000/096/044/trollface.jpg?1296494117"  />';
}
?>
</div>
</body>
</html>
