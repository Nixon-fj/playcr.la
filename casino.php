<?php

require_once "./conf.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/fav.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Play CR</title>
</head>

<body>
    <nav class="topMenu">
        <div class="topMenu-container">
            <a href="index.php" class="topMenu-container-imgContainer">
                <img src="./img/home/logo.svg" alt="Logo" width="100%" height="100%">
            </a>
            <div class="topMenu-container-options d-none d-lg-flex justify-content-center">
                <ul>
                    <li><a href="sportsbook.php">SPORTBOOK</a></li>
                    <li><a href="livewagering.php">LIVE WAGERING</a></li>
                    <li><a href="casino.php">CASINO</a></li>
                    <li><a href="prop-builder.php">PROPS BUILDER</a></li>
                    <li><a href="racebook.php">RACEBOOK</a></li>
                </ul>
            </div>
            <div class="topMenu-container-buttonContainer">
                <div id="loginD" class="d-none d-lg-block">
                    <form id="login-form" name="login-form" class="form-login d-flex" action="<?php echo LOGIN_URL; ?>" method="post"> <input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
                        <input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>?login-error"/>
                        <div class="d-flex">
                            <input type="text" id="account" name="account" value="" placeholder="Username" class="form-login__input"/>
                            <input type="password" id="password" name="password" value="" placeholder="Password" class="form-login__input"/>
                        </div>
                        <div>
                            <button type="submit" class="topMenu-container-buttonContainer-button" id="login-form-submit" name="login-form-submit" value="login">LOGIN</button>
                        </div>
                    </form>
                </div>
                <!-- ********************************mobile************************************************ -->

                <div id="loginM" class="d-block d-lg-none">
                    <form id="login-form" name="login-form" class="form-login d-flex" action="<?php echo M_LOGIN_URL; ?>" method="post"><input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
                        <input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>?login-error" />
                        <div class="d-flex">
                            <input type="text" id="account" name="account" placeholder="Username" class="form-login__input" />
                            <input type="password" id="password" name="password" placeholder="Password" class="form-login__input" />
                        </div>
                        <div class="">
                            <button type="submit" class="topMenu-container-buttonContainer-button" id="login-form-submit" name="login-form-submit" value="login">LOGIN</button>
                        </div>
                    </form>
                </div>


                <a href="betslip.php" class="topMenu-container-buttonContainer-button betslip">BETSLIP</a>
            </div>
        </div>
    </nav>
    <main role="main">
        <!-- <div class="main-banner main-banner-casino">
            <div class="main-banner-content">
                <div class="main-banner-content-containerInfo">
                    <h2>CASINO ONLINE</h2>
                </div>
                <div class="main-banner-content-containerImg"><img src="./img/casino/Casino_elements.png" alt="sports"
                        width="100%" height="auto">
                </div>
            </div>
        </div> -->
        <section class="casino-games">
            <div class="casino-information-container">
                <h2>Playcr real money casino deals up the latest and greatest casino software for players to enjoy.
                </h2>
                <p>Experience the same excitement as you would in Vegas, Atlantic City or Monte Carlo in the comfort of
                    your home, office or on the road. Players looking to only play casino games can take advantage of
                    our huge 100% casino bonus offer. Start your winning streak today by joining Playcr.</p>
            </div>
            <div class="casino-games__layout">
                <div class="casino-games__layout--col1">
                    <div class="casino-games__layout--grid"><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/live-game.png"
                                alt="Juegos en vivo">
                            <h3 class="casino-games__layout--h3">LIVE GAMES</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/table-games.png"
                                alt="Juegos de mesa">
                            <h3 class="casino-games__layout--h3">TABLE GAMES</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/slots.png" alt="Slots">
                            <h3 class="casino-games__layout--h3">SLOTS</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/3d-slots.png" alt="3D Slots">
                            <h3 class="casino-games__layout--h3">SLOTS 3D</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/video-poker.png"
                                alt="Video Poker">
                            <h3 class="casino-games__layout--h3">VIDEO POKER</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/virtual-sports.png"
                                alt="Deportes Virtuales">
                            <h3 class="casino-games__layout--h3">VIRTUAL SPORTS</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/bingo.png" alt="Bingo">
                            <h3 class="casino-games__layout--h3">BINGO</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/keno.png" alt="Keno">
                            <h3 class="casino-games__layout--h3">KENO</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/scratch.png"
                                alt="Tarjetas de raspar">
                            <h3 class="casino-games__layout--h3">SCRATCH CARDS</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/fixed-odds.png"
                                alt="Apuetas fijas">
                            <h3 class="casino-games__layout--h3">FIXED ODDS</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/other-games.png"
                                alt="Otros juegos">
                            <h3 class="casino-games__layout--h3">OTHER GAMES</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/blackjack.png" alt="Blackjack">
                            <h3 class="casino-games__layout--h3">BLACKJACK</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/roulette.png" alt="Ruleta">
                            <h3 class="casino-games__layout--h3">ROULETTE</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/poker.png" alt="Poker">
                            <h3 class="casino-games__layout--h3">POKER</h3>
                        </a><a class="casino-games__layout--card" href="betslip.php"><img
                                class="casino-games__layout--card-img" src="img/casino/rummy.png" alt="Rummy">
                            <h3 class="casino-games__layout--h3">RUMMY</h3>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <div class="footerNav d-flex d-lg-none">
        <div class="topMenu-container">
            <div class="topMenu-container-options">
            <ul>
                    <li><a href="sportsbook.php">
                            <div class="icon-container"><img src="./img/icons/sports.svg" alt="sportsbook"></div>
                            SPORTS
                        </a></li>
                    <li><a href="livewagering.php">
                        <div class="icon-container "><img src="./img/icons/live.svg" alt="WAGERING"></div>
                        LIVE WAGERING
                    </a></li>
                    <li><a href="casino.php">
                            <div class="icon-container"><img src="./img/icons/casino.svg" alt="casino"></div>
                            CASINO
                        </a></li>
                    <li><a href="prop-builder.php">
                        <div class="icon-container"><img src="./img/icons/icon-props.svg" alt="casino"></div>
                        PROPS BUILDER
                    </a></li>
                    <li><a href="racebook.php">
                            <div class="icon-container horse"><img src="./img/icons/racebook.svg" alt="racebook"></div>
                            RACEBOOK
                        </a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <a href="index.php">
            <img src="./img/home/logo.svg" alt="logo">
        </a>
        <div class="footer-list">
            <section>
                <ul class="footer-list--col col-12 col-md-3">
                    <li><a class="footer-list--link" href="sportsbook.php">SPORTBOOK</a></li>
                    <li><a class="footer-list--link" href="racebook.php">RACEBOOK</a></li>
                    <li><a class="footer-list--link" href="livebetting.php">LIVE BETTING</a></li>
                </ul>
                <ul class="footer-list--col col-12 col-md-3">
                    <li><a class="footer-list--link" href="houserules.php">HOUSE RULES</a></li>
                    <li><a class="footer-list--link" href="sportsrules.php">SPORTS RULES</a></li>
                    <li><a class="footer-list--link" href="horserules.php">HORSE RULES</a></li>
                </ul>
                <ul class="footer-list--col col-12 col-md-3">
                    <li><a class="footer-list--link" href="casino.php">CASINO</a></li>
                    <!-- <li><a href="horsetracks.php">HORSE TRACKS</a></li> -->
                    <!-- <li><a class="footer-list--link" href="https://agents2.wagerstore.com/" target="_blank">AGENTS</a></li> -->
                    <!-- <li><a class="footer-list--link" href="https://agents.playcr.ag/AgentSiteV2/" target="_blank">AGENTS</a></li> -->
                    <li><a class="footer-list--link" href="http://agents.playcr.ag/" target="_blank">AGENTS</a></li>
                </ul>
                <ul class="footer-list--col col-12 col-md-3">
                    <li><a class="footer-list--link" href="tel:+18004142203">1-800-414-2203</a></li>
                    <li><a class="footer-list--link" href="tel:+18886064182">1-888-606-4182</a></li>
                    <li><a class="footer-list--link" href="tel:+18668954647">1-866-895-4647</a></li>
                </ul>
            </section>
        </div>
    </footer>
    <script src="https://images.betimages.com/Betslip/js/quick.login.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>