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
  <link rel="stylesheet" href="css/style-B.css">
  <title>Covid Report</title>
</head>

<body>
  <nav>
    <div><img src="img/logocovid.png" class="img-fluid d-block mx-auto my-3 logo-size " alt="logocovid"></div>
  </nav>
  <main class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-6">
        <div class="card my-3 bg-alp" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-3">
              <img src="img/schedule.png" class="card-img size-img" alt="schedule">
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <h6 class="card-title text-center font-header">อัพเดทข้อมูลประจำ</br><?= $int_UpdateDate; ?>น.</h5>
                  <p class="card-text txt-ind font-sub-hea">จำนวนผู้ติดเชื้อเพิ่ม <?= $int_NewConfirmed; ?> ราย จำนวนผู้ป่วยที่รักษาหายเพิ่ม <?= $int_NewRecovered; ?> ราย และจำนวนผู้เสียชีวิตเพิ่ม <?= $int_NewDeaths; ?> ราย</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6">
        <div class="card my-3 bg-alp" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="img/coronavirus.png" class="card-img size-img" alt="coronavirus">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title text-center font-header">จำนวนผู้ติดเชื้อ</h5>
                <p class="card-text text-center font-30"><?= $int_Confirmed; ?></p>
                <p class="card-text text-center "><small class="text-danger">เพิ่มขึ้นวันนี้ : <?= $int_NewConfirmed; ?></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card my-3 bg-alp" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="img/healthcare-and-medical.png" class="card-img size-img" alt="healthcare-and-medical">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title text-center font-header">ผู้ป่วย</h5>
                <p class="card-text text-center font-30"><?= $int_Hospitalized; ?></p>
                <p class="card-text text-center "><small class="text-danger">เพิ่มขึ้นวันนี้ : <?= $int_NewHospitalized; ?> </small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card my-3 bg-alp" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="img/patient.png" class="card-img size-img" alt="patient">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title text-center font-header">รักษาหาย</h5>
                <p class="card-text text-center font-30"><?= $int_Recovered; ?></p>
                <p class="card-text text-center "><small class="text-danger">เพิ่มขึ้นวันนี้ : <?= $int_NewRecovered; ?></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card my-3 bg-alp" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="img/death.png" class="card-img size-img" alt="death">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title text-center font-header">ผู้เสียชีวิต</h5>
                <p class="card-text text-center font-30"><?= $int_Deaths; ?></p>
                <p class="card-text text-center "><small class="text-danger">เพิ่มขึ้นวันนี้ : <?= $int_NewDeaths; ?></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="py-2">Data By กรมควบคุมโรค กระทรวงสาธารณสุข ทีมงาน TH-STAT.com และกลุ่ม TCDG </footer>

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