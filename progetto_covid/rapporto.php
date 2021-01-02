<!DOCTYPE html>
<html>
    <head lang="it">
        <title>RAPPORTO</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Rapporto">
        <!-- css -->
        <link rel="stylesheet" href="css/rapporto.css">
        <link rel="stylesheet" href="css/menu.css">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <!-- ratioScript -->
        <script src="js/ratioScript.js"></script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="contentMedia/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="contentMedia/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="contentMedia/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="contentMedia/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="contentMedia/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="contentMedia/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="contentMedia/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="contentMedia/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="contentMedia/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="contentMedia/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="contentMedia/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="contentMedia/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="contentMedia/favicon/favicon-16x16.png">
        <link rel="manifest" href="contentMedia/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="contentMedia/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <?php
            require 'functions.php';
            $array_content=array();
            $array_content=insert();
            $nr=11; //nr giorni da prendere in considerazione
            $array_content=setNrElements($array_content,$nr);
            $arrayRatio=getRatioGiornaliero($array_content);
        ?>
        <script type="text/javascript"> 
            var json=<?php echo json_encode($array_content)?>; 
            var jsStr=JSON.stringify(json);
            var objdata = JSON.parse(jsStr);
            var arrobj = Object.values(objdata); 
            var jsonRatio=<?php echo json_encode($arrayRatio)?>;
            var jsStr_ratio=JSON.stringify(jsonRatio);
            var objdata_ratio = JSON.parse(jsStr_ratio);
            var arrobj_ratio = Object.values(objdata_ratio);
        </script>
        <a name="inizio" ></a>
        <div class="container-fluid" id="menu">
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="tabels.php">TABELLE</a></li> 
                <li><a href="rapporto.php">RAPPORTO</a></li>
                <li><a href="https://github.com/Luigi1201/Covid-19-ITA" target="_blank">GIT HUB</a></li>
            </ul>
        </div>
        
        <div id="start">
            <a href="#inizio">
             <img src="contentMedia/Freccia.png" width="40px" height="40px">
            </a>
        </div>
        
        <h1 id="separatore"> RAPPORTO </h1>
        
        <div class="container-fluid" style="margin-top:30px">
            <div class="col" style="border: 2px solid black">
            <div class="row">
                <h3 id="content">DATA <?php printData($array_content,10)?></h3>
            </div>
            <div class="row">
                <p id="content"> <?php printInfo($arrayRatio,$array_content,10) ?> </p>
            </div>
            <div class="row">
                <canvas id="ratioCanvas1"></canvas>
                <script type="text/javascript"> ratiofunc(arrobj);</script>
            </div>
            <div class="row">
                <canvas id=""></canvas>
                <script type="text/javascript"> </script>
            </div>
            </div>
        </div>
    
        <footer style="background-color:black;height:150px">
            
        </footer>
    </body>
</html>    