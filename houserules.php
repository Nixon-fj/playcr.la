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
                <h2>
                    HOUSES RULES
                </h2>
                <ol class="hose-rules-list">
                    <li>All rules, regulations and payoffs contained herein are subject to changes and revisions by
                        <span>PLAYCR</span> without prior written notice.
                    </li>
                    <li>Any sports or horse ruling, not specifically stated in the specific rules or regulations, will
                        be decided by the official Las Vegas rules.</li>
                    <li><span>PLAYCR</span> shall not be responsible for any damages or losses deemed or alleged to
                        have resulted
                        from or been caused by this Web site or its content. This includes any person’s use or misuse of
                        its content, the inability of any person to connect with or use the site, delay in operations or
                        transmission, failure of communication lines, or any errors or omissions in content.</li>
                    <li>
                        All clients must be at least 18 years or older in their particular country, state or
                        jurisdiction.
                    </li>
                    <li>
                        All rules, regulations and wagering odds, will constantly be updated on our web site, so please
                        double check any issue or difference in the rules before making a claim to our customer service
                        staff.
                    </li>
                    <li>
                        <span>PLAYCR</span> reserves the right to limit or refuse a wager for any reason, and has the
                        right to
                        refuse wagers from clientele who are from states or jurisdiction where online wagering is deemed
                        illegal.
                    </li>
                    <li>
                        All wagers accepted by will be honored, unless there is proof of cheating, attempted hacking or
                        knowledgeable deceit. Any wager with BAD or INNACURATE odds can be cancelled by All Action 365
                        group without prior notice to the client.
                    </li>
                    <li>
                        Minimum and maximum wager amounts on all sporting events will be determined by
                        <span>PLAYCR</span> and are
                        subject to change without prior written notice. All Action 365 also reserves the right to adjust
                        limits on individual accounts.
                    </li>
                    <li>
                        <span>PLAYCR</span> will not accept a wager without the proper account number and password for
                        both telephone and online wagering.
                    </li>
                    <li>
                        Each client is responsible for maintaining the secrecy of his betting account and should make
                        every effort to prevent the use of his personal account number by any third party. Any
                        transactions entered into where the account holder’s number and password have been given to
                        effect a wager shall stand as bona fide transactions dependent only upon the current balance in
                        the account.
                    </li>
                    <li>
                        All accounts are kept private and confidential. All telephone calls are recorded for the
                        protection of All Action 365 and its clients for the purpose of possible disputes. You must
                        claim a dispute within 7 days of the graded wager.
                    </li>
                    <li>
                        When wagering on the Internet, members are solely responsible for their own account
                        transactions. Please be sure to review your wagers for any mistakes before sending them in.
                        <span>PLAYCR</span> does not take responsibility for missing or duplicate wagers made by the
                        client and will
                        not entertain discrepancy requests because a play is missing or duplicated. Clients may review
                        their transactions in the Review Account section of the site after each session to ensure all
                        requested wagers were accepted. CHECK ALL TRANSACTIONS CAREFULLY!!
                    </li>
                    <li>
                        Wagers placed online or over the phone can be changed or cancelled by the customer if all the
                        following conditions are met:
                        <ol type="A">
                            <li>
                                The lines and odds are the same as those of the original wager
                            </li>
                            <li>
                                Not more than 5 minutes have passed since the time of the original bet
                            </li>
                            <li>
                                The games have not started
                            </li>
                        </ol>
                    </li>
                    <li>
                        After wagers are placed by telephone, the clerk will read back the wagers. If the read back or
                        confirmation is correct, client must re-confirm wagers by stating their client number and
                        password. If any mistakes were made by the clerk, it is the responsibility of the client to tell
                        the clerk before the call is completed. Once the client confirms a read back the wagers are
                        final. If a client does not confirm his plays by giving his code and password and hangs up
                        before the read back all plays are considered final.
                    </li>
                    <li>
                        If the client has phone problems and is cut off before getting a read back, it is his
                        responsibility to call as soon as possible and verify his pending wagers. If the client gave the
                        clerk a team and amount before getting cut off the wagers will go into the system even though
                        there was no read back.
                    </li>
                    <li>
                        Wagers are graded only after the contest is final.
                    </li>
                    <li>
                        Baseball, Football, Basketball, Hockey and Soccer events must be played on the specified game
                        date. Any game that is cancelled or postponed will be deemed “no action” and funds will be
                        returned to your account. - Tennis, Boxing, Nascar and Golf must be played within 7 days of the
                        originally scheduled date.
                    </li>
                    <li>
                        Concerning suspended games, continued games and overturned decisions, <span>PLAYCR</span>
                        follows the
                        generally accepted Las Vegas gaming rules.
                    </li>
                    <li>
                        In all future wagering (for example, Super Bowl winner, etc.), the winner as determined by the
                        League Commissioner will also be declared the winner for betting purposes. For the purposes of
                        NCAA Football wagering, the winner of the BCS Championship game will be declared the National
                        Champion. Any future type wager will not count towards any rollover requirement.
                    </li>
                    <li>
                        On horse racing, the clerk will give the player a POST TIME once the ticket is completed. This
                        POST TIME is the one that will be compared with times posted at the grading website. The POST
                        TIME given to the customer must be the same or earlier than the OFF TIME posted at the site. Our
                        post times are non-negotiable and final. Any Horse Wager will not count towards Any Rollover
                        Requirement.
                    </li>
                    <li>
                        <span>PLAYCR</span> relies entirely upon the information provided by the customer in the
                        application in
                        order to establish a wagering account. Payouts will only be made to the name in the account.
                        Checks or Western Unions to third parties are not allowed.
                    </li>
                    <li>
                        In the event funds are credited to a customer’s account in error, it is incumbent upon the
                        customer to notify All Action 365 the aforesaid error without delay. Unless otherwise notified
                        by All Action 365, any transactions made shall be void.
                    </li>
                    <li>
                        Although our computer system keeps exact customer balances, it is the client’s responsibility to
                        make sure his balance is correct every time your account number is logged in or by phone when
                        applicable.
                    </li>
                    <li>
                        Be advised that third party products such as live wagering and props builder do not share our same rules in some sports. Please refer to each individual page for the specific ruling on the different types of wager. It is the client’s responsibility to know and understand these rules.
                    </li>
                </ol>
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
                <div><a href="https://agents.playcr.ag/AgentSiteV2/" target="_blank">AGENTS CLASSIC</a></div>
                <div><a href="https://adm.playcr.ag/" target="_blank">AGENTS NEW</a></div>
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