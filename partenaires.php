<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/assets/img/logo-cci-rounded.png" type="image/x-icon" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
	<title>Kit prévention</title>
</head>

<body>
	<!--NAVBAR-->
	<header></header>
	<!-- TITRE -->
	<div class="container mt-5 align-center">
		<h1 class="display-6 align-center archivo-black-regular">Les partenaires</h1>
	</div>
	<!-- CARTES BENTO -->
	<section style="height: 100vh">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 p-3">
					<div class="card clickable rounded-5">
						<a href="https://www.gard.cci.fr/"><img class="card-img rounded-5" src="/assets/img/cci-campus.png" width="100" height="230" /></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-3">
					<div class="card clickable rounded-5">
						<a href="https://www.nimes-metropole.fr/accueil.html"><img class="card-img rounded-5" src="/assets/img/métropole.png" /></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 p-3">
					<div class="card clickable rounded-5">
						<a href="https://www.nimes.fr/"><img class="card-img rounded-5" src="/assets/img/nimes.jpg" height="230" /></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<p class="col-md-4 mb-0 text-body-secondary">© 2024 CCI GARD NIMES</p>
		<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
			<img class="bi me-2" src="/assets/img/logo_cci_gard_web.png" height="50" alt="" />
		</a>
		<ul class="nav col-md-4 justify-content-end">
			<li class="nav-item"><a href="/index.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Carte</a></li>
			<li class="nav-item"><a href="/faq.html" class="nav-link px-2 text-body-secondary">FAQ</a></li>
			<li class="nav-item"><a href="/partenaires.html" class="nav-link px-2 text-body-secondary">Partenaires</a></li>
		</ul>
	</footer>
	<script src="/js/nav.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<!-- MODAL DECOUVRIR -->
<?php include 'assets/modals/liste.php' ?>
<?php include 'assets/modals/actualite.php' ?>

</html>