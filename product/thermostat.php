<!doctype html>

<html>

<head>
	<title>SafeSpace Store</title>
	<link rel="stylesheet" type="text/css" href="../css/product-styles.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
	<?php include "product-head.php"; ?>
</head>

<body onLoad="window.scroll(0, 1)">
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
	<?php include "product-overlay.php"; ?>
	<script>
		document.body.className += ' fade-out';
		$(function() {
			$('body').removeClass('fade-out');
		});
	</script>
	<a name="top"></a>
	<a href="onclick=" topFunction() id="back-top"><img src="../images/button-top.svg" onmouseover="this.src='../images/button-top-hover.svg'" onMouseOut="this.src='../images/button-top.svg'" alt="Terug naar boven"></a>

	<div class="parallax">
		<div class="wrapper">
			<?php include "product-header.php"; ?>
			<div id="hero">
				<div id="hero-titles">
					<div class="hero-titles-center white">
						<h2 class="h2-title left"><em class="outline small"><em class="mobilehide"><a class="outline-link" href="../store">Store </a>&nbsp; / &nbsp; </em></em>Heat Sensor<em class="outline">.</em></h2>
					</div>
				</div>
			</div> <!-- /hero -->

			<div id="product">
				<div id="product-main">
					<div class="grid" style="margin-bottom: 250px;">
						<div id="store-grid-right" class="grid-2-col col2-right desktophide">
							<div class="grid-2-col-img pakket-image">
								<img src="../images/product-thermostat.png" alt="Thermostat">
							</div>
						</div>
						<div id="store-grid-left" class="grid-2-col col2-left">
							<div class="grid-2-col-text">
								<div id="product-title">
									<h3 class="h3-title white left">Thermostat</h3>
									<h3 class="h3-title white right thin">€ 69</h3>
								</div>
								<p class="p-text gray left">Een nieuw soort thermometer die jou alarmeert wanneer er een ongewenste situatie optreedt.</p>

								<div id="hero-text-button" class="left">
									<a onclick="cart()" class="button-blue left">Bestel nu</a>
								</div>

								<script type="text/javascript">
									function cart() {
										Swal.fire({
											icon: 'error',
											title: 'Oh nee...',
											text: 'Toevoegen aan winkelmand is mislukt.',
										})
									}
								</script>

								<p class="p-text gray left">Voor 23:59 uur besteld, morgen in huis.<br>
									Product is op voorraad.</p>
							</div>
						</div>
						<div id="store-grid-right" class="grid-2-col col2-right mobilehide">
							<div class="grid-2-col-img pakket-image">
								<img src="../images/product-thermostat.png" alt="Thermostat">
							</div>
						</div>
					</div>
				</div> <!-- /product-main -->

				<div id="product-info">
					<div class="grid">
						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Productinformatie</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col-product col3-right">
							<div class="grid-3-col-text">
								<p class="p-text gray left">De SafeSpace Thermostat meet de temperatuur op punten in jouw huis. Zo heb je
									door middel van de SafeSpace App altijd toegang tot de verwarming en/of airco in
									jouw huis. Ben je op vakantie en weet je niet of de verwarming nog aan staat? dat kun
									je dan nu nakijken en de temperatuur desnoods aanpassen. Ben je niet thuis en komt
									de temperatuur boven een bepaalde waarde, dan krijg jij meteen een melding met
									een optie voor de brandweer.
									<br><br>
									De Thermostat is een belangrijk onderdeel van ieder smart home en security systeem,
									en de echte liefhebbers moeten dit onderdeel hebben. Zo voorkom jij dat de
									temperatuur te hoog of te laag wordt, en kun jij meteen ingrijpen in geval van nood.
								</p>
								</p>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Functies</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col-product col3-right">
							<div class="grid-3-col-text">
								<p class="p-text gray left">
									&bull; &nbsp; Gemakkelijk te installeren aan je muur <br>
									&bull; &nbsp; Werkt naadloos in de SafeSpace-app <br>
									&bull; &nbsp; Notificatie bij een ongewenste situatie <br>
									&bull; &nbsp; Snel handelen in geval van nood <br>
									&bull; &nbsp; Handige tips om meer uit je SafeSpace Thermostat te halen
								</p>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Bekijk ook</h3>
							</div>
						</div>
						<a href="cam" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
							<div id="store-grid-center" class="grid-3-col col3-center">
								<div class="grid-3-col-img product-image">
									<img src="../images/product-cam.png" alt="Cam">
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
						<a href="server" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
							<div id="store-grid-right" class="grid-3-col col3-right">
								<div class="grid-3-col-img product-image">
									<img src="../images/product-server.png" alt="Server">
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
						<br><br><br><br><br><br><br><br>
					</div>
				</div>
			</div>
			<?php include "product-footer.php"; ?>
		</div> <!-- /wrapper -->
	</div>

	<!-- Hamburger Menu + Menu Overlay -->
	<a onclick="openNav()">
		<div id="container">
			<div class="circle"></div>
			<div class="hamburger">
				<img src="../images/icon-menu.svg" alt="Menu">
			</div>
		</div>
	</a>
</body>

</html>

<!-- Scripts-->
<script src="../js/preloader.js" type="text/javascript"></script>
<script src="../js/hamburger.js" type="text/javascript"></script>
<script src="../js/buttontop.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>