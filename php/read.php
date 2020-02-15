<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Read</title>
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
	<div class="container">
		<h2>Files</h2>
	</div>
	<?php include './db/dbRead.php'; ?>
</body>

</html>