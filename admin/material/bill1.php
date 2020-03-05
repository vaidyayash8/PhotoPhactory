<?php

require 'db.php';

$status=$_GET['gid'];
echo $status;
$sql="UPDATE booking SET status='1' WHERE id=$status";
$result=mysqli_query($conn,$sql);








 header('Location:vendorlist.php');













?>