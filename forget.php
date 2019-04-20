<?php
session_start();
if(isset($_SESSION['forgetp']))
{

header("location:Blank-page.php");

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
    $(document).ready(function()
    {
    $('#forgetp').click(function()
    {
      var mail=$.trim($("#mail").val());
      if(mail.length<5)
      {
      alert("invalid email");
      return false;
      }


      var myurl="register-data.php";
      var mymethod="post";
      var mydata="mail="+mail+"&forgetp=yes";
      $.ajax({
      url:myurl,
      method:mymethod,
      data:mydata,
      success:function(result)
      {
      if(result==1)
      {
        alert("otp sent to your email and mobile");
        window.location='reset-p.php';
      }
      else {
      alert(result);
      }
      //alert(result);
      //$("#email").val("");


      }
      });
      });
    });
      </script>


</head>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">



                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="mail" name="mail" placeholder="Email">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" id="forgetp" type="submit" name="forgetp">Forgot Password</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <a href="register.php" class="text-small forgot-password text-black">Create New Account</a>
                  </div>
                  <a href="login.php" class="text-small forgot-password text-black">Login</a>
                </div>


            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Lokesh Mandges. All rights reserved.</p>
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
