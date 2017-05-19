Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: '公司总订单额'
  },
  subtitle: {
    text: 'Source: 商务部'
  },
  xAxis: {
    categories: ['1月', '2月', '3月', '4月', '5月', '6月',
      '7月', '8月', '9月', '10月', '11月', '12月'
    ]
  },
  yAxis: {
    title: {
      text: '订单总额'
    },
    labels: {
      formatter: function() {
        return this.value + '(万元)';
      }
    }
  },
  tooltip: {
    crosshairs: true,
    shared: true
  },
  plotOptions: {
    spline: {
      marker: {
        radius: 4,
        lineColor: '#666666',
        lineWidth: 1
      }
    }
  },
  series: [{
    name: '今年',
    marker: {
      symbol: 'square'
    },
    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2,23.3, 18.3, 13.9, 9.6]

  }, {
    name: '去年',
    marker: {
      symbol: 'diamond'
    },
    data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
  }, {
    name: '前年',
    marker: {
      symbol: 'diamond'
    },
    data: [13.9, 14.2, 11.7, 8.5, 3.9, 9.2, 11.0, 4.6, 4.2, 11.3, 16.6, 4.8]
  }]
});
