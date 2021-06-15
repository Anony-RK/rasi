// Morris Donut
Morris.Donut({
	element: 'donutColors',
	data: [
		{value: 30, label: 'foo'},
		{value: 15, label: 'bar'},
		{value: 10, label: 'baz'},
		{value: 5, label: 'A really really long label'}
	],
	backgroundColor: '#ffffff',
	labelColor: '#666666',
	colors:['#af772b', '#da9d46', '#e0ac69', '#f1c17d', '#ffdbac'],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#e4e6f2",
	formatter: function (x) { return x + "%"}
});