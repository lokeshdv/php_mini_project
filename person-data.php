<?php
session_start();

if (isset($_REQUEST["addper"]))
{
  $name=trim($_REQUEST["name"]);
  $city=trim($_REQUEST["city"]);
  $address=trim($_REQUEST["address"]);
  if (strlen($name)<2)
   {
    echo "invalid name";
    return false;
  }
  if (strlen($city)<3)
  {
    echo "invalid city";
    return false;
  }
  if (strlen($address)<10)
  {
    echo "invalid address";
    return false;
  }
  $userid=$_SESSION['user_id'];
  $query= "insert into person_data (name,city,address,user_id) values('$name','$city','$address','$userid')";

  define("server","localhost",true);
  define("user","root",true);
  define("password","",true);
  define("database","web",true);
  $cid=mysqli_connect(server,user,password,database) or die("connection failed");
  $result=mysqli_query($cid,$query);
  $n=mysqli_affected_rows($cid);
  mysqli_close($cid);
  if($n==1)
  {
  echo "person added";
  }
  else
  {
  echo "somthing wrong";
  }
  }


  if(isset($_REQUEST['edtper']))
  {
  $name=trim($_REQUEST['name']);
  $city=trim($_REQUEST['city']);
  $address=trim($_REQUEST['address']);


  $personid=trim($_REQUEST['personid']);

  if(strlen($name)<2)
  {
  echo"invalid name";
  return;
  }

  if(strlen($city)<3)
  {
  echo"invalid city";
  return;
  }

  if(strlen($address)<10)
  {
  echo"invalid address";
  return;
  }

  if(strlen($personid)<1)
  {
  echo"invalid personid";
  return;
  }
  define("server","localhost",true);
  define("user","root",true);
  define("password","",true);
  define("database","web",true);

  $userid=$_SESSION['user_id'];
  $cid=mysqli_connect(server,user,password,database) or die("connection failed");
  $query="update person_data set name='$name' ,city='$city', address='$address' where personid='$personid' and user_id='$userid'";

  $result=mysqli_query($cid,$query);
  $n=mysqli_affected_rows($cid);
  mysqli_close($cid);
    if($n==1)
  {
  echo 1;
  }
  else
  {
  echo "somthing wrong";
  }
}




 ?>
