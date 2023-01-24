<!doctype html>

<html>

<head>
	<title>SafeSpace Store</title>
	<link rel="stylesheet" type="text/css" href="css/store-styles.css">
	<?php include "head.php"; ?>
</head>

<body onLoad="window.scroll(0, 1)">
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
	<?php include "overlay.php"; ?>
	<script>
		document.body.className += ' fade-out';
		$(function() {
			$('body').removeClass('fade-out');
		});
	</script>
	<a name="top"></a>
	<a href="onclick=" topFunction() id="back-top"><img src="images/button-top.svg" onmouseover="this.src='images/button-top-hover.svg'" onMouseOut="this.src='images/button-top.svg'" alt="Terug naar boven"></a>

	<!-- <?php include "cart.php"; ?> -->

	<div class="parallax">
		<div class="wrapper">
			<?php include "header.php"; ?>
			<div id="hero">
				<div id="hero-titles">
					<div class="hero-titles-center white">
						<h2 class="h2-title left"><em class="outline small"><a class="outline-link" href="index">SafeSpace </a><em class="mobilehide">&nbsp; / &nbsp; </em></em>Store<em class="outline">.</em></h2>
					</div>
				</div>

				<div id="hero-text">
					<p class="p-text white">Ontdek onze betrouwbare home-security pakketten en ervaar het gevoel van
						veiligheid in en rond je huis.</p>
				</div>
			</div> <!-- /hero -->

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
				</div>
			</div> <!-- /pakketten -->

			<div class="waarom-title white">
				<h2 class="h2-title center"><em class="outline">Our </em>Products<em class="outline">.</em></h2>
			</div>

			<div class="grid">
				<div id="store-grid">
					<a href="product/lock" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-img product-image">
								<img src="images/product-lock.png" alt="Lock">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Lock</h3>
								<h3 class="h3-title white right thin">€ 69</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray left">De Lock legt de basis van uw veilige Space. Bevestig het slot aan jouw deur, bedien het met onze app.</p>
							</div>
						</div>
					</a>
					<a href="product/motion" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-center" class="grid-3-col col3-center">
							<div class="grid-3-col-img product-image">
								<img src="images/product-motion.png" alt="Motion">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Motion</h3>
								<h3 class="h3-title white right thin">€ 129</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray left">Met onze motion sensor ben je verzekerd van een veilige Space. Direct een melding bij beweging.</p>
							</div>
						</div>
					</a>
					<a href="product/cam" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-right" class="grid-3-col col3-right">
							<div class="grid-3-col-img product-image">
								<img src="images/product-cam.png" alt="Cam">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Cam</h3>
								<h3 class="h3-title white right thin">€ 99</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray left">Met de Cam houdt je altijd en overal een oogje in het zeil. Dankzij de infrarood module ook in de nacht.</p>
							</div>
						</div>
					</a>

					<br><br><br><br><br><br><br>

					<a href="product/ring" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-left" class="grid-3-col col3-left breakfix">
							<div class="grid-3-col-img product-image">
								<img src="images/product-ring.png" alt="Ring">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Ring</h3>
								<h3 class="h3-title white right thin">€ 69</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray left">Bevestig de Ring naast je voordeur en leg contact met degene die voor de deur staat, altijd en overal.</p>
							</div>
						</div>
					</a>
					<a href="product/thermostat" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-center" class="grid-3-col col3-center">
							<div class="grid-3-col-img product-image">
								<img src="images/product-thermostat.png" alt="Thermostat">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Thermostat</h3>
								<h3 class="h3-title white right thin">€ 69</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray left">Een nieuw soort thermometer die jou alarmeert wanneer er een ongewenste situatie optreedt.</p>
							</div>
						</div>
					</a>
					<a href="product/server" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
						<div id="store-grid-right" class="grid-3-col col3-right">
							<div class="grid-3-col-img product-image">
								<img src="images/product-server.png" alt="Server">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Server</h3>
								<h3 class="h3-title white right thin">€ 99</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray left">Met de Server kun je gemaakte beelden opslaan en later terugkijken. Haal meer uit onze Cam en Motion.</p>
							</div>
						</div>
					</a>
					<br><br><br><br><br><br><br>
				</div>
			</div>
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
<script src="js/cart.js" type="text/javascript"></script>
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/hamburger.js" type="text/javascript"></script>
<script src="js/buttontop.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>