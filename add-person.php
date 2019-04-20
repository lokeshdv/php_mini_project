<?php

session_start();
if (isset($_SESSION['login']))
{

}
else
{
  header("location:login.php");
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

    $("#addper").click(function()
    {
    var name=$.trim($("#name").val());
    var city=$.trim($("#city").val());
    var address=$.trim($("#address").val());

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
    alert("invalid Address");
    return false;
    }





    var myurl="person-data.php";
    var mymethod="post";
    var mydata="name="+name+"&city="+city+"&address="+address+"&addper=yes";


    $.ajax({
    url:myurl,
    method:mymethod,
    data:mydata,
    success:function(result)
    {
    alert(result);

    $("#name").val("");
    $("#city").val("");
    $("#address").val("");
    window.location="show-person.php";
    }
    });





    });



    });

    </script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text"></span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="change-p.php">
                Change Password
              </a>
              <a class="dropdown-item" href="logout.php">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
    <?php include "sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container-scroller">


                <div class="row w-100">
                  <div class="col-lg-6 mx-auto">
                    <div class="auto-form-wrapper">

                        <div class="form-group" class="text-center"></br></br></br></br></br>

                          <label class="label">Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
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
                          <button class="btn btn-primary submit-btn btn-block" id="addper" name="addper">Add</button>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                          <div class="form-check form-check-flat mt-0">
                        </div>
                          </div>


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
