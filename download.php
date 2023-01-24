<!doctype html>
<html>

<head>
    <title>SafeSpace Downloads</title>
    <link href="css/about-styles.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
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
                        <h2 class="h2-title left"><em class="outline">Let's </em>Get Started<em class="outline">.</em></h2>
                    </div>
                </div>
            </div> <!-- /hero -->

            <?php
            $user_agent = $_SERVER['HTTP_USER_AGENT'];

            function getOS()
            {
                global $user_agent;

                $os_platform  = "Unknown OS Platform";
                $os_array     = array(
                    '/windows nt 10/i'      =>  'Windows',
                    '/windows nt 6.3/i'     =>  'Windows',
                    '/windows nt 6.2/i'     =>  'Windows',
                    '/windows nt 6.1/i'     =>  'Windows',
                    '/windows nt 6.0/i'     =>  'Windows',
                    '/windows nt 5.2/i'     =>  'Windows',
                    '/windows nt 5.1/i'     =>  'Windows Server',
                    '/windows xp/i'         =>  'WIndows XP',
                    '/windows nt 5.0/i'     =>  'Windows Server',
                    '/windows me/i'         =>  'Windows ME',
                    '/win98/i'              =>  'Windows 98',
                    '/win95/i'              =>  'Windows 95',
                    '/win16/i'              =>  'Windows 16',
                    '/macintosh|mac os x/i' =>  'macOS',
                    '/mac_powerpc/i'        =>  'macOSold',
                    '/linux/i'              =>  'Linux',
                    '/ubuntu/i'             =>  'Ubuntu',
                    '/iphone/i'             =>  'iPhone',
                    '/ipod/i'               =>  'iPod',
                    '/ipad/i'               =>  'iPad',
                    '/android/i'            =>  'Android',
                    '/blackberry/i'         =>  'BlackBerry',
                    '/webos/i'              =>  'Mobile'
                );

                foreach ($os_array as $regex => $value)
                    if (preg_match($regex, $user_agent))
                        $os_platform = $value;

                return $os_platform;
            }

            $user_os        = getOS();

            $device_details = $user_os;

            // print_r($device_details);
            ?>

            <div id="download">
                <div id="product-main">
                    <div class="grid" style="margin-bottom: 200px;">
                        <div id="store-grid-left" class="grid-2-col col2-left center mobilehide">
                            <div class="grid-2-col-text">
                                <div id="product-title">
                                    <h3 class="h3-title white left">SafeSpace Desktop</h3>
                                </div>
                                <p class="p-text gray left">Met de SafeSpace Desktop Controller voor Windows
                                    beheer je jouw SafeSpace met gemak. Voeg je
                                    SafeSpace producten toe aan de applicatie en je kunt
                                    meteen aan de slag.</p>

                                <div id="hero-text-button" class="left">
                                    <a onclick="message()" id="download-desktop" class="button-blue left">Download voor <?php echo $device_details; ?> </a>
                                </div>

                                <script type="text/javascript">
                                    function message() {
                                        var platform = "<?php echo $device_details; ?>";

                                        if (platform == "Windows") {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Bedankt!',
                                                text: 'De SafeSpace Desktop Controller wordt nu gedownload! Klik op het installatiebestand om aan de slag te gaan.',
                                            })
                                            // window.location.href = "files/";
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oh nee...',
                                                text: 'De SafeSpace Desktop Controller is alleen beschikbaar voor Windows. Jouw systeem wordt momenteel nog niet ondersteund.',
                                            })
                                        }
                                    }
                                </script>
                            </div>
                        </div>

                        <div id="store-grid-right" class="grid-2-col col2-right center">
                            <div class="grid-2-col-text">
                                <div id="product-title">
                                    <h3 class="h3-title white left">SafeSpace Mobile</h3>
                                </div>
                                <p class="p-text gray left">Met de SafeSpace Mobile app voor iOS en Android
                                    beheer je jouw SafeSpace met ook onderweg en via je
                                    mobiele telefoon. Instellen in super simpel, download
                                    de app nu!</p>

                                <div id="hero-text-button" class="left" style="margin-top: 68px;">
                                    <a onclick="iosmessage()" class="button left" style="margin-right: 30px;">&nbsp; &nbsp; iOS &nbsp; &nbsp; </a>
                                    <a onclick="androidmessage()" class="button left">Android</a>
                                </div>

                                <script type="text/javascript">
                                    function iosmessage() {
                                        var platform = "<?php echo $device_details; ?>";

                                        if (platform == "iPhone" || platform == "iPad" || platform == "iPod") {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Bedankt!',
                                                text: 'Ga nu naar de App Store om de SafeSpace-app te downloaden.',
                                            })
                                            // window.location.href = "files/";
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oh nee...',
                                                text: 'De SafeSpace app voor iPhone is alleen beschikbaar voor iOS. Jouw systeem wordt momenteel nog niet ondersteund. Een Android toestel? Klik dan op de Android download knop.',
                                            })
                                        }
                                    }

                                    function androidmessage() {
                                        var platform = "<?php echo $device_details; ?>";

                                        if (platform == "Android") {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Bedankt!',
                                                text: 'Ga nu naar de Play Store om de SafeSpace-app te downloaden.',
                                            })
                                            // window.location.href = "files/";
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oh nee...',
                                                text: 'De SafeSpace app voor Android is alleen beschikbaar voor Android. Jouw systeem wordt momenteel nog niet ondersteund. Een iPhone? Klik dan op de iOS download knop.',
                                            })
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div> <!-- /product-main -->

                <div id="download-visual">
                    <img src="images/product-pro.png" alt="SafeSpace Pro">
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
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/hamburger.js" type="text/javascript"></script>
<script src="js/buttontop.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>