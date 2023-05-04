<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="/assets/images/face.jpg" alt="profile">
            <span class="login-status online"></span>
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"><?php echo($_SESSION["username"])?></span>
            <span class="text-secondary text-small">User</span>
          </div>
        </a>
      </li>
      <li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/user/home.php'){ echo 'active'; } ?>">
        <a class="nav-link" href="/user/home.php">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>

      <li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/user/complaints.php'){ echo 'active'; } ?>">
        <a class="nav-link" href="/user/complaints.php">
          <span class="menu-title">Complaints</span>
          <i class="mdi mdi-cards menu-icon"></i>
        </a>
      </li>
      
    </ul>
  </nav>