<h2>Statistiques > Tshirts</h2>

<div id="chart"></div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script>
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart()
{
  var data = google.visualization.arrayToDataTable(<?=json_encode($data)?>);

  var options = {
    height: 500,
    width: '100%',
    fontSize: 12,
    legend: 'none',
    trendlines: { 1: {} },
    vAxis: {
      title: 'Tailles de tshirt',
    },
    hAxis: {
      minValue: 0,
    },
    chartArea: {
      width: '85%',
      height: '80%',
    },
  };

  var chart = new google.visualization.BarChart(document.getElementById('chart'));
  chart.draw(data, options);
}
</script>

<br/><br/>
<div style="text-align: center; font-size: 18px;">
  <?=$total?> utilisateurs ont renseign&eacute; leur taille de tshirt
</div>
