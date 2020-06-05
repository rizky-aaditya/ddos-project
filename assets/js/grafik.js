const FireBase1 = firebase.database().ref().child("Sensor").child("Gas");
var result; //temperature variable
var snap = function(datasnapshot){         
result = parseFloat(datasnapshot.val())
};
FireBase1.on("value", snap)
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});

const FireBase2 = firebase.database().ref().child("Sensor").child("Debu");
var result2; //humidity variable
var snap = function(datasnapshot){         
result2 = parseFloat(datasnapshot.val())
};
FireBase2.on("value", snap)
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});

// Create the chart
Highcharts.stockChart('content', {
    chart: {
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                var series1 = this.series[1];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = result,
                        z = result2;
            console.log(x); //to show timestamp in console
                   series1.addPoint([x, z], true);
                   series.addPoint([x, y], true);
                }, 1000);
            }
        }
    },


    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Grafik Fluktuasi CO2 dan Debu di daerah X'
    },
    tooltip: {
            split: true
        },



    yAxis: {
        title: {
            text: 'Suhu \xB0'
        }
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'PPM',
        data: [[new Date().getTime(), result]],
        color: 'red'
    },
    {
        name: 'mg/m^3',
        data: [[new Date().getTime(), result2]],
        color:'green'
    }]
});
