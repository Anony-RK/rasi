var options = {
	chart: {
		height: 230,
		type: 'donut',
	},
	labels: ['Desktop', 'Tablet', 'Mobile'],
	series: [60000, 45000, 15000],
	legend: {
		position: 'bottom',
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		width: 10,
		colors: ['#eceff3'],
	},
	colors: ['#da9d46', '#f18024', '#af772b'],
	tooltip: {
		y: {
			formatter: function(val) {
				return  "$" + val
			}
		}
	},
}
var chart = new ApexCharts(
	document.querySelector("#budget"),
	options
);
chart.render();