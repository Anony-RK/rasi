var options = {
  chart: {
    height: 300,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth',
    width: 3
  },
  series: [{
    name: 'Overall Income',
    data: [5000, 8000, 7000, 8000, 5000, 3000, 4000]
  }],
  grid: {
    row: {
      colors: ['transparent'], // takes an array which will be repeated on columns
      opacity: 0.2
    },
  },
  xaxis: {
    type: 'day',
    categories: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],                
  },
  colors: ['#af772b', '#fdcb78', '#af7729', '#434950', '#63686f', '#868a90'],
  markers: {
    size: 5,
    colors: ["#af772b"],
    strokeColor: "#fff",
    strokeWidth: 2,
    hover: {
      size: 7,
    }
  },
}

var chart = new ApexCharts(
  document.querySelector("#income"),
  options
);

chart.render();
