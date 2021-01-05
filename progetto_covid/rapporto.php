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
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
            var jsStrRatio=JSON.stringify(jsonRatio);
            var objdataRatio = JSON.parse(jsStrRatio);
            var arrobj_Ratio = Object.values(objdataRatio); 
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
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content" style="margin-top:50px">ANDAMENTO RAPPORTO ULTIMI 10 GIORNI</h3>
                </div>
                <div class="row">
                    <p id="content"> ANDAMENTO DEL RAPPORTO NEGLI ULTIMI 10 GIORNI (%)</p>
                </div>
                <div class="row">
                    <div class="andamento-chart-container">
                        <div class="andamento-chart">
                            <canvas id="andamentoRatio"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content" style="margin-top:50px">RAPPORTO CASI TOTALI/TAMPONI TOTALI</h3>
                </div>
                <div class="row">
                    <p id="content"><?php printRatioTot($array_content) ?></p>
                    <p id="content"> CONFRONTO TRA I CASI TOTALI E I TAMPONI TOTALI IN PERCENTUALE </p>
                </div>
                <div class="row">
                    <div class="tot-chart-container">
                        <div class="tot-chart">
                            <canvas id="totRatio"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,10)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,10);?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas1"></canvas>
                        </div>
                    </div>    
                </div>       
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,9)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,9)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas2"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,8)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,8)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas3"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,7)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,7)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas4"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,6)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,6)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas5"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,5)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,5)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas6"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,4)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,4)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas7"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,3)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,3)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas8"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,2)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,2)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas9"></canvas>
                        </div>
                    </div>    
                </div>      
            </div>
            <div class="col-12" style="border: 2px solid black">
                <div class="row">
                    <h3 id="content">DATA <?php printData($array_content,1)?></h3>
                </div>
                <div class="row">
                    <p id="content"> <?php printInfo($arrayRatio,$array_content,1)?> </p>
                </div>
                <div class="row">
                    <div class="chart-container">
                        <div class="pie-chart-container">
                            <canvas id="ratioCanvas10"></canvas>
                        </div>
                    </div>    
                </div>      
            </div> 
        </div>
        
        <footer style="background-color:black;height:150px">
            
        </footer>
        <script src="js/ratioScript.js"></script>
    </body>
</html>    