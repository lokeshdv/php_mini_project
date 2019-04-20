<?php
session_start();
if (isset($_SESSION['login']))
{

}
else
{
  header("location:login.php");
}
$userid = $_SESSION['user_id'];
$query="select * from user_data where user_id='$userid'";
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
    $name = $row['user_fname'];
    $lname = $row['user_lname'];
    $mobile = $row['user_mobi'];
  }
}
else

  {

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include"head.php";?>
  <script src="jquery-3.3.1.min.js"></script>
  <script>

  $(document).ready(function(){

    $("#update").click(function(){

     var name=$.trim($("#name").val());
     var lname=$.trim($("#lname").val());
     var mobile=$.trim($("#mobile").val());


     var result=true;


       if(name.length<2)
       {
         alert("invalid name");
         result=false;
     }


     if(lname.length<3)
     {
       alert("invalid last name");
       result=false;
     }

    if(mobile.length!=10)
    {
      alert("invalid mobile");
      result=false;
    }

    if(result)
    {
      var mydata="name="+name+"&lname="+lname+"&mobile="+mobile+"&update=yes";
      var myurl="register-data.php";
      var mymethod="post";

              $.ajax({
              method:mymethod,
              url:myurl,
              data:mydata,
              success:function(result)
              {
              alert(result);
              window.location="blank-page.php";
              }
              });




              }
              else
              {
              return false;

              }

                    return false;
                  });

                });


  </script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include"side-upper.php" ;?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
    <?php include"sidebar.php";?>
      <!-- partial -->

    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-5 mx-auto">

            <div class="auto-form-wrapper">
              <h2 style="text aligcentre:">Update Your Details</h2>

                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" value='<?php  echo $name ;?>'>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="lname" name="lname" value='<?php  echo $lname ;?>'>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    <label id="labelerror" name=></label>
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" id="mobile" name="mobile" value='<?php  echo $mobile ;?>' >
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block" id="update" name="update" >Update</button>
                </div>

                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php include"script-footer.php";?>
</body>

</html>
