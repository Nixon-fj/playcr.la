<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/icons/fav.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/styles.css" />
    <title>playcr</title>
</head>

<body>
    <nav class="topMenu">
        <div class="topMenu-container">
            <a href="index.php" class="topMenu-container-imgContainer">
                <img src="./img/home/logo.svg" alt="Logo" width="100%" height="100%" />
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
                    <form id="login-form" name="login-form" class="form-login d-flex" action="<?php echo LOGIN_URL; ?>" method="post"> <input type="hidden" name="952" id="952" value="<?php echo DGS_SITEID; ?>" />
                        <input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>/?login-error" />
                        <div class="d-flex">
                            <input type="text" id="account" name="account" value="" placeholder="Usuario" class="form-login__input" />
                            <input type="password" id="password" name="password" value="" placeholder="Contrase&ntilde;a" class="form-login__input" />
                        </div>
                        <div class="">
                            <button type="submit" class="topMenu-container-buttonContainer-button" id="login-form-submit" name="login-form-submit" value="login">Acceder</button>
                        </div>
                    </form>
                </div>
                <!-- ********************************mobile************************************************ -->

                <div id="loginM" class="d-block d-lg-none">
                    <form id="login-form" name="login-form" class="form-login d-flex" action="<?php echo M_LOGIN_URL; ?>" method="post">   <input type="hidden" name="952" id="952" value="<?php echo DGS_SITEID; ?>" />
                        <input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>/?login-error" />
                        <div class="d-flex">
                            <input type="text" id="account" name="account" placeholder="Usuario" class="form-login__input" />
                            <input type="password" id="password" name="password" placeholder="Contrase&ntilde;a" class="form-login__input" />
                        </div>
                        <div class="">
                            <button type="submit" class="topMenu-container-buttonContainer-button" id="login-form-submit" name="login-form-submit" value="login">Acceder</button>
                        </div>
                    </form>
                </div>


                <a href="betslip.php" class="topMenu-container-buttonContainer-button betslip">BETSLIP</a>
            </div>
        </div>
    </nav>
    <main role="main">
        <div class="rules">
            <h1 class="rules__h1">sports rules</h1>
            <div class="rules__container">
                <div class="rules__list">
                    <ul class="rules__list--ul">
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#football">football</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#basketball">basketball</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#baseball">baseball</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#Hockey">Hockey</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#soccer">soccer</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#golf">golf</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#boxeo">Boxeo</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#tennis">tennis</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#autorancing">autorancing</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#rugby">rugby</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#australian-rules">australian rules</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#cricket">cricket</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#olympic-rules">olympic rules</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#water-polo">water polo</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#handball">Handball</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#volleyball">Volleyball</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#liveInGame">Live in game lines wagering</a>
                        </li>
                        <li class="rules__list--li">
                            <a class="rules__list--a" href="#parleyCards">Parlay Cards</a>
                        </li>
                    </ul>
                </div>
                <h2>
                    The following table tells you when a game becomes official for
                    betting purposes:
                </h2>
                <div class="container__slider">
                    <div class="tns-single rules__container--slider" id="tnsSlider">
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Pro Football</li>
                            <li class="rules__container--slider-li2">55 minutes of play</li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">College Football</li>
                            <li class="rules__container--slider-li2">55 minutes of play</li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Basketball</li>
                            <li class="rules__container--slider-li2">
                                All competitions/leagues except the NBA must go at least 35
                                minutes for action unless otherwise specified.
                            </li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Pro Basketball</li>
                            <li class="rules__container--slider-li2">43 minutes of play</li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">College Basketball</li>
                            <li class="rules__container--slider-li2">35 minutes of play</li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Hockey</li>
                            <li class="rules__container--slider-li2">55 minutes of play</li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Baseball Sides</li>
                            <li class="rules__container--slider-li2">
                                5 innings complete (4 1/2 if the home team is winning)
                            </li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Baseball Totals</li>
                            <li class="rules__container--slider-li2">
                                9 innings complete (8 1/2 if the home team is winning)
                            </li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Run Lines</li>
                            <li class="rules__container--slider-li2">
                                9 innings complete (8 1/2 if the home team is winning)
                            </li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Tennis</li>
                            <li class="rules__container--slider-li2">One ball served</li>
                        </ul>
                        <ul class="rules__container--slider-ul">
                            <li class="rules__container--slider-li1">Soccer</li>
                            <li class="rules__container--slider-li2">
                                If a match is suspended before full time is reached, and not
                                completed the same day, wagers on the outcome of the match are
                                considered void and all wagers will be refunded. Includes Goal
                                Lines, Money lines and Totals.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rules__container-div display">
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Pro Football</li>
                        <li class="rules__container--slider-li2">55 minutes of play</li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">College Football</li>
                        <li class="rules__container--slider-li2">55 minutes of play</li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Basketball</li>
                        <li class="rules__container--slider-li2">
                            All competitions/leagues except the NBA must go at least 35
                            minutes for action unless otherwise specified.
                        </li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Pro Basketball</li>
                        <li class="rules__container--slider-li2">43 minutes of play</li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">College Basketball</li>
                        <li class="rules__container--slider-li2">35 minutes of play</li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Hockey</li>
                        <li class="rules__container--slider-li2">55 minutes of play</li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Baseball Sides</li>
                        <li class="rules__container--slider-li2">
                            5 innings complete (4 1/2 if the home team is winning)
                        </li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Baseball Totals</li>
                        <li class="rules__container--slider-li2">
                            9 innings complete (8 1/2 if the home team is winning)
                        </li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Run Lines</li>
                        <li class="rules__container--slider-li2">
                            9 innings complete (8 1/2 if the home team is winning)
                        </li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Tennis</li>
                        <li class="rules__container--slider-li2">One ball served</li>
                    </ul>
                    <ul class="rules__container--ul">
                        <li class="rules__container--slider-li1">Soccer</li>
                        <li class="rules__container--slider-li2">
                            If a match is suspended before full time is reached, and not
                            completed the same day, wagers on the outcome of the match are
                            considered void and all wagers will be refunded. Includes Goal
                            Lines, Money lines and Totals.
                        </li>
                    </ul>
                </div>
                <div class="accordion-container ed-grid">
                    <h2>Related to Sporting Events</h2>
                    <ul>
                        <li>
                            All sporting events must be played on date and site scheduled
                            unless otherwise specified. Exceptions: Auto Racing, Golf,
                            Tennis, MMA, UFC and Boxing.
                        </li>
                        <li>
                            Auto Racing, Golf,Tennis, MMA, UFC and Boxing are not subject to
                            this rule. The wagers will remain valid subject to the Ruling
                            Body of each sport cancelling the event.
                        </li>
                        <li>
                            If any event is postponed and/or rescheduled, the event will
                            automatically constitute &quot;no action&quot;.
                        </li>
                        <li>
                            We do not recognize suspended games, protests or overturned
                            decisions for wagering purposes.
                        </li>
                        <li>
                            Las Vegas rules apply to any wager not covered by rules and
                            regulations in here.
                        </li>
                        <li>
                            For Cycling events riders might be issued the same time but they
                            will be issued an order of finish that is decided by photo
                            finish. Results will be taken from the official finishing
                            position in the events main web site.
                        </li>
                        <li>
                            For all props on players or teams we will use the official
                            website of the sporting event to declare the winner. Examples:
                            WWW.NFL.COM, WWW.NBA.COM etc. For events that do not have an
                            associated website we will use WWW.ESPN.COM for results.
                        </li>
                    </ul>
                    <h2>FOR ALL SPORTS AND EVENTS:</h2>
                    <ul>
                        <li>
                            <p>
                                We reserve the right to cancel any wager accepted when the
                                line was obviously posted incorrectly. (BAD LINE RULE)
                            </p>
                        </li>
                        <li>
                            <p>
                                Wagers will also be cancelled when there is proof of cheating,
                                attempted hacking or knowledgeable deceit. (CHEATING RULE)
                            </p>
                        </li>
                        <li>
                            <p>
                                We also reserve the right to cancel wagers placed after a game
                                is final or an outcome can be deduced from the score. (BAD
                                TIME RULE)
                            </p>
                        </li>
                        <li>
                            <p>
                                Matchups that are posted incorrectly will be automatically
                                cancelled. These include wrong participants and matchup
                                incorrectly entered into the system. (WRONG MATCHUP RULE)
                            </p>
                        </li>
                    </ul>

                    <div class="accordion v1">
                        <div class="a-container">
                            <p class="a-btn" id="football">football <span></span></p>
                            <div class="a-panel">
                                <ul>
                                    <li>
                                        Bets are considered official esportfter 55 minutes of plesportsy. If
                                        55 minutes of play have not being completed, a bet on the
                                        team is treated as no action, and a parlay or teaser bet
                                        will be reduced accordingly.
                                    </li>
                                    <li>
                                        Bets on 1st, 2nd half' and all quarters will be considered
                                        action and will be graded upon completion of the period in
                                        question.
                                    </li>
                                    <li>
                                        Bets on spread, money line, totals for the whole game and
                                        all bets on second halves always include overtime scoring.
                                    </li>
                                    <li>
                                        Bets for 4th quarter do not include overtime scoring.
                                    </li>
                                    <li>Team totals for the second half include overtime.</li>
                                    <li>
                                        Double result pools consist of the winner of the 1st half
                                        and the winner of the game.
                                    </li>
                                    <li>
                                        1st scoring play and margin of victory pools include
                                        overtime. Double result pools include overtime only in
                                        REGULAR SEASON.
                                    </li>
                                    <li>
                                        In the event that the Super Bowl date and/or venue is
                                        changed due to severe weather conditions, all existing
                                        open bets on the game and on the game's related bets
                                        (props) will be considered action and stand until the game
                                        is played.
                                    </li>
                                </ul>
                                <table class="table-sports" aria-describedby="NFL Teasers">
                                    <th>NFL Teasers:</th>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>6 POINT</td>
                                            <td>6 ½ POINT</td>
                                            <td>7 POINT</td>
                                        </tr>
                                        <tr>
                                            <td>2 TEAMS</td>
                                            <td>120/100</td>
                                            <td>130/100</td>
                                            <td>140/100</td>
                                        </tr>
                                        <tr>
                                            <td>3 TEAMS</td>
                                            <td>100/155</td>
                                            <td>100/135</td>
                                            <td>100/120</td>
                                        </tr>
                                        <tr>
                                            <td>4 TEAMS</td>
                                            <td>100/250</td>
                                            <td>100/225</td>
                                            <td>100/200</td>
                                        </tr>
                                        <tr>
                                            <td>5 TEAMS</td>
                                            <td>100/400</td>
                                            <td>100/375</td>
                                            <td>100/325</td>
                                        </tr>
                                        <tr>
                                            <td>6 TEAMS</td>
                                            <td>100/550</td>
                                            <td>100/500</td>
                                            <td>100/450</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table-sports" aria-describedby="COLLEGE Teasers">
                                    <th>COLLEGE Teasers:</th>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>6 POINT</td>
                                            <td>6 ½ POINT</td>
                                            <td>7 POINT</td>
                                        </tr>
                                        <tr>
                                            <td>2 TEAMS</td>
                                            <td>100/100</td>
                                            <td>110/100</td>
                                            <td>120/100</td>
                                        </tr>
                                        <tr>
                                            <td>3 TEAMS</td>
                                            <td>100/180</td>
                                            <td>100/160</td>
                                            <td>100/140</td>
                                        </tr>
                                        <tr>
                                            <td>4 TEAMS</td>
                                            <td>100/300</td>
                                            <td>100/250</td>
                                            <td>100/200</td>
                                        </tr>
                                        <tr>
                                            <td>5 TEAMS</td>
                                            <td>100/450</td>
                                            <td>100/400</td>
                                            <td>100/350</td>
                                        </tr>
                                        <tr>
                                            <td>6 TEAMS</td>
                                            <td>100/700</td>
                                            <td>100/600</td>
                                            <td>100/500</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <ul>
                                    <li>
                                        Note: You can mix college and pro teams when playing
                                        teasers, however NFL odds for teasers will be used.
                                    </li>
                                    <li>
                                        A tie on a three or more team teaser reduces the teaser to
                                        the next lower payoff. Example: A four teamer becomes a
                                        three teamer, etc. A tie and a winner on a two team teaser
                                        is no action, a tie and a loser on a two team teaser is a
                                        loser.
                                    </li>
                                    <li>2 Team Teaser: TIE + WIN = NO ACTION</li>
                                    <li>2 Team Teaser: TIE + LOSER = LOSER</li>
                                </ul>
                                <table class="table-sports" aria-describedby="Special Football Teasers">
                                    <th>Special Football Teasers: </th>
                                    <tbody>
                                        <tr>
                                            <td>10 Point Special Teasers : 125/100</td>
                                            <td>13 Point Special Teasers : 140/100</td>
                                        </tr>
                                        <tr>
                                            <td>Always 3 teams</td>
                                            <td>Always 4 teams</td>
                                        </tr>
                                        <tr>
                                            <td>Always 10 points (NFL, NCAA FB)</td>
                                            <td>Always 13 points (NFL, NCAAFB)</td>
                                        </tr>
                                        <tr>
                                            <td>Ties lose</td>
                                            <td>Ties lose</td>
                                        </tr>
                                        <tr>
                                            <td>Sides and totals (Max 2 totals)</td>
                                            <td>Sides and totals(Max 2 totals)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3>Official game pertaining to NFL/ STANDARD teasers: </h3>
                                <p> In the case of a postponed/ canceled / or change of venue game included in a NFL or
                                    STANDARD
                                    teaser, that game will be graded as "no action" within that teaser and the NFL or
                                    STANDARD teaser
                                    will revert to the next level payoff teaser, (ie: a four team NFL/ STANDARD teaser
                                    will revert to a
                                    three team teaser as the postponed game will be no action). Two team teasers will
                                    follow tie/ win
                                    "no action" tie / loss "Loser" rule.</p>
                                <h3>Official Game pertaining to SPECIAL TEASERS:</h3>
                                <p>SPECIAL TEASERS official game policy with a postponed game:</p>
                                <ul>
                                    <li>with winners is a “no action”</li>
                                    <li>with losers is a loss.</li>
                                </ul>

                                <h3>FOOTBALL PROPOSITIONS </h3>
                                <ul>
                                    <li>NFL Propositions will be graded using the results listed at <a
                                            href="http://www.NFL.com">www.NFL.com</a></li>
                                    <li>NCAA Propositions will be graded using the results listed at <a
                                            href="http://www.ESPN.com">www.ESPN.com</a></li>
                                    <li>For player propositions: a. The quarterback must have at least one passing
                                        attempt. b. The running back must have at least one rushing attempt for the
                                        wager to be action. c. In wagers involving total receptions and total receiving
                                        yards the player must play for action, if he doesn't have a catch the wager
                                        stands and it is considered as zero yards (the under wins).</li>
                                    <li>For wagering purposes, defensive points do not include PATs (Points after
                                        Touchdowns).</li>
                                    <li>Involving multiple players from each team, such as &ldquo;Player to score the
                                        1st TD&rdquo;, all players are action unless otherwise specified on the wager.
                                        In pool events all players are action.</li>
                                    <li>Overtime counts on football propositions. The 4th Quarter, however, does NOT
                                        include Overtime. Only the actual points scored in the 4th quarter count towards
                                        a 4th Quarter wager.</li>
                                    <li></li>
                                    <li>Football propositions will be graded as soon as they occur, these are some
                                        examples:</li>
                                    <li>a. Team to score first</li>
                                    <li>b. Team to receive the opening kickoff</li>
                                    <li>c. Team to get the first 1st down</li>
                                    <li>d. Team to punt first</li>
                                    <li>e. YES/NO score in 7min 30sec or 2, 4 or 5 minutes of 1st, 2nd, 3rd, 4th,
                                        quarter</li>
                                    <li>f. First score of the game: Touchdown/Field goal or Safety</li>
                                    <li>g. Teams first score of the game: Touchdown/Field goal or Safety</li>
                                    <li>h. Team to make the 1st successful FG</li>
                                    <li>i. Team to miss the first FG</li>
                                    <li>j. Team to record the 1st QB sack</li>
                                    <li>k. First turnover of the game</li>
                                    <li>l. YES/NO special teams or defensive TD score</li>
                                    <li>m. Player to score a TD 1st</li>
                                    <li>n. QB to throw a TD 1st o. To happen 1st for QBs</li>
                                    <li></li>
                                    <li>For some other football propositions, the game must go 55 minutes for action,
                                        these are some examples:</li>
                                    <li>a. Team to score last</li>
                                    <li>b. Last score of the game: TD / FG or Safety</li>
                                    <li>c. Teams last score of the game: TD / FG or Safety</li>
                                    <li>d. First turnover of the game</li>
                                    <li>e. YES/NO special teams or defensive TD score</li>
                                    <li>f. Team to Have MOST 1st DOWNS</li>
                                    <li>g. Team to Have the LONGEST FIELD GOAL</li>
                                    <li>h. Team to Have the LONGEST KICKOFF RETURN</li>
                                    <li>i. Team to Have the LONGEST PUNT RETURN</li>
                                    <li>j. Team to Have the LONGEST TOUCHDOWN</li>
                                    <li>k. Total FIELD GOALS made in the game by BOTH TEAMS</li>
                                    <li>l. Teams Total points scored in the game</li>
                                    <li>m. Total PUNTS in the Game</li>
                                    <li>n. Total QB SACKS Made by BOTH Teams</li>
                                    <li>o. Total TOUCHDOWNS Made in the game by BOTH TEAMS</li>
                                    <li>p. Total Player Propositions</li>
                                    <li></li>
                                    <li>Special rules on football propositions:</li>
                                    <li>a. The First Turnover of the game: On fumble, it has to be a lost fumble
                                        recovered by an opposing team, not recovered by the same team.</li>
                                    <li>b. Will either team score 3 unanswered times in game: Extra point and 2 point
                                        conversions do not count as a score.</li>
                                    <li>c. Team to have the longest FG, longest kickoff return, longest punt return,
                                        longest touchdown: If yardage is tied for both teams, wagers have no action.
                                    </li>
                                    <li>d. Team to have longest touchdown: Offensive, Defensive or Special teams TD
                                        count.</li>
                                    <li>e. FIRST Team Offense to cross 50 Yards Line: Punt Return, Kickoff Return,
                                        Fumble Recovery or Interception. Kickoff return doesn't count towards the wager,
                                        teams offense has to cross the 50 yard line for wager to be official.</li>
                                    <li>f. Team to make a 3rd Down Conversion FIRST: If the 1st Down happens via
                                        Penalty, wager is a winner.</li>
                                    <li>g. Team to USE a TIMEOUT 1st in the game: If Team loses a Coaches Challenge and
                                        is charged a Timeout and this is the 1st Timeout in the game, wager is graded a
                                        winner.</li>
                                    <li>h. FIRST Team to be Penalized for PASS INTERFERENCE: Wager is made on which team
                                        will be called for Defensive or Offensive Pass Interference (penalty) first in
                                        the game. If penalty happens on the same play, wager becomes 2nd Defensive or
                                        Offensive Interference penalty.</li>
                                    <li>i. FIRST Team to get called for a HOLDING PENALTY: Team to have Defensive or
                                        Offensive Holding Penalty called on them first. If both teams have offsetting
                                        holding penalties on the same play, 1st holding penalty is a winning wager.</li>
                                    <li>j. FIRST Punt of the game: Player catches ball &amp; ball hits the ground or
                                        fumbles ball = Ball Hits Ground is winner. Ball has to go out of bounds in air
                                        &amp; land out of bounds, if not, Ball Hits Ground is a winner. Touchback, ball
                                        must be placed on Opponents 20 yard line for winning wager.</li>
                                    <li>k. Total number of different players to score: Wager is on how many team players
                                        will score in game. Any score by a player counts towards wager. FG, TD, Safety
                                        count as a score. Extra Point and 2 Pt Conversion don't count towards wager.
                                    </li>
                                    <li>Defensive player props, all bets placed on TOTAL TACKLES+ASSISTS BY includes the
                                        total defensive statistics the player accumulates, including the ones if he
                                        plays in special teams as well. Sacks not count for towards this wager.</li>
                                    <li>A "MUFFED PUNT" recovered by the kicking team will be considered a fumble.</li>
                                </ul>
                                <h3>REGULAR SEASON PROPS</h3>
                                <ul>
                                    <li>In NFL Regular Season wins and Team vs team regular season wins: teams must play
                                        ALL Regular season games for action. Wager is for Regular Season Only.</li>
                                    <li>In Odds to win the NFL MVP: All wagers have action. If a player withdraws (due
                                        to injury, illness, etc.), prior or during the football season all bets still
                                        have action.</li>
                                    <li>In NFL Season player propositions (Most passing yards, most rushing yards and
                                        most receiving yards): Wager is for Regular Season ONLY. All wagers have action.
                                    </li>
                                    <li>In NFL Regular season player vs player proposition: Most Touchdown passes
                                        thrown: Both players MUST play in teams opening game for action. Wager is for
                                        Touchdown Passes ONLY. Wager is for Regular Season Only.</li>
                                    <li>In NFL Regular season player vs player proposition: Most Touchdowns Scored: Both
                                        players MUST play in teams opening game for action. All Touchdowns count towards
                                        wager. Wager is for Regular Season Only.</li>
                                    <li>In NCAA Football Regular Season wins: Wager is for Regular Season Games Only.
                                        Conference Championship games and Bowl games are NOT included. Team must play
                                        every scheduled regular season game for action.</li>
                                    <li>In NCAA Conference championships: If Ties, winner is team selected 1st by BCS.
                                    </li>
                                    <li>In NCAA Divisional: The team participating in the conference championship game
                                        will be considered to have won that division.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="basketball">Basketball <span></span></p>
                            <div class="a-panel">
                                <ul>
                                    <li>Team totals for the second half include overtime.</li>
                                    <li>Quarter Wagers are official once each quarter is completed, whether or not the
                                        game is played completely</li>
                                    <li>4th quarter lines do not include overtime.</li>
                                    <li>Double result pools consist of the winner of the 1st half and the winner of the
                                        game.</li>
                                    <li>Both double result and margin of victory pools include overtime.</li>
                                    <li>2nd half bets always include overtime.</li>
                                    <li>NBA Propositions will be graded using the results listed at <a
                                            href="http://www.NBA.com ">www.NBA.com </a></li>
                                    <li>NCAA Propositions will be graded using the results listed at <a
                                            href="http://www.ESPN.com ">www.ESPN.com </a></li>
                                    <li>For Player Propositions: The player MUST PLAY in game for the wager to have
                                        action.</li>
                                    <li>For basketball 1st FG attempt props, free throws are not considered a field goal
                                        attempt, therefor if a player gets fouled in the 1st play of the game and makes
                                        the 1st free throw the prop will continue until a field goal is attempt.</li>
                                    <li>Overtime counts on basketball propositions.</li>
                                </ul>
                                <table class="table-sports" aria-describedby="BASKETBALL Teasers">
                                    <th>BASKETBALL Teasers:</th>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>4 POINT</td>
                                            <td>4 ½ POINT</td>
                                            <td>5 POINT</td>
                                        </tr>
                                        <tr>
                                            <td>2 TEAMS</td>
                                            <td>120/100</td>
                                            <td>130/100</td>
                                            <td>140/100</td>
                                        </tr>
                                        <tr>
                                            <td>3 TEAMS</td>
                                            <td>100/180</td>
                                            <td>100/160</td>
                                            <td>100/140</td>
                                        </tr>
                                        <tr>
                                            <td>4 TEAMS</td>
                                            <td>100/300</td>
                                            <td>100/250</td>
                                            <td>100/200</td>
                                        </tr>
                                        <tr>
                                            <td>5 TEAMS</td>
                                            <td>100/450</td>
                                            <td>100/400</td>
                                            <td>100/350</td>
                                        </tr>
                                        <tr>
                                            <td>6 TEAMS</td>
                                            <td>100/700</td>
                                            <td>100/600</td>
                                            <td>100/500</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <ul>
                                    <li>Note: You can mix college and pro teams when playing teasers.</li>
                                    <li>A tie on a three or more team teaser reduces the teaser to the next lower
                                        payoff. Example: A
                                        four teamer becomes a three teamer, etc. A tie and a winner on a two team teaser
                                        is no action,
                                        a tie and a loser on a two team teaser is a loser.</li>
                                    <li>2 Team Teaser: TIE + WIN = NO ACTION</li>
                                    <li>2 Team Teaser: TIE + LOSER = LOSER</li>
                                    <li>Note: You can tease a basketball game to a football game, however it will be
                                        taking the highest
                                        risk amount.</li>
                                    <li>Ex: 2 Team Teaser: NBA Team + NCAAFB Team -110/100</li>
                                </ul>
                                <table class="table-sports" aria-describedby="Special Basketball Teasers">
                                    <th>Special Basketball Teasers: </th>
                                    <tbody>
                                        <tr>
                                            <td>8 Point Special Teasers : 120/100</td>
                                            <td>10 Point Special Teasers : 140/100</td>
                                        </tr>
                                        <tr>
                                            <td>Always 3 teams</td>
                                            <td>Always 4 teams</td>
                                        </tr>
                                        <tr>
                                            <td>Always 8 points (NBA, NCAA BK)</td>
                                            <td>Always 10 points (NBA, NCAA BK)</td>
                                        </tr>
                                        <tr>
                                            <td>Ties lose</td>
                                            <td>Ties lose</td>
                                        </tr>
                                        <tr>
                                            <td>Sides and totals (Max 2 totals)</td>
                                            <td>Sides and totals(Max 2 totals)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="baseball">Baseball <span></span></p>
                            <div class="a-panel">
                                <ol>
                                    <li>
                                        Games are official after 5 innings of play unless the home
                                        team is winning after 4 and a half innings.
                                    </li>
                                    <li>
                                        After 5 innings of play, if the game is called or
                                        suspended, the final score (for wagering purposes) is
                                        determined by the last full inning of play unless the home
                                        team scores to tie or takes the lead in the bottom half of
                                        the inning. In which case, the winner is determined by the
                                        score when the game is called.
                                    </li>
                                    <li>
                                        Regular Season Games that are suspended or postponed do
                                        not carry over to the following day. However, for MLB
                                        PostSeason, World Baseball Classic (WBC) Final and Semi
                                        Finals games, International Baseball Postseason and Little
                                        League World Series Finals that are suspended or
                                        postponed, bets will carry over until the game is ruled
                                        final.
                                    </li>
                                    <li>
                                        College World Series games that are suspended are
                                        considered to be in a long rain delay and will be graded
                                        when the game reaches its official ending.Exhibition games
                                        shall be nine inning games or they may be
                                    </li>
                                    <li>
                                        Scheduled 7 Inning MLB Games: For Runline (Spread) and
                                        Total (over/under) wagers to have action, the game must go
                                        7 innings or 6½ if the home team is winning.
                                    </li>
                                    <li>
                                        On Mexican Baseball games for action on RUN LINES &amp;
                                        TOTALS games must go at least 8.5 innings if the home team
                                        is winning.
                                    </li>
                                    <li>
                                        Exhibition games shall be nine inning games or they may be
                                        shortened to seven-inning games or five-inning games upon
                                        mutual agreement of both managers. Shortened games will be
                                        treated as rain shortened games.
                                    </li>
                                </ol>
                                <h2>Baseball lines</h2>
                                <p>
                                    Baseball games can be wagered three different ways: Money
                                    Line, Run Line and Totals. For the Totals and Run Lines we
                                    use a 20 cent line. The favorite has the negative number
                                    next to it showing the price you have to lay to play that
                                    side and the underdog almost always has a positive number
                                    next to it showing the price you would win by playing it.
                                    Below is an example of a typical baseball game.
                                </p>
                                <p>
                                    Mets - Hampton -134 9ov -105 Marlins - Dempster +124 9un
                                    -115
                                </p>
                                <ul>
                                    <li>
                                        If you want to place a $100 wager on the Mets, you would
                                        be risking $134 to win $100.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on the Marlins, you
                                        would risk $100 to win $124.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on over 9 runs, you
                                        would risk $105 to win $100.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on under 9 runs, you
                                        would risk $115 to win $100.
                                    </li>
                                    <li>
                                        When betting Baseball Money Lines you can chose the
                                        following options for your wagers: ACTION, LISTED PITCHERS
                                        (LP), YOUR TEAM'S PITCHER (PT) or OPPOSING PITCHER (TP).
                                    </li>
                                </ul>
                                <p>
                                    When an MLB team has ACTION as the starting pitcher, any
                                    pitcher that starts will constitute action.
                                </p>
                                <blockquote>
                                    <p>
                                        NOTE: The starting pitchers are determined after the first
                                        pitch. In the event of a pitching change prior to the
                                        game, the money price may be adjusted and your bet may
                                        change if you play with action.
                                    </p>
                                </blockquote>
                                <h3>Action:</h3>
                                <p>
                                    Your wager is team against team regardless of who the
                                    starting pitchers are. In case of a pitching change, your
                                    price will be adjusted to the opening number of the actual
                                    starting pitcher.
                                </p>
                                <h3>Listed Pitchers (LP):</h3>
                                <p>
                                    Your wager is predicated on both listed pitchers throwing at
                                    least one pitch for you to have action. Both pitchers must
                                    start in order for you to have action on your wager,
                                    otherwise the bet will be declared NO ACTION after the game
                                    is final.
                                </p>
                                <h3>Your team's Pitcher (PT):</h3>
                                <p>
                                    You are only taking the listed pitcher of the team you are
                                    wagering on. The pitcher selected must start the game for
                                    your wager to count. Any pitcher can start for the opposing
                                    team. In case of a pitching change on the opposing team, the
                                    price will still adjust to the opening price of the actual
                                    starters.
                                </p>
                                <h3>Opposing Pitcher (TP):</h3>
                                <p>
                                    You are listing the opposing team's pitcher. Any starter can
                                    pitch for the team you selected. The opposing team's pitcher
                                    has to start. In the case of a pitching change on your team,
                                    the price will be adjusted to the opening price of the
                                    actual pitchers. The other way to wager on a baseball game
                                    is to bet the run-line. Every favorite will be - 1 ½ runs
                                    and could either be plus or minus money.
                                </p>
                                <p>Below is an example of what a run-line looks like.</p>
                                <p>
                                    Mets - Hampton +1 ½ +115 Marlins - Dempster -1 ½ -135
                                </p>
                                <p>If you wager $100 on the Mets, you have the Mets minus 1 ½ runs
                                    risking $100 to win $115.
                                    If you wager $100 on the Marlins,
                                    you have the Marlins plus 1 ½ runs risking $135 to win $100.</p>
                                <p>
                                    When wagering on Total Runs (over/under) and Run Lines (run
                                    spread) the game must go 9 innings (8 ½ if the home team is
                                    winning). If the game is suspended after 9 innings, the
                                    final score (for wagering purposes) is determined by the
                                    last full inning of play unless the home team scores to tie
                                    or takes the lead in the bottom half of the inning. In which
                                    case, the winner is determined by the score when the game is
                                    called. If with this rules the game is a TIE, Run Lines and
                                    Totals count. All wagers on Total Runs and Run Lines are
                                    ALWAYS with Listed Pitchers (LP). If both pitchers scheduled
                                    to pitch at the time of the wager do not throw at least one
                                    pitch then the wager will be cancelled. Wagers on Total Runs
                                    and Run Lines are refunded in the event of a pitching change
                                    when the game is final.
                                </p>
                                <p>
                                    We do NOT accept Parlays, If Bets or Round Robins with the
                                    same game's Total and Run Line. Any wager of such type can
                                    be cancelled by us without prior notice.
                                </p>
                                <p>
                                    RAIN or SHINE Rule: Baseball Props including 1st Score,
                                    Yes/No Score in 1st inning, 1st 5 inning line are graded as
                                    soon as that event occurs. For the 1st 5 inning line; the
                                    wager is graded when the 5th inning is complete. Bets are
                                    final even if the game gets rained out or suspended.
                                </p>
                                <p>
                                    2ND HALF LINES: 2nd half baseball score includes from the top of the 6th inning till
                                    the end of the
                                    game including extra innings. The game must be completed for action (9 full innings
                                    or 8.5 innings
                                    if the home team is winning). All wagers on the 2nd half lines are action regardless
                                    of the pitcher.
                                    If Games are suspended and MORE than 9 innings have been played the score will
                                    revert back to
                                    the last COMPLETE inning.

                                </p>

                                <h3>BASEBALL PROPS </h3>

                                <p>MLB Propositions will be graded using the results listed at <a
                                        href="http://www.mlb.com ">www.mlb.com </a></p>
                                <p>First 5 full Innings:</p>
                                <ul>
                                    <li>When wagering on the "First 5 full innings" lines, both listed pitchers must
                                        start. In case of a pitching change all wagers will be no action. If both teams
                                        are tied, wagers on sides will be considered a &ldquo;no action&rdquo; and the
                                        wagers on the total will have action. Both teams must bat 5 full innings for
                                        action.</li>
                                </ul>
                                <p>Player Props:</p>
                                <ul>
                                    <li>All players must start for action (unless otherwise specified). All players must
                                        have at least 1 at bat (note walks count).</li>
                                    <li>For any Player prop, the game must be completed in-full to have action. Games
                                        that are scheduled for 7 Innings only and are completed (6.5 if home team is
                                        winning) are considered completed.</li>
                                    <li>Involving multiple players from each team, such as Player to score the 1st run
                                        or record the 1st RBI, all players are action unless otherwise specified on the
                                        wager. In pool events all players are action.</li>
                                </ul>
                                <p>On Total Bases Propositions:</p>
                                <ul>
                                    <li>Listed pitchers and both players must start. A batter is only credited for bases
                                        if he hits a single (1), a double (2), a triple (3) or a home run (4). A walk,
                                        hit by pitch, error, balk, sacrifices, fielder&rsquo;s choice or passed ball do
                                        not count. The batter must hit the ball and make it to first base without an
                                        error being committed. If he hits a single, for example, and makes it further
                                        than first on an error, he is only credited with a single (1 base).</li>
                                </ul>
                                <p>Team to score first:</p>
                                <ul>
                                    <li>When wagering on "Team to score first", both listed pitchers must start. In case
                                        of a pitching change, all wagers will be no action. The "Team to score first"
                                        prop has action as soon as a team scores.</li>
                                </ul>
                                <p>Will there be a score in the first inning:</p>
                                <ul>
                                    <li>Prop will be graded as soon as the first inning ends, and bets are action
                                        regardless of game suspension or postponement. \</li>
                                </ul>
                                <p>Team total Runs:</p>
                                <ul>
                                    <li>When wagering on "Team total runs", both listed pitchers must start. In case of
                                        a pitching change, all wagers will be no action. The game must go a minimum of
                                        8&frac12; innings with the home team winning.</li>
                                </ul>
                                <p>Hits and Home Runs props:</p>
                                <ul>
                                    <li>When wagering on Hits and/or Home Runs, both listed pitchers must start. In case
                                        of a pitching change all wagers will be no action. The game must go a minimum of
                                        8&frac12; innings if the home team is winning.</li>
                                </ul>
                                <p>Alternative Run Lines:</p>
                                <ul>
                                    <li>When wagering on "Alternative Run Lines", both listed pitchers must start. In
                                        case of a pitching change all wagers will be no action. The game must go a
                                        minimum of 8&frac12; innings with the home team winning.</li>
                                </ul>
                                <p>Total Runs, Hits, and Errors:</p>
                                <ul>
                                    <li>When wagering on Total Runs, Hits, and Errors both listed pitchers must start.
                                        In case of a pitching change all wagers will be no action. The game must go a
                                        minimum of 8&frac12; innings with the home team winning.</li>
                                </ul>
                                <p>MLB Grand Salami:</p>
                                <ul>
                                    <li>The Baseball Grand Salami will be decided by the total runs scored in all
                                        major-league games scheduled for that day.</li>
                                    <li>All games must go a minimum of 8&frac12; innings for this prop to have action.
                                        If any scheduled game is canceled or stopped before the completion of 8 1/2
                                        innings, all wagers on the Baseball Grand Salami will be cancelled.</li>
                                    <li>No pitchers will be listed for the Grand Salami; all wagers will have action
                                        regardless of the starting pitchers.</li>
                                </ul>
                                <p>On Pool events ALL PLAYERS ARE ACTION unless otherwise specified</p>
                                <p>Baseball Series: Baseball Series are games played between two teams (Regular Season
                                    Only). Neither team can play any other opponent between the scheduled games in the
                                    series. The following are the main rules used to grade the Baseball Series:</p>
                                <ul>
                                    <li>All games in a series count towards wager. In a four game series 2-2 is a tie.
                                    </li>
                                    <li>A series is considered action if one game has been played.</li>
                                    <li>If a game during the series is called, this game will be considered good for the
                                        series as long as one of the teams is officially declared the winner of the
                                        game.</li>
                                    <li>All wagers are based on ACTION in regard to the pitchers in each games.</li>
                                    <li>A suspended game from a previous series that is completed is not considered part
                                        of the current series.</li>
                                    <li>These rules may differ from other sportsbooks.</li>
                                </ul>
                                <p>So if a series starts on Friday and ends on Monday, it will be graded out on Monday,
                                    with all games counting towards the result.</p>
                                <p>College World Series games (all college baseball games) that are suspended are
                                    considered to be in a long rain delay and will be graded when the game reaches its
                                    official ending.</p>
                                <p>For the World Baseball Classic (WBC), during the first two rounds of play, both sides
                                    and totals have action regardless of the Mercy Rule. For the Semi Finals and Final
                                    of the WBC, the Mercy Rule is not in effect therefore games will follow normal
                                    playoff rules. In case of discrepancy or items not covered, Las Vegas gaming rules
                                    will apply.</p>
                                <p>NCAA regular season Softball --- Games ending early as a result of a mercy rule will
                                    have action on all wagers (unless otherwise noted). If a game is suspended or
                                    postponed due to weather or darkness all bets will be considered NO ACTION</p>
                                <p>NCAA Post season --- Games ending early as a result of a mercy rule will have action
                                    on all wagers including TOTALS (unless otherwise noted). If a game is suspended or
                                    postponed due to weather or darkness all bets will remain pending until the game is
                                    final.</p>
                                <p>Little League Baseball --- Games ending early as a result of a mercy rule will have
                                    action on all wagers including TOTALS (unless otherwise noted). If a game is
                                    suspended or postponed due to weather or darkness all bets will remain pending until
                                    the game is final.</p>

                                <p>
                                    For League Grand Salami, it will only take to account games
                                    played on that specific league, example: National League
                                    Grand Salami will only include games from the National
                                    League schedule and not National League teams that could be
                                    playing on Interleague games.
                                </p>
                                <p>
                                    ** Exception: Playoff baseball games do not fall under the
                                    suspended game rule in accordance to Major League Baseball
                                    guidelines to finish all games. If a game is suspended due
                                    to weather or darkness all bets will remain pending until
                                    the game is declared final.
                                </p>
                                <h3>Softball and Little League.</h3>
                                <p>Softball or little league game ending early as a result of a mercy rule will have
                                    action on all wagers
                                    (unless otherwise noted). If a game is suspended or postponed due to weather or
                                    darkness all bets
                                    will remain pending until the game is final.
                                </p>
                                <p>NCAA regular season Softball --- Games ending early as a result of a mercy rule will
                                    have action on
                                    all wagers (unless otherwise noted). If a game is suspended or postponed due to
                                    weather or
                                    darkness all bets will be considered NO ACTION
                                </p>
                                <p>NCAA Post season --- Games ending early as a result of a mercy rule will have action
                                    on all wagers
                                    including TOTALS (unless otherwise noted). If a game is suspended or postponed due
                                    to weather
                                    or darkness all bets will remain pending until the game is final.</p>
                                <p>Little League Baseball --- Games ending early as a result of a mercy rule will have
                                    action on all
                                    wagers including TOTALS (unless otherwise noted). If a game is suspended or
                                    postponed due to
                                    weather or darkness all bets will remain pending until the game is final.
                                </p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="Hockey">Hockey <span></span></p>
                            <div class="a-panel">
                                <ul>
                                    <li>Games are official after 55 minutes of play.</li>
                                    <li>
                                        Wagering will be accepted using the Goal line (Puck line),
                                        Money line (3 way line) or - - Total Goals Scored
                                        (over/under) in the game by both teams.
                                    </li>
                                    <li>
                                        We offer two types of Hockey games:
                                        <ul>
                                            <li>
                                                COMPLETE GAME RESULT: MONEY LINE, PUCK LINE &amp;
                                                TOTAL. The game must be played to completion. In the
                                                event of a game being decided in overtime or a penalty
                                                shootout, then one goal will be added to the winning
                                                team’s score.
                                            </li>
                                            <li>
                                                60 MINUTE RESULT/REGULATION TIME: MONEY LINE, PUCK
                                                LINE &amp; TOTAL. This wager will be graded after
                                                regulation time and DOES NOT include Overtime or
                                                Shootouts goals. Any GOALS scored in overtime or in
                                                the shootouts DO NOT count towards any wager in the 60
                                                Minute Result/Regulation Time)
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        We differentiate the games by adding (REGULATION TIME) to
                                        the leagues that are going to be handle this way.
                                    </li>
                                </ul>
                                <h3>Below is an example of a typical Hockey game.</h3>
                                <p>
                                    Penguins -145 5.5 -150 Sharks +125 5.4 +130 GL Penguins -1 ½
                                    +130 GL Sharks +1 ½ -150
                                </p>
                                <ul>
                                    <li>
                                        If you want to place a $100 wager on the Penguins, you
                                        would be risking $145 to win $100
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on the Sharks, you would
                                        risk $100 to win $125.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on over 5.5 goals, you
                                        would risk $150 to win $100.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on under 5.5 goals, you
                                        would risk $100 to win $130.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on GL Penguins -1 ½
                                        goals, you would risk $100 to win $130.
                                    </li>
                                    <li>
                                        If you want to place a $100 wager on GL Sharks +1 ½ goals,
                                        you would risk $150 to win $100.
                                    </li>
                                </ul>
                                <p>
                                    Example of a Shootout game: A game goes into overtime with a
                                    score of Team A 3 and Team B 3 (tied 3-3) and no team scores
                                    in the Overtime period. The winner of the shootouts will be
                                    awarded a goal making the final score Team A 4 and Team B 3.
                                    With this result the total for both teams combined will be
                                    7. Any 60 MINUTE RESULT wagers will be decided with the 60
                                    minute result of 3-3 tie.
                                </p>
                                <ul>
                                    <li>
                                        Hockey Props including 1st Score, 1 Period line are graded
                                        as soon as that event occurs. Bets are final even if the
                                        game gets suspended.
                                    </li>
                                    <li>
                                        On player props, both players must play in the game for action. On Pool events
                                        ALL PLAYERS
                                        ARE ACTION unless otherwise specified. On Pool events ALL PLAYERS ARE ACTION
                                        unless
                                        otherwise specified.
                                    </li>
                                    <li>
                                        For Total Player Points, both goals and assists are included. For grading
                                        purposes, Penalty
                                        Shootouts are NOT included. Goals and Assists, each goal and each assists count
                                        as one point
                                    </li>
                                    <li>
                                        Overtime counts on hockey propositions.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="soccer">Soccer <span></span></p>
                            <div class="a-panel">
                                <ol>
                                    <li>If a match is suspended before full time is reached, and not completed the same
                                        day, wagers on the outcome of the match are considered void and all wagers will
                                        be refunded.</li>
                                    <li>Money line wagering on soccer offers a draw line as well as sides. In the event
                                        of a draw example: (1-1), all bets on either of the sides will be graded as
                                        losers. Again, in the event of a draw, only wagers placed on the draw line will
                                        be graded as a win. This rule does not apply to bets placed on the spread (goal
                                        line).</li>
                                    <li>The result of the game is decided after 90 minutes of play plus injury time.
                                        Extra time / overtime / golden goal is not taken into consideration for soccer
                                        bets unless otherwise stipulated.</li>
                                    <li>If any match is abandoned or postponed all bets will be void unless the relevant
                                        marked result has already happened. For example, "first goal scorer" betting
                                        will stand if a goal has already been scored.</li>
                                    <li>Where a venue is changed, bets will stand unless the game is to be played at the
                                        original away team's field in which case all bets will be void.</li>
                                </ol>
                                <p>
                                    For soccer games there can be four different types of lines:
                                </p>
                                <ol>
                                    <li>
                                        Spread Wagering (90 Minutes: 1st and 2nd Halves plus
                                        injury time): Only includes 1st and 2nd halves plus injury
                                        time to decide the winner of the bet. Does not include any
                                        shootouts if any or overtime (Extra Periods). The possible
                                        results in the game include a home win, an away win or a
                                        draw.
                                    </li>
                                    <li>
                                        To advance/to lift the cup Wagering: Includes the 90
                                        minutes regulation time plus any injury or extra times
                                        played. You bet on the team that will advance or will be
                                        declared the winner of the match, therefore any shootouts
                                        help determine the winner. One team must win the match.
                                    </li>
                                    <li>
                                        Three Way Result (90 Minutes:1st and 2nd Halves plus
                                        injury time): Includes 1st and 2nd halves and any injury
                                        time, does not include overtime or shootouts. You can bet
                                        on Team A, Team B or a Tie.
                                    </li>
                                    <li>
                                        Total Wagering (90 Minutes: 1st and 2nd Halves plus injury
                                        time): Includes 1st and 2nd halves plus injury time. Does
                                        not include shootouts of any or overtime unless specified
                                        otherwise.
                                    </li>
                                    <li>
                                        Correct Score (90 Minutes: 1st and 2nd Halves Plus Injury
                                        Time): Includes 1st and 2nd Halves plus injury time. Does
                                        not include shootouts of any or overtime unless specified
                                        otherwise.
                                    </li>
                                    <li>
                                        Double Result (1st half + game result): Includes 1st and
                                        2nd Halves plus injury time. Does not include shootouts of
                                        any or overtime unless specified otherwise.
                                    </li>
                                    <li>
                                        Margin of victory (90 Minutes: 1st and 2nd halves plus
                                        injury time): Includes 1st and 2nd halves and any injury
                                        time. Does not include shootouts of any or overtime unless
                                        specified otherwise.
                                    </li>
                                    <li>
                                        Soccer Props: For player props, player must play for
                                        action. All PROPS are for the 90 minutes regulation time
                                        and injury time, they DO NOT include extra times or
                                        penalty shootouts unless otherwise specified. For prop
                                        &quot;team to score last&quot; a second goal must be
                                        scored for action. We do not accept Parlays, If Bets,
                                        Reverses or Round Robins with the same game's Three Way
                                        Line or Goal Line to the Game Total. . Any such wagers
                                        will be cancelled by us without prior notice.
                                    </li>
                                </ol>
                                <p>
                                    Early/Late goal The grading of these props will be
                                    determined by the time of the goal provided by the official
                                    website not by the actual time the goal occurred. In soccer
                                    if a goal is made at the 22:35 the official time for that
                                    goal will be 23:00. For example, if the time of the Early
                                    Goal was set at 26:00 and the goal was made at 25:20 making
                                    the official time of that goal 26:00, then NO GOAL BEFORE
                                    26:00 will be the winner.
                                </p>
                                <h2>Asian Handicap Lines</h2>
                                <p>Asian Handicap line ¼ (0.25) goal.</p>
                                <h4>Team giving -¼ (-0.25) goals:</h4>
                                <ul>
                                    <li>Win by any score: All bets are winners.</li>
                                    <li>
                                        Draw: Half the stakes are refunded. The other half of the
                                        stake is declared a loser.
                                    </li>
                                    <li>Lose by any score: All bets are losers.</li>
                                </ul>
                                <h4>Team receiving +¼ (+0.25) goals:</h4>
                                <ul>
                                    <li>Win by any score: All bets are winners.</li>
                                    <li>
                                        Draw: Half the stake is settled at the price of the chosen
                                        selection. The other half is refunded.
                                    </li>
                                    <li>Lose by any score: All bets are losers.</li>
                                    <li>Handicap line ½ (0.5) goal.</li>
                                    <li>Team giving -½ (-0.5) goals:</li>
                                    <li>Win by any score: All bets are winners.</li>
                                    <li>Draw: All bets are losers.</li>
                                    <li>Lose by any score: All bets are losers.</li>
                                </ul>
                                <h4>Team receiving +½ (+0.5) goals:</h4>
                                <ul>
                                    <li>Win by any score: All bets are winners.</li>
                                    <li>Draw: All bets are winners.</li>
                                    <li>Lose by any score: All bets are losers.</li>
                                    <li>Handicap line ¾ (0.75) goal.</li>
                                    <li>Team giving -¾ (-0.75) goals:</li>
                                    <li>Win by 2 or more: All bets are winners.</li>
                                    <li>
                                        Win by exactly 1: Half the stake is settled at the price
                                        of the chosen selection. The other half is refunded.
                                    </li>
                                    <li>Draw or lose by any score: All bets are losers.</li>
                                    <li>Team receiving +¾ (+0.75) goals:</li>
                                    <li>Draw or win by any score: All bets are winners.</li>
                                    <li>
                                        Lose by exactly 1: Half the stake is refunded. The other
                                        half is declared a loser.
                                    </li>
                                    <li>Lose by 2 or more: All bets are losers.</li>
                                    <li>Handicap line 1 goal.</li>
                                </ul>
                                <h4>Team giving -1 goals:</h4>
                                <ul>
                                    <li>Win by 2 or more: All bets are winners.</li>
                                    <li>Win by exactly 1: All bets are void and refunded.</li>
                                    <li>Draw or lose: All bets are losers.</li>
                                    <li>Team receiving +1 goals:</li>
                                    <li>Win by any score or draw: All bets are winners.</li>
                                    <li>Lose by exactly 1: All bets are void and refunded.</li>
                                    <li>Lose by 2 or more: All bets are losers.</li>
                                    <li>Handicap line 1 ¼ (1.25) goals.</li>
                                    <li>Team giving -1 ¼ (-1.25) goals:</li>
                                    <li>
                                        Win by 2 or more: All bets are winners. Win by exactly 1:
                                        Half the stake is refunded.
                                    </li>
                                    <li>
                                        The other half is declared a loser. Draw or lose by any
                                        score - All bets are losers.
                                    </li>
                                    <li>Team receiving +1 ¼ (+1.25) goals:</li>
                                    <li>
                                        Win by any score or draw: All bets are winners. Lose by
                                        exactly 1: Half the stake is settled at the price of the
                                        chosen selection. The other half is refunded. Lose by 2 or
                                        more: All bets are losers. Handicap line 1 ½ (1.5) goals.
                                    </li>
                                </ul>
                                <h4>Team giving -1 ½ (-1.5) goals:</h4>
                                <ul>
                                    <li>Win by 2 or more: All bets are winners.</li>
                                    <li>
                                        Win by exactly 1, draw or lose by any score: All bets are
                                        losers.
                                    </li>
                                    <li>Team receiving +1 ½ (+1.5) goals:</li>
                                    <li>
                                        Lose by exactly 1, draw or win by any score: All bets are
                                        winners.
                                    </li>
                                    <li>Lose by 2 or more: All bets are losers.</li>
                                    <li>Handicap line 1 ¾ (1.75) goals.</li>
                                    <li>Team giving -1 ¾ (-1.75) goals:</li>
                                    <li>Win by 3 or more: All bets are winners.</li>
                                    <li>
                                        Win by exactly 2: Half the stake is settled at the price
                                        of the selection. The other half is refunded.
                                    </li>
                                    <li>
                                        Win by 1, draw or lose by any score: All bets are losers.
                                    </li>
                                    <li>Team receiving +1 ¾ (+1.75) goals:</li>
                                    <li>
                                        Lose by 1, draw or win by any score: All bets are winners.
                                    </li>
                                    <li>
                                        Lose by exactly 2: Half the stake is refunded. The other
                                        half is a loser.
                                    </li>
                                    <li>Lose by 3 or more: All bets are losers.</li>
                                    <li>Handicap line 2 (2) goals.</li>
                                </ul>
                                <h4>Team giving -2 goals:</h4>
                                <ul>
                                    <li>Win by 3 or more: All bets are winners.</li>
                                    <li>Win by exactly 2: All bets are void and refunded.</li>
                                    <li>
                                        Win by 1, draw or lose by any score: All bets are losers.
                                    </li>
                                </ul>
                                <h4>Team receiving +2 goals:</h4>
                                <ul>
                                    <li>
                                        Lose by 1, draw or win by any score: All bets are winners.
                                        Lose by exactly 2: All bets are void and refunded. Lose by
                                        3 or more: All bets are losers.
                                    </li>
                                    <li>
                                        The same rules apply for any higher Asian handicap lines
                                        such as -2 ¼, -3 ¾ etc.
                                    </li>
                                    <li>
                                        Soccer totals that use Asian Handicap lines also follow
                                        the same principles of ¼ goals towards grading.
                                    </li>
                                    <li>
                                        In case of a parlay with an asian handicap line, the pick will be eliminated and
                                        the parlay reverts
                                        to the lower number of teams. Example 2 Team parlays become straight plays. 3
                                        Team parlays
                                        become 2 Team parlays.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="golf">Golf <span></span></p>
                            <div class="a-panel">
                                <ul>
                                    <li>If the start of a round is delayed, or if play during a round is suspended, all
                                        pending wagers will
                                        remain valid for 48 hours. If the postponement lasts more than 48 hours, all
                                        pending wagers
                                        will be canceled and the money refunded.</li>
                                    <li>A golfer is deemed to have played once he or she has teed off. In the event of a
                                        player
                                        withdrawing after having teed off, wagers on that player will be consider a
                                        loss.</li>
                                    <li>Wagers will be settled using the official tournament and match results
                                        (including final match
                                        correct score and individual match betting). This includes a match which
                                        finishes early, either
                                        by agreement of the players or because of injury</li>
                                </ul>
                                <p>These are the ways that we offer for Golf Betting:</p>
                                <ol>
                                    <li>
                                        To Win the Tournament: Customers bet on one of the players
                                        to be the champion of the Tournament.
                                    </li>
                                    <li>
                                        To Finish in the Top 5: The Top 5 finishers and anybody
                                        who tied with the fifth finisher.
                                    </li>
                                    <li>
                                        To Finish in the Top 10: The Top 10 finishers and anybody
                                        who tied with the tenth finisher.
                                    </li>
                                    <li>
                                        Match-ups: We pair up players and the customer picks one
                                        of them to have a better record than the other. We offer
                                        Match-ups for the entire tournament and on major events we
                                        also offer Round Match-ups betting.
                                    </li>
                                    <li>
                                        3 Ball Betting: In 3 Ball Betting 3 golfers are matched up
                                        and the golfer with the best score wins the pool. 3 Ball
                                        Betting can be offered for the entire tournament or for a
                                        specific round. If two or more players are tied for the
                                        win in the pool the dead heat rule will apply.
                                    </li>
                                    <li>
                                        6 Ball Shooter: In 6 Ball Shooters 6 golfers are matched
                                        up and the golfer with the best score wins the pool. 6
                                        Ball Shooter can be offered for the entire tournament or
                                        for the specific round. If two or more players are tied
                                        for the win the dead heat rule will apply.
                                    </li>
                                    <li>
                                        Top Player in a group: On major tournaments we offer pools
                                        such as TOP AMERICAN player in the tournament. In such
                                        pools if ties for the best position occur, the dead heat
                                        rule will apply.
                                    </li>
                                    <li>
                                        Round Leader: On major tournaments we offer a pool for the
                                        best score in a specific round of play. In such pools if
                                        ties for the best score occur, the dead heat rule will
                                        apply.
                                    </li>
                                </ol>
                                <h2>Dead Heat Rule</h2>
                                <p>
                                    For golf wagers containing more than two participants such
                                    as 3 Balls, 6 Ball Shooter, Top players in a group and Round
                                    leader (S) for example where two or more players tie for the
                                    same place the dead heat rule is applied as follows: The
                                    wager is reduced according to how many players tie and is
                                    then applied to the full odds with the remainder of the
                                    stake deemed as lost.
                                </p>
                                <p>For example:</p>
                                <ol>
                                    <li>
                                        You wager $150 at odds of +200 and 2 players tie for the
                                        same position, Half the stake is lost -$75, the other half
                                        wins and is paid the same odds. So $75 wins at +200 = $150
                                        - $75 = $75 net.
                                    </li>
                                    <li>
                                        If 3 players tie for the same position then: Two thirds of
                                        the stake is lost -$100, the remaining third $50 wins at
                                        +200. Please note this rule does not apply to two player
                                        matchups where a tie results in a push.
                                    </li>
                                </ol>
                                <p>
                                    For Matchups the player must tee off in order to be
                                    considered action. If a player does not tee off, then any
                                    wager involving him would be considered no action and will
                                    be cancelled.The exception to this rule is when the wager is
                                    made on a pool and all players have action regardless if
                                    they start or not the tournament. (ex: to win TOURNAMENT)
                                </p>
                                <p>
                                    If a players tees off, he is in action regardless of the
                                    number of holes played.
                                </p>
                                <p>Example of a Tournament Matchup:</p>
                                <p>
                                    Fred Funk - 125 Joe Durant +105 In this tournament match-If
                                    a customer picks Fred Funk, the wager is on Fred Funk to
                                    have a better record than Joe Durant. Not necessarily that
                                    Funk must win the championship but that he will end up in a
                                    better position than Durant. Both players must Tee Off in
                                    the tournament for the matchup to have action. In a
                                    two-player match-up wager, the player completing the most
                                    holes is declared the winner. If both players complete the
                                    same number of holes then the lowest score wins.
                                </p>
                                <p>
                                    Specific Rounds: Aside the odds to win the whole Tournament,
                                    we may also offer odds to win a specific round. So a
                                    customer can bet on a player to win the 3rd round only. If
                                    this is the case we will specify that the bet is for the
                                    round only and not for the whole tournament. Both players
                                    must tee off in the specified round for action. 4th round
                                    does not include playoffs
                                </p>
                                <p>
                                    When a point scoring method is used such as Stableford, then
                                    the highest number of point wins. The only exception to this
                                    rule is when a tournament is rain shortened and the final
                                    scores are determined by the PGA usually by reverting back
                                    to the last completed round.
                                </p>
                                <p>
                                    When a point scoring method is used such as Stableford, then the highest number of
                                    point wins.
                                    The only exception to this rule is when a tournament is rain shortened and the final
                                    scores are
                                    determined by the PGA usually by reverting back to the last completed round.

                                </p>
                                <p>On Top Player betting or Group betting if two or more players tie for the best place
                                    in the pool,
                                    the prices of the wagers will be divided by the number of the winning players.
                                </p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="boxeo">
                                Boxeo - Mixed Martial Arts (MMA) - UFC <span></span>
                            </p>
                            <div class="a-panel">
                                <p>For boxing there are three types of wagers:</p>
                                <ol>
                                    <li>
                                        To Win the Fight: Picking the fighter that the customer
                                        thinks will win the fight. Draws will cancel these wagers.
                                    </li>
                                    <li>
                                        Total of Rounds: Customer will either go over or under a
                                        number of rounds in which the fight will be finished.
                                    </li>
                                    <li>
                                        Correct Result Wagering: Players can wager on which boxer
                                        will win the fight and the manner in which the fight is
                                        won. A KNOCKOUT includes Technical Knockouts (TKO) and
                                        Disqualifications (DQ). A DECISION is determined to be
                                        anytime the judge's scorecards are used to determine the
                                        winner of the bout regardless of the round in which this
                                        occurs. DRAW is a wagering option and if a DRAW occurs the
                                        other Correct Result Wagers will be losers.
                                    </li>
                                </ol>
                                <p>Lets say the
                                    line on the rounds in a fight is 4.5 (3 minutes). If a
                                    player takes the over, he's saying that the fight will
                                    last more than 4.5 rounds. That would be 4 full rounds and
                                    the first 1.5 minutes into the 5th round (1 minute and 30
                                    seconds).</p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="tennis">Tennis <span></span></p>
                            <div class="a-panel">
                                <p>
                                    <strong>There are three ways that we offer for Tennis
                                        Betting:</strong>
                                </p>
                                <ol>
                                    <li>
                                        To Win the Tournament: Customers bet on one of the players
                                        to be the champion of the Tournament.
                                    </li>
                                    <li>
                                        To Win the Match: Picking the player that the customer
                                        thinks will win the match. The match is official if a ball
                                        gets served. After that, if a player withdraws he will be
                                        declared the loser no matter the score at the time.
                                    </li>
                                    <li>
                                        Props: Player to win the 1st set, Total Number of games or
                                        sets, etc. 1st set wagering (to win set, 1st set props,
                                        etc): 1st set must be completed for all wagers in the 1st
                                        set to have action. If after the 1st set is completed the
                                        match gets cancelled for any reason, all 1st set wagers
                                        are still considered good.
                                    </li>
                                </ol>
                                <p>
                                    Match props (games or sets spread betting, exact result
                                    betting, etc): the match must be completed for wagers to
                                    have action, if one of the players retires or by other
                                    causes the match is not finished then all wagers will be
                                    considered NO ACTION.
                                </p>
                                <p>
                                    All tennis wagers are good even if the matchup date and time changes due to weather or any
other cause.
                                </p>
                                <p>
                                    In the event of a match in progress being delayed due to weather or other reasons the wager
will have action until a winner is decided.
                                </p>
                                <p>
                                    Note: The Automatic Live Wagering System has its own set of rules. They are all available within
the Live Wagering system.
                                </p>
                                <p>
                                    In the event that a match is decided by a Super Tiebreaker (instead of a full set), then all wagers
related to GAMES will be voided. If a match is decided this way, then the match tiebreak will
be considered to be the 3rd set, and for betting purposes, the winner will be awarded a 2-1
sets win.

                                </p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="autorancing">Autoracing <span></span></p>
                            <div class="a-panel">
                                <ul>
                                    <li>
                                        <p>
                                            We will offer FUTURE POOLS for NASCAR, NATIONWIDE, INDY
                                            and F1 racing. This FUTURE POOLS all wagers are
                                            considered ACTION even if the driver does not qualify to
                                            the main race.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            After the qualifying rounds we will offer odds to Win
                                            the Race, Finish in the Top 3, Top 5 or Top 10, YES/NO
                                            on this finishing positions, Race Matchups and Group
                                            Betting. For all this type of wagers the driver MUST
                                            start in the main race for action.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            On Group betting if two or more players tie for the best
                                            place in the pool, the prices of the wagers will be
                                            divided by the number of the winning players.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            We ONLY accept Straight Bet Wagering on Auto Racing
                                            matchups, props and futures. Any Other wagers such as
                                            Parlays, If Bets, Reverses and/or Round Robins will be
                                            cancelled by us.
                                        </p>
                                    </li>
                                </ul>
                                <p>
                                    Post race disqualifications will not change the result for
                                    wagering purposes.
                                </p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="rugby">Rugby <span></span></p>
                            <div class="a-panel">
                                <h2>Rugby General Rules</h2>
                                <ul>
                                    <li>
                                        <p>
                                            Unless otherwise stated all Rugby wagers are graded on
                                            80 minutes play, which includes any stoppage time, and
                                            does not include extra time unless specified.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            When a draw option is offered, the bet is graded on the
                                            end of regulation, no extra time is included.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            If a venue is changed from the one advertised then all
                                            bets on that match are void.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            In the event of a change of opponent from the one
                                            advertised then all bets for that match are void.
                                        </p>
                                    </li>
                                </ul>
                                <h4>Abandoned Matches</h4>
                                <ul>
                                    <li>
                                        All bets are void apart from markets where the outcome is
                                        already determined.
                                    </li>
                                </ul>
                                <h4>Postponed Matches</h4>
                                <ul>
                                    <li>
                                        Are void unless re-arranged and played in the same
                                        &quot;Rugby Week&quot; (Monday - Sunday inclusive UK
                                        time).
                                    </li>
                                </ul>
                                <p>Top team is home</p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="australian-rules">
                                Australian Rules <span></span>
                            </p>
                            <div class="a-panel">
                                <h2>General Rules</h2>
                                <p>
                                    All match markets will be graded including overtime if
                                    played unless otherwise stated. Regulation time must be
                                    completed for bets to stand unless otherwise stated. If the
                                    duration of a match is changed by the governing body prior
                                    to the commencement of play, the revised game length will be
                                    regarded as the official regulation time for this match, and
                                    all bets will stand as long as this new regulation time is
                                    completed.
                                </p>
                                <h4>Match Betting</h4>
                                <p>
                                    If any match ends in a draw/tie, including overtime if
                                    played, then stakes will be refunded unless a price is
                                    offered for the draw/tie. Bets will be graded on official
                                    AFL result only.
                                </p>
                                <h4>Matches not Played as Listed</h4>
                                <p>
                                    If a match venue is changed then bets already placed will
                                    stand providing the home team is still designated as such.
                                    If the home and away team for a listed match are reversed
                                    then bets placed based on the original listing will be void.
                                </p>
                                <p>Top team is home</p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="cricket">Cricket <span></span></p>
                            <div class="a-panel">
                                <p>Including Twenty/20</p>
                                <h2>General:</h2>
                                <ol>
                                    <li>
                                        All wagers will be settled using the official result as
                                        declared by the relevant governing body of the match or
                                        competition concerned.
                                    </li>
                                    <li>Change of Venue:</li>
                                </ol>
                                <ul>
                                    <li>
                                        If a match venue is changed then bets already placed will
                                        stand providing the home team is still designated as such.
                                        If the home and away team for a listed match are reversed
                                        then bets placed based on the original listing will be
                                        void.
                                    </li>
                                </ul>
                                <ol start="3">
                                    <li>
                                        If a match is abandoned due to outside interference, bets
                                        on the outcome for the total of the game are voided, if no
                                        winner is declared from the official site all bets on the
                                        winner of the match are voided.
                                    </li>
                                    <li>
                                        If a match is affected by external factors (such as bad
                                        weather), we will settle your bet based on the official
                                        competition rule (this includes matches affected by a
                                        mathematical calculation such as the Duckworth-Lewis
                                        method (DL) or the Jayadevan system (VJD)*). *Duckworth
                                        Lewis method / Jayadevan system These are systems used to
                                        adjust the scores in the event of a rain delay during
                                        one-day matches, in order to leave the balance of the
                                        match unaltered. The systems use the number of overs each
                                        team have still to receive and the number of wickets they
                                        have in hand in order to reach an official result.
                                    </li>
                                    <li>
                                        Where no price is quoted for the tie and the official
                                        competition rules do not determine a winner then all
                                        wagers will be graded cancelled. In competitions where a
                                        bowl out or super over determines a winner, then bets will
                                        be settled on the official result.
                                    </li>
                                </ol>
                                <h3>Series Betting:</h3>
                                <p>
                                    <strong>If a series is drawn and no draw option was offered then
                                        all bets will be considered a push and refunded.</strong>
                                </p>
                                <h4>Test Matches:</h4>
                                <ol>
                                    <li>
                                        In case the game did not go at least 4 innings all bets on
                                        the outcome for the over/under are voided.
                                    </li>
                                    <li>
                                        In case the game did not go at least 4 innings all bets on
                                        the outcome for the winner of the match are settled based
                                        on the official announcement
                                    </li>
                                    <li>Tied Test Match:</li>
                                </ol>
                                <ul>
                                    <li>
                                        In the event of a tied test match (i.e. where all innings
                                        have been completed and both teams have the same score)
                                        all bets on the game will be voided
                                    </li>
                                </ul>
                                <ol start="4">
                                    <li>
                                        If a three-way money line with the draw as the third
                                        betting option is offered, only those bettors who wagered
                                        on the draw will be paid as winners; those who wagered on
                                        either team or contestant to win will lose their stake.
                                    </li>
                                    <li>
                                        If a test match is abandoned or disrupted by outside
                                        interference (riot, etc) all bets on this match are void.
                                    </li>
                                </ol>
                                <h3>One Day Internationals:</h3>
                                <ol>
                                    <li>
                                        In case the game did not go at least the official number
                                        of overs, all bets on the outcome for the over/under are
                                        voided.
                                    </li>
                                    <li>
                                        In case the game did not go at least the official number
                                        of overs, all bets on the outcome for the winner of the
                                        match are settled based on the official announcement.
                                    </li>
                                    <li>
                                        In matches where a reserve day is used all wagers will
                                        stand and carry over to the reserve day.
                                    </li>
                                </ol>
                                <h3>Twenty/20:</h3>
                                <ol>
                                    <li>
                                        In case the game did not go at least the official number
                                        of overs, all bets on the outcome for the over/under are
                                        voided.
                                    </li>
                                    <li>
                                        In case the game did not go at least the official number
                                        of overs, all bets on the outcome for the winner of the
                                        match are settled based on the official announcement.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="olympic-rules">
                                Olympic Rules <span></span>
                            </p>
                            <div class="a-panel">
                                <ol>
                                    <li>
                                        For multi-way futures betting, all events are ALL ACTION -
                                        no refunds.
                                    </li>
                                    <li>
                                        If a particular athlete/team has a yes/no (2-way) price to
                                        win the gold medal, then that athlete/team must start
                                        competition for action.
                                    </li>
                                    <li>
                                        For Match-Up betting between two athletes / 2 Countries in
                                        any event, both athletes /countries must start event for
                                        action.
                                    </li>
                                    <li>
                                        For over/under on a countries total medals within a sport,
                                        the total is for both the men's and women's competitions
                                        within that area - Example: If USA wins 10 medals in men's
                                        athletics and 9 in women’s athletics, the total medals won
                                        by the USA is 19 in Athletics.
                                    </li>
                                    <li>
                                        Events are official after the original medal ceremony. Any
                                        subsequent changes to those results do not count.
                                    </li>
                                    <li>
                                        For props on individual athletes, competitor must start
                                        the first event they are scheduled to participate for
                                        action.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="a-container">
                            <p class="a-btn" id="water-polo">Water Polo <span></span></p>
                            <div class="a-panel">
                                <ol>
                                    <li>
                                        2-Way: Unless otherwise stated, all wagers are for regulation time only and do
                                        not include
                                        either overtime or penalty shootouts.
                                    </li>
                                    <li>
                                        Winner of 1st, 2nd 3rd 4th Quarter: Only the goals scored within the nominated
                                        period count.
                                        Unless otherwise stated, overtime does not count for the result of the 4th
                                        period.
                                    </li>
                                    <li>
                                        In case of a “Home and Away” format bets on the Away match do not include the
                                        “Golden
                                        Set”.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="handball">Handball<span></span></p>
                            <div class="a-panel">
                                <p>Unless otherwise stated all bets will be settled based on the score at the end of
                                    regulation time
                                    and excluding overtime if played. All match betting markets are based on the result
                                    at the end of
                                    a scheduled 60 minutes play unless otherwise stated. If the scheduled 60 minutes is
                                    not played
                                    then bets will be void, with the exception of game props where the result has
                                    already been
                                    determined.</p>
                                <p>The following markets include overtime/shootouts for settlement purposes:</p>
                                <ul>
                                    <li>To Qualify</li>
                                    <li>To Lift Trophy</li>
                                </ul>
                                <p>Specifically for any competition that uses a Mercy Rule, in the event of such a Rule
                                    being called in
                                    a match, all bets will stand on the score at the time.</p>
                                <p>If a match venue is changed then bets already placed will stand providing the home
                                    team is still
                                    designated as such. If the home and away team for a listed match play the fixture at
                                    the away
                                    team venue then bets will stand providing the home team is still officially
                                    designated as such</p>
                                <p>If the home and away team for a listed match play the fixture at the away team venue
                                    then bets
                                    will stand providing the home team is still officially designated as such, otherwise
                                    bets will be void.</p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="volleyball">Volleyball<span></span></p>
                            <div class="a-panel">
                                <ol>
                                    <li>If a match is suspended before full time is reached, and not completed the same
                                        day, wagers
                                        on the outcome of the match are considered canceled and all wagers shall be
                                        refunded.
                                    </li>
                                    <li>For match and set wagering, the actual number of points played in a set will not
                                        affect how
                                        wagers are graded. For example, sets played to 21 points or 25 points are graded
                                        based on
                                        the winner of the set.</li>
                                    <li>In case of a “Home and Away” format bets on the Away match do not include the
                                        “Golden
                                        Set”.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="liveingame">Live in-game lines wagering<span></span></p>
                            <div class="a-panel">
                                <ul>
                                    <li>Live In-Game Lines are available for Straight Wagers and internet wagering only.
                                        All bets for
                                        such wagers take into consideration the score of the full match, event or game
                                        (unless
                                        otherwise specified).</li>
                                    <li>Line In-Games Lines will be offered on important events and regular rules for
                                        the sport apply
                                        to such lines. We reserve the right to take down the Live In-Game Lines at any
                                        moment of the
                                        game</li>
                                    <li>In-Game Lines wagers cannot be cancelled by the player.</li>
                                    <li>We reserve the right to cancel any In-Game Line wager by any reason including
                                        obvious bad
                                        lines.</li>
                                </ul>
                                <p>Note: The Automatic Live Wagering System has its own set of rules. They are all
                                    available within
                                    the Live Wagering system</p>
                                <p>For more information, please contact our wagering or customer service department.</p>
                            </div>
                        </div>
                        <div class="a-container">
                            <p class="a-btn" id="parleyCards">Parlay cards<span></span></p>
                            <div class="a-panel">
                                <p>In the event of a suspended or canceled game, the Parlay Card will have action and
                                    the game in
                                    questions will be taken out of the Card (Example: a 5 team Parlay Card will become a
                                    4 team Parlay
                                    Card.) In 3 team Parlay Cards if one of the games is suspended or cancelled the
                                    Parlay Card will
                                    have no action and the funds will be reimbursed to the client.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="footerNav d-flex d-lg-none">
        <div class="topMenu-container">
            <div class="topMenu-container-options">
                <ul>
                    <li><a href="sportsbook.php">
                            <div class="icon-container"><img src="./img/icons/sports.png" alt="sportsbook"></div>
                            SPORTs
                        </a></li>
                    <li><a href="livewagering.php">
                        <div class="icon-container "><img src="./img/icons/live.png" alt="WAGERING"></div>
                        LIVE WAGERING
                    </a></li>
                    <li><a href="casino.php">
                            <div class="icon-container"><img src="./img/icons/casino.png" alt="casino"></div>
                            CASINO
                        </a></li>
                    <li><a href="prop-builder.php">
                        <div class="icon-container"><img src="./img/icons/casino.png" alt="casino"></div>
                        PROPS BUILDER
                    </a></li>
                    <li><a href="racebook.php">
                            <div class="icon-container horse"><img src="./img/icons/racebook.png" alt="racebook"></div>
                            RACEBOOK
                        </a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <a href="index.php">
            <img src="./img/home/logo.svg" alt="logo" />
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
                <div><a href="https://adm.playcr.la/">AGENTS</a></div>
                <div><a href="https://agents.playcr.la/AgentSiteV2/">AGENTS CLASSIC</a></div>
                <div>1-877-265-9110</div>
                <div>1-888-991-9060</div>
                <div>1-866-895-4647</div>
            </section>
        </div>
    </footer>
    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>