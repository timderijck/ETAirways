<!DOCTYPE html>
<html lang="en">

<?php
include('./dbcalls/conn.php');
?>

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
                <form action="./dbcalls/search.php" method="GET" onsubmit="return validate()" class="flex">
                    <div class="wittebox2 wittebox1 flex">
                        <div class="omgedraaidimg extraruimte">
                            <div class="opstijgenenzoeken flex">
                                <div class="opstijgenafbeelding flex position">
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
                        <div class="center zoekknopsubmit">
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
                    <h1>Vluchten, ET holidays, Promo-Deals</h1>
                </div>
            </div>


            <div class="container-deals-php">
                <?php


                ?>
            </div>





        </section>
        <section class="deals-box-php flex">
            <div class="php-deals-container flex">
                <?php

                include('./dbcalls/read.php');

                foreach ($result as $value) {
                    echo '<div class="dealsitems-box flex">';

                    echo '<div class="container-img-php flex kleinpaddingboven kleinverschuivingrechts">';
                    echo '<br> <img alt=" ' . $value['stad'] . '" src=' . $value['img'] . "></img>";
                    echo '</div>';
                    echo '<div class="container-img-php flex kleinpaddingboven verschuivingrechts">';
                    echo '<br> <h1></h1>' . $value['dealbestemming'];
                    echo '</div>';

                    echo '<div class="container-img-php column flex onderflex kleinmarginterug mediumpaddingonder verschuivingrechts">';
                    echo '<br> <h1></h1>(' . $value['stad'] . ')';
                    echo '</div>';

                    echo '<div class="container-prijs prijsnaareindebox flex">';
                    echo '<div class="blok-prijs">' . 'vanaf EUR ' . $value['prijs'];
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="boekenknop flex">';
                    echo '<h2>Boeken</h2>';
                    echo '</div>';
                }
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
            <div class="huurautopos">
                <a
                    href="https://www.rentalcars.com/?affiliateCode=google&cor=nl&label=generic:mdzNTSnISTPZcxgBtGgLKf3Q:tyS:cr204733937453:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-326914778:lp9064967:li:dec:dm:ws&gad_source=1&gad_campaignid=186113716&gbraid=0AAAAAD9RW4sPxMOpVXTOFdLi1cVmexHR1&gclid=CjwKCAjwx8nCBhAwEiwA_z__0zZgCuNR7uwz2rm914TCNFEZ7Kw5cjqd7eMQMK5cixwXhN_8zBf-pRoCt90QAvD_BwE">
                    <h3>huur hier een auto</h3>
                </a>
            </div>
            </div>

            <div class="blok-hotellverhuur">
                <div class="container-hotel">
                    <img src="assets/img/hotel.png" alt="" width="150px" height="150px">
                    <div class="huur-een-kamer">
                        <h1>huur een hotelkamer</h1>
                        <h2>huur bij ETAirways voordelig een hotelkamer</h2>
                    </div>
                    <a
                        href="https://www.airbnb.nl/?sem_brand_erf=true&&c=.pi0.pk119549723_5008905443&ghost=true&gad_source=1&gad_campaignid=119549723&gbraid=0AAAAADz55LnfaesBuPhAUXXWQZVndEIVr&gclid=CjwKCAjwx8nCBhAwEiwA_z__04cxFSnwgFNv1-u_w48Dgm3P19bW9s4D1Kq9HxHADBXqoZP_W0C-dRoCS9oQAvD_BwE&gclsrc=aw.ds">
                        <h3>boek uw hotel</h3>
                    </a>
                </div>
            </div>
            </div>
            </div>

        </section>
        <div class="kleinblauwruimte"></div>
        <?php
        include('./includes/footer.php')
            ?>

    </main>

    <footer class="footer">

    </footer>
</body>
<script src="dropdownonclick.js"></script>
<script src="validate.js"></script>

</html>