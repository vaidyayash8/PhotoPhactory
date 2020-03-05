<?php

 $connection=mysql_connect('localhost','root','');
if(!$connection)
{
    die("server connection error".mysql_error());
}
$dbconnect=mysql_select_db('photophactory');
if(!$dbconnect)
{
    die("db connection error".mysql_error());
}
else
{
    echo "db connected";
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    // $email=$_POST['email'];
    // $phoneno=$_POST['phone'];
    // $subject=$_POST['subject'];
    // $services=$_POST['service'];
    // $message=$_POST['mess'];

    // $test="SELECT * FROM contact";
 //    $result=mysqli_query($conn,$test);

    $sqlquery="INSERT INTO 'profile' ('firstname') VALUES ('$name')";
    mysqli_query($connection,$sqlquery);
}



?>
<html>
<body>
    <form action="" method="POST">
<input type="text" name="name">
<input type="submit" value="submit">
    </form>
</body>
</html>