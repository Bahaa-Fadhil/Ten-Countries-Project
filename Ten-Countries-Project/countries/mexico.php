<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Praktisk info om land</title>
<link href="../styles/main.css" rel="stylesheet" type="text/css">
<!-- Google Fonts Roboto, alle typer -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    
</head>
<body>
<!-- her lager jeg en ny nav "joacim bergh" -->
<aside id="mytopnav">
    <div id="mySidenav" class="sidenav" >
        <a href="../hjem.php">Hjem</a>
       <a href="../countries/sverige.php">Sverige</a>
       <a href="../countries/danmark.php">Danmark</a>
       <a href="../countries/island.php">Island</a>
       <a href="../countries/japan.php">Japan</a>
       <a href="../countries/kina.php">Kina</a>
       <a href="../countries/mexico.php">Mexico</a>
       <a href="../countries/usa.php">USA</a>
       <a href="../countries/australia.php">Australia</a>
       <a href="../countries/thailand.php">Thailand</a>
       <a href="../countries/marokko.php">Marokko</a>
    </div>
</aside>


<div class="grid">
    <div class="row side">
        <div class="col-sm-4">
            <div class="col4">
            <h2 class="infoheader">Praktisk info om Mexico</h2></br>
            <?php
            include("../functions/functions.php");
            $land = "mexico.xsl";
            lagXSL($land);
            ?> 
            </div>
        </div>
        <div class="col-sm-8">
            <div class="col4" style="padding: 0px;" >
            <div class="map-wrap">
		<div class="overlay-map" onClick="style.pointerEvents='none'"></div>
        <!-- wrap map iframe to turn off mouse scroll and turn it back on on click -->  

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15007920.902272401!2d-111.64194819908238!3d23.314191735503886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84043a3b88685353%3A0xed64b4be6b099811!2sMexico!5e0!3m2!1sno!2sno!4v1509996152258"
             width="600" height="950" frameborder="0" style="border:0" allowfullscreen></iframe>

		<!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74885.88402589515!2d10.018527032309215!3d60.447654917924055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46404ebc2dd64ba9%3A0xe71f9ea60cb6d410!2sElsrud+G%C3%A5rd!5e0!3m2!1sno!2sno!4v1488830623890"
			width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->

	</div>
                <!-- <img src="images/land/danmark.jpg" alt="" height="100%" align="right">-->
            </div>
        </div>
    </div>
</div>
</body>
</html>