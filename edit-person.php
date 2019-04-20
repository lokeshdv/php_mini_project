<?php

session_start();
if (isset($_SESSION['login']))
{

}
else
{
  header("location:login.php");
}
$personid = $_REQUEST['personid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include"head.php";?>
    <script src="jquery-3.3.1.min.js"></script>
    <script>

    $(document).ready(function()
    {

    $("#edtper").click(function()
    {
      var name=$.trim($("#name").val());
      var city=$.trim($("#city").val());
      var address=$.trim($("#address").val());
      var personid=$.trim($("#personid").val());


    if(name.length<2)
    {
    alert("invalid name");
    return false;
    }
    if(city.length<3)
    {
    alert("invalid city");
    return false;
    }
    if(address.length<10)
    {
    alert("invalid address");
    return false;
    }


    var myurl="person-data.php";
    var mymethod="post";
    var mydata="name="+name+"&city="+city+"&personid="+personid+"&address="+address+"&edtper=yes";


    $.ajax({
    url:myurl,
    method:mymethod,
    data:mydata,
    success:function(result)
    {
    if (result==1)
    {
      $("#name").val("");
      $("#city").val("");
      $("#address").val("");
      alert("Person Updated Successfully");
      window.location='show-person.php';
    }
    else
    {
      alert(result);
    }

    }
    });
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
    <?php include "sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">


        <div class="content-wrapper">
          <h3>Modify Person Detail</h3>
          <div class="container-scroller">


                <div class="row w-100">
                  <div class="col-lg-6 mx-auto">
                    <div class="auto-form-wrapper">

                        <div class="form-group" class="text-center"></br></br></br></br></br>
                          <form action="person-data.php" method="post">
                          <label class="label">Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            <input type="hidden" class="form-control" id="personid" name="personid" value="<?php echo $personid?>">
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outlin"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="label">City</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="mdi mdi-city"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="label">Address</label>
                          <div class="input-group">
                            <textarea class="form-control" id="address" name="address" placeholder="Address"> </textarea>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="mdi mdi-address"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary submit-btn btn-block" id="edtper" name="edtper">Update</button>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                          <div class="form-check form-check-flat mt-0">
                        </div>
                          </div>
                        </form>

                        </div>


                    </div>

                  </div>
                </div>

              <!-- content-wrapper ends -->

            <!-- page-body-wrapper ends -->
          </div>

        </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  <?php include"script-footer.php";?>
</body>

</html>
