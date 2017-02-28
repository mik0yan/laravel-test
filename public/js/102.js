Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: '应收款/回款'
    },
	  subtitle: {
  		  text: 'Source: 财务部'
 		},
    xAxis: {
        categories: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
    },
    yAxis: {
        min: 0,
        title: {
            text: '订单额按月'
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
        name: '未付款',
        data: [5, 3, 4, 7, 2,3,2.3,15,4.5,6.7,14.2,4]
    }, {
        name: '回款',
        data: [2.2, 4,3, 3.4, 21, 14,1.3,4.5,18,34,23,32]
    }]
});
