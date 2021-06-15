// Morris Days
var day_data = [
	{"period": "2016-10-01", "licensed": 3213, "SmartQ": 887},
	{"period": "2016-09-30", "licensed": 3321, "SmartQ": 776},
	{"period": "2016-09-29", "licensed": 3671, "SmartQ": 884},
	{"period": "2016-09-20", "licensed": 3176, "SmartQ": 448},
	{"period": "2016-09-19", "licensed": 3376, "SmartQ": 565},
	{"period": "2016-09-18", "licensed": 3976, "SmartQ": 627},
	{"period": "2016-09-17", "licensed": 2239, "SmartQ": 660},
	{"period": "2016-09-16", "licensed": 3871, "SmartQ": 676},
	{"period": "2016-09-15", "licensed": 3659, "SmartQ": 656},
	{"period": "2016-09-10", "licensed": 3380, "SmartQ": 663}
];
Morris.Line({
	element: 'dayData',
	data: day_data,
	xkey: 'period',
	ykeys: ['licensed', 'SmartQ'],
	labels: ['Licensed', 'SmartQ'],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#e1e5f1",
	pointFillColors:['#ffffff'],
	pointStrokeColors: ['#af772b'],
	lineColors:['#af772b', '#da9d46', '#e0ac69', '#f1c17d', '#ffdbac'],
});