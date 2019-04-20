<?php
session_start();
if (isset($_SESSION['login']))
{

}
else
{
  header("location:login.php");
}

$userid=$_SESSION['user_id'];
$query= "select * from person_data where user_id='$userid'";

define("server","localhost",true);
define("user","root",true);
define("password","",true);
define("database","web",true);
$cid=mysqli_connect(server,user,password,database) or die("connection failed");
$result=mysqli_query($cid,$query);
$n=mysqli_num_rows($result);
mysqli_close($cid);


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include"head.php"; ?>
  <script src="jquery-3.3.1.min.js"></script>
  <script>
  $(document).ready(function()
  {
  $(".del").click(function(){

  var r=confirm("do you want tot delete person");
  if(r)
  {

  }
  else
  {
  return false;

  }});


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
            <div class="col-lg-10 grid-margin ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>


                  <div class="table-responsive">
<?php if($n>0){  ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                             Name
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            edit
                          </th>
                          <th>
                            Delete
                          </th>

                      </thead>
                      <tbody>
<?php $i=1; while($row=mysqli_fetch_array($result))
{
   ?>
                        <tr>
                          <td>
                            <?php echo "$i"; $i=$i+1; ?> .
                          </td>
                          <td>
                            <?php echo $row['name'] ?>
                          </td>
                          <td>
                            <?php echo $row['city'] ?>
                          </td>
                          <td>
                            <?php echo $row['address'] ?>
                          </td>
                          <td>
                            <div class="form-group col-lg-12 grid-margin">
                              <i class="menu-icon mdi mdi-pen"></i>
                              <a class="edt" href="edit-person.php?personid=<?php echo $row['personid'] ?>" class="btn btn-primary submit-btn btn-block" id="edit" name="edit">Edit Person </a>
                            </div>
                          </td>
                          <td>
                            <div class="form-group col-lg-12 grid-margin">
                              <i class="menu-icon mdi mdi-account-remove"></i>
                            <a class="del" href="delete-person.php?personid=<?php echo $row['personid'] ?>&delete=yes" class="btn btn-primary submit-btn btn-block" id="delete" name="delete">Delete Person </a>
                            </div>
                          </td>

                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  <?php } ?>
                  </div>
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
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
