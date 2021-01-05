$(document).ready(function(){
    var tampGiornalieri = parseInt(arrobj[10]['tamponi']) - parseInt(arrobj[9]['tamponi']);
    var ratio_nptg = (parseInt(arrobj[10]['nuovi_positivi'])/tampGiornalieri)*100;
    var ratio_tg = 100 - ratio_nptg;
    var ctx = document.getElementById('ratioCanvas1').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#ffd700','#808000'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[9]['tamponi']) - parseInt(arrobj[8]['tamponi']);
    ratio_nptg = (parseInt(arrobj[9]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#87ceeb','#c0c0c0'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[8]['tamponi']) - parseInt(arrobj[7]['tamponi']);
    ratio_nptg = (parseInt(arrobj[8]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#dda0dd','#cd5c5c'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[7]['tamponi']) - parseInt(arrobj[6]['tamponi']);
    ratio_nptg = (parseInt(arrobj[7]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#6a5acd','#daa520'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[6]['tamponi']) - parseInt(arrobj[5]['tamponi']);
    ratio_nptg = (parseInt(arrobj[6]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#b8860b','#add8e6'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[5]['tamponi']) - parseInt(arrobj[4]['tamponi']);
    ratio_nptg = (parseInt(arrobj[5]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#6a5acd','#daa520'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[4]['tamponi']) - parseInt(arrobj[3]['tamponi']);
    ratio_nptg = (parseInt(arrobj[4]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#ffd700','#808000'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[3]['tamponi']) - parseInt(arrobj[2]['tamponi']);
    ratio_nptg = (parseInt(arrobj[3]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['blue','red'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[2]['tamponi']) - parseInt(arrobj[1]['tamponi']);
    ratio_nptg = (parseInt(arrobj[2]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#dda0dd','#cd5c5c'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
    tampGiornalieri = parseInt(arrobj[1]['tamponi']) - parseInt(arrobj[0]['tamponi']);
    ratio_nptg = (parseInt(arrobj[1]['nuovi_positivi'])/tampGiornalieri)*100;
    ratio_tg = 100 - ratio_nptg;
    var chart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["NUOVI CASI(%)", "TAMPONI GIORNALIERI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#6a5acd','#daa520'],
                borderColor: ['black','black'],
                data: [ratio_nptg,ratio_tg]
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
                data: [arrobj_Ratio[0],arrobj_Ratio[1],arrobj_Ratio[2],arrobj_Ratio[3],arrobj_Ratio[4],arrobj_Ratio[5],arrobj_Ratio[6],arrobj_Ratio[7],arrobj_Ratio[8],arrobj_Ratio[9]]      
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
    
    
    ratioTotCasi = parseInt(arrobj[10]['totale_casi'])/parseInt(arrobj[10]['tamponi']);
    ratioTotTamponi = 100 - ratioTotCasi;
    ctx = document.getElementById('totRatio').getContext('2d');
    var chart2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["CASI TOTALI(%)", "TAMPONI TOTALI(%)"],
            datasets: [{
                label: 'RAPPORTO',
                backgroundColor: ['#ff7f50','#00ced1'],
                borderColor: ['black','black'],
                data: [ratioTotCasi,ratioTotTamponi]
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

    
