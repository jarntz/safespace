<!doctype html>
<html>

<head>
	<title>SafeSpace About us</title>
	<link rel="stylesheet" type="text/css" href="css/about-styles.css">
	<?php
	include "head.php";
	?>
</head>

<body onLoad="window.scroll(0, 1)">
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
	<?php
	include "overlay.php";
	?>

	<script>
		document.body.className += ' fade-out';
		$(function() {
			$('body').removeClass('fade-out');
		});
	</script>

	<a name="top"></a>
	<a href="onclick=" topFunction() id="back-top"><img src="images/button-top.svg" onmouseover="this.src='images/button-top-hover.svg'" onMouseOut="this.src='images/button-top.svg'" alt="Terug naar boven"></a>

	<div class="parallax">
		<div class="wrapper">
			<?php include "header.php"; ?>

			<div id="hero">
				<div id="hero-titles">
					<div class="hero-titles-center white">
						<h2 class="h2-title left"><em class="outline">We are </em>SafeSpace<em class="outline">.</em><br>
							<em class="outline">Get to </em>know <em class="outline">us.</em>
						</h2>
					</div>
				</div>
			</div> <!-- /hero -->

			<div class="grid" style="margin:250px auto;">
				<div id="over-grid-left" class="grid-2-col col2-left">
					<div class="grid-2-col-text">
						<p class="p-text gray left">Wij zijn SafeSpace. Een klein team met een doel, het
							beter, betrouwbaarder, en veiliger maken van jouw
							woning. Met onze innovatieve producten kun je op
							diverse manieren jouw kostbare Space beschermen.
							Benieuwd wat onze missie is jouw Space? <br>
							<br>
							We werken iedere dag aan nieuwe innovaties die jouw
							proces verbeteren in het beveiligen van je huis, dat doen
							we door het ontwikkelen van nieuwe producten, en het
							onderhouden van onze bestaande producten, die
							allemaal op maat gemaakt zijn voor jouw perfecte
							situatie.
						</p>
					</div>
				</div>
				<div id="over-grid-right" class="grid-2-col col2-right">
					<div class="grid-2-col-img over-image">
						<img src="images/over-logo.png" alt="SafeSpace logo">
					</div>
				</div>
			</div>

			<div class="team-title white">
				<h2 class="h2-title center"><em class="outline">Meet the </em>team<em class="outline">.</em></h2>
			</div>

			<div class="grid">
				<div id="team-grid">
					<div id="team-grid-left" class="grid-3-col col3-left">
						<div class="grid-3-col-img team-image">
							<img src="images/team-jop.png" alt="Jop">
						</div>
						<div class="grid-3-col-name">
							<h3 class="h3-title white left">Jop</h3>
						</div>
						<div class="grid-3-col-text">
							<p class="p-text gray left">Project Manager / CEO</p>
						</div>
					</div>
					<div id="team-grid-center" class="grid-3-col col3-center">
						<div class="grid-3-col-img team-image">
							<img src="images/team-jordy.png" alt="Jordy">
						</div>
						<div class="grid-3-col-name">
							<h3 class="h3-title white left">Jordy</h3>
						</div>
						<div class="grid-3-col-text">
							<p class="p-text gray left">Media designer</p>
						</div>
					</div>
					<div id="team-grid-right" class="grid-3-col col3-right">
						<div class="grid-3-col-img team-image">
							<img src="images/team-jw.png" alt="Jan Willem">
						</div>
						<div class="grid-3-col-name">
							<h3 class="h3-title white left">Jan Willem</h3>
						</div>
						<div class="grid-3-col-text">
							<p class="p-text gray left">Media designer / Software engineer</p>
						</div>
					</div>
					</a>

					<br><br><br><br><br><br><br>

					<div id="team-grid-left" class="grid-3-col col3-left breakfix">
						<div class="grid-3-col-img team-image">
							<img src="images/team-rory.png" alt="Rory">
						</div>
						<div class="grid-3-col-name">
							<h3 class="h3-title white left">Rory</h3>
						</div>
						<div class="grid-3-col-text">
							<p class="p-text gray left">Hardware engineer</p>
						</div>
					</div>
					<div id="team-grid-center" class="grid-3-col col3-center">
						<div class="grid-3-col-img team-image">
							<img src="images/team-wouter.png" alt="Wouter">
						</div>
						<div class="grid-3-col-name">
							<h3 class="h3-title white left">Wouter</h3>
						</div>
						<div class="grid-3-col-text">
							<p class="p-text gray left">Data-analyst</p>
						</div>
					</div>
					<div id="team-grid-right" class="grid-3-col col3-right">
						<div class="grid-3-col-img team-image">
							<img src="images/team-twan.png" alt="Twan">
						</div>
						<div class="grid-3-col-name">
							<h3 class="h3-title white left">Twan</h3>
						</div>
						<div class="grid-3-col-text">
							<p class="p-text gray left">Software engineer</p>
						</div>
					</div>
					<br><br><br><br><br><br><br>
				</div>
			</div>

			<div class="store-title white">
				<h2 class="h2-title center"><em class="outline">Visit our </em>Store<em class="outline">.</em></h2>
			</div>

			<div id="pakketten">
				<div class="grid" style="margin-bottom: 250px;">
					<a href="product/starter" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-left" class="grid-2-col col2-left">
							<div class="grid-2-col-img pakket-image">
								<img src="images/product-starter.png" alt="SafeSpace Starter">
							</div>
							<div class="grid-2-col-text">
								<div id="product-title">
									<h3 class="h3-title white left">SafeSpace Starter</h3>
									<h3 class="h3-title white right thin">€ 99</h3>
								</div>
								<p class="p-text gray left">Perfect om te starten met jouw SafeSpace. Dit pakket
									bevat de essentiële producten die je kunt gebruiken bij
									en aan je voordeur. Met de Lock en Ring krijg en houd je
									een gerust gevoel over de entrance van jouw Space.</p>
							</div>
						</div>
					</a>
					<a href="product/pro" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-right" class="grid-2-col col2-right">
							<div class="grid-2-col-img pakket-image">
								<img src="images/product-pro.png" alt="SafeSpace Pro">
							</div>
							<div class="grid-2-col-text">
								<div id="product-title">
									<h3 class="h3-title white left">SafeSpace Pro</h3>
									<h3 class="h3-title white right thin">€ 499</h3>
								</div>
								<p class="p-text gray left">Ga een stap verder, ga voor Pro. Met dit pakket ben je
									verzekerd van al onze nieuwe, innovatieve producten die
									op 6 manieren jouw Space bewaken. Dankzij onze
									Support is hulp altijd dichtbij.</p>
							</div>
						</div>
					</a>

					<div id="hero-text-button" style="margin-top:150px;">
						<a href="store" class="button left">Bezoek Store</a>
					</div>
				</div>
			</div> <!-- /pakketten -->
			<?php include "footer.php"; ?>
		</div> <!-- /wrapper -->
	</div>

	<!-- Hamburger Menu + Menu Overlay -->
	<a onclick="openNav()">
		<div id="container">
			<div class="circle"></div>
			<div class="hamburger">
				<img src="images/icon-menu.svg" alt="Menu">
			</div>
		</div>
	</a>
</body>

</html>

<!-- Scripts-->
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/hamburger.js" type="text/javascript"></script>
<script src="js/buttontop.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>