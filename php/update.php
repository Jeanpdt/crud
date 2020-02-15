<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Update</title>
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

	<!-- Divison -->
	<div class="container">
		<div class="row">
			<!-- left side -->
			<div class="col-sm">
				<!-- Update User -->
				<div class="container">
					<h2>Update file</h2>
					<form method="post" action="./db/dbUpdate.php">
						<div class="form-group">
							<label for="inputNome">ID</label>
							<input type="text" name="id" class="form-control" id="inputId" aria-describedby="#">
						</div>
						<div class="form-group">
							<label for="inputNome">Nome</label>
							<input type="text" name="nome" class="form-control" id="inputName" aria-describedby="#">
						</div>
						<div class="form-group">
							<label for="inputNome">Tipo</label>
							<input type="text" name="tipo" class="form-control" id="inputTipo" aria-describedby="#">
						</div>
						<div class="form-group">
							<label for="inputNome">Descrição</label>
							<input type="text" name="descricao" class="form-control" id="inputDescricao" aria-describedby="#">
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
				<div class="container">
					<h2>Files</h2>
				</div>
				<?php include './db/dbRead.php'; ?>
			</div>
			<!-- end of right side -->
		</div>
	</div>
	<!-- End of division -->






</body>

</html>