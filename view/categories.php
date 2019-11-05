<!-- ADD HEAD -->
<?php include 'head.php'; ?>
<!-- ADD nav3 -->
<?php include 'nav3.php'; ?>

<!-- HEADER -->
<header id="header" class="py-2 bg-success text-white">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>
					<i class="fas fa-folder"></i> Categories
				</h1>
			</div><!-- end of col-md-6 -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</header>


<!-- Search -->
<section id="categories" class="py-4 mb-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ml-auto">
				<div class="input-group">
					<input type="text" name="search" class="form-control" placeholder="Search Categories...">
					<div class="input-group-append">
						<button class="btn btn-success">Search</button>
					</div>
				</div><!-- end of input-group -->
			</div><!-- end of col-md-6 -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section>

<!-- CATEGORIES -->
<section id="posts">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h4>Latest Categories</h4>
					</div>
					<table class="table table-striped">
						<thead class="thead-dark">
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Date</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Web Development</td>
								<td>May 10 2019</td>
								<td>
									<a href="../index.php" class="btn btn-secondary">
										<i class="fas fa-angle-double-right"></i> Details
									</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Tech Gadgets</td>
								<td>May 10 2019</td>
								<td>
									<a href="../index.php" class="btn btn-secondary">
										<i class="fas fa-angle-double-right"></i> Details
									</a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Business</td>
								<td>May 10 2019</td>
								<td>
									<a href="../index.php" class="btn btn-secondary">
										<i class="fas fa-angle-double-right"></i> Details
									</a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Health & Wellness</td>
								<td>May 10 2019</td>
								<td>
									<a href="../index.php" class="btn btn-secondary">
										<i class="fas fa-angle-double-right"></i> Details
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!-- end of card -->
			</div><!-- end og col -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section>











<!-- FOOTER -->
<?php  include 'footer.php'; ?>