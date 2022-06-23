<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register GameingZone</title>
  <!-- Font Awesome -->
  <!-- password ซ่อน -->
  <link href="<?php echo base_url() . 'theme/bootstrap-datepicker-thai-thai' ?>/css/datepicker.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/listtyicons/style.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/menuzord/css/menuzord.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/css/map.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/selectric/selectric.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/css/settings.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/css/map.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/rateyo/jquery.rateyo.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/css/style.css" rel="stylesheet" id="option_style">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/img/favicon.png" rel="shortcut icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Your custom styles (optional) -->

  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 851px) and (max-width: 1440px) {

      html,
      body,
      header,
      .view {
        height: 850px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 1200px;
      }
    }

    @media (max-width: 450px) {

      html,
      body,
      header,
      .view {
        height: 1400px;
      }
    }
  </style>
</head>

<body class="register-page">
  <!-- Main Navigation -->
  <header>
    <!-- Intro Section -->
    <section class="view intro-2">
      <section class="py-7 py-md-10 bg-light height100vh">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-xl-7">
              <div class="bg-white p-5 rounded border">
                <h2 class="font-weight-normal mb-4">สร้างบัญชีผู้ใช้</h2>
                <?php
                if (isset($fail)) {
                ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="alert alert-danger" role="alert">
                        มีอีเมลนี้อยู่แล้ว
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
                <form class="user" name="login" method="post" onsubmit="return validateForm()" action="<?php echo base_url() . 'login/register'; ?>">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="inputtext">ชื่อ*</label>
                      <input name="fname" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputText">นามสกุล*</label>
                      <input name="lname" type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="form-group mb-8">
                    <label for="inputAddress">อีเมล*</label>
                    <input name="email" type="email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="inputText">รหัสผ่าน*</label>
                    <input name="password" type="text" class="form-control" placeholder="">
                  </div>
                  <div class="row mb-6">
                    <div class="form-group col-md-4">
                      <label for="inputText">วันเดือนปีเกิด</label>
                      <input type="date" class="datepicker" name="birthday" data-date-language="th-th">
                    </div>
                    <div class="form-group col-md-6 mb-4">
                      <label for="inputPassword">เพศ*</label>
                      <select name=sex class="custom-select d-block w-100" required="">
                      
                        <option value="">เลือกเพศ</option>
                        <option>ชาย</option>
                        <option>หญิง</option>
                      </select>
                    </div>
                  </div>
                  <center>
                    <button type="submit" class="btn btn-primary"> Create Account </button>
                  </center>
                  <div class="text-center"><br><br>
                    หากเป็นสมาชิกอยู่แล้ว ?
                    <a type="button" href="<?php echo base_url() . 'login' ?>">ลงชื่อเข้าใช้</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </section>
    </section>
  </header>
</body>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/menuzord/js/menuzord.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/selectric/jquery.selectric.min.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/smoothscroll/SmoothScroll.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/js/markerclusterer.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/js/rich-marker.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/js/infobox_packed.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/js/map.js"></script>
<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/js/listty.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</html>