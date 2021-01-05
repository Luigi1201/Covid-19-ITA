function changeData() {
    var length = arrobj.length;
    var datastart;
    var newdate;
    for (var i = 0; i < length; i++ ) {
        datastart = new Date(arrobj[i]['data']);
        newdate = datastart.toISOString().substring(0, 10);
        arrobj[i]['data'] = newdate;    
    }
}

function roundTo(value, places){
    var power = Math.pow(10, places);
    return Math.round(value * power) / power;
 }

function ratioDecedutiCasitot() {
    var deceduti  = parseInt(arrobj[9]['deceduti']);
    var casi = parseInt(arrobj[9]['totale_casi']);
    var rapportoDecedutiCasitot = (deceduti/casi)*100;  
    rapportoDecedutiCasitot = roundTo(rapportoDecedutiCasitot, 3);
    return rapportoDecedutiCasitot;
}

$(document).ready(function(){

    changeData();
    var ctx = document.getElementById('myCanvas').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [ arrobj[0]['data'], arrobj[1]['data'], arrobj[2]['data'], arrobj[3]['data'], arrobj[4]['data'], arrobj[5]['data'], arrobj[6]['data'], arrobj[7]['data'], arrobj[8]['data'], arrobj[9]['data']],
            datasets: [{
                label: 'Contagi',
                backgroundColor: 'red',
                borderColor: 'black',
                data: [arrobj[0]['nuovi_positivi'], arrobj[1]['nuovi_positivi'], arrobj[2]['nuovi_positivi'], arrobj[3]['nuovi_positivi'], arrobj[4]['nuovi_positivi'], arrobj[5]['nuovi_positivi'], arrobj[6]['nuovi_positivi'],arrobj[7]['nuovi_positivi'], arrobj[8]['nuovi_positivi'] , arrobj[9]['nuovi_positivi']]
                    
            }]
        },
        // Configuration options go here
        options: {}
    }); 
    

    var text = document.getElementById("rdcs");
    var rapportoD = ratioDecedutiCasitot();
    text.innerHTML = "Sono deceduti dopo essere risultati positivi il " + rapportoD + "% dei pazienti" ;
    var rapportoC = 100-rapportoD;
    ctx = document.getElementById('myCanvas2').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [ 'Casi con Deceduti(%)' , 'Totale casi(%)' ],
            datasets: [{
                label: ['Deceduti', 'Totale casi'],
                backgroundColor: ['blue','yellow'],
                borderColor: ['black','black'],
                data: [ rapportoD , rapportoC ]
                    
            }]
        },
        options: {}
    });
    
});