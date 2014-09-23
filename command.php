<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Pimpon.fr</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="/">Notre promesse</a></li>
							<li class="active"><a href="#command">Commander</a></li>
							<li><a href="#">Une question ?</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<p>Où souhaitez-vous être livré ?</p>
					<form method="post" action="">
						<div class="form-group">
						  <label for="nom">Prénom et nom</label>
						  <input type="text" class="form-control" name="nom" id="nom" placeholder="Marie Poppins">
						</div>
						<div class="form-group">
						  <label for="nom">Email</label>
						  <input type="text" class="form-control" name="email" id="email" placeholder="marie.poppins@gmail.com">
						</div>
						<div class="form-group">
						  <label for="adresse">Portable</label>
						  <input type="text" class="form-control" name="portable" id="portable" placeholder="0612345678">
						</div>
						<div class="form-group">
						  <label for="adresse">Adresse de livraison</label>
						  <input type="text" class="form-control" name="adresse" id="adresse" placeholder="68 rue du Faubourg Saint Honoré, 75008 Paris">
						</div>
					</form>				
				</div>
			</div>
		</div>
	</body>
	<script src="js/custom.js"></script>
</html>