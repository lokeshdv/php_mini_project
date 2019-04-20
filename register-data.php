<?php
session_start();

if (isset($_REQUEST['Register']))
{
  $name=trim($_REQUEST['name']);
  $lname=trim($_REQUEST['lname']);
  $mobile=trim($_REQUEST['mobile']);
  $mail=trim($_REQUEST['mail']);
  $password=trim($_REQUEST['password']);
  $Cpassword=trim($_REQUEST['Cpassword']);


    $name_length=strlen($name);
      if ($name_length<2)
      {
        echo "invalid name";
        return;
      }


      $lname_length=strlen($lname);
      if ($lname_length<3)
      {
        echo "invalid name";
        return;
      }

      if (!(strlen($mobile)==10 and is_numeric($mobile) and $mobile[0]>5))
      {
        echo "invalid mobile no.";
        return;
      }

      if (!filter_var($mail,FILTER_VALIDATE_EMAIL))
      {
        echo "invalid email";
        return;
      }

      if (strlen($password)<6)
      {
        echo "invalid password";
        return;
      }

      if ($password!=$Cpassword)
      {
        echo "invalid password";
        return;
      }

      $query="insert into user_data(user_fname,user_lname,user_mobi,user_email,user_password) values ('$name','$lname','$mobile','$mail','$password')";

      define("server" ,"localhost",true);
      define("user", "root",true);
      define("password","",true);
      define("database","web",true);

      $cid=mysqli_connect(server,user,password,database) or die ("connection failed");
      $result=mysqli_query($cid,$query);
      $n=mysqli_affected_rows($cid);
      mysqli_close($cid);
      if($n==1)
      {
        echo "1";

      }
      else
      {
        echo "somthing went wrong";
      }
}

  if (isset($_REQUEST['login']))
{
  $mail=trim($_REQUEST['mail']);
  $password=trim($_REQUEST['password']);

  if (!filter_var($mail,FILTER_VALIDATE_EMAIL))
  {
  echo "INVALID EMAIL";
  return;
  }

    if (strlen($password)<6)
    {
      echo "invalid password";
      return;
    }

    $query="select * from user_data where user_email='$mail' and user_password='$password'";
    define("server","localhost",true);
    define("user","root",true);
    define("password","",true);
    define("database","web",true);
    $cid=mysqli_connect(server,user,password,database) or die("connection failed");
    $result=mysqli_query($cid,$query);
    $n=mysqli_num_rows($result);
    mysqli_close($cid);
    if ($n==1)
    {

      while ($row = mysqli_fetch_array($result)) {
        $user_id = $row['user_id'];
        $user_fname = $row['user_fname'];
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_fname'] = $user_fname;
        $_SESSION['login']="yes";
        echo "1";
      }
    }
    else

      {
        echo"invalid email or password";
      }
}

  if (isset($_REQUEST['changep']))
  {
    $oldpassword=trim($_REQUEST['oldpassword']);
    $newpassword=trim($_REQUEST['newpassword']);
    $cpassword=trim($_REQUEST['newpassword']);

    if (strlen($oldpassword)<6)
    {
      echo"invalid password";
      return;
    }

    if (strlen($newpassword)<6)
    {
      echo"invalid password";
      return;
    }

    if ($newpassword!=$cpassword)
    {
      echo"invalid password";
      return;
    }

    $user_id=$_SESSION['user_id'];
    $query="update user_data set user_password='$newpassword'where user_id='$user_id' and user_password='$oldpassword'";

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
    echo"Pasword Changed";
    }
    else
    {
    echo"invalid old password";
    }

}

if (isset($_REQUEST['forgetp']))
{

  $mail=trim($_REQUEST['mail']);

  if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
  {
  echo "invalid email";
  return;
  }
  $time=time();
  $otp=md5($time);

 $query="update user_data set user_otp='$otp' where user_email='$mail'";

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
  echo "$n";
  }
  else
  {
  echo "something wrong";

  }
}

  if(isset($_REQUEST['reset']))
  {

    $otp=trim($_REQUEST['otp']);
    $password=trim($_REQUEST['newpassword']);
    $Cpassword=trim($_REQUEST['cnewpassword']);
    if (strlen($otp)!=32)
    {
      echo "invalid otp";
      return;
    }
    if (strlen($password)<6)
    {
      echo "invalid password";
      return;
    }
    if ($password!=$Cpassword)
    {
      echo "both password not same";
      return;
    }

  $query="update user_data set user_otp='',user_password='$password' where user_otp='$otp'";

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
      echo $n;
    }
    else {
      echo "Something Wrong";
    }

  }


  if(isset($_REQUEST['update']))
  {
  $name=trim($_REQUEST['name']);
  $lname=trim($_REQUEST['lname']);
  $mobile=trim($_REQUEST['mobile']);
  $result=true;


  if(strlen($name)<2)
  {
  echo "invalid name <br/>";
  $result=false;
  }

  if(strlen($lname)<3)
  {
  echo "invalid last name </br>";
  $result=false;
  }

  if (!(strlen($mobile)==10 and is_numeric($mobile) and $mobile[0]>5))
  {
    echo "invalid mobile no.";
    return;
  }

  if($result)
  {
  $userid=$_SESSION['user_id'];
  $query="update user_data set user_fname='$name', user_lname='$lname', user_mobi='$mobile' where user_id='$userid'";

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
  $_SESSION['user_fname']=$name;
  $_SESSION['user_lname']=$lname;
  $_SESSION['user_mobi']=$mobile;
  echo "Profile Updated";
  }

  else

  {
  echo "Old Data Is Same As New";
  }



}
}

?>
