<?php 
    include 'covidAPI.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style-A.css">
    <title>Covid Report</title>

    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var Confirmed_js = ;
        var Recovered_js =;
        var Hospitalized_js = ;
        var Deaths_js = ;
        var data = google.visualization.arrayToDataTable([
          ['dadadssa', 'asdasd'],
          ['Confirmed', Confirmed_js],
          ['Recovered', Recovered_js],
          ['Hospitalized', Hospitalized_js],
          ['Deaths', Deaths_js],
        ]);
        console.log(Confirmed_js)
        var options = {
            title : 'Covid-19 API DATA',
            width : 600,
            height : 300,
            pieHole : 0.4,
            
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script> -->
</head>

<body>
      <div class="mt-3">
            <img class="logo-hea" src="img/logocovid.png" alt="">
      </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="card m-3 siz-card-1 bg-alp" >
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title text-white siz-font-hea">อัพเดทข้อมูลประจำวันที่ <?= DateThai($strDate); ?></h5>
                                <p class="card-text text-white txt-ind">จำนวนผู้ติดเชื้อเพิ่ม <?= $int_NewConfirmed; ?> ราย จำนวนผู้ป่วยที่รักษาหายเพิ่ม <?= $int_NewRecovered; ?> ราย และจำนวนผู้เสียชีวิตเพิ่ม <?= $int_NewDeaths; ?> ราย </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-3 siz-card-1 bg-alp" >
                    <div class="row no-gutters">
                        <div class="col-md-6 align-self-center">
                            <img src="img/coronavirus.png" class="card-img siz-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title text-center text-white ">จำนวนผู้ติดเชื้อ</h5>
                                <p class="card-text text-center text-white siz-font-1"><?= $int_Confirmed; ?></p>
                                <p class="card-text text-center"><small class="txt-whe">เพิ่มขึ้นวันนี้ : <?= $int_NewConfirmed; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
            
                    <div class="card m-1 siz-card-2 bg-alp">
                        <div class="row no-gutters">
                            <div class="col-md-6 align-self-center">
                                <img src="img/healthcare-and-medical.png" class="card-img siz-img">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body pl-1">
                                    <h5 class="card-title text-center text-white">จำนวนผู้ป่วย</h5>
                                    <p class="card-text text-center siz-font-2 text-white"><?= $int_Hospitalized; ?></p>
                                    <p class="card-text text-center"><small class="txt-whe">เพิ่มขึ้นวันนี้ : <?= $int_NewHospitalized; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
               
                <div class="card m-1 siz-card-2 bg-alp">
                    <div class="row no-gutters">
                        <div class="col-md-6 align-self-center">
                            <img src="img/patient.png" class="card-img siz-img">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title text-center text-white">รักษาหาย</h5>
                                <p class="card-text text-center siz-font-2 text-white"><?= $int_Recovered; ?></p>
                                <p class="card-text text-center"><small class="txt-whe">เพิ่มขึ้นวันนี้ : <?= $int_NewRecovered; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 siz-card-2 bg-alp">
                    <div class="row no-gutters">
                        <div class="col-md-6 align-self-center">
                            <img src="img/death.png" class="card-img siz-img">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title text-center text-white">จำนวนผู้เสียชีวิต</h5>
                                <p class="card-text text-center siz-font-2 text-white"><?= $int_Deaths; ?></p>
                                <p class="card-text text-center"><small class="txt-whe">เพิ่มขึ้นวันนี้ : <?= $int_NewDeaths; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<footer class="footer">Data By กรมควบคุมโรค กระทรวงสาธารณสุข ทีมงาน TH-STAT.com และกลุ่ม TCDG </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>