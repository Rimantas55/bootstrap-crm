<!-- HEAD -->
<?php  include 'head.php'; ?>
<!-- NAV -->
<?php  include 'nav8.php'; ?>

<?php //echo getStyle(); ?>
<!-- why I cant get class 'active' in navbar  and why when I clicking severel times on the same nav link I get error -->


<!-- HEADER -->
<header id="header" class="py-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
            <i class="fas fa-user"></i> Blogen Admin</h1>
      </div><!-- end of col-md-6 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</header>


<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>

<!-- PROFILE -->
<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
              <h4>Account Login</h4>
            </div>
            <div class="card-body">
              <form action="../index.php">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control">
                </div>
                <input type="submit" value="Login" class="btn btn-primary btn-block">
              </form>
            </div>
          </div>
      </div><!-- end og col-md-6 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>



<!-- FOOTER -->
<?php  include 'footer.php'; ?>
