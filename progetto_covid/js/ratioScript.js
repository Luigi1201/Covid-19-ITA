$(document).ready(function(){
    var ctx = document.getElementById('ratioCanvas1').getContext('2d');
    var tot_tamponi = parseInt(arrobj[10]['tamponi']);
    var tot_tamponi_ = parseInt(arrobj[9]['tamponi']);
    var tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#ffd700','#808000'],
                borderColor: ['black','black'],
                data: [arrobj[10]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },

        // Configuration options go here
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas2').getContext('2d');
    tot_tamponi = parseInt(arrobj[9]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[8]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#87ceeb','#c0c0c0'],
                borderColor: ['black','black'],
                data: [arrobj[9]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas3').getContext('2d');
    tot_tamponi = parseInt(arrobj[8]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[7]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#dda0dd','#cd5c5c'],
                borderColor: ['black','black'],
                data: [arrobj[8]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    }); 
    
    ctx = document.getElementById('ratioCanvas4').getContext('2d');
    tot_tamponi = parseInt(arrobj[7]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[6]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#6a5acd','#daa520'],
                borderColor: ['black','black'],
                data: [arrobj[7]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas5').getContext('2d');
    tot_tamponi = parseInt(arrobj[6]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[5]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#b8860b','#add8e6'],
                borderColor: ['black','black'],
                data: [arrobj[6]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas6').getContext('2d');
    tot_tamponi = parseInt(arrobj[5]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[4]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#6a5acd','#daa520'],
                borderColor: ['black','black'],
                data: [arrobj[5]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas7').getContext('2d');
    tot_tamponi = parseInt(arrobj[4]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[3]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#ffd700','#808000'],
                borderColor: ['black','black'],
                data: [arrobj[4]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas8').getContext('2d');
    tot_tamponi = parseInt(arrobj[3]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[2]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['blue','red'],
                borderColor: ['black','black'],
                data: [arrobj[3]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas9').getContext('2d');
    tot_tamponi = parseInt(arrobj[2]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[1]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#dda0dd','#cd5c5c'],
                borderColor: ['black','black'],
                data: [arrobj[2]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('ratioCanvas10').getContext('2d');
    tot_tamponi = parseInt(arrobj[1]['tamponi']);
    tot_tamponi_ = parseInt(arrobj[0]['tamponi']);
    tamponiGiornalieri = tot_tamponi - tot_tamponi_;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#6a5acd','#daa520'],
                borderColor: ['black','black'],
                data: [arrobj[1]['nuovi_positivi'],tamponiGiornalieri]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
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
    changeData(arrobj);
    ctx = document.getElementById('andamentoRatio').getContext('2d');
    chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [ arrobj[1]['data'], arrobj[2]['data'], arrobj[3]['data'], arrobj[4]['data'], arrobj[5]['data'], arrobj[6]['data'], arrobj[7]['data'], arrobj[8]['data'], arrobj[9]['data'], arrobj[10]['data']],
            datasets: [{
                label: 'RAPPORTO(%)',
                backgroundColor: '#8fbc8f',
                borderColor: '#8fbc8f',
                data: [arrobj_Ratio[9],arrobj_Ratio[8],arrobj_Ratio[7],arrobj_Ratio[6],arrobj_Ratio[5],arrobj_Ratio[4],arrobj_Ratio[3],arrobj_Ratio[2],arrobj_Ratio[1],arrobj_Ratio[0]]      
            }]
        },
        // Configuration options go here
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
    
    ctx = document.getElementById('totRatio').getContext('2d');
    var chart2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["CASI TOTALI", "TAMPONI TOTALI"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#ff7f50','#00ced1'],
                borderColor: ['black','black'],
                data: [arrobj[10]['totale_positivi'],arrobj[10]['tamponi']]
            }]
        },
        options: {
            legend : {
                display : true,
                position : "bottom"
            }
        }
    });
});

    
