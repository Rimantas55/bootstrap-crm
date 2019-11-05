<!-- ADD HEAD -->
<?php include 'head.php'; ?>
<!-- ADD nav2 -->
<?php include 'nav4.php'; ?>

<!-- HEADER -->
<header id="header" class="py-2 bg-warning text-white">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>
					<i class="fas fa-users"></i> Users
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
					<input type="text" name="search" class="form-control" placeholder="Search Users...">
					<div class="input-group-append">
						<button class="btn btn-warning">Search</button>
					</div>
				</div><!-- end of input-group -->
			</div><!-- end of col-md-6 -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section>

<!-- CATEGORIES -->
<section id="users">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h4>Latest Users</h4>
					</div>
					<table class="table table-striped">
						<thead class="thead-dark">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>John Doe</td>
								<td>Mjdoe@gmail.com</td>
								<td>
									<a href="view/details.php" class="btn btn-secondary">
										<i class="fas fa-angle-double-right"></i> Details
									</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Harry White</td>
								<td>harry@yahoo.com</td>
								<td>
									<a href="view/details.php" class="btn btn-secondary">
										<i class="fas fa-angle-double-right"></i> Details
									</a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Mary Johnson</td>
								<td>mary@gmail.com</td>
								<td>
									<a href="view/details.php" class="btn btn-secondary">
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








<!-- FOOTER -->
<?php  include 'footer.php'; ?>