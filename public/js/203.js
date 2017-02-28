Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: '销售员渠道分析'
    },
    subtitle: {
        text: 'Source: 商务部'
    },
    xAxis: {
        categories:['1月', '2月', '3月', '4月', '5月', '6月',
      '7月', '8月', '9月', '10月', '11月', '12月']
    },
    yAxis: {
        min: 0,
        title: {
            text: '订单总额'
        },
        labels: {
          formatter: function() {
            return this.value + '(万元)';
          }
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [{
        name: '直销',
        data: [5, 3, 2,3,2,3,12,4.5,6.7,8.9,5.1,3.4]
    }, {
        name: '总代',
        data: [2, 2, 3, 2, 1,4.5,6.7,12,13,2.3,5.6,7.8]
    }, {
        name: '经销商',
        data: [3, 4, 4, 2, 5,3,12,3,4.5,6.7,8.9,10]
    }]
});
