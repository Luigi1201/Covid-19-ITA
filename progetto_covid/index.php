<!DOCTYPE html>
<html>
    <head lang="it">
        <title>Consegna - Homepage</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna">
        <!-- css -->
        <link rel="stylesheet" href="css/stile.css">
        <link rel="stylesheet" href="css/menu.css">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- myScript -->
        <script src="js/myScript.js"></script>
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
        require 'php/functions.php';
        $array_content=array();
        $array_content=insert();
        $nr=10; //nr giorni da tenere in considerazione,in questo caso 10
        $array_content=setNrElements($array_content,$nr);       
        ?>
        <script>
            var json=<?php echo json_encode($array_content)?>; 
            var jsStr=JSON.stringify(json);
            var objdata = JSON.parse(jsStr);
            var arrobj = Object.values(objdata);  
        </script> 
        <a name="inizio" ></a>
        <div class="container-fluid" id="menu">
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="php/tabels.php">TABELLE</a></li> 
                <li><a href="php/rapporto.php">RAPPORTO</a></li>
                <li><a href="https://github.com/Luigi1201/Covid-19-ITA" target="_blank">GIT HUB</a></li>
            </ul>
        </div>
        
        <div id="separatore"><h1 style="width:100%;text-align:center;text-decoration:underline">COVID-19 ITALIA</h1></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="container-fluid">
                        <div class="chart-container">
                            <h6 style="margin-top:8rem;width:100%;text-align:center">
                                <font face="Comic sans MS" size="5">NUOVI POSITIVI</font>
                            </h6>  
                            <div class="line-chart-container">
                                <canvas id="myCanvas"></canvas>
                            </div>              
                        </div>    
                    </div>
                    <div class="container-fluid" style="margin-top:5rem">
                        <h6 style="width:100%;text-align:center">
                            <font face="Comic sans MS" size="5">PERCENTUALE DECEDUTI/TOTALE CASI</font>
                        </h6>
                        <div class="container-fluid" style ="text-align:center;margin-top:1rem;margin-bottom:1rem"><strong id="rdcs"></strong></div>  
                        <div class=chart-container>
                            <div class="pie-chart-container">
                                <canvas id="myCanvas2"></canvas>
                            </div>    
                        </div>
                    </div>                    
                </div>
                <div class="col-12 col-md-3" id="barraLaterale" >
                    <sidebar>
                    <div class="container-fluid">
                        <div class="col">
                            <div class="row" id="titleBL">
                                <strong>
                                    <u>
                                        <p style="text-align:center">
                                            STATISTICHE AGGIORNATE AL <br>
                                            <?php       printData($array_content,9)
                                            ?>
                                        </p>    
                                    </u>
                                </strong>
                            </div>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                <h6 style="width:100%;margin-top:10px">NUOVI POSITIVI</h6>
                                <p style="text-align:center;width:100%"><?php lateralBar1($array_content) ?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                    <h6 style="width:100%;margin-top:10px">DECEDUTI</h6>
                                    <p style="text-align:center;width:100%"><?php deceduti($array_content) ?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                    <h6 style="width:100%;margin-top:10px">DIMESSI / GUARITI</h6>
                                    <p style="text-align:center;width:100%"><?php dimessiGuariti($array_content) ?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                    <h6 style="width:100%;margin-top:10px">ATTUALMENTE POSITIVI</h6>
                                    <p style="text-align:center;width:100%"><?php attualmentePositivi($array_content)?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                    <h6 style="width:100%;margin-top:10px">TERAPIA INTENSIVA</h6>
                                    <p style="text-align:center;width:100%"><?php terapiaIntensiva($array_content)?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                    <h6 style="width:100%;margin-top:10px">RICOVERATI CON SINTOMI</h6>
                                    <p style="text-align:center;width:100%"><?php ricoveratiConSintomi($array_content) ?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row" id="blocchiBL">
                                    <h6 style="width:100%;margin-top:10px">ISOLAMENTO DOMICILIARE</h6>
                                    <p style="text-align:center;width:100%"><?php isolamentoDomiciliare($array_content) ?></p>
                                </div>
                            </aside>
                            <aside id="spaceBL">
                                <div class="row">
                                <form action="php/rapporto.php" style="align-content:center" >
                                      <button type="submit" >
                                        ALTRE INFORMAZIONI
                                      </button>  
                                </form>
                                </div>
                            </aside>
                        </div>
                        
                    </div>
                    </sidebar>    
                </div>
            </div>
            
        </div>
        <div class="container" style="width:95%;margin-top:5rem">
            <h2 style="width:100%;text-align:center;margin-top:2rem;margin-bottom:2rem">
                <font face="Comic sans MS" > REGIONI </font>
            </h2>
            <p style="text-align:center">
                 DATI AGGIORNATI AL  
                <?php 
                    $regioni=getArrayRegioni();
                    printData($regioni,count($regioni)-1);
                ?>
            </p>
            <div class="row">
                <div class="col" style="background-color:#d2691e" id="tabellaRegioni">
                    NOME REGIONE
                </div>
                <div class="col" style="background-color:#d2691e" id="tabellaRegioni">
                    TOTALE CASI
                </div>
                <div class="col" style="background-color:#d2691e" id="tabellaRegioni">
                    TAMPONI TOTALI
                </div>
                <div class="col" style="background-color:#d2691e" id="tabellaRegioni">
                    NUOVI POSITIVI
                </div>
                </div>
                <?php
                    getRegioni($regioni); 
                ?>
        </div>
        <div id="start">
            <a href="#inizio">
             <img src="contentMedia/Freccia.png" width="40px" height="40px">
            </a>
        </div>
        
        <footer style="background-color:black;height:150px;margin-top:3rem">
            <div class="container-fluid" style="height:150px">
                <div class="row" style="height:30%;margin-top:3rem"></div>
                <div class="row" style="height:70%">
                    <p style="text-align:center;width:100%;color:white;bottom:0px;">
                        - Covid-19 statistiche Italia -
                    </p>
                    <p style="text-align:center;width:100%;color:white;text-align:bottom">
                        luigi.riggi1201@gmail.com 
                    </p>
                </div>
            </div>
        </footer>
           
    </body>
</html>