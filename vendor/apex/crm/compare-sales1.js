var options = {
	chart: {
		height: 240,
		type: 'area',
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth',
		width: 3
	},
	series: [{
		name: 'Sales',
		data: [100, 600, 400, 900]
	}],
	grid: {
		row: {
			colors: ['transparent'], // takes an array which will be repeated on columns
			opacity: 0.5,
		},
		xaxis: {
      lines: {
        show: false
      }
    },   
    yaxis: {
      lines: {
        show: false
      }
    },
	},
	xaxis: {
		categories: ['Electronics', 'Grocery', 'Beauty', 'Toys'],
		// labels: {
	 //    show: false
	 //  }
	},
	colors: ['#da9d46', '#af772b', '#434950', '#63686f', '#868a90'],
	markers: {
		size: 5,
		opacity: 0.2,
		colors: ["#da9d46"],
		strokeColor: "#ffffff",
		strokeWidth: 2,
		hover: {
			size: 7,
		}
	},
	tooltip: {
		y: {
			formatter: function(val) {
				return  "$" + val + 'k'
			}
		}
	},
}

var chart = new ApexCharts(
	document.querySelector("#compare-expenses"),
	options
);

chart.render();
