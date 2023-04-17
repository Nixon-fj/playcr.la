<?php

require_once "./conf.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sitio de apuestas playcr">
    <link rel="shortcut icon" href="./img/icons/fav.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active carriusel-item-container">
                    <div class="carrousel-main">
                        <div class="carrousel-main-containerInfo">
                            <h2>BET ON SPORTS LIVE WAGER</h2>
                        </div>
                        <div class="carrousel-main-containerImg"><img src="./img/home/player.png" alt="sports" width="100%" height="auto">
                        </div>

                    </div>

                </div>
                <div class="carousel-item carriusel-item-container">
                    <div class="carrousel-main">
                        <div class="carrousel-main-containerInfo">
                            <h2>RACEBOOK</h2>
                        </div>
                        <div class="carrousel-main-containerImg"><img src="./img/home/horse.png" alt="sports" width="100%" height="auto">
                        </div>

                    </div>

                </div>
                <div class="carousel-item carriusel-item-container">
                    <div class="carrousel-main">
                        <div class="carrousel-main-containerInfo">
                            <h2>ONLINE CASINO</h2>
                        </div>
                        <div class="carrousel-main-containerImg"><img src="./img/home/casino elemnts.png" alt="sports" width="100%" height="auto">
                        </div>

                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="cardsContainer d-none d-md-flex">
            <a href="sportsbook.php" class="cardsContainer-item">
                <div class="cardsContainer-item-info">
                    <p>SPORTS</p>
                </div>
                <div class="cardsContainer-item-img">
                    <img src="./img/home/player 02.png" alt="sports">
                </div>
            </a>
            <a href="casino.php" class="cardsContainer-item">
                <div class="cardsContainer-item-info">
                    <p>CASINO</p>
                </div>
                <div class="cardsContainer-item-img">
                    <img src="./img/home/casino elemnts 02.png" alt="casino">
                </div>
            </a>
            <a href="racebook.php" class="cardsContainer-item">
                <div class="cardsContainer-item-info">
                    <p>RACEBOOK</p>
                </div>
                <div class="cardsContainer-item-img">
                    <img src="./img/home/horse 02.png" alt="RACEBOOK">
                </div>
            </a>
        </div>
        <div id="carouselExamplemobile" class="carousel slide d-none d-md-block d-xl-none carrousel-mobile" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-container">
                        <div class="cards-wrapper">
                            <a href="sportsbook.php" class="cardsContainer-item">
                                <div class="cardsContainer-item-info">
                                    <p>SPORTS</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/player 02.png" alt="sports">
                                </div>
                            </a>
                            <a href="casino.php" class="cardsContainer-item">
                                <div class="cardsContainer-item-info">
                                    <p>CASINO</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/casino elemnts 02.png" alt="casino">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-container">
                        <div class="cards-wrapper">
                            <a href="racebook.php" class="cardsContainer-item race">
                                <div class="cardsContainer-item-info">
                                    <p>RACEBOOK</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/horse 02.png" alt="RACEBOOK">
                                </div>
                            </a>
                            <a href="sportsbook.php" class="cardsContainer-item sports">
                                <div class="cardsContainer-item-info">
                                    <p>SPORTS</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/player 02.png" alt="sports">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExamplemobile" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExamplemobile" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <div id="carouselExamplecell" class="carousel slide d-md-none carrousel-cell" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-container">
                        <div class="cards-wrapper">
                            <a href="sportsbook.php" class="cardsContainer-item">
                                <div class="cardsContainer-item-info">
                                    <p>SPORTS</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/player 02.png" alt="sports">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-container">
                        <div class="cards-wrapper">
                            <a href="casino.php" class="cardsContainer-item">
                                <div class="cardsContainer-item-info">
                                    <p>CASINO</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/casino elemnts 02.png" alt="casino">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-container">
                        <div class="cards-wrapper">
                            <a href="racebook.php" class="cardsContainer-item race">
                                <div class="cardsContainer-item-info">
                                    <p>RACEBOOK</p>
                                </div>
                                <div class="cardsContainer-item-img">
                                    <img src="./img/home/horse 02.png" alt="RACEBOOK">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExamplecell" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExamplecell" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
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
                <div><a href="sportsbook.php">SPORTBOOK</a></div>
                <div><a href="racebook.php">RACEBOOK</a></div>
                <div><a href="livebetting.php">LIVE BETTING</a></div>
                <div><a href="casino.php">CASINO</a></div>
                <div><a href="houserules.php">HOUSE RULES</a></div>
                <div><a href="sportsrules.php">SPORTS RULES</a></div>
                <div><a href="horsetracks.php">HORSE TRACKS</a></div>
                <div><a href="https://agents.playcr.la/AgentSiteV2/">AGENTS CLASSIC</a></div>
                <div><a href="https://adm.playcr.la/">AGENTS NEW</a></div>
                <div>1-877-265-9110</div>
                <div>1-888-991-9060</div>
                <div>1-866-895-4647</div>
            </section>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>