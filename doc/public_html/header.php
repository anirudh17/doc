<header class="header">
  <div class="logo-container">
    <!-- <a href="../" class="logo">
      <img src="../img/logo/sales.png" height="47" width="100" alt="JSOFT Admin" />
    </a> -->
    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
      <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
    </div>
  </div>

  <!-- start: search & user box -->
  <div class="header-right">

    <div id="userbox" class="userbox">
      <a href="#" data-toggle="dropdown">
        <!-- <figure class="profile-picture">
          <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
        </figure> -->
        <div class="profile-info">
          <span class="name"><?php echo $admin_name;?></span>

        </div>

        <i class="fa custom-caret"></i>
      </a>

      <div class="dropdown-menu">
        <ul class="list-unstyled">
          <li class="divider"></li>
          <li>
            <a role="menuitem" tabindex="-1" href="profile.php"><i class="fa fa-user"></i> My Profile</a>
          </li>
        
          <li>
            <a role="menuitem" tabindex="-1" href="../src/logout.php"><i class="fa fa-power-off"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end: search & user box -->
</header>
<!-- end: header -->
