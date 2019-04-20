

  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="images/faces/face1.jpg" alt="profile image">
            </div>
            <div class="text-wrapper">
              <p class="profile-name"><?php echo "Welcome ". $_SESSION['user_fname']?></p>
              <div>
                <small class="designation text-muted">stud</small>
                <span class="status-indicator online"></span>
              </div>
            </div>
          </div>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blank-page.php">
          <i class="menu-icon mdi mdi-home-variant"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="basic.php">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="change-p.php">
              <i class="menu-icon mdi mdi-pen"></i>
              <span class="menu-title">Change Password</span>
            </a>
          </li>
        </li>  <li class="nav-item">
            <a class="nav-link" href="add-person.php">
              <i class="menu-icon mdi mdi-account-plus"></i>
              <span class="menu-title">Add Person</span>
            </a>
        </li>
      </li>  <li class="nav-item">
          <a class="nav-link" href="show-person.php">
            <i class="menu-icon mdi mdi-account-circle"></i>
            <span class="menu-title">Show Person</span>
          </a>
      </li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="update-pro.php">
          <i class="menu-icon mdi mdi-content-save"></i>
          <span class="menu-title">Update Profile</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="menu-icon mdi mdi-logout"></i>
          <span class="menu-title">Logout</span>
        </a>
    </li>


    </ul>
  </nav>
