function changeData(arrobj) {
    var length = arrobj.length;
    var datastart;
    var newdate;
    for (var i = 0; i < length; i++ ) {
        datastart = new Date(arrobj[i]['data']);
        newdate = datastart.toISOString().substring(0, 10);
        arrobj[i]['data'] = newdate;    
    }
}

function firstChart(arrobj){
    changeData(arrobj);
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
}
