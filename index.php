<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="body">

    <header class="flex">
        <div class="maatschappijinfo flex">
            <img src="assets/img/ETAirways.png" alt="ETplaatje" height="80" width="80">
            <div class="maatschappijtekst">
                <h1>ET Airways</h1>
            </div>
            <div class="taalinloggen flex position">
                <div class="taal flex">
                    <img src="assets/img/nlvlag.png" alt="nl" width="27" height="20">
                    <div class="nltekst">
                        <h2>Netherlands - nl</h2>
                    </div>
                </div>
                <div class="inloggen flex">
                    <div class="inlogplaatje position">
                        <img src="assets/img/inlog.png" alt="inlog" width="32" height="32">
                    </div>
                    <div class="nltekst">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <h2>Inloggen</h2>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="registratie.php">
                                    <h2>Account aanmaken</h2>
                                </a>
                                <a href="login.php">
                                    <h2>Inloggen</h2>
                                </a>
                                <a href="adminlogin.php">
                                    <h2>Admin</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hoofdteksten flex">
                <div class="hoofdtekstpositie flex position indexposition hulpposition">
                    <a href="index.php">
                        <h1>Home</h1>
                    </a>
                    
                        <h1>Mijn Reis</h1>
                    </a>
                    <a href="info.php">
                        <h1>Informatie</h1>
                    </a>
                    <a href="hulp.php">
                        <h1>Hulp</h1>
                    </a>
                </div>
            </div>
    </header>
    <main>

        <div class="vluchtfoto flex">
            <img src="assets/img/vluchtfoto.png" alt="vluchtfoto" width="1250" height="710">
        </div>
        <div class="vertrekblok flex position">
            <div class="witteboxes flex position">
                <div class="dropdownclick flex">
                    <div class="omgedraaidvliegtuig">
                        <img src="assets/img/vliegtuigomgedraaid.png" alt="" width="20" height="15">
                    </div>
                    <button onclick="myFunction()" class="dropbtnclick wittebox1 witteboxes">
                        <h2 id="reisTypeText">Retourreis</h2>
                    </button>
                    <div id="myDropdownOnClick" class="dropdown-content-on-click">
                        <div onclick="setReisType('Retourreis')">
                            <h2>Retourreis</h2>
                        </div>
                        <div onclick="setReisType('Enkele reis')">
                            <h2>Enkele reis</h2>
                        </div>
                    </div>
                    <div class="dropdownimg">
                        <img src="assets/img/dropdown.png" alt="" width="15" height="13">
                    </div>
                </div>
                <form action="dbcalls/search.php" method="GET" onsubmit="return validate()" class="flex">
                    <div class="wittebox2 wittebox1 flex">
                        <div class="omgedraaidimg extraruimte">
                            <div class="opstijgenenzoeken flex">
                                <div class="opstijgenafbeelding">
                                    <img src="assets/img/opstijgen.png" alt="opstijgen" width="20" height="15">
                                </div>
                                <input type="text" id="searchresult" name="searchresult" placeholder="Bestemming"
                                    class="h2class deconone zoekbalk searchpos">
                            </div>
                        </div>
                    </div>
                    <div class="wittebox3 wittebox2 wittebox1 flex paddingklein">
                        <div class="omgedraaidimg extraruimte">
                            <img src="assets/img/vliegtuig.png" alt="" width="20" height="15">
                        </div>
                        <input type="text" placeholder="Aankomst op" class="h2class deconone">
                    </div>

                    <div class="loginknop wittebox1 paddingmedium">
                        <div class="center position">
                            <input type="submit" value="Zoeken" id="zoekknop">
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <div class="dealsbox position"></div>
        <div class="dealstekst position">
            <h3>Wilt u graag de beste vakantie voor uw gezin/familie boeken?</h3>
            <br>
            <h3>Bekijk dan nu onze vakantie <br>deals!</h3>
        </div>
        <div class="naardeals flex position">
            <h4><a href="reisinfo.php">Naar Deals →</a></h4>
        </div>
        <div class="blauweboxes flex position">
            <div class="blauwebox flex">
                <h2>Een vlucht boeken</h2>
            </div>
            <div class="blauwebox flex">
                <h2>Boek met miles</h2>
            </div>
            <div class="blauwebox flex">
                <h2>ET holidays</h2>
            </div>
        </div>

        <section class="bestemmingen-deals">

            <div class="container-deals-vluchten">
                <div class="deals-bestemmingen-blok">
                    <div class="dealstekstblok position">
                        <h1>Bestemmingen & Deals</h1>
                    </div>
                </div>
                <div class="promodeals position">
                    <h1>Vluchten ET holidays Promo-Deals</h1>
                </div>
            </div>


            <div class="container-deals-php">
                <?php


                ?>
            </div>





        </section>







        <section class="bekende-bestemingen">

            <div class="blok-container">
                <div class="bekende-bestemmingen-blok">
                    <h1>Bekende Bestemmingen</h1>
                </div>
            </div>

            <div class="container-grid">
                <div class="container-img">
                    <div class="londen flex directioncol wit">
                        <img src="assets/img/londen.png" alt="">
                        <h1>Van historische highlights tot moderne flair: Londen verrast elke keer weer.</h1>
                    </div>
                    <div class="madrid flex directioncol wit">
                        <img src="assets/img/madrid.png" alt="">
                        <h1>Tapas, kunst en zon: Madrid bruist van energie en cultuur.</h1>
                    </div>
                    <div class="hongkong flex directioncol wit">
                        <img src="assets/img/hongkong.png" alt="">
                        <h1>Traditie en futurisme komen samen in deze unieke metropool.</h1>
                    </div>
                </div>

                <div class="container-img2">
                    <div class="berlijn flex directioncol wit">
                        <img src="assets/img/berlijn.png" alt="">
                        <h1>Vrijheid, cultuur en een rauwe energie maken Berlijn onvergetelijk.</h1>
                    </div>
                    <div class="barcelona flex directioncol wit">
                        <img src="assets/img/barcelona.png" alt="">
                        <h1>Gaudí, tapas en de Middellandse Zee: Barcelona heeft het allemaal.</h1>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="verhuur">

            <div class="blok-autoverhuur">
                <div class="container-auto">
                    <img src="assets/img/autoverhuur.png" alt="" width="150px" height="150px">
                    <div class="huur-een-auto">
                        <h1>Huur een auto</h1>
                        <h2>Huur bij ETAirways voordelig een auto!</h2>
                    </div>
                </div>
            </div>

            <div class="blok-hotellverhuur">
                <div class="container-hotel">
                    <img src="assets/img/hotel.png" alt="" width="150px" height="150px">
                    <div class="huur-een-kamer">
                        <h1>Huur een hotelkamer</h1>
                        <h2>Huur bij ETAirways voordelig een hotelkamer!</h2>
                    </div>
                </div>
            </div>

        </section>
        <div class="kleinblauwruimte"></div>


    </main>

    <footer class="footer">
        <div class="footer-blok-info">
            <img src="assets/img/ETAirways.png" alt="">
            <h1>ET Airways</h1>
        </div>
    </footer>
</body>
<script src="dropdownonclick.js"></script>
<script src="validate.js"></script>

</html>