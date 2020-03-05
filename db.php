
<?
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
?>