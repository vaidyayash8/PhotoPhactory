<?php

    // this will avoid mysql_connect() deprecation error.
    error_reporting( ~E_DEPRECATED & ~E_NOTICE );
    // but I strongly suggest you to use PDO or MySQLi.
    
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME',  'photophactory');
    
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

//$cat=$_GET['category'];
$city1=$_GET['city'];    
$state1=$_GET['state'];


 ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Dec 2018 09:55:39 GMT -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/swiper.css" type="text/css" />
<link rel="stylesheet" href="css/dark.css" type="text/css" />
<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="css/responsive.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Canvas | The Multi-Purpose HTML5 Template</title>
</head>
<div id="wrapper" class="clearfix">
<?php
require "header.php";
?>

<div class="content">
<div class="container">

<?php                                                                 
                                                                  
                                                                    
                                                                      $val=0;
                                                                     $fetch=mysqli_query($conn,"SELECT * from profile WHERE city='$city1'")or die(mysqli_error());

                                                                      $lenght=mysqli_num_rows($fetch);
                                                                   if ($lenght!=0) {
                                                                while($row=mysqli_fetch_array($fetch)){
                                                                            
                                                                            $img =$row['image'];
                                                                            $fir=$row['zip'];
                                                                             $name=$row['name'];
                                                                            $city=$row['city'];
                                                                            $email=$row['email'];
                                                                            $address=$row['address'];
                                                                            $id=$row['id'];

                                                                        $val=2;
                                                                            
                                                                            echo  "
                                                                              
                                                                                <div class='col'>
                                                                                <article class='portfolio-item pf-media pf-icons' >
                                                                            <div class='card'>
                                                                            
                                                                            <img src='photo/material/images/profile/$img' height='280px'width='280px'>
                                                                        
                                                                            <div class='portfolio-overlay'>
                                                                            <a href='portfolio.php' class='left-icon' ><i class='icon-line-plus'></i></a>
                                                                            <a href='portfolio-single.html' class='right-icon'><i class='icon-line-ellipsis'></i></a>
                                                                            </div>
                                                                            </div>
                                                                            <div class='portfolio-desc'>
                                                                            <h5>NAME: $name</h5> 
                                                                            <h5>EMAIL: $email</h5>
                                                                            <h5>ADDRESS:$city</h5> 
                                                                            <a href='order.php' class='button button-3d button-black nomargin'>Book Now</a>
                                                                            </div>
                                                                            </article>
                                                                                </div>
                                                                                
                                                                            
                                                                            ";
                                                                        
                                                                        }
                                                                     }   
                                                                    if($val!=2){
                                                                         $fetch=mysqli_query($conn,"SELECT * from profile WHERE category ='$cat' AND state='$state1'")or die(mysqli_error());

                                                                      $lenght=mysqli_num_rows($fetch);
                                                                   if ($lenght!=0) {
                                                                while($row=mysqli_fetch_array($fetch)){
                                                                            $img =$row['image'];
                                                                            $fir=$row['zip'];
                                                                             $name=$row['name'];
                                                                            
                                                                            $email=$row['email'];
                                                                            $address=$row['address'];
                                                                            $id=$row['id'];
                             $val=2;
                                                                            
                                                                            echo  "

                                                                            <div class='row'>
                                                                                <div class='col-lg-3 col-md-6 bottommargin'>
                                                                                <div class='team'>
                                                                                <div class='team-image'>
                                                                                <img src='photo/material/images/profile/$img' alt='$name'>
                                                                                </div>
                                                                                <div class='team-desc team-desc-bg'>
                                                                                <div class='team-title'><h4>$name</h4></div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                            ";
                                                                            
                                                                        
                                                                        }
                                                                    }

                                                                }

                                                                    if($val!=2){
                                                                         $fetch=mysqli_query($conn,"SELECT * from profile WHERE category ='$cat'")or die(mysqli_error());

                                                                      $lenght=mysqli_num_rows($fetch);
                                                                   if ($lenght!=0) {
                                                                while($row=mysqli_fetch_array($fetch)){
                                                                            $img =$row['image'];
                                                                            $fir=$row['zip'];
                                                                             $first=$row['firstname'];
                                                                            $last=$row['lastname'];
                                                                            $email=$row['email'];
                                                                            $address=$row['address'];
                                                                            $val=2;
                                                                            
                                                                            echo  "

                                                                            <article class='portfolio-item pf-media pf-icons' >
                                                                            <div class='card'>
                                                                            
                                                                            <img src='images/$img' height='250px'width='280px'>
                                                                        
                                                                            <div class='portfolio-overlay'>
                                                                            <a href='images/portfolio/full/1.jpg' class='left-icon' data-lightbox='image'><i class='icon-line-plus'></i></a>
                                                                            <a href='portfolio-single.html' class='right-icon'><i class='icon-line-ellipsis'></i></a>
                                                                            </div>
                                                                            </div>
                                                                            <div class='portfolio-desc'>
                                                                            <h5>NAME: $first   $last</h5> 
                                                                            <h5>EMAIL: $email</h5>
                                                                            <h5>ADDRESS: address</h5> 

                                                                            </div>
                                                                            </article>
                                                                        
                                                                            ";
                                                                        
                                                                        }
                                                                    }
                                                                }








                                                                



                                                                        
                                                               

    ?>
<!-------------------------------------------------footer-------------------------------->

</div>
</div>

</div>
<div id="gotoTop" class="icon-angle-up"></div>

<?php
require "footer.php";
?>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<script src="js/functions.js"></script>
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Dec 2018 09:57:16 GMT -->
</html>
