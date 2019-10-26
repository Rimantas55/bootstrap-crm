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






  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>
<!-- CKEditor https://cdn.ckeditor.com/ -->
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>


  <script>

    // Init CKeditor
    CKEDITOR.replace( 'editor1' );//editor1 is the name in the textarea (it is like id)

  </script>
</body>

</html>