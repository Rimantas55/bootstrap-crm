<!-- MODALS -->
<!-- FUNCTIONS -->
<?php  include 'functions.php'; ?>
<!-- HEAD -->
<?php  include 'view/head.php'; ?>
<!-- NAV -->
<?php  include 'view/nav.php'; ?>
<!-- ADD POST MODAL -->
<?php include 'modals/post.php'; ?>
<!-- ADD CATEGORY MODAL -->
<?php include 'modals/category.php'; ?>
<!-- ADD USER MODAL -->
<?php include 'modals/user.php'; ?>


<?php //echo getStyle(); ?>
<!-- why I cant get class 'active' in navbar  and why when I clicking severel times on the same nav link I get error -->





<!-- HEADER -->
<header id="header" class="py-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
          <i class="fas fa-cog"></i> Dashboard
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
        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
          <i class="fas fa-plus"></i> Add Post
        </a>
      </div><!-- end of col-md-3 -->
            <div class="col-md-3">
        <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
          <i class="fas fa-plus"></i> Add Category
        </a>
      </div><!-- end of col-md-3 -->
            <div class="col-md-3">
        <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
          <i class="fas fa-plus"></i> Add User
        </a>
      </div><!-- end of col-md-3 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>

<!-- POSTS -->
<section id="posts">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4>Latest Posts</h4>
          </div>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Post One</td>
                <td>Web Development</td>
                <td>May 10 2019</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Post Two</td>
                <td>Web Development</td>
                <td>May 10 2019</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Post Three</td>
                <td>Web Development</td>
                <td>May 10 2019</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Post Four</td>
                <td>Web Development</td>
                <td>May 10 2019</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Post Five</td>
                <td>Web Development</td>
                <td>May 10 2019</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Post Six</td>
                <td>Web Development</td>
                <td>May 10 2019</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- end of card -->
      </div><!-- end og col-md-9 -->
      <div class="col-md-3">
        <div class="card text-center bg-primary text-white mb-3">
          <div class="card-body">
            <h3>Posts</h3>
            <h4 class="display-4">
              <i class="fas fa-pencil-alt"></i> 6
            </h4>
            <a href="view/posts.php" class="btn btn-outline-light btn-sm">View</a>
          </div>
        </div><!-- end of card -->
        <div class="card text-center bg-success text-white mb-3">
          <div class="card-body">
            <h3>Categories</h3>
            <h4 class="display-4">
              <i class="fas fa-folder"></i> 4
            </h4>
            <a href="view/categories.php" class="btn btn-outline-light btn-sm">Categories</a>
          </div>
        </div><!-- end of card -->
        <div class="card text-center bg-warning text-white mb-3">
          <div class="card-body">
            <h3>Users</h3>
            <h4 class="display-4">
              <i class="fas fa-users"></i> 4
            </h4>
            <a href="view/users.php" class="btn btn-outline-light btn-sm">Users</a>
          </div>
        </div><!-- end of card -->
      </div><!-- end og col-md-3 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>





<!-- FOOTER -->
<?php  include 'view/footer.php'; ?>
