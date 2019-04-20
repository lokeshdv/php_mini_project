<?php
session_start();
if(isset($_SESSION['login']))
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

  $("#reset").click(function()
  {
    alert("hello");
    var otp=$.trim($("#otp").val());
    var newpassword=$.trim($("#newpassword").val());
    var cpassword=$.trim($("#cnewpassword").val());




  if(otp.length!=32)
  {
  alert("invalid otp");
  return false;
  }


  if(newpassword.length<6)
  {
  alert("invalid password");
  return false;
  }


  if(newpassword!=cpassword)
  {
  alert("password and confirm password not same");
  return false;
  }




    var myurl="register-data.php";
    var mymethod="post";
    var mydata="newpassword="+newpassword+"&otp="+otp+"&cnewpassword="+cpassword+"&reset=yes";


    $.ajax({
      url:myurl,
      method:mymethod,
      data:mydata,
      success:function(result)
      {
        if (result==1)
        {
        alert("Password reset successfully");
        }
        else
        {
        alert(result);
        }
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
                  <label class="label">Otp</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Otp">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    <div class="form-group">
                  </div>
                </div>
                  <label class="label">New Pasword</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Conform password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="cnewpassword" name="cnewpassword" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">

                  <button class="btn btn-primary submit-btn btn-block" id="reset" type="submit" name="reset">Reset Password</button>

                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">

                  </div>

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
