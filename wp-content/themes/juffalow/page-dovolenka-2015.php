<!DOCTYPE html>
<html lang="sk">
    <head>
        <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="keywords" content="java,php,sql,javascript,jquery,programovanie" />
        <meta name="description" content="<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>" />
        <meta name="robots" content="noindex, nofollow">
        
        <meta property=”og:site_name” content=”<?php echo get_bloginfo('name'); ?>” />
        <meta property=”og:title” content=”<?php if( is_front_page() && is_home() ) { echo get_bloginfo('name'); } else { echo $post->post_title; } ?>” />
        <meta property=”og:url” content=”<?php if( is_front_page() && is_home() ) { echo get_home_url(); } else { echo get_permalink(); } ?>” />
        <meta property=”og:type” content=”<?php echo ( is_front_page() && is_home() ) ? 'website' : 'article'; ?>” />
        <meta property=”og:description” content=”<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>” />
        
        <link rel="canonical" href="<?php if( is_front_page() && is_home() ) { echo get_home_url(); } else { echo get_permalink(); } ?>" />
        <link rel="author" href="https://plus.google.com/+MatejJellus" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        
        <?php 
        
            if( is_front_page() && is_home() ) {
                echo '<link rel="alternate" hreflang="en" href="http://en.juffalow.com" />';
            } else {
                $enLink = get_post_custom_values( 'alternate_en' );
                if( $enLink !== null ) {
                    echo '<link rel="alternate" hreflang="en" href="', $enLink[0], '" />';
                }

                $skLink = get_post_custom_values( 'alternate_sk' );
                if( $skLink !== null ) {
                    echo '<link rel="alternate" hreflang="sk" href="', $skLink[0], '" />';
                }
            }
        ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/prettify.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/prettify/prettify.js"></script>
        
    </head>
    <body onload="prettyPrint()">
        
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                       <span>www.</span>juffalow<span>.com</span>
                </a>
            </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    /*'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',*/
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
            
            <?php if( is_front_page() && is_home() ) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://en.juffalow.com" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/english.png" alt="english language" width="32" /></a></li>
                    </ul>
            <?php } else if( $enLink !== null ) {?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $enLink[0]; ?>" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/english.png" alt="english language" width="32" /></a></li>
                    </ul>
            <?php } else if( $skLink !== null ) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $skLink[0]; ?>" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/slovak.png" alt="slovak language" width="32" /></a></li>
                    </ul>
            <?php } ?>
        </div>
    </nav>
        
            <!-- Begin page content -->
    <div class="container">

<div class="row spacer">
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 pull-right">
        <nav class="bs-docs-sidebar">
            <ul id="sidebar" class="nav nav-stacked fixed">

            </ul>
        </nav>
    </div>
    <div class="col-lg-9 col-md-12 pull-right">
        <h2 class="theme-subheading" id="veci-ktore-si-treba-istotne-zbalit">Veci, ktore si treba istotne zbalit</h2>
		Pre istotu taky orientacny zoznam povinnych a nepovinnych veci, ktore si treba zobrat so sebou. To len tak na kontrolu ci mame vsetko co treba.
		<h4 class="theme-subheading" id="hlavne-alias-povinne-veci">Hlavne alias povinne veci <small>co by sme mali mat so sebou</small></h4>
        <ul class="list-group">
            <li class="list-group-item">doklady - obciansky preukaz, vodicsky preukaz, karticku positenca ( <b>EUROPSKU</b> ) ( <b>OVERIT PLATNOST!</b> )</li>
            <li class="list-group-item">hygienicke potreby - kefka, sprchovy gel, uterak, ...</li>
            <li class="list-group-item">tu kravinku do auta co zrobi zo zastrcky USB, aby sme mohli nabijat telefony + samozrejme nabijacky na telefony</li>
            <li class="list-group-item">fotak ( ja mam, ale kazdy si moze chciet odfotit aj nieco svoje, tak pre istotu to sem pisem )</li>
            <li class="list-group-item">karimatka + spacak, spat budeme asi kadeako + teple ( termo ) oblecenie na spanie, kedze na severe nemusi byt zrovna teplucko</li>
            <li class="list-group-item">mapa / papier s rozpisom akymi mestami / dedinami mame prechadzat + telefonne cisla na odtahovku / zachranku / alebo ine potrebne cisla</li>
            <li class="list-group-item">voda so sebou, mineralky + cola na cestovanie a samozrejme termoska na kavu / caj</li>
            <li class="list-group-item">navigacia</li>
            <li class="list-group-item">peniaze / platobna karta ( <b>OVERTE SI PLATNOST</b> - <i>mna na to upozornili toj v obchode :D</i> )</li>
        </ul>
		<h4 class="theme-subheading" id="vedlajsie-alias-nepovinne-veci">Vedlajsie alias nepovinne veci <small>na co este mysliet</small></h4>
		<ul class="list-group">
			<li class="list-group-item">adresy na pohladnice ( <i>treba mysliet aj na ostatnych</i> )</li>
			<li class="list-group-item">cestovny vankus ( <i>pohodlie musi byc a v aute sa nespi moc dobre - osobna skusenost - rano plac, nedobra nalada, posrany den</i> )</li>
			<li class="list-group-item">vlhcene vreckovky ( <i>osviezujuce - dobra vec </i>)</li>
			<li class="list-group-item">nejaka jednoducha hra, co sa da hrat v aute na skratenie dlhych chvil</li>
		</ul>
		<h4 class="theme-subheading" id="dodatocne-veci">Dodatocne veci <small>oblecenie & jedlo</small></h4>
		<ul class="list-group">
			<li class="list-group-item">slusne veci, keby ideme niekam pozriet a sadnut</li>
			<li class="list-group-item">topanky na turistiku ( <i>cesta na troly jazyk trva niekolko hodin a istotne najdeme po ceste aj ine "prechadzky"</i> )</li>
			<li class="list-group-item">turisticke veci - nohavice, tricko, termo, bundicka, batoztek</li>
			<li class="list-group-item">nebrat zas milion veci, lebo to nepomestime! ( <i>kontrola citanosti textu</i> )</li>
			<li class="list-group-item">slnecne / dioptricke okuliare</li>
			<li class="list-group-item">povolit si na telefone roaming ( <i>keby sme sa niekde rozdelili a stratili, nech mozete volat / pripadne sa naucit aspon nejake tel cislo naspamat</i> )</li>
			<li class="list-group-item">dat telefonne cislo na mna, pripadne ineho clena teamu rodine ( <i>nech ma mamička dobry pocit a v pripade nudze moze pootravovat aj inych</i> )</li>
		</ul>
		<h4 class="theme-subheading" id="vseobecne-veci">Vseobecne veci <small>do velkieho ryukzaku</small></h4>
		<ul class="list-group">
                        <li class="list-group-item">spodne pradlo ( <i>N kusov, pripadne N / 2 ked ho budete obracat naruby - ako Jake z 2 a pol chlapa</i> )</li>
			<li class="list-group-item">ponozky</li>
			<li class="list-group-item">uterak + sprchovy gel</li>
                        <li class="list-group-item">tricko ( <i>N-krat</i> )</li>
			<li class="list-group-item">kratke + dlhe nohavice</li>
			<li class="list-group-item">topanocky / slapky do auta, topanky na turu, topanky na chodzu</li>
			<li class="list-group-item">spacak + karimatka</li>
		</ul>
                <h4 class="theme-subheading" id="telefonne-cisla">Telefonne cisla <small>pre istotu</small></h4>
                <p class="text-justify">Nemusite sa bat, ze su tu zverejnene, tato stranka je nastavena tak, aby sa neindexovala na google ani nikde inde a tiez na nu nevedie ziadny odkaz.</p>
		<ul class="list-group">
			<li class="list-group-item">Ja - veduci zajazdu - +421 915 785 089</li>
			<li class="list-group-item">Moja mama - alias pani Zuzana Račková - +421 911 652 125</li>
                        <li class="list-group-item">St<b>aniel</b> - Stanoidas - +421 904 213 255 / +421 908 679 327</li>
			<li class="list-group-item">slečna Juríková - Mižú - doplnit</li>
			<li class="list-group-item">Lucia - +421 917 252 682</li>
			<li class="list-group-item">pani Capáková - doplnit</li>
			<li class="list-group-item">pani Juríková - doplnit</li>
                        <li class="list-group-item">pani Fidesová - +421 905 490 543</li>
		</ul>
                <h4 class="theme-subheading" id="dalsie-dolezite-cisla">Dalsie dolezite cisla <small>poistovna, zachranka, atd</small></h4>
		<ul class="list-group">
			<li class="list-group-item">Poistovna Alianz ( Stano, Miska, Ja ) - +421 2 529 33 113</li>
			<li class="list-group-item">Poistovna Uniqua ( Lucia ) - +421 254 411 029</li>
                        <li class="list-group-item">Poistovna Alianz ( auticko ) - doplnit</li>
			<li class="list-group-item">Finska 112tka - doplnit</li>
			<li class="list-group-item">Norska 112tka - doplnit</li>
			<li class="list-group-item">Zvysne cisla asi dojdu klasicky smskou</li>
		</ul>
                <h4 class="theme-subheading" id="peniaze">Peniaze <small>poistka, poistka</small></h4>
		<ul class="list-group">
                    <li class="list-group-item">Poistenie 16,96 ( <i>platil som 50,88 za nas 3, fakturu ukazem, no problem</i> )</li>
                    <li class="list-group-item">Poistenie auto 50,00 ( <i>podla dohody</i> )</li>
		</ul>
        <h2 class="theme-subheading" id="cesta-tam">Cesta tam <small>Nordkapp</small></h2>
        <h4 class="theme-subheading" id="piatok-24-06-2015">Piatok <small>24.06.2015</small></h4>
        <p class="text-justify">
            Plan na tento den by mohol vyzerat nasledovne. Skusit to vydrzat v praci a tesit sa, ako z nej vypadneme. Byt predbezne zbaleny, mat vsetko pripravene a uz len kontrolovat ci je to naozaj vsetko. 
            Ratam, ze niekedy vo vecernych hodinach by sme vystartovali. Ja osobne by som cestou tam <b>SRAL NA VSETKO</b>. Ideme sa zamerat na severske krajiny, primarne na Norsko. Takze staty ako Polsko, Litva, Lotyssko a Estonsko by som nejako neriesil.
        </p>
        <div class="well well-sm">Billa, Puchov, Slovensko -> pobrezie, Tallinn, Estonsko</div>
        <p class="text-justify">
            Googel pise, ze je to cca 1512 kilometrof a casovo to ohodnotil na 18 hodin. Bude to piatok, vecer, tazko povedat ake su dialnice v Polsku a ake budu cesty. Jazdil by som naplno - co to da! To jest, rychlost cca <b>100 - 110</b> ( <i>podstatne je dojst 
            do ciela zivy a zdravy, nie co najrychlejsie</i> ), prestavky len cikanie, kakanie, pripadne krasny vyhlad, ktory treba odfotit. Inak ist nonstop. Samozrjeme, aj v tomto pripade treba mysliet hlavne na bezpecnost a pokial budu soferi unaveni, bude
            prestavka na revitalizaciu ( snad spravne slovo, prve co ma napadlo ). Ak pojde v aute nejaka babenka ( snad babenky ), tak ich uloha je jasna - presne tak ako aj v zivote - kecat kecat a kecat. Proste udrzovat dobru naladu a nedovolit soferovi pomysliet
            na spanok.
        </p>
        <p class="text-justify">
            Takze k casu 18 hodin pridame aspon tych 6. Je to z dovodu WC prestavok, pripadne cakanie na nalodenie. <b>Lod treba vyzistit kedy chodi a kolko to cca stoji.</b> ( chvilu neskor ako som napisal predoslu vetu ) Kukam ceny a je to cca od 100 do 150 euro 
            za 4 ludi + auto.
        </p>
        <div class="well well-sm">Casovy odhad nasho prijazdu do mesta Tallinn je 20:00 vecer. V rozpsise plavieb som nasiel sem tam aj casy po 20tej. Treba to este pre istotu kuknut, <i>ja jsu motak</i></div>
        <h4 class="theme-subheading" id="nalodenie-25-06-2015">Nalodenie <small>25.06.2015</small></h4>
        <p class="text-justify">
            Tu nas moze postretnut kade co. Bud nebude volne miesto na trajekte, alebo nas nieco zdrzi a nestihneme to. Tak ci tak, mali by sme tu byt vecer o 20tej. Ratajme so St<i>aniel</i>ovym casom cca 4 hodiny. Dve hodiny by mala byt plavba + nalodenie a vylodenie. 
            Tak ci tak, priratam pre istotu 16. Ako dovod mozeme dat aj unavu. V pripade ak nestihneme vecerny trajekt, nasiel som nejaky co vyraza ako prvy 7:30.
        </p>
        <h4 class="theme-subheading" id="den-d-vylodenie-25-06-2015">Den D - vylodenie <small>25.06.2015</small></h4>
        <p class="text-justify">
            Vylodenie dufam, ze bude este v sobotu vecer, keby sa vsak nepodarilo, tak niekedy v nedelu rano. Odpocinok, rezerva, atd a bludit Helsinkami mozeme tak okolo tej 12tej poobede. Ak sa tu da nieco vidiet, mozeme, som za. Ak by sme sa vsak dostali 
            na druhu stranu malej mlaky este vecer, myslim, ze sa moc zdrziavat asi nebudeme a pojdeme cim skor mimo mesto pobuvat. Ak by sme sa tam dostali az na druhy den rano, tak by sme mali byt vybuvani a teda kuknut co sa da dooobeda a pokracovat dalej.
        </p>
        <div class="well well-sm">Odchod z Helsiniek cca 13:00, nedela, 26.06.2015</div>
        <h4 class="theme-subheading" id="nedela-26-06-2015">Nedela <small>26.06.2015</small></h4>
        <p class="text-justify">
            Ok, tu uz by som presiel aspon na ciastocne normalny rezim. Pod tym si predstavujem cestovat prevazne cez den. Vo vecernych hodinach sa lahko stane nestastie - srnky, zajace, jezkovia - vlastna skusenost. Cize navrh je cestovat do tej 22:00 az 23:00. 
            Ratam s priemernou rychlostou 100km/hod a podla toho dalej prisposobim cestu. Samozrejme bude treba pozriet mozne ubytka, pripadne budeme sledovat tabule popri ceste, takze je mozne ze zastavime o nieco skor alebo neskor. S tym sa rata.<br />
            P.S.: znacky nebudu v slovencine, treba kuknut zakladne finske nazvy<br />
            P.P.S.: ani v rakusku nie su - vlastna skusenost - medvedia dolina sa hlada tazko, kedze ti trulovia to vsade maju popisane ako Bärenschützklamm
        </p>
        <div class="well well-sm">vylod, Helsinki, Finsko -> niekde, Oulu, Finsko</div>
        <p class="text-justify">
            Odhadom ( pravitko, mierka, vypocty ) je dlzka tejto trasy 606km, google cas je nieco pod 7 hodin cesty. Keby z tych Helsik odchadzame o tej 13tej, tak sa dostaneme na cas 20:00. Takze mame 2 hodiny k dobru ( dobre vysr..., vyhlady, etc ). Vobec 
            netusim co je poceste, kto chce, pozrite, isto sa najde nieco zaujimave.
        </p>
        <h4 class="theme-subheading" id="prve-lepsie-vyspanie">Prve lepsie vyspanie <small>postel & sprcha</small></h4>
        <p class="text-justify">
            V tomto / pri tomto mestecku - Oulu - by som rad prespal nejako normalne. Takze tu nas bude cakat velka uloha - hladat penzion / motel / 5* hotel. Nejako normalne sa najest, zhodnotit uplynulu cestu a pokecat o tom, co nas este caka ( a neminie ). 
            Neviem vobec kolko moze taketo ubytovanie stat, treba to popozerat, ked sa niekto bude nudit, tak len tak moze googlit, hladat a na facebook hodit nejaky ten link, ktory neskor pridam aj sem, nech mame lepsiu predstavu o tom kde co ako a hlavne aj
            kvoli peniazom.
        </p>
        <div class="well well-sm">postel, Oulu, Finsko -> dlhy a dobry spanok</div>
        <h4 class="theme-subheading" id="pondelok-27-06-2015">Pondelok <small>27.06.2015</small></h4>
        <p class="text-justify">
            Budicek. Treba uvazovat nad tym, ze odteraz treba dat pozor aj na to, ze sa nebude dat asi prespat len tak kdekolvek - moze byt dost chladno. Cestu medzi Oulu a dedinkou Nordkapp treba rozdelit, aby sme mohli este raz prespat, skoro rano vyrazit, 
            v Nordkappe byt cim skor, popozerat, pofotit a zas ist do 
        </p>
        <h4 class="theme-subheading" id="utorok-28-06-2015">Utorok <small>28.06.2015</small></h4>
        <p class="text-justify">
            V tento den by som sa chcel nachadzat v dedinke <b>Nordkapp</b>. Toto miesto sa da povazovat za "zaciatok" nasej cesty.
        </p>
        
        
        
        
        <h2 class="theme-subheading" id="zhrnutie">Zhrnutie <small>rekapitulacia</small></h2>
        Na zaver supnem par linkov kde som co nasiel, pripadne ak mate nejake linky vy, poslite, doplnim. Tiez tu hodime kilometrovnik aby sme mohli predbezne vyratat cenu pohonnych hmot.
        <h4 class="theme-subheading" id="pocet-kilometrov">Pocet kilometrov <small>kilometrovnik</small></h4>
        Netrufnem si povedat, kolko to bude zrat. Treba mysliet aj na to, ze budeme 4ria v aute a budeme mat kopec veci so sebou. Tak isto treba ratat s tym, ze v Norsku je ta nafta drahsia. Takze cele ratanie by som rozdelil na dve casti. Polku
        cesty ratat so sumou cca 1,40 a druhu polku so sumou 1,80. Radsej tak, aj ked ta suma bude istotne zaujimava. Aspon budeme potom milo prekvapeny, ze nam zostali peniaze naviac :)
        <ul class="list-group">
            <li class="list-group-item">Billa, Puchov, Slovensko -> nadol, Tallinn, Estonsko <b>1512</b> km</li>
            <li class="list-group-item">Helsinki, Finsko -> niekde, Oulu, Finsko <b>606</b> km</li>
        </ul>
    </div>
</div>
<script>
    function createContentList() {
        var twig = [];
        var i = 0;
        var isFirst = true;
        var isFirstSubTheme = true;
        $(".theme-subheading").each(function() {
            if( $(this).prop("tagName") === "H2" ) {
                if( !isFirstSubTheme ) { twig[i++] = "</ul>"; isFirstSubTheme = true; }
                if( !isFirst ) { twig[i++] = "</li>"; }
                twig[i++] = "<li><a href=\"#";
                twig[i++] = $(this).prop("id");
                twig[i++] = "\">";
                twig[i++] = $(this).text();
                twig[i++] = "</a>";
                isFirst = false;
            }
            
            if( $(this).prop("tagName") === "H4" ) {
                if( isFirstSubTheme ) {
                    twig[i++] = "<ul class=\"nav nav-stacked\">";
                    isFirstSubTheme = false;
                }
                twig[i++] = "<li><a href=\"#";
                twig[i++] = $(this).prop("id");
                twig[i++] = "\">";
                twig[i++] = $(this).text();
                twig[i++] = "</a></li>";
            }
        });
        $("#sidebar").append(twig.join(''));
    }
    createContentList();
    $('body').scrollspy({
    target: '.bs-docs-sidebar',
    offset: 40
});
</script>
    </div>

    <footer class="footer">
        <div class="container">
            
        </div>
    </footer>
    </body>
    </html>
