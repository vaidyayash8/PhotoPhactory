<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME',  'login1');
	
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysqli_select_db($conn,DBNAME);
	
	if ( !$conn ) 
	{
		die("Connection failed : " . mysqli_error($conn));
	}
	
	if ( !$dbcon ) 
	{
		die("Database Connection failed : " . mysqli_error($conn));
	}
if(isset($_POST['submit'])){



    $username=$_POST['username']; 

$password=($_POST['password']);


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$sql="SELECT * FROM loginform WHERE user='$username' and pass='$password'";
$result=mysqli_query($conn,$sql);
if (!$result) {
    header('Location: login.php'); 
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count>0) {
    header('Location: index.php'); 
} 
}
?>