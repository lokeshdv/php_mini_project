<!DOCTYPE html>
<html lang="en">

<head>
  <?php include"head.php";?>
  <script src="jquery-3.3.1.min.js"></script>
  <script>
    $(document).ready(function()
    {
    $("#Register").click(function()
    {

      var name=$.trim($("#name").val());
      var lname=$.trim($("#lname").val());
      var mobile=$.trim($("#mobile").val());
      var mail=$.trim($("#mail").val());
      var password=$.trim($("#password").val());
      var CPassword=$.trim($("#Cpassword").val());

      if (name.length<2)
      {
        $("#nameerror").css("fontSize","13px");
        $("#nameerror").html("<span class='text-danger'> Invalid Name </span>");
        return false;
      }
      else
      {
          $("#nameerror").html("");
      }

      if (lname.length<3)
      {
          $("#lnameerror").css("fontSize","13px");
          $("#lnameerror").html("<span class='text-danger'> Invalid Last Name </span>");
          return false;
      }
      else
      {
          $("#lnameerror").html("");
      }

      if (mobile.length!=10)
      {
        $("#mobierror").css("fontSize","13px");
        $("#mobierror").html("<span class='text-danger'>Invalid Mobile no. or it must be 10 digits </span>");
        return false;
      }
      else
      {
          $("#mobierror").html("");
      }

      if (mail.length<10)
      {
        $("#mailerror").css("fontSize","13px");
        $("#mailerror").html("<span class='text-danger'>Invalid Email </span>");
        return false;
      }
      else
      {
          $("#mailerror").html("");
      }
      if (password.length<8)
      {
        $("#passerror").css("fontSize","13px");
        $("#passerror").html("<span class='text-danger'>Password is too short min.8 </span>");
          return false ;
      }
      else
      {
          $("#passerror").html("");
      }

      if (password!=CPassword)
      {
        $("#cpasserror").css("fontSize","13px");
        $("#cpasserror").html("<span class='text-danger'>Password must be same </span>");
      return false;
      }
      else
      {
          $("#cpasserror").html("");
      }

      var myurl="register-data.php";
      var mymethod="post";
      var mydata="name="+name+"&lname="+lname+"&mail="+mail+"&mobile="+mobile+"&password="+password+"&Cpassword="+CPassword+"&Register=yes";

      $.ajax({
        url:myurl,
        method:mymethod,
        data:mydata,
        success:function(result)
        {
          if(result==1)
          {
            alert("Registeration Success");
            window.location='login.php';
          }
          else {


          alert(result);
          $("#name").val("");
          $("#lname").val("");
          $("#mail").val("");
          $("#password").val("");
          $("#Cpassword").val("");
          $("#mobile").val("");
          }
        }

      })


    });


    });




  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">

            <div class="auto-form-wrapper">
              <h2 style="text centre:">Register</h2>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="nameerror"> </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="lnameerror"> </div>
                <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No.">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div id="mobierror"> </div>
                  <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="Email">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="mdi mdi-check-circle-outline"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div id="mailerror"> </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="passerror"> </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" id="Cpassword" name="Cpassword" placeholder="Confirm Password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="cpasserror"> </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" id="Register" name="Register" >Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="login.php" class="text-black text-small">Login</a>
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
