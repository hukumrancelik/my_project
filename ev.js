
window.onload = function() {
 
 
var chart= new CanvasJS.Chart("chartContainer_3", {
  theme: "light2",
  animationEnabled: true,
  title: {
    text: "EV DURUMU"
  },
  data: [{
    type: "pie",
    indexLabel: "{y}",
    yValueFormatString: "\"%\"#,##0.00",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "#36454F",
    indexLabelFontSize: 18,
    indexLabelFontWeight: "bolder",
    showInLegend: true,
    legendText: "{label}",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}

