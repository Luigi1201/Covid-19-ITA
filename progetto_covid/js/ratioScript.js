
function ratiofunc(arrobj){
var ctx = document.getElementById('ratioCanvas1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ["NUOVI CASI", "TAMPONI GIORNALIERI EFFETUATI"],
        datasets: [{
            label: 'RAPPORTO',
            backgroundColor: ['black','red'],
            borderColor: ['green','yellow'],
            data: [arrobj[9]['nuovi_positivi'],arrobj[9]['tamponi']]
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
}