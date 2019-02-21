<?php
/* 

    Beskrivelse: Oppstartsfilen og forside. Denne filen kjører en funksjon som slår sammen xml filer.
        Sist oppdatert: 09.11.2017
            Utviklet av: Joacim, Steffen, Bahaa og Elias
                Kontrollert av: Joacim, Steffen, Bahaa og Elias

*/
include("functions/functions.php");
lagmergedXML();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Praktisk info om land</title>
<link href="styles/main.css" rel="stylesheet" type="text/css">
<!-- Google Fonts Roboto, alle typer -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    
</head>
<body>
<!-- her lager jeg en ny nav "joacim bergh" -->
    <aside id="mytopnav">
        <div id="mySidenav" class="sidenav" >
            <a href="../10land/hjem.php">Hjem</a>
           <a href="../10land/countries/sverige.php">Sverige</a>
           <a href="../10land/countries/danmark.php">Danmark</a>
           <a href="../10land/countries/island.php">Island</a>
           <a href="../10land/countries/japan.php">Japan</a>
           <a href="../10land/countries/kina.php">Kina</a>
           <a href="../10land/countries/mexico.php">Mexico</a>
           <a href="../10land/countries/usa.php">USA</a>
           <a href="../10land/countries/australia.php">Australia</a>
           <a href="../10land/countries/thailand.php">Thailand</a>
           <a href="../10land/countries/marokko.php">Marokko</a>
        </div>
    </aside>
    
<div class="grid">
    <div class="row side">
        <div class="col-sm-4">
            <div class="col4">
                <h2 class="infoheader"> Hit bør du reise i 2018 </h2></br>
			<h4 class="infotekst">Mange benytter juleferien til å bestille årets ferie – vi har spurt ekspertene hva som blir de hotteste reisemålene for året som kommer.</h4></br>
                    <p class="infotekst"><b>Sverige</b> har så masse å by på – alt fra spektakulær natur med kritthvite strender og gresskledde dalsider, koselige småbyer hvor kultur og tradisjoner står sterkt, morsomme badeland og aktivitetsparker for hele familien, til pulserende storbyer med det siste innen musikk, mat og kultur for øvrig.</p>
                    <p class="infotekst">Det er dejlig å være norsk i <b>Danmark</b>, sies det. Og det er sant. Vårt naboland er spekket med fine feriedestinasjoner, og kan tilby både storby, natur og opplevelser. Og selv om den danske kronen er sterkere enn vår egen, får du ofte mer valuta for pengene her enn i Norge.</p>
                    <p class="infotekst"><b>Island</b> er et av de landene som ligger nærmest Norge, men landet framstår allikevel innmari eksotisk og spennende. Naturen er vill, gold og vakker, og er det et sted du virkelig kan få observere naturens indre krefter på nært hold, er det her, hvor varme kilder og geysirer vitner om hva som foregår like under jordskorpen. Legg til trivelig stemning, hyggelige folk og svært lite kriminalitet, og du får et reisemål som burde være drømmen for enhver.</p>
                    <p class="infotekst"><b>Japan</b> er Soloppgangenes land og er fylt med kontraster. Fra futuristiske megabyer med svimlende menneskemylder til eldgamle templer og vakre japanske hager. Fra snødekte fjell til glitrende skyskrapere, stille teseremonier og bråkete spillehaller. Japan er smeltedigelen der gammelt og nytt står side ved side. Vakkert, unikt og gjestfritt.</p>
                    <p class="infotekst">Det er knapt noe land som er like industrielt og billig som <b>Kina</b>, og her får du kjøpt «alt» til spottpris. Kina er et Mekka for de shoppingglade, og her kan du få ting ekstremt billig og den østlige kulturen kan oppleves på sitt beste i nettopp Kina. Kinesisk te, templer og helt ville bygninger er noe av det Kina som turistland kan by på.</p>
                    <p class="infotekst">Reiser man til <b>Mexico</b> kan man ikke la være å bli slått av indianernes fantastiske kultur. Her er det imponerende pyramider, ruiner og templer som står igjen fra den rike maya-kulturen. Landet bugner av severdigheter, vakker natur, sjarmerende små landsbyer og perfekte strender.</p>
                    <p class="infotekst"><b>USA</b> er et svært populært reisemål for oss nordmenn, og ikke uten grunn; USA kan by på det aller meste, alt fra pulserende storbyliv i New York og Boston i øst, til surf & turf i California og Hawaii i vest. Det er et stort land med strålende og mangfoldig landskap, fantastiske metropolitiske områder og små tettsteder, og en utrolig rik historie.</p>
                    <p class="infotekst">Drømmer du om å se kenguruer? Se soloppgangen ved magiske Ayers Rock eller snorkle på Great Barrier Reef? Med stadig raskere flyforbindelser og rimeligere billetter er <b>Australia</b> nærmere enn noen gang.</p>
                    <p class="infotekst">Vi skjønner godt hvorfor nordmenn stadig returnerer til <b>Thailand</b>. I tillegg til å være det ultimate reisemålet på vinterhalvåret grunnet det fine været, byr Thailand på alt man kan ønske seg av strender, opplevelser og smaker.</p>
                    <p class="infotekst">Sydende liv i storbyene, ørken så langt øyet ser, skyhøye fjell og late dager ved kysten. I <b>Marokko</b> får du alt. Og i selve hjertet av medinaen, gamlebyen, i Marrakech, er ett av Afrikas travleste torg. Gamlebyen står på Unescos verdensarvsliste, og inneholder severdigheter og skatter fra en helt annen tid som er vel verdt et besøk. Gjorde du unna badeferien i sommer, og kunne tenke deg en liten eventyrreise i høst, da kan Marokko være akkurat det du ser etter.</p>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="col4" style="padding: 0px;" >
                <div class="map-wrap">
                    <div class="overlay-map" onClick="style.pointerEvents='none'">
                </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95367095.20441957!2d-35.52244430064693!3d43.159698687607495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ed8886cfadda85%3A0x72ef99e6b3fcf079!2sEuropa!5e0!3m2!1sno!2sno!4v1510053655102"
                    width="600" height="950" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            <!-- <img src="images/land/danmark.jpg" alt="" height="100%" align="right">-->
            </div>
        </div>
    </div>
</div>
</body>
</html>
