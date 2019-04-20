
<?php
session_start();
if(isset($_SESSION['login']))
{


}
else
{
header("location:login.php");
}




if (isset($_REQUEST['delete']))
{




$personid=$_REQUEST['personid'];
$userid=$_SESSION['user_id'];

echo $query="delete from person_data where personid='$personid' and user_id='$userid'";
define("server","localhost",true);
define("user","root",true);
define("password","",true);
define("database","web",true);
$cid=mysqli_connect(server,user,password,database) or die('connection failed');
$result=mysqli_query($cid,$query);
$n=mysqli_affected_rows($cid);
mysqli_close($cid);
if($n==1)
{
  header("location:show-person.php");
}
else
{
echo "something went wrong";

}
}
?>
