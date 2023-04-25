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
        <section class="house-rules">
            <div class="house-information-container">
                <div class="rules-page">
                    <h1 class="rules-page__heading">Horses Rules</h1>
                    <div class="rules-page__list">
                        <h3>Rules</h3>
                    </div>
                    <div class="rules-page__list">
                        <div>
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">If a wager is made after the race has started it will not be paid. We reserve the right to cancel any wager due to a ticket being past post or any computer malfunction in the closing time of any race.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">We do not assume responsibility for wagers that are unsuccessfully entered before post time.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">When you wager on a horse that is coupled with other horses, your wager includes all horses running under that number. If a horse is coupled with others, you receive all horses running as a part of the entry. If part of the entry is scratched and the other part of the entry runs, all wagers have action. Online, there is no “must go” action as part of the entry. If one of the entry horses run, all wagers have action.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">There are no house odds. If there are no track payoffs for certain type of wager, all wagers will be refunded.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">If a horse is scratched, all Win/Place/Show wagers will be refunded and the portion of Exacta/Trifecta/Superfecta/Quinella combos that contain the scratched horse will be refunded. (Please see rule regarding entries)</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">For Daily Doubles and Pick 3’s, if a horse is scratched in any leg, you will receive refunds on all the combinations with the scratched horse unless the track pays a consolation prize, in that case you will receive the consolation payoff.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">If a track is on our betting menu, but not listed on the horse track categories, the track defaults to the “D tracks” category with that track’s scheduled payoffs.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">Horse wagers will be graded within 15 minutes of the race being made official. We will not be liable for any loss alleged to result from a delay in grading.</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h3>Types of wagers offered</h3>
                    </div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">We offer wagers on Win, Place, Show, Daily Doubles, Exactas, Quinellas, Trifectas, Superfectas, Pick 3’s, Parlays and Round Robin Parlays.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">We do not offer House Quinellas or If bets on horse races.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">On selected races such as Triple Crown races and Breeders Cup, we offer two horse matchups.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item"> In matchups between two or more named horses, all horses must go for wagers to have action.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">Matchups are determined by horse name. Any track coupling is irrelevant toward determining the winner of a matchup.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">In matchups between one named horse and the field, wagers will have action if and only if the named horse starts. Scratches of horses on the field will not affect the standing of the wager.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">The highest place finisher involved in the matchup will determine the winner of the matchup. If no horse finishes, the matchup will be graded no action.</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">For Triple Crown races, such as Kentucky Derby, Belmont Stakes, Preakness, also the Breeders Cup Classic and the Dubai World cup we offer “A” track limits for wagering and payouts.</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h3>TRACK LIST</h3>
                    </div>
                    <div class="rules-page__list">
                        <h4>A Tracks</h4>
                    </div>
                    <div class="rules-page__list">
                        <h4>Limits</h4>
                    </div>
                    <div class="rules-page__list"><!----></div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">$1000 ACROSS (WIN, PLACE, SHOW)</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">$200 PROPOSITIONS (DOUBLES, EXACTAS, QUINELLAS, PICK3, TRIFECTAS, SUPERFECTAS)</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h4>MAXIMUM PAYOUTS</h4>
                    </div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">WIN 25-1 PLACE 12-1 SHOW 8-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">DOUBLES, QUINELLAS, EXACTAS 200 -1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PICK3, TRIFECTA, SUPERFECTA 400-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PARLAYS WIN 200-1 PLACE 100-1 SHOW 50-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">MAXIMUM NET PROFIT OF $20,000</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <div class="tables-sport-rules">
                            <table>
                                <th style="text-align: -webkit-center;">
                                    <tr>Max Net Profit $30,000</tr>
                                </th>
                                <tbody>
                                    <tr class="colum-3">
                                        <td class="sport-rules__details--list-item"><span>Belmont Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Gulfstream</span></td>
                                        <td class="sport-rules__details--list-item"><span>Saratoga</span></td>
                                        <td class="sport-rules__details--list-item"><span>Churchill Downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Keenland</span></td>
                                        <td class="sport-rules__details--list-item"><span></span></td>
                                        <td class="sport-rules__details--list-item"><span>Del Mar</span></td>
                                        <td class="sport-rules__details--list-item"><span>Santa Anita</span></td>
                                        <td class="sport-rules__details--list-item"><span></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h3>B TRACKS</h3>
                    </div>
                    <div class="rules-page__list">
                        <h4>Limits</h4>
                    </div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">500 ACROSS (WIN, PLACE, SHOW)</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">$100 PROPOSITIONS (DOUBLES, EXACTAS, QUINELLAS, PICK3, TRIFECTAS, SUPERFECTAS)</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h3>MAXIMUM PAYOUTS</h3>
                    </div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">WIN 20-1 PLACE 8-1 SHOW 4-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">DOUBLES, QUINELLAS, EXACTAS 100-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PICK3, TRIFECTAS, SUPERFECTAS 250-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PARLAYS WIN 100-1 PLACE 50-1 SHOW 25-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">MAXIMUM NET PROFIT OF $15,000</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <div class="tables-sport-rules">
                            <table>
                                <th style="text-align: -webkit-center;">
                                    <tr>Max Net Profit $15,000</tr>
                                </th>
                                <tbody>
                                    <tr class="colum-3">
                                        <td class="sport-rules__details--list-item"><span>Aqueduct</span></td>
                                        <td class="sport-rules__details--list-item"><span>Fairplex</span></td>
                                        <td class="sport-rules__details--list-item"><span>Louisiana Downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Arlington</span></td>
                                        <td class="sport-rules__details--list-item"><span>Golden gate fields</span></td>
                                        <td class="sport-rules__details--list-item"><span>Meadowlands</span></td>
                                        <td class="sport-rules__details--list-item"><span>Ellis Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Hawthorne</span></td>
                                        <td class="sport-rules__details--list-item"><span>Monmouth</span></td>
                                        <td class="sport-rules__details--list-item"><span>Lon Star Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Oaklawn Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Pimlico</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h3>C TRACKS</h3>
                    </div>
                    <div class="rules-page__list">
                        <h4>Limits</h4>
                    </div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">WIN 15-1 PLACE 6-1 SHOW 3-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">DOUBLES, QUINELLAS, EXACTAS 50-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PICK3, TRIFECTAS, SUPERFECTAS 100-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PARLAYS WIN 50-1 PLACE 25-1 SHOW 10-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">MAXIMUM NET PROFIT OF $10,000</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <div class="tables-sport-rules">
                            <table>
                                <th style="text-align: -webkit-center;">
                                    <tr>Max Net Profit $10,000</tr>
                                </th>
                                <tbody>
                                    <tr class="colum-3">
                                        <td class="sport-rules__details--list-item"><span>Emerald downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Laurel Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Tampa bay downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Hoosier Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Los Alamitos</span></td>
                                        <td class="sport-rules__details--list-item"><span>Turf paradise</span></td>
                                        <td class="sport-rules__details--list-item"><span>Sam Houston</span></td>
                                        <td class="sport-rules__details--list-item"><span>Woodbine</span></td>
                                        <td class="sport-rules__details--list-item"><span>Turfway Park</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <h3>D TRACKS</h3>
                    </div>
                    <div class="rules-page__list">
                        <h4>Limits</h4>
                    </div>
                    <div class="rules-page__list">
                        <h3>MAXIMUM PAYOUTS</h3>
                    </div>
                    <div class="rules-page__list">
                        <div><!---->
                            <ul class="sport-rules__details--list">
                                <li class="sport-rules__details--list-item">WIN 15-1 PLACE 6-1 SHOW 3-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">DOUBLES, QUINELLAS, EXACTAS 50-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PICK3, TRIFECTAS, SUPERFECTAS 100-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">PARLAYS WIN 50-1 PLACE 25-1 SHOW 10-1</li><!----><!----><!---->
                                <li class="sport-rules__details--list-item">MAXIMUM NET PROFIT OF $5,000</li><!----><!----><!---->
                            </ul>
                        </div>
                    </div>
                    <div class="rules-page__list">
                        <div class="tables-sport-rules">
                            <table>
                                <th style="text-align: -webkit-center;">
                                    <tr>Max Net Profit $5,000</tr>
                                </th>
                                <tbody>
                                    <tr class="colum-3">
                                        <td class="sport-rules__details--list-item"><span>Canterbury downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Mountaineer (change)</span></td>
                                        <td class="sport-rules__details--list-item"><span>Remington</span></td>
                                        <td class="sport-rules__details--list-item"><span>Charles town</span></td>
                                        <td class="sport-rules__details--list-item"><span>Penn national (change)</span></td>
                                        <td class="sport-rules__details--list-item"><span>Sacramento</span></td>
                                        <td class="sport-rules__details--list-item"><span>Colonial downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Pleasanton</span></td>
                                        <td class="sport-rules__details--list-item"><span>Suffolk downs (change)</span></td>
                                        <td class="sport-rules__details--list-item"><span>Delaware Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Prairie meadows</span></td>
                                        <td class="sport-rules__details--list-item"><span>Sunland Park</span></td>
                                        <td class="sport-rules__details--list-item"><span>Evangeline downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Presque Isle Downs</span></td>
                                        <td class="sport-rules__details--list-item"><span>Thistledown</span></td>
                                        <td class="sport-rules__details--list-item"><span>Finger lakes</span></td>
                                        <td class="sport-rules__details--list-item"><span>Retama</span></td>
                                        <td class="sport-rules__details--list-item"><span>Timonium</span></td>
                                        <td class="sport-rules__details--list-item"><span>Fresno</span></td>
                                        <td class="sport-rules__details--list-item"><span></span></td>
                                        <td class="sport-rules__details--list-item"><span></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                <div><a href="sportsbook.php">SPORTBOOK</a></div>
                <div><a href="racebook.php">RACEBOOK</a></div>
                <div><a href="livebetting.php">LIVE BETTING</a></div>
                <div><a href="casino.php">CASINO</a></div>
                <div><a href="houserules.php">HOUSE RULES</a></div>
                <div><a href="sportsrules.php">SPORTS RULES</a></div>
                <div><a href="horserules.php">HORSE RULES</a></div>
                <div><a href="horsetracks.php">HORSE TRACKS</a></div>
                <div><a href="https://agents.playcr.ag/AgentSiteV2/" target="_blank">AGENTS</a></div>
                <!-- <div><a href="https://adm.playcr.ag/" target="_blank">AGENTS NEW</a></div> -->
                <div><a href="tel:+18004142203">1-800-414-2203</a></div>
                <div><a href="tel:+18886064182">1-888-606-4182</a></div>
                <div><a href="tel:+18668954647">1-866-895-4647</a></div>
            </section>
        </div>
    </footer>
    <script src="https://images.betimages.com/Betslip/js/quick.login.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>