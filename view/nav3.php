<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
  <div class="container">
    <a href="../index.php" class="navbar-brand">Bootstrap CRM</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav"><!-- ml-auto would pushed links to the right side of the bar  -->
        <li class="nav-item px-2">
          <a href="../index.php" class="nav-link <?php //echo checkLink(); ?>">Dashboard</a>
        </li>
        <li class="nav-item px-2">
          <a href="posts.php" class="nav-link  <?php //echo checkLink(); ?>" >Posts</a>
        </li>
        <li class="nav-item px-2">
          <a href="categories.php" class="nav-link active <?php //echo checkLink(); ?>">Categories</a>
        </li>
        <li class="nav-item px-2">
          <a href="users.php" class="nav-link <?php //echo checkLink(); ?>">Users</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-user"></i> Welcome John
          </a>
          <div class="dropdown-menu">
            <a href="profile.php" class="dropdown-item">
              <i class="fas fa-user-circle"></i> Profile
            </a>
            <a href="settings.php" class="dropdown-item">
              <i class="fas fa-cog"></i> Settings
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link">
            <i class="fas fa-user-times"></i> Logout
          </a>
        </li>
      </ul>
    </div><!-- end of collapse navbar-collapse -->
  </div><!-- end of container -->
</nav>



  