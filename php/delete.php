<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Delete</title>
</head>

<body>
	<!-- Navbar -->
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light ">
			<a class="navbar-brand" href="../index.php">CRUD</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="create.php">Create <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="read.php">Read</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="update.php">Update</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="delete.php">Delete</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-primary" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</div>
	<!-- End of Navbar -->

	<!-- division -->
	<div class="container">
		<div class="row">
			<!-- left side -->
			<div class="col-sm">
				<!-- Update User -->
				<div class="container">
					<h2>Delete file</h2>
					<form method="post" action="./db/dbRemove.php">
						<div class="form-group">
							<label for="inputId">ID</label>
							<input type="text" name="id" class="form-control" id="inputId" aria-describedby="#">
						</div>

						<div class="wrapper">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
				<!-- End of Update User -->
			</div>
			<!-- end of left side -->

			<!-- right side -->
			<div class="col-sm">
				<h2>Files</h2>
				<?php include './db/dbRead.php'; ?>

			</div>
			<!-- end of right side -->
		</div>
	</div>
	<!-- end of division -->



</body>

</html>