<?php
	$host = 'localhost';
	$data = 'macaroni_film';
	$user = 'root';
	$pass = '';
	$attr = "mysql:host=$host;dbname=$data";

	try {
		$pdo = new PDO($attr, $user, $pass);
	} catch (PDOException $e) {
		throw new PDOException($e->getMessage(),(int)$e->getCode());
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
		  crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./vendors/slick/slick.css">
	<!-- Add the new slick-theme.css if you want the default styling-->
	<link rel="stylesheet"
		  type="text/css"
		  href="./vendors/slick/slick-theme.css">
	<link href="./style/index.css" rel="stylesheet">
</head>
<body>
<header class="p-3 border-bottom bg-light sticky-top">
	<div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"
			   href="/">
				<img class="logo"
					 src="./assets/logo.jpeg"
					 alt="logo"
					 width="50"
					 height="50"></a>
			<ul class="nav col-12 col-lg-auto ms-lg-auto mb-2 justify-content-center mb-md-0">
				<li><a class="nav-link px-2 link-secondary" href="/home.html">Home</a>
				</li>
				<li><a class="nav-link px-2 link-dark" href="#">Sports</a></li>
				<li><a class="nav-link px-2 link-dark" href="#">TV Shows</a>
				</li>
				<li><a class="nav-link px-2 link-dark" href="#">Movies </a></li>
				<li><a class="nav-link px-2 link-dark" href="#">Kids</a></li>
				<li>
					<div class="nav-link px-2 link-dark dropdown-toggle"
						 id="dropdownUser1"
						 data-bs-toggle="dropdown"
						 aria-expanded="false"
						 type="button">
						More
					</div>
					<ul class="dropdown-menu" aria-labelledby="dropdownUser1">
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Top
								Picks</a></li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Anime</a>
						</li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">News</a>
						</li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Music</a>
						</li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Lifestyle</a>
						</li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Entertainment </a>
						</li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Education </a>
						</li>
						<li>
							<a class="nav-link px-2 link-dark dropdown-item"
							   href="#">Fantasy
								Team</a></li>
					</ul>
				</li>
			</ul>
			<form class="col-12 col-lg-auto mb-3 mb-lg-0 ms-lg-3">
				<input class="form-control"
					   type="search"
					   placeholder="Search..."
					   aria-label="Search">
			</form>
		</div>
	</div>
</header>
<section class="hero">
	<div class="hero-movies py-5">
		<div class="container py-5">
			<div class="row col-6">
				<?php
					$stmt = $pdo->query('SELECT judul_film, deskripsi FROM tablefilm');
					while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo '<h1>';
						echo (htmlentities($row['judul_film']));
						echo '</h1>';
						echo '<p>';
						echo (htmlentities($row['deskripsi']));
						echo '</p>';
					}
				?>
<!--				<h1>Judul Film 1</h1>-->
<!--				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
<!--					Quibusdam aspernatur placeat consequatur. Provident-->
<!--					accusamus ea id? Quas veritatis voluptates animi, magni-->
<!--					nostrum voluptatem dicta, repellendus sint sed praesentium,-->
<!--					voluptas fuga!</p>-->
			</div>
			<a class="btn btn-primary" href="#">🎬 Putar Film</a>
		</div>
	</div>
	<div class="hero-movies py-5">
		<div class="container py-5">
			<div class="row col-6">
				<h1>Judul Film 1</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Quibusdam aspernatur placeat consequatur. Provident
					accusamus ea id? Quas veritatis voluptates animi, magni
					nostrum voluptatem dicta, repellendus sint sed praesentium,
					voluptas fuga!</p>
			</div>
			<a class="btn btn-primary" href="#">🎬 Putar Film</a>
		</div>
	</div>
	<div class="hero-movies py-5">
		<div class="container py-5">
			<div class="row col-6">
				<h1>Judul Film 1</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Quibusdam aspernatur placeat consequatur. Provident
					accusamus ea id? Quas veritatis voluptates animi, magni
					nostrum voluptatem dicta, repellendus sint sed praesentium,
					voluptas fuga!</p>
			</div>
			<a class="btn btn-primary" href="#">🎬 Putar Film</a>
		</div>
	</div>
	<div class="hero-movies py-5">
		<div class="container py-5">
			<div class="row col-6">
				<h1>Judul Film 1</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Quibusdam aspernatur placeat consequatur. Provident
					accusamus ea id? Quas veritatis voluptates animi, magni
					nostrum voluptatem dicta, repellendus sint sed praesentium,
					voluptas fuga!</p>
			</div>
			<a class="btn btn-primary" href="#">🎬 Putar Film</a>
		</div>
	</div>
	<div class="hero-movies py-5">
		<div class="container py-5">
			<div class="row col-6">
				<h1>Judul Film 1</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Quibusdam aspernatur placeat consequatur. Provident
					accusamus ea id? Quas veritatis voluptates animi, magni
					nostrum voluptatem dicta, repellendus sint sed praesentium,
					voluptas fuga!</p>
			</div>
		</div>
		<a class="btn btn-primary" href="#">🎬 Putar Film</a>
	</div>
</section>
<section class="list container">
	<div class="row mb-5">
		<h2 class="mb-3">Nonton Originals </h2>
		<div class="list-slide"><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a>
		</div>
	</div>
	<div class="row mb-5">
		<h2 class="mb-3">Latest </h2>
		<div class="list-slide"><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a>
		</div>
	</div>
	<div class="row mb-5">
		<h2 class="mb-3">Exclusive</h2>
		<div class="list-slide"><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a>
		</div>
	</div>
	<div class="row mb-5">
		<h2 class="mb-3">Box Office</h2>
		<div class="list-slide"><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a>
		</div>
	</div>
	<div class="row mb-5">
		<h2 class="mb-3">Documentary</h2>
		<div class="list-slide"><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a><a href="#">
				<img class="list-slide__img"
					 src="https://placeimg.com/150/250/people"
					 width="150"
					 height="250"></a>
		</div>
	</div>
</section>
<footer class="py-5 container">
	<p class="text-center">Made With 💖 from <strong>Laila Latifa</strong></p>
</footer>
</body>
<script type="text/javascript"
		src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript"
		src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./vendors/slick/slick.min.js"></script>
<script src="./home.js" type="text/javascript"></script>
</html>