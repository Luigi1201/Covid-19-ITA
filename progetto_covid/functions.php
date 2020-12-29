<?php
 

    function insert(){    
        $filename='https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';
        $filecsv = array_map('str_getcsv', file($filename));
        array_walk($filecsv,function(&$a)use ($filecsv){
            $a=array_combine($filecsv[0],$a);
        });
        array_shift($filecsv);
        $nr_elements=count($filecsv);
        $start=$nr_elements-10;
        $j=0;
        $relevant_data=array();
        for($i=$start;$i<$nr_elements;$i++){
            $relevant_data[$j]=array_merge($filecsv[$i]);
            $j++;
        }
        for($i=0;$i<$nr_elements;$i++){
            unset($filecsv[$i]);  
        }
        return $relevant_data;
    }

    function getRatio($array_content){
        $arrayRatio=array();
        $tamponiGiornalieri=array();
        for($i=0;$i<count($array_content);$i++){
            $positivi=(integer)$array_content[$i]['nuovi_positivi'];
            $tamponiTotali=(integer)$array_content[$i]['tamponi'];
            $ratio=($positivi/$tamponiTotali)*100;
            $arrayRatio[$i]=round($ratio,5);
        }
        return $arrayRatio;
    }  

    function tables($array_content,$arrayRatio){
 
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
                    <div class="row"><div class="col" style="text-align:right">RAPPORTO NUOVI CASI / TAMPONI EFFETTUATI:</div><div class="col" style="text-align:left">'.$arrayRatio[$i].'%</div></div>
                </div>
            </div>
            <div class="container-fluid" style="height:5px;background-color:red;margin-top:20px;"></div>
            ';

        }
    
    } 

    function printData($array_content,$nr){
        $middle = strtotime($array_content[$nr]['data']);
        $new_date = date('d-m-Y', $middle);
        echo $new_date;
    }

    function lateralBar1($array_content){
        $nv=$array_content[9]['nuovi_positivi'];
        if($nv >= 0){
            echo "+".$nv;
        }
        echo '<br>'."totali: ".$array_content[9]['totale_casi'];
    }

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

    function getCSV(){
        $csv='https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';   
        return $csv;
    }
?>