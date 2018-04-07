<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="
        width=device-width,
        height=device-height,
        initial-scale=1,
        minimum-scale=1,
        maximum-scale=1,
        user-scalable=0"/>
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Fructo</title>
</head>
<?php session_start(); ?>
<body><a name="home"></a>
	<section class="home">
		<div class="container">
			<nav class="menu-top">
				<div class="logo">
					<div class="logo-icon">
                    	<img src="img/icon-hydric.png" alt="hydric-logo">
                	</div>
					<p>
						Fructo
					</p>
				</div>
				<input type="checkbox" id="menu-checkbox">
               	<label class="menu-btn" for="menu-checkbox"></label>
				<div class="menu-items clearfix">
					<a href="#home">Home</a>
					<a href="#about">About</a>
					<a href="#features">Features</a>
					<a href="#buy" class="buy">Buy now</a>
					<?php 
						if($_SESSION['is_log'] == TRUE)
							echo "<a href='logout.php'>Logout: " . $_SESSION['loggued_on_user'] . '</a>';
						else
						    echo '<a href="sign_in.html" target="_self">Login/Register</a>';
					?>
				</div>
			</nav>
			<div class="slogan">
				Sweet and delicious exotic fruits
			</div>
			<div class="single-fruit">
				<img src="img/hidric.png" alt="Hidric">
			</div>
		</div>
	</section>

	<section class="about"><a name="about"></a>
		<div class="container">
			<div class="about-title">
				Internet shop exotic fruits
			</div>
			<div class="about-text">
				<p>
					More flavor and juiciness.
				</p>
			</div>
			<div class="about-text">
				<p>
					Fresh tropical fruits!
				</p>
			</div>
			<div class="about-pic">
				<img src="img/srez.png" alt="hydric_lengthwise">
			</div>
			
		</div>
	</section>

	<section class="health"><a name="features"></a>
		<div class="container">
			<div class="health-title">
				Pure health
			</div>
			<div class="health-text">
				<p>
					Treat yourself with no harm for body.
				</p>
			</div>
			<div class="arbuz-ingridients">
				<img src="img/arbuz.png" alt="arbuz">
				<div class="protein">
					<img src="img/protein.png" alt="protein" >
					<p>
						Protein  0,63g
					</p>
				</div>
				<div class="calories">
					<img src="img/calories.png" alt="calories" >
					<p>
						Calories  35kcal
					</p>
				</div>
				<div class="water">
					<img src="img/water.png" alt="water" >
					<p>
						Water  92%
					</p>
				</div>
				<div class="fat">
					<img src="img/fat.png" alt="fat" >
					<p>
						Fat 0,63g
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="price"><a name="buy"></a>
		<div class="container">
			<div class="price-title">
				By fructs
			</div>
			<div class="price-text">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				</p>
			</div>
			<div class="price-text">
				<p>
					Lorem ipsum dolor sit amet.
				</p>
			</div>
			<div class="price-policy">
				


			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<nav class="menu-bottom">
				<a href="#home">
					Home
				</a>
				<a href="#about">
					About
				</a>
				<a href="#features">
					Features
				</a>
				<a href="#buy">
					Buy now
				</a>
			</nav>
			<div class="btn-home">
				<a href="#home">
					<img src="img/button_home.png" alt="home">
				</a>
			</div>
			<div class="copyrights">
				<p>
					© 2018 Fructo. All rights reserved by dsheptun and inovykov.
				</p>
			</div>
		</div>
	</footer>

</body>
</html>
