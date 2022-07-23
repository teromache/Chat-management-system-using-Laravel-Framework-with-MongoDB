<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VBA:Chat Management</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['Report Type', 'Number'],
          ['Body Shamming', {{ $bs_count }}],
          ['Abussive Word', {{ $aw_count }}],
          ['Fake News',  {{ $fn_count }}]
        ]);

        var options = {
          title: 'Report Type',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Favourite Keyword', 'Number'],
          ['Study',     {{ $study_count }}],
          ['Game',      {{ $game_count }}],
          ['Lazy',  {{ $lazy_count }}],
          ['Talk', {{ $talk_count }}],
          ['Eat',    {{ $eat_count }}],
          ['Sleep', {{ $sleep_count }}],
          ['Discuss', {{ $discuss_count }}]
        ]);

        var options = {
          title: 'User Favourite Keyword'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'User'],
          ['Jan',  {{ $jan_count }}],
          ['Feb',  {{ $feb_count }}],
          ['Mac',  {{ $mac_count }}],
          ['Apr',  {{ $apr_count }}],
          ['May',  {{ $may_count }}],
          ['June', {{ $jun_count }}],
          ['Jul',  {{ $jul_count }}],
          ['Aug',  {{ $aug_count }}],
          ['Sep',  {{ $sep_count }}],
          ['Oct',  {{ $oct_count }}],
          ['Nov',  {{ $nov_count }}],
          ['Dec',  {{ $dec_count }}],
        ]);

        var options = {
          title: 'Number of User by Month',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
   
    </head>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Report Analytics</h1>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Number of User By Month
                            </div>
                            <div id="chart_div" style="width: 650px; height: 300px;"></div>
                        </div>

                        <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                       User Favorite Key
                                    </div>
                                    <div id="piechart" style="width: 650px; height: 300px;"></div>
                                </div>
                            </div><br><br><br><br><br><br><br><br><br><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Report Type
                                    </div>
                                    <div id="donutchart" style="width: 650px; height: 300px;"></div> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
