<?php
session_start();
if (isset($_SESSION['login']))
{
  header("location:blank-page.php");
}
else
{

}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <?php include"head.php"; ?>
    <script src="jquery-3.3.1.min.js"></script>
    <script>

    $(document).ready(function()
    {
    $("#login").click(function()
    {

      var mail=$.trim($("#mail").val());
      var password=$.trim($("#password").val());
      if(mail.length<5)
      {
        $("#nameerror").css("fontSize","13px");
        $("#nameerror").html("<span class='text-danger'> Invalid Name </span>");
        return false;
      }
      else
      {
            $("#nameerror").html("");
      }
      if(password.length<6)
      {
        $("#passerror").css("fontSize","13px");
        $("#passerror").html("<span class='text-danger'> Invalid Name </span>");
        return false;
      }
      else
      {
            $("#passerror").html("");
      }
      var myurl="register-data.php";
      var mymethod="post";
      var mydata="mail="+mail+"&password="+password+"&login=yes";
      $.ajax({
      url:myurl,
      method:mymethod,
      data:mydata,
      success:function(result)
      {
      if(result==1)
      {
      window.location='blank-page.php';
      }
      else
      {

        $("#loginerror").css("fontSize","13px");
        $("#loginerror").html("<span class='text-danger'> "+result+"</span>");
      }
      //alert(result);
      //$("#email").val("");
      //$("#password").val("");
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
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="mail" name="mail" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="nameerror"></div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="passerror"></div>
                <div id="loginerror"></div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" id="login" name="login">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                  <a href="forget.php" class="text-small forgot-password text-black">Forgot Password</a>
                </div>

                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="index.php" class="text-black text-small">Create new account</a>
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
