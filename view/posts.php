<!-- ADD HEAD -->
<?php include 'head.php'; ?>
<!-- ADD nav2 -->
<?php include 'nav2.php'; ?>


<!-- HEADER -->
<header id="header" class="py-2 bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>
					<i class="fas fa-pencil-alt"></i> Posts
				</h1>
			</div><!-- end of col-md-6 -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</header>


<!-- Search -->
<section id="search" class="py-4 mb-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ml-auto">
				<div class="input-group">
					<input type="text" name="search" class="form-control" placeholder="Search Posts...">
					<div class="input-group-append">
						<button class="btn btn-primary">Search</button>
					</div>
				</div><!-- end of input-group -->
			</div><!-- end of col-md-6 -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section>

<!-- POSTS -->
<section id="posts">
	<div class="container">
		<div class="row">
			<div class="col">
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
					<!-- PAGINATION -->
					<ul class="pagination">
						<li class="page-item disabled">
							<a href="#" class="page-link">Previous</a>
						</li>
						<li class="page-item active">
							<a href="#" class="page-link">1</a>
						</li>
						<li class="page-item">
							<a href="#" class="page-link">2</a>
						</li>
						<li class="page-item">
							<a href="#" class="page-link">3</a>
						</li>
						<li class="page-item">
							<a href="#" class="page-link">Next</a>
						</li>
					</ul>
				</div><!-- end of card -->
			</div><!-- end og col -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section>





<!-- FOOTER -->
<?php  include 'footer.php'; ?>