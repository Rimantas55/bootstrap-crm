<!-- HEAD -->
<?php  include 'head.php'; ?>
<!-- NAV -->
<?php  include 'nav7.php'; ?>



<?php //echo getStyle(); ?>
<!-- why I cant get class 'active' in navbar  and why when I clicking severel times on the same nav link I get error -->





<!-- HEADER -->
<header id="header" class="py-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
          <i class="fas fa-user"></i> Profile
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
        <a href="../index.php" class="btn btn-light btn-block">
          <i class="fas fa-arrow-left"></i> Back To Dashboard
        </a>
      </div>
      <div class="col-md-3">
        <a href="../index.php" class="btn btn-success btn-block">
          <i class="fas fa-lock"></i> Change Password
        </a>
      </div>
      <div class="col-md-3">
        <a href="../index.php" class="btn btn-danger btn-block">
          <i class="fas fa-trash"></i> Delete Account
        </a>
      </div>
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>

<!-- PROFILE -->
<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4>Edit Profile</h4>
          </div>
          <div class="card-body">
            <form ><!-- dont forget action and method -->
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                  <label for="body">Bio</label>
                  <textarea name="editor1" class="form-control">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat culpa nam cumque voluptatum. Possimus recusandae porro architecto officiis illo dignissimos ratione aut officia reprehenderit! Iure cum numquam fugit doloremque quis ullam illo odit, odio voluptates non quisquam laboriosam consectetur quasi perspiciatis! Sapiente minus aperiam nobis molestias autem ut praesentium laudantium?
                  </textarea>
                </div>
            </form>
          </div><!-- end of card body -->
        </div><!-- end of card -->
      </div><!-- end og col-md-9 -->


      <div class="col-md-3">
          <h3>Your Avatar</h3>
          <img src="../img/avatar.png" alt="avatar" class="d-block img-fluid mb-3">
          <button class="btn btn-primary btn-block">Edit Image</button>
          <button class="btn btn-danger btn-block">Delete Image</button>
        </div><!-- end og col-md-3 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>





<!-- FOOTER -->
<?php  include 'footer.php'; ?>
