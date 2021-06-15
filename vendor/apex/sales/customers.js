var options = {
  chart: {
    height: 193,
    type: 'donut',
  },
  labels: ['New', 'Returned'],
  legend: {
    show: false,
  },
  series: [450, 900],
  stroke: {
    width: 1,
  },
  colors: ['#af772b', '#aaaaaa', '#434950', '#63686f', '#868a90'],
}
var chart = new ApexCharts(
  document.querySelector("#customers"),
  options
);
chart.render();