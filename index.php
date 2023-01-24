<!doctype html>
<html>

<head>
	<title>SafeSpace</title>
	<link rel="stylesheet" type="text/css" href="css/home-styles.css">
	<?php include "head.php"; ?>
</head>

<body onLoad="window.scroll(0, 1)" onLoad="preloader.js">
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

	<div class="parallax">
		<div class="wrapper">
			<header>
				<div class="logo">
					<a href="#top"><img src="images/logo.png" alt="Logo"></a>
				</div>
			</header>

			<div id="hero">
				<div id="hero-titles">
					<div class="hero-titles-upper opacity20">
						<h2 class="h2-title left"><em class="outline">SafeSpace</em></h2>
					</div>
					<div class="hero-titles-up opacity40">
						<h2 class="h2-title left"><em class="outline">SafeSpace</em></h2>
					</div>
					<div class="hero-titles-center white">
						<h2 class="h2-title left"><em class="outline">Enter your </em>SafeSpace<em class="outline">.</em></h2>
					</div>
					<div class="hero-titles-down opacity40">
						<h2 class="h2-title left"><em class="outline">SafeSpace</em></h2>
					</div>
					<div class="hero-titles-downer opacity20">
						<h2 class="h2-title left"><em class="outline">SafeSpace</em></h2>
					</div>
				</div>

				<div id="hero-text">
					<p class="p-text white">SafeSpace is het beveiligingssysteem van de toekomst. Dankzij ons veelzijdige
						aanbod aan betrouwbare, gemakkelijk te installeren producten voor jouw
						woning houd je altijd en overal een oogje in het zeil.</p>

					<div id="hero-text-button">
						<a href="store" class="button center">Bezoek Store</a>
					</div>
				</div>

				<div class="header-arrow">
					<a href="#waarom"><img src="images/arrow-down.svg" alt="Scroll verder"></a>
				</div>
			</div> <!-- /hero -->

			<a name="waarom"></a>

			<div id="waarom">
				<div class="waarom-title white">
					<h2 class="h2-title center">Secure your Space<em class="outline">.</em></h2>
				</div>
				<div class="grid">
					<div id="waarom-grid">
						<div id="waarom-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-img waarom-icon">
								<img src="images/icon-veilig.svg" alt="Veilig">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white center">Veilig</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray center mobilepadding">Bij een beschermd huis hoort een
									betrouwbaar beveiligingssysteem.
									SafeSpace bewaakt je Space, Safe.</p>
							</div>
						</div>
						<div id="waarom-grid-center" class="grid-3-col col3-center">
							<div class="grid-3-col-img waarom-icon">
								<img src="images/icon-simpel.svg" alt="Simpel">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white center">Simpel</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray center mobilepadding">Nooit meer problemen met het
									beveiligen van jouw Spaces. Simpel in
									gebruik door de eenvoudige interface.</p>
							</div>
						</div>
						<div id="waarom-grid-right" class="grid-3-col col3-right">
							<div class="grid-3-col-img waarom-icon">
								<img src="images/icon-overal.svg" alt="Overal">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white center">Overal</h3>
							</div>
							<div class="grid-3-col-text">
								<p class="p-text gray center mobilepadding">Met de app van SafeSpace kun je
									overal ter wereld even rondkijken <br>in jouw Space en acties ondernemen.</p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /waarom -->

			<div id="over">
				<div class="waarom-title white" style="margin-bottom: 150px;">
					<h2 class="h2-title center">Safe<em class="outline">.</em> Simple<em class="outline">. Access <br>
							from </em>anywhere<em class="outline">.</em></h2>
				</div>

				<div class="grid" style="margin: 200px auto 120px auto;">
					<div id="over-grid-left" class="grid-2-col col2-left">
						<div class="grid-2-col-text">
							<p class="p-text gray left">Wij zijn SafeSpace. Een klein team met een doel, het
								beter, betrouwbaarder, en veiliger maken van jouw
								woning. Met onze innovatieve producten kun je op
								diverse manieren jouw kostbare Space beschermen.
								Benieuwd wat onze missie is jouw Space?</p>
						</div>
						<div id="hero-text-button">
							<a href="about" class="button left">Lees meer</a>
						</div>
						<br>
					</div>
					<div id="over-grid-right" class="grid-2-col col2-right">
						<div class="grid-2-col-img over-image mobilehide">
							<img src="images/over-logo.png" alt="SafeSpace logo">
						</div>
					</div>
				</div>

				<div class="grid">
					<div id="over-grid-left" class="grid-2-col col2-left">
						<div class="grid-2-col-img over-image">
							<img src="images/product-pro.png" alt="SafeSpace logo">
						</div>
					</div>
					<div id="over-grid-right" class="grid-2-col col2-right">
						<div class="grid-2-col-text">
							<p class="p-text gray left">Alle SafeSpace producten kunnen individueel gekocht
								worden, maar de beste deals worden behaald met de
								pakketten. SafeSpace Starter zorgt ervoor dat jij altijd
								contact kan leggen met wie er aan jouw deur staat en
								dat je te allen tijde het slot kunt bedienen. SafeSpace
								Pro levert complete beveiliging van jouw Space door
								middel van camera's, bewegingssensoren en meer.</p>
						</div>
						<div id="hero-text-button">
							<a href="store" class="button left">Bezoek Store</a>
						</div>
						<br><br><br>
					</div>
				</div>
			</div> <!-- /over -->
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