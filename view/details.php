<!-- HEAD -->
<?php  include 'head.php'; ?>
<!-- NAV -->
<?php  include 'nav5.php'; ?>

<?php //echo getStyle(); ?>
<!-- why I cant get class 'active' in navbar  and why when I clicking severel times on the same nav link I get error -->


<!-- HEADER -->
<header id="header" class="py-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
          Post One
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
      <div class="col-md-3">
        <a href="../index.php" class="btn btn-danger btn-block" >
          <i class="fas fa-trash"></i> Delete Post
        </a>
      </div><!-- end of col-md-3 -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>

<!-- POSTS -->
<section id="details">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Edit Post</h4>
          </div>
          <div class="card-body">
            <form action="" method="">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="" class="form-control" value="Post One">
              </div>
              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control">
                  <option value="" selected="">Web Development</option>
                  <option value="">Tech Gadgets</option>
                  <option value="">Business</option>
                  <option value="">Health &amp; Wellness</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="image">Upload Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image">
                    <label for="image" class="custom-file-label">Choose File</label>
                  </div>
                  <small class="form-text text-muted">Max Size 3mb</small>
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea name="editor1" class="form-control">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat culpa nam cumque voluptatum. Possimus recusandae porro architecto officiis illo dignissimos ratione aut officia reprehenderit! Iure cum numquam fugit doloremque quis ullam illo odit, odio voluptates non quisquam laboriosam consectetur quasi perspiciatis! Sapiente minus aperiam nobis molestias autem ut praesentium laudantium?
                  </textarea>
                </div>
            </form>
          </div><!-- end of card body -->
        </div><!-- end of card -->
      </div><!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>





<!-- FOOTER -->
<?php  include 'footer.php'; ?>
