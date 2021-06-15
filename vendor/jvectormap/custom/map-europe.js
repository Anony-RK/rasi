// Europe
$(function(){
	$('#mapEurope').vectorMap({
		map: 'europe_mill',
		zoomOnScroll: false,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#af772b'],
				normalizeFunction: 'polynomial'
			}]
		},
		backgroundColor: 'transparent',
	});
});