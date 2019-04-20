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
  <?php include"head.php"; ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include"side-upper.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->

    <?php include "sidebar.php";?>

      <!-- partial -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <div class="table-responsive">
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
                            Address
                          </th>
                          <th>
                            Mobile no.
                          </th>
                          <th>

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>

                          </td>
                          <td>
                                                      </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
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
