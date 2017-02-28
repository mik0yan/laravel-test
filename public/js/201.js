Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '销售额排行'
    },
    subtitle: {
        text: 'Source: 商务部'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: '其他',
            y: 56.33
        }, {
            name: '张三',
            y: 2.03,
            sliced: true,
            selected: true
        }, {
            name: '李四',
            y: 4.77
        }, {
            name: '王五',
            y: 10.38
        }, {
            name: '赵六',
            y: 24.03
        }]
    }]
});
