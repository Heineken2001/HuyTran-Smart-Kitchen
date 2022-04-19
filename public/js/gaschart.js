var yValues = [500,600,700,800,900,1000,510,520,300,400,700,1023];
var xValues = [1,2,3,4,5,6,7,8,9,10,11,12];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 0, max:1100}}],
    }
  }
});