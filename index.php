<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/802e715324.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Purple+Purse&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>LTuras</title>
</head>
<body>

    <header class="headeris">
        <div class="head">
            <div class="logo">
                <a href=""><img src="LTuras-logo.png" height="44" width="136" alt="Lturas logotipas"></a>
            </div>
            <div class="navigacija">
                <ul>
                    <li><a href="#apie">Apie</a></li>
                    <li><a href="#paslaugos">Paslaugos</a></li>
                    <li><a href="#uzklausa">Užklausa</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="hero-content">
            <div class="hero-tekstas">
                <h2>KARTU SU JUMIS KIEKVIENAME KELYJE</h2>
            </div>
        </div>
    </div>

    <div class="devider">
        <img src="pattern.png" width="200" height="96" alt="">
    </div>
    
    <div id="apie" class="apie">
        <h2>APIE</h2>
        <p>LTuras – lietuviška transporto paslaugų įmonė, teikianti keleivių bei krovinių, gyvūnų, smulkių siuntų pervežimo paslaugas Lietuvoje, taip pat – kurjerio paslaugas. Galimi individualūs pervežimo užsakymai ir už Lietuvos ribų.</p>
        <p>Rūpinamės savo vairuotojų bei keleivių saugumu, todėl automobilių salonuose dažniausiai liečiami paviršiai padengti antimikrobine plėvele SafeBubble. Plėvelė 24/7 naikina bakterijas, tad svariai prisideda prie virusų plitimo mažinimo.</p>
        <p>Šiuo laikotarpiu, kuomet visi turime būti atsakingesni bei labiau saugotis, siūlome rinktis patogų devynvietį (8+1) autobusiuką, kuriame visos sėdimos vietos yra atskiros.</p>
    </div>

    <div class="devider2">
        <img src="pattern.png" width="200" height="96" alt="">
    </div>

    <div id="paslaugos" class="paslaugos">
        <h2>PASLAUGOS</h2>
        <p>_____________</p>
        <h3>Keleivių pervežimas</h3>
        <p>-Individualūs pervežimai lengvaisiais automobiliais Lietuvoje – nuo 20 €</p>
        <p>– Grupių iki 8 asmenų pervežimas komfortabiliu autobusiuku – nuo 20 €</p>
        <p>– Paslaugos verslui: nuvežimas/atvežimas į ir iš oro uostų (nuo vieno žmogaus iki 8 asmenų grupių) į viešbučius, konferencijas, kitus renginius bei vietas – nuo 20 €</p>
        <p>– Neįgaliųjų pavežėjimas: turime erdvų ir komfortišką transportą, kuris draugiškas vėžimėliams – nuo 20 €</p>

        <h3>Krovinių pervežimas</h3>
        <p>– Express pristatymas Vilniaus mieste ir Vilniaus rajone – nuo 12 €</p>
        <p>– Siuntų, pilnų bei dalinių krovinių gabenimas visoje Lietuvoje – nuo 4 €</p>
        <p>-Motociklų, motorolerių, keturračių gabenimas autobusiuko salone – nuo 25 €</p>
        <p>– Kurjerio paslaugos</p>
        <p>– Baldų pervežimas – kaina sutartinė</p>
        <p>– Užsakomasis krovinių gabenimas už Lietuvos ribų – kaina sutartinė</p>

        <h3>Papildomos paslaugos:</h3>
        <p>Saugojimo/logistikos (1,5 ha) aikštelė Švenčionėliuose: automobilių/sunkiasvorių automobilių/technikos saugojimas.</p>
        <p>Aikštelė nuomojama visa arba dalimis, taip pat – parduodama. Pardavimo kaina 15 000€</p>
    </div>

    <div class="devider3">
        <img src="pattern.png" width="200" height="96" alt="">
    </div>

    <div id="uzklausa" class="uzklausa">
        <div class="container">
        <h2>SIŲSTI UŽKLAUSĄ</h2>
        <div class="forma">
            <form action="db.php" method="POST">
                <div class="eilute">
                    <div class="pem1">
                        <input type="text" name="vardas" placeholder="Vardas">
                    </div>
                    <div class="pem2">
                        <input type="text" name="pavarde" placeholder="Pavardė">
                    </div>
                </div>
                <div class="eilute">
                    <input class="email" type="email" name="email" id="email" placeholder="El.paštas">
                </div>
                <div class="eilute">
                    <input class="textarea" type="textarea" name="message" id="message" placeholder="Trumpai aprašykite: kokios paslaugos norėtumėte; datą; maršrutą">
                </div>
                <div class="eilute">
                    <button class="mgt" name="submit" id="submit">Siųsti užklausą</button>
                </div>
            </form>
        </div>
    </div>

    <div class="partneriai">
        <div class="gridas">
            <div class="p">
                <h3>Partneriai:</h3>
            </div>
            <div class="pirmas">
                <a href="https://www.safebubble.lt" target="_blank"><img src="safebubble-overlay.png" width="150" height="150" alt="SafeBubble"></a>
            </div>
            <div class="antras">
                <img src="Lietuvos-laisves-fondas-Copy-1024x1024.jpg"  width="150" height="150" alt="LT laisves fondas">
            </div>
            <div class="trecias">
                <img src="Corners-logo.png" width="150" height="150"  alt="corners">
            </div>
            <div class="ketvirtas">
                <img src="small-sos.png" width="150" height="150"  alt="">
            </div>
        </div>
    </div>

    <footer>
    <section class="top">
        <div class="kontaktai">
            <h3>Kontaktai</h3>
            <a href="mailto:info@lturas.lt">info@lturas.lt</a>
            <a href="tel:866528708">866528708</a>
        </div>
        <div class="rekvizitai">
            <h3>Rekvizitai</h3>
            <p>MB ,,Lturas” <br> Įmonės kodas: 305663874 <br> Atsiskaitomosios sąskaitos numeris: <br> LT617300010165826278 <br> AB „Swedbank“ bankas <br> Banko kodas: 73000 </p>
        </div>
        <div class="soc">
            <button onclick="window.location.href='https://facebook.com';"><i class="fab fa-facebook-f"></i>Facebook</button>
            <button onclick="window.location.href='https://instagram.com';"><i class="fab fa-instagram"></i>Instagram</button>
        </div>
    </section>
    <section class="bottom">
        <div class="copyright">
            <div class="copy">
                <p>Copyright © 2021 Lturas</p>
            </div>
            <div class="creator">
                <p>Sukurta MAsvetaines</p>
            </div>
        </div>
    </section>
    </footer>
</body>
</html>