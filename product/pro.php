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
						<h2 class="h2-title left"><em class="outline small"><em class="mobilehide"><a class="outline-link" href="../store">Store </a>&nbsp; / &nbsp; </em></em>Pro<em class="outline">.</em></h2>
					</div>
				</div>
			</div> <!-- /hero -->

			<div id="product">
				<div id="product-main">
					<div class="grid" style="margin-bottom: 200px;">
						<div id="store-grid-right" class="grid-2-col col2-right desktophide">
							<div class="grid-2-col-img pakket-pakket-image">
								<img src="../images/product-pro.png" alt="SafeSpace Pro">
							</div>
						</div>
						<div id="store-grid-left" class="grid-2-col col2-left">
							<div class="grid-2-col-text">
								<div id="product-title">
									<h3 class="h3-title white left">SafeSpace Pro</h3>
									<h3 class="h3-title white right thin">€ 499</h3>
								</div>
								<p class="p-text gray left">Ga een stap verder, ga voor Pro. Met dit pakket ben je
									verzekerd van al onze nieuwe, innovatieve producten die
									op 6 manieren jouw Space bewaken. Dankzij onze
									Support is hulp altijd dichtbij.</p>

								<div id="hero-text-button" class="left">
									<a onclick="cart()" class="button-blue left">Bestel pakket</a>
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
									Pakket is op voorraad.</p>
							</div>
						</div>
						<div id="store-grid-right" class="grid-2-col col2-right mobilehide">
							<div class="grid-2-col-img pakket-image">
								<img src="../images/product-pro.png" alt="SafeSpace Pro">
							</div>
						</div>
					</div>
				</div> <!-- /product-main -->

				<div id="product-info">
					<div class="grid">
						<div class="grid-3-col-name mobilehide">
							<h3 class="h3-title white left mobilehide marginfix">In dit Pakket</h3>
						</div>
						<br><br><br><br><br>
						<div id="store-grid-left" class="grid-3-col col3-left mobilehide">
							<div class="grid-3-col-img product-image mobilehide">
								<img src="../images/product-lock.png" alt="Lock">
							</div>
							<div class="grid-3-col-name mobilehide">
								<h3 class="h3-title white left mobilehide">Lock</h3>
							</div>
						</div>
						<div id="store-grid-center" class="grid-3-col col3-center mobilehide">
							<div class="grid-3-col-img product-image">
								<img src="../images/product-motion.png" alt="Motion">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">2x &nbsp; Motion</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col col3-right mobilehide">
							<div class="grid-3-col-img product-image">
								<img src="../images/product-cam.png" alt="Cam">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">3x &nbsp; Cam</h3>
							</div>
						</div>

						<br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left mobilehide">
							<div class="grid-3-col-img product-image mobilehide">
								<img src="../images/product-ring.png" alt="Ring">
							</div>
							<div class="grid-3-col-name mobilehide">
								<h3 class="h3-title white left mobilehide">Ring</h3>
							</div>
						</div>

						<div id="store-grid-center" class="grid-3-col col3-center mobilehide">
							<div class="grid-3-col-img product-image">
								<img src="../images/product-thermostat.png" alt="Thermostat">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Thermostat</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col col3-right mobilehide">
							<div class="grid-3-col-img product-image">
								<img src="../images/product-server.png" alt="Server">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Server</h3>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left mobilefix">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left ">Pakketinformatie</h3>
							</div>
						</div>

						<style type="text/css">
							@media only screen and (max-width: 1250px) {
								.mobilefix {
									margin-top: -300px !important;
								}

								.mobilefix2 {
									margin-top: -220px !important;
								}
							}
						</style>

						<div id="store-grid-right" class="grid-3-col-product col3-right mobilefix2">
							<div class="grid-3-col-text">
								<p class="p-text gray left">Het SafeSpace Pro pakket is het ultieme pakket voor een Smart Home Security systeem. Het Pro pakket is inclusief alle producten die worden gemaakt en geleverd door SafeSpace. Dit Pro pakket is een regelrechte upgrade op het starterspakket, maar de upgrade is het helemaal waard.
									<br><br>
									Bij het Pro pakket zit de Server inbegrepen. Deze Server werkt naadloos samen met de andere producten van SafeSpace. Alle data die de individuele producten verzamelen wordt opgeslagen op deze Server. Je kunt zelfs tot wel 120 dagen(!) kijktijd van de Cams terugkijken.
									<br><br>
									Het Pro pakket is daarom een must-have voor iedereen die zijn Space wil beveiliging en/of geïnteresseerd is in de data van zijn/haar Space. Het is zeker een verbetering op het Starterspakket, en het is de best mogelijke beveiliging voor uw Space, maar ook het toegevoegde gemak is het waard.
								</p>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Specificaties</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col-product col3-right">
							<div class="grid-3-col-text">
								<p class="p-text gray left">
									<em class="white">SafeSpace Lock</em><br>
									&bull; &nbsp; Gemakkelijk te installeren <br>
									&bull; &nbsp; Eenvoudig te bedienen met onze app <br>
									&bull; &nbsp; Werkt met vrijwel ieder Nederlands deurslot <br>
									&bull; &nbsp; Ook met een fysieke knop te bedienen <br>
									&bull; &nbsp; Controle over je voordeur <br>
									<br>
									<em class="white">SafeSpace Motion</em><br>
									&bull; &nbsp; Overal in huis te gebruiken <br>
									&bull; &nbsp; Simpel toe te voegen aan de SafeSpace-app <br>
									&bull; &nbsp; Notificatie wanneer een beweging is in je huis <br>
									&bull; &nbsp; Aanpasbare tijden waarop de Motion actief is <br>
									&bull; &nbsp; Bewegingsgeschiedenis terug te zien in de app <br>
									&bull; &nbsp; Gemakkelijk te combineren met andere SafeSpace producten<br>
									<br>
									<em class="white">SafeSpace Cam</em><br>
									&bull; &nbsp; SafeSpace HD beveiligingscamera <br>
									&bull; &nbsp; Altijd en overal even rondkijken in je Space <br>
									&bull; &nbsp; Start automatisch met opnemen bij beweging <br>
									&bull; &nbsp; Eenvoudig toe te voegen aan de app <br>
									&bull; &nbsp; Tot wel 120 dagen aan opnames terugkijken <br>
									<br>
									<em class="white">SafeSpace Ring</em><br>
									&bull; &nbsp; Eenvoudig te monteren in jouw deurbel <br>
									&bull; &nbsp; Gemakkelijk toe te voegen aan de SafeSpace-app <br>
									&bull; &nbsp; Notificatie wanneer er wordt aangebeld <br>
									&bull; &nbsp; Stiltetijd instellen waarmee de deurbel in de nacht geblokkeerd wordt <br>
									&bull; &nbsp; Goed te combineren met de SafeSpace Lock <br>
									<br>
									<em class="white">SafeSpace Thermostat</em><br>
									&bull; &nbsp; Gemakkelijk te installeren aan je muur <br>
									&bull; &nbsp; Werkt naadloos in de SafeSpace-app <br>
									&bull; &nbsp; Notificatie bij een ongewenste situatie <br>
									&bull; &nbsp; Snel handelen in geval van nood <br>
									&bull; &nbsp; Handige tips om meer uit je SafeSpace Thermostat te halen <br>
									<br>
									<em class="white">SafeSpace Server</em><br>
									&bull; &nbsp; Genoeg opslag om tot wel 120 dagen aan videobeelden op te slaan <br>
									&bull; &nbsp; Eenvoudig beelden terugkijken via de SafeSpace-app <br>
									&bull; &nbsp; Alle beelden zijn beveiligd met de nieuwste technologiën <br>
									&bull; &nbsp; Alleen beschikbaar binnen jouw eigen wifinetwerk <br>
									&bull; &nbsp; Encryptie en versleuteling ingebouwd
								</p>
							</div>
						</div>
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