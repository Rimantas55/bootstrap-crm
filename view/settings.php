<!-- HEAD -->
<?php  include 'head.php'; ?>
<!-- NAV -->
<?php  include 'nav6.php'; ?>

<?php //echo getStyle(); ?>
<!-- why I cant get class 'active' in navbar  and why when I clicking severel times on the same nav link I get error -->


<!-- HEADER -->
<header id="header" class="py-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
          <i class="fas fa-cog"></i>
          Settings
        </h1>
      </div><!-- end of col-md-6 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</header>


<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="../index.php" class="btn btn-light btn-block" >
          <i class="fas fa-arrow-left"></i> Back To Dashboard
        </a>
      </div><!-- end of col-md-3 -->
      <div class="col-md-3">
        <a href="../index.php" class="btn btn-success btn-block" >
          <i class="fas fa-check"></i> Save Changes 
        </a>
      </div><!-- end of col-md-3 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>

<!-- SETTINGS -->
<section id="settings">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Edit Settings</h4>
          </div>
          <div class="card-body">
            <form action="" method="">
              <fieldset class="form-group">
                <legend>Allow User Registration</legend>
                <div class="form-check">
                  <label class="form-check-label" for="yes">
                    <input type="radio" class="form-check-input" value="yes" id="yes" name="yesNo" checked="" > Yes
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label " for="no">
                    <input type="radio" class="form-check-input" value="no" id="no" name="yesNo"> No
                  </label>
                </div>
              </fieldset>

              <fieldset class="form-group">
                <legend>Homepage Format</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="posts" checked="" name="choice"> Blog Page
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="page" name="choice"> Homepage
                  </label>
                </div>
              </fieldset>
            </form>
          </div><!-- end of card body -->
        </div><!-- end of card -->
      </div><!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>





<!-- FOOTER -->
<?php  include 'footer.php'; ?>
