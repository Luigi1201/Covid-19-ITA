<!-- Contiene tutte le funzioni in php utili alla creazione delle pagine -->
<?php
 
    /* Per inserire i dati del file csv in un array utilizzo la funzione insert()*/
    function insert(){    
        $filename='https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';
        $filecsv = array_map('str_getcsv', file($filename));
        array_walk($filecsv,function(&$a)use ($filecsv){
            $a=array_combine($filecsv[0],$a);
        });
        array_shift($filecsv);
        return $filecsv;
        
    }
    
    /* Per prendere in considerazione soltanto gli elementi desiderati utilizzo la funzione setNrElements($array_content,$nr) */
    function setNrElements($array_content,$nr){
        $nr_elements=count($array_content);
        $start=$nr_elements-$nr;
        $j=0;
        $relevant_data=array();
        for($i=$start;$i<$nr_elements;$i++){
            $relevant_data[$j]=array_merge($array_content[$i]);
            $j++;
        }
        for($i=0;$i<$nr_elements;$i++){
            unset($array_content[$i]);  
        }
        return $relevant_data;
    }  

    /* Per calcolare il rapporto giornaliero nuovi_positivi/tamponi giornalieri in percentuale utilizzo la funzione getRatioGiornaliero($array_content), che restituisce un array contenente i rapporti degli ultimi degli giorni */
    function getRatioGiornaliero($array_content){
        $arrayRatio=array();
        $j=9;
        for($i=10;$i>=1;$i--){
            $positivi=(integer)$array_content[$i]['nuovi_positivi'];
            $tampgiornoi=(integer)$array_content[$i]['tamponi'];
            $tampgiornimeno1=(integer)$array_content[$i-1]['tamponi'];
            $tamponiGiornalieri=$tampgiornoi-$tampgiornimeno1;
            $ratio=($positivi/$tamponiGiornalieri)*100;
            $arrayRatio[$j]=round($ratio,5);
            $j--;
        }
        return $arrayRatio;
    }  

    /* Per stampare i dati utilizzo la funzione tables($array_content), che li organizza in una mia rappresentazione di tabella creata con Bootstrap. Viene creata una tabella per ogni giorno in modo da rendere la visualizzazione il più ordinata possibile, e comprensibile a colpo d'occhio. */
    function tables($array_content){
 
        for($i=9;$i>=0;$i--){
            $middle = strtotime($array_content[$i]['data']);
            $new_date = date('d-m-Y  H:i:s', $middle);
            if($i==9){
                echo '<br><h3 style="text-align:center;text-decoration:underline">ULTIMI DATI INSERITI ('.$new_date.')</h3>';

            }else{             
                echo '<br><h3 style="text-align:center;text-decoration:underline">DATI DEL '.$new_date.' </h3>';   
            }
    
            
            echo
            '
            <div class="container" style="text-align:center" >
                <div class="col">
                    <div class="row"><div class="col" style="text-align:right">DATA:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['data'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">STATO:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['stato'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">RICOVERATI CON SINTOMI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['ricoverati_con_sintomi'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">TERAPIA INTENSIVA:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['terapia_intensiva'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">TOTALE OSPEDALIZZATI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['totale_ospedalizzati'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">ISOLAMENTO DOMICILIARE:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['isolamento_domiciliare'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">TOTALE POSITIVI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['totale_positivi'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">VARIAZIONE TOTALE POSITIVI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['variazione_totale_positivi'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">NUOVI POSITIVI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['nuovi_positivi'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">DIMESSI GUARITI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['dimessi_guariti'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">DECEDUTI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['deceduti'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">CASI DA SOSPETTO DIAGNOSTICO:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['casi_da_sospetto_diagnostico'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">CASI DA SCREENING:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['casi_da_screening'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">TOTALE CASI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['totale_casi'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">TAMPONI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['tamponi'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">CASI TESTATI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['casi_testati'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">NOTE:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['note'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">INGRESSI TERAPIA INTENSIVA:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['ingressi_terapia_intensiva'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">NOTE TEST:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['note_test'].'</div>'.'</div>
                    <div class="row"><div class="col" style="text-align:right">NOTE CASI:</div>'.'<div class="col" style="text-align:left">'.$array_content[$i]['note_casi'].'</div>'.'</div>
                </div>
            </div>
            <div class="container-fluid" style="height:5px;background-color:red;margin-top:20px;"></div>
            ';

        }
    
    } 

    /* Per stampare a video la data si può utilizzare la funzione printData($array_content,$nr), specificando la posizione nell'array si arriva a visualizzare la data del giorno desiderato */
    function printData($array_content,$nr){
        $middle = strtotime($array_content[$nr]['data']);
        $new_date = date('d-m-Y', $middle);
        echo $new_date;
    }

    /* Funzione utilizzata per stampare informazioni quali nuovi casi, tamponi  giornalieri e rapporto nuovi/casi tamponi giornalieri all'interno di rapporto.php */
    function printInfo($arrayRatio,$array_content,$nr){
        $tampgiornoi=(integer)$array_content[$nr]['tamponi'];
        $tampgiornimeno1=(integer)$array_content[$nr-1]['tamponi'];
        $tamponiGiornalieri=$tampgiornoi-$tampgiornimeno1;
        echo '<br>NUOVI CASI : '.$array_content[$nr]['nuovi_positivi'];
        echo '<br>TAMPONI GIORNALIERI : '.$tamponiGiornalieri;
        echo '<br>RAPPORTO NUOVI CASI/TAMPONI GIORNALIERI : '.$arrayRatio[$nr-1]."%"; 
    }

    /* Funzione utilizzata in rapporto.php per stampare a video informazioni riguardanti un grafico */
    function printRatioTot($array_content){
        $casi=(integer)$array_content[10]['totale_casi'];
        $tamponi=(integer)$array_content[10]['tamponi'];
        $rapporto=$casi/$tamponi;
        echo "RAPPORTO TOTALE CASI/TOTALE TAMPONI EFFETTUATI: ".$rapporto."%";
    }



    /* INIZIO DELLE FUNZIONI PER LA STAMPA NELLA BARRA LATERALE DI index.php */

    /* Funzione per stampa dati nel primo blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e il numero di positivi del giorno */
    function lateralBar1($array_content){
        $nv=$array_content[9]['nuovi_positivi'];
        if($nv >= 0){
            echo "+".$nv;
        }
        echo '<br>'."totali: ".$array_content[9]['totale_casi'];
    }
    
    /* Funzione per stampa dati nel secondo blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e i deceduti del giorno */
    function deceduti($array_content){
        $deceduti9=(int)$array_content[9]['deceduti'];
        $deceduti8=(int)$array_content[8]['deceduti'];
        $differenza=$deceduti9-$deceduti8;
        if($differenza >= 0){
            echo "+".$differenza;    
        }else{
            echo $differenza;
        }
        echo '<br>'."totali: ".$array_content[9]['deceduti'];
    }

    /* Funzione per stampa dati nel terzo blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e il numero di dimessi/guariti del giorno */
    function dimessiGuariti($array_content){
        $dg9=(int)$array_content[9]['dimessi_guariti'];
        $dg8=(int)$array_content[8]['dimessi_guariti'];
        $differenza=$dg9-$dg8;
        if($differenza >= 0){
            echo "+".$differenza;    
        }else{
            echo $differenza;
        }
        echo '<br>'."totali: ".$array_content[9]['dimessi_guariti'];
    }

    /* Funzione per stampa dati nel quarto blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e il numero degli attuali positivi */
    function attualmentePositivi($array_content){
        $attpos9=(int)$array_content[9]['totale_positivi'];
        $attpos8=(int)$array_content[8]['totale_positivi'];
        $differenza=$attpos9-$attpos8;
        if($differenza >= 0){
            echo "+".$differenza;    
        }else{
            echo $differenza;
        }
        echo '<br>'."totali: ".$array_content[9]['totale_positivi'];
    }
    
    /* Funzione per stampa dati nel quinto blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e i posti in terapia intensiva occupati del giorno */
    function terapiaIntensiva($array_content){
        $terint9=(int)$array_content[9]['terapia_intensiva'];
        $terint8=(int)$array_content[8]['terapia_intensiva'];
        $differenza=$terint9-$terint8;
        if($differenza >= 0){
            echo "+".$differenza;    
        }else{
            echo $differenza;
        }
        echo '<br>'."totali: ".$array_content[9]['terapia_intensiva'];
    }
    
    /* Funzione per stampa dati nel sesto blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e i ricoverati con sintomi del giorno */
    function ricoveratiConSintomi($array_content){
        $rcs9=(int)$array_content[9]['ricoverati_con_sintomi'];
        $rcs8=(int)$array_content[8]['ricoverati_con_sintomi'];
        $differenza=$rcs9-$rcs8;
        if($differenza >= 0){
            echo "+".$differenza;    
        }else{
            echo $differenza;
        }
        echo '<br>'."totali: ".$array_content[9]['terapia_intensiva'];
    }
    
    /* Funzione per stampa dati nel settimo blocco della barra laterale di index.php. Viene stampata la variazione rispetto al giorno precedente e il numero di casi in isolamento domiciliare del giorno */
    function isolamentoDomiciliare($array_content){
        $isDomiciliare9=(int)$array_content[9]['isolamento_domiciliare'];
        $isDomiciliare8=(int)$array_content[8]['isolamento_domiciliare'];
        $differenza=$isDomiciliare9-$isDomiciliare8;
        if($differenza >= 0){
            echo "+".$differenza;    
        }else{
            echo $differenza;
        }
        echo '<br>'."totali: ".$array_content[9]['isolamento_domiciliare'];
    }

    /* FINE DELLE FUNZIONI PER LA STAMPA NELLA BARRA LATERALE DI index.php */
?>
