<!DOCTYPE html>
<html>
    <head lang="it">
        <title>Consegna</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna">
        <link rel="stylesheet" href="stile.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
    <body>
        <?php
        require 'functions.php';
        $array_content=array();
        $array_content=insert();
        $arrayRatio=getRatio($array_content);
        //$json=json_encode($array_content);
        //echo $json;
        ?>
        <a name="inizio" ></a>
        <div class="container-fluid" id="menu">
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="tabels.php">TABELLE</a></li> 
                <li><a href="grafico.php">GRAFICO_PROVA</a></li>
                <li><a href="">---</a></li>
                <li><a href="">---</a></li>
            </ul>
        </div>
        
    
        <div id="separatore"><h1>COVID-19 ITALIA</h1></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <div class="container">
                        <?php
                        $json=json_encode($array_content);
                        //echo $json;
                        ?>
                        <canvas id="myCanvas"></canvas>
                    </div>
                    grafici/index vero e proprio
                </div>
                <div class="col-3" id="barraLaterale" >
                    <sidebar>
                    <div class="container-fluid">
                        <div class="col">
                            <div class="row" id=titleBL>
                                <strong>
                                    <u>STATISTICHE AGGIORNATE AL <br>
                                        <?php printData($array_content,9)?>
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
                        </div>
                        
                    </div>
                    </sidebar>    
                </div>
            </div>
            
        </div>
        
        <div id="start">
            <a href="#inizio">
             <img src="Freccia.png" width="40px" height="40px">
            </a>
        </div>
        
        <footer style="background-color:black;height:150px">
            
        </footer>
        
    <script>
            var ctx = document.getElementById('myCanvas').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Contagi',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [0, 10, 5, 2, 20, 30, 45]
                        
                    }]
                },

                // Configuration options go here
                options: {}
            });
        </script>
    </body>
</html>