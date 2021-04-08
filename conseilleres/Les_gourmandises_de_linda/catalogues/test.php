<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nos Sucrés | Les gourmandises de Linda </title>

    <!--css-->
    <link rel="stylesheet" href="../../../public/css/style.css">

    <!--css responsive-->
    <link rel="stylesheet" href="../../../public/css/responsive.css" type="text/css">

     <!--favicon-->
     <link rel="icon" type="image/png" href="../../../public/img/favicon/favicon.png" />



    <!--lien fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>


    <header>

        <h1 class="titleprincipal">Nos produits Sucrés</h1>

        <!--Filtre version mobile-->
        <nav class="filtermenu">
            <h2 class="titlefilter">Filtres</h2>
            <input id="toggle" type="checkbox" checked>
            <ul>
                <li><a href="#section1" onclick='window.location.reload(false)'>Cookies</a></li>
                <li><a href="#section2" onclick='window.location.reload(false)'>Moelleux</a></li>
                <li><a href="#section3" onclick='window.location.reload(false)'>Muffins</a></li>
                <li><a href="#section4" onclick='window.location.reload(false)'>Marbrés</a></li>
                <li><a href="#section5" onclick='window.location.reload(false)'>Palets sablés</a></li>
                <li><a href="#section6" onclick='window.location.reload(false)'>Gateaux magiques</a></li>
                <li><a href="#section7" onclick='window.location.reload(false)'>Cake</a></li>
                <li><a href="#section8" onclick='window.location.reload(false)'>Crumbles</a></li>
                <li><a href="#section9" onclick='window.location.reload(false)'>Riz au lait</a></li>
                <li><a href="#section10" onclick='window.location.reload(false)'>Madeleine</a></li>
                <li><a href="#section11" onclick='window.location.reload(false)'>Mug Cake</a></li>
                <li><a href="#section12" onclick='window.location.reload(false)'>Brioche</a></li>
                <li><a href="#section13" onclick='window.location.reload(false)'>Pâte à tarte</a></li>
                <li><a href="#section14" onclick='window.location.reload(false)'>Mousse</a></li>
                <li><a href="#section15" onclick='window.location.reload(false)'>Pâtes a tartiner</a></li>


            </ul>
        </nav>

        <!--Filtre-->
        <div class="filtre">
            <a href="#section1">Cookies</a>
            <a href="#section2">Moelleux</a>
            <a href="#section3">Muffins</a>
            <a href="#section4">Marbrés</a>
            <a href="#section5">Palets sablés</a>
            <a href="#section6">Gâteaux magiques</a>
            <a href="#section7">Cake</a>
            <a href="#section8">Crumbles</a>
            <a href="#section9">Riz au lait</a>
            <a href="#section10">Madeleine</a>
            <a href="#section11">Mug Cake</a>
            <a href="#section12">Brioche</a>
            <a href="#section13">Pâte à tarte</a>
            <a href="#section14">Flans</a>
            <a href="#section15">Mousse</a>
            <a href="#section16">Pâtes a tartiner</a>
            
            
        </div>

    </header>

    <?php include("catalogue.php"); ?>
   
    <!-- Pied de page  -->
    <footer class="footer">
        <div class="footerleft">
            <p>Les gourmandises de Linda © 2021 Tous droits réservés</p>
            <p class="siret">Siret: 849 747 787 00018 </p>
        </div>

        <div class="footerright">
            <a href="https://www.facebook.com/groups/665015731102796" target="_blank">
                <i class="fab fa-facebook-f"></i>

            </a>
            <a href="http://instagram.com/les.gourmandises.de.linda/" class="insta" target="_blank">
                <i class="fab fa-instagram"></i>

            </a>
        </div>
    </footer>


    <div id="bouton_page">
        <div id="center">
            <a href="" class="page_right none"></a>

            <a href="../Accueil.html" class="page_index"><i class="fas fa-home"></i></a>

            <a href="Boissons.Html" class="page_left">Boissons<i class="fas fa-chevron-right"></i></a>
        </div>
    </div>


</body>

</html>