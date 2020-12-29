<!DOCTYPE html>
<html>
    <head lang="it">
        <title>TABELLE DATI</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Tabelle dati covid-19 ultimi 10 giorni">
        <link rel="stylesheet" href="css/stileTables.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    </head>
    <body>
        <div class="container-fluid" id="menu">
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="tabels.php">TABELLE</a></li> 
                <li><a href=""></a></li>
                <li><a href="">---</a></li>
                <li><a href="">---</a></li>
            </ul>
        </div>
        <a name="inizio"></a>
        
        <div class="container-fluid" id="divtab" >
            <?php
                require 'functions.php';
                $array_content=array();
                $array_content=insert();
                $arrayRatio=getRatio($array_content);
                tables($array_content,$arrayRatio);
            ?>
        </div>
        
        <div id="start">
            <a href="#inizio">
             <img src="contentMedia/Freccia.png" width="40px" height="40px">
            </a>
        </div>
        
        <footer style="background-color:black;height:150px">
            
        </footer>
        
    </body>
</html>