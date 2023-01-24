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
						<h2 class="h2-title left"><em class="outline small"><em class="mobilehide"><a class="outline-link" href="../store">Store </a>&nbsp; / &nbsp; </em></em>Starter<em class="outline">.</em></h2>
					</div>
				</div>
			</div> <!-- /hero -->

			<div id="product">
				<div id="product-main">
					<div class="grid" style="margin-bottom: 250px;">
						<div id="store-grid-right" class="grid-2-col col2-right desktophide">
							<div class="grid-2-col-img pakket-pakket-image">
								<img src="../images/product-starter.png" alt="SafeSpace Starter">
							</div>
						</div>
						<div id="store-grid-left" class="grid-2-col col2-left">
							<div class="grid-2-col-text">
								<div id="product-title">
									<h3 class="h3-title white left">SafeSpace Starter</h3>
									<h3 class="h3-title white right thin">€ 99</h3>
								</div>
								<p class="p-text gray left">Perfect om te starten met jouw SafeSpace. Dit pakket
									bevat de essentiële producten die je kunt gebruiken bij
									en aan je voordeur. Met de Lock en Ring krijg en houd je
									een gerust gevoel over de entrance van jouw Space.</p>

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
								<img src="../images/product-starter.png" alt="SafeSpace Starter">
							</div>
						</div>
					</div>
				</div> <!-- /product-main -->

				<br><br><br><br><br><br><br><br>

				<div id="product-info">
					<div class="grid">
						<div id="store-grid-left" class="grid-3-col col3-left mobilehide">
							<div class="grid-3-col-name mobilehide">
								<h3 class="h3-title white left mobilehide marginfix">In dit Pakket</h3>
							</div>
						</div>
						<div id="store-grid-center" class="grid-3-col col3-center mobilehide">
							<div class="grid-3-col-img product-image">
								<img src="../images/product-lock.png" alt="Lock">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Lock</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col col3-right mobilehide">
							<div class="grid-3-col-img product-image">
								<img src="../images/product-ring.png" alt="Ring">
							</div>
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Ring</h3>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left mobilefix">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Pakketinformatie</h3>
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
								<p class="p-text gray left">Het SafeSpace Starter pakket is de ultieme manier om kennis te maken met het
									SafeSpace systeem en de daarbijhorende kwaliteit. Het starterspakket bevat de Lock
									en de Ring. Hiermee beschik je over de ultieme combinatie voor jouw (voor)deur. De
									Lock is op afstand bedienbaar waardoor je altijd en overal je slot open en dicht kan
									doen. Dit is de beste alternatief voor een standaard slot, aangezien je je sleutels niet
									meer kun vergeten of verliezen.
									<br><br>
									De Ring maakt die pakket helemaal af. De Ring is DE deurbel die jij nodig hebt. Wil je
									geen last van die zeurende collectanten of jehova's, of wil jij graag van jouw nachtrust
									kunnen genieten en lekker op zaterdag kunnen uitslapen, dan kun je de Ring op stil
									zetten op bepaalde momenten, net zoals je telefoon.
									<br><br>
									De SafeSpace starter is de beste optie om te starten met SafeSpace producten om
									kennis te maken met het gebruik en de kwaliteit.
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
									<em class="white">SafeSpace Ring</em><br>
									&bull; &nbsp; Eenvoudig te monteren in jouw deurbel <br>
									&bull; &nbsp; Gemakkelijk toe te voegen aan de SafeSpace-app <br>
									&bull; &nbsp; Notificatie wanneer er wordt aangebeld <br>
									&bull; &nbsp; Stiltetijd instellen waarmee de deurbel in de nacht geblokkeerd wordt <br>
									&bull; &nbsp; Goed te combineren met de SafeSpace Lock
								</p>
							</div>
						</div>
						<br><br><br><br><br><br><br><br>

						<div id="upgrade">
							<h2 class="h2-title white center"><em class="outline">Ready for an </em>Upgrade<em class="outline">?</em></h2>

							<div class="grid" style="margin-bottom: 250px;">
								<a href="pro" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
									<div id="store-grid-right" class="grid-2-col col2-right">
										<div class="grid-2-col-img pakket-pakket-image">
											<img src="../images/product-pro.png" alt="SafeSpace Pro">
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
						</div>
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