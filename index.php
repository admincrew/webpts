<?php
include 'mainconnect.php';
require 'aksi_soal.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>PAS 7 & 8 | SMPN 10 PPU</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between" method="" action="">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
            <button type="submit" class="btn"></button>
            <span class="ti-close" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo_smpn_10.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bit.ly/proktorsmp10">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link search" id="search">
                  <i class="ti-search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

  <!--================ Start Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_content text-center">
              <p class="text-uppercase">
                UJIAN AKHIR SEMESTER BERBASIS ONLINE
              </p>
              <h2 class="text-uppercase mt-4 mb-5">
                <div class="text-uppercase" id="dateNow"></div>
              </h2>
              <h3 class="text-uppercase mt-4 mb-5">
                <?= $time; ?> WITA
              </h3>
              <h3 class="text-uppercase mt-4 mb-5">
                KELAS <?= $class; ?> A | B | C | D
              </h3>
              <h5 class="text-uppercase">
                Silahkan Klik Tombol Link Di Bawah
                <?
              </h5>
              <?php
              if ($calDay !== 'Minggu') {
                if ($now >= $start_time && $now <= $end_time) {
                  $checkLink = $call->query("SELECT * FROM soal WHERE day = '$calDay' AND class = '$class'");
                  while ($row = $checkLink->fetch_assoc()) {
                    $response[] = [
                      'nama' => $row['label'],
                      'url' => $row['link']
                    ];
                  }
                  if ($calDay == "Rabu" || "Kamis" || "Jumat") {
                    echo '<div>
                                <a href="' . $response[0]['url'] . '" class="primary-btn2 mb-3 mb-sm-0" target="_blank">' . $response[0]['nama'] . '</a>
                                <a href="' . $response[1]['url'] . '" class="primary-btn2 mb-3 mb-sm-0" target="_blank">' . $response[1]['nama'] . '</a>
                                <a href="' . $response[2]['url'] . '" class="primary-btn2 mb-3 mb-sm-0" target="_blank">' . $response[2]['nama'] . '</a>
                              </div>';
                  } else {
                    echo '<div>
                                <a href="' . $response[0]['url'] . '" class="primary-btn2 mb-3 mb-sm-0" target="_blank">' . $response[0]['nama'] . '</a>
                                <a href="' . $response[1]['url'] . '" class="primary-btn2 mb-3 mb-sm-0" target="_blank">' . $response[1]['nama'] . '</a>
                              </div>';
                  }
                } else {
                  echo '<div><a href="#" class="primary-btn2 mb-3 mb-sm-0" target="_blank">UJIAN DIBUKA PUKUL 07.00 HINGGA 17.00 WITA</a></div>';
                }
              } else {
                echo '<div><a href="#" class="primary-btn2 mb-3 mb-sm-0" target="_blank">UJIAN AKAN DIMULAI BESOK</a></div>';
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--================Start footer Area=================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Top Products</h4>
          <ul>
            <li><a href="#">Managed Website</a></li>
            <li><a href="#">Manage Reputation</a></li>
            <li><a href="#">Power Tools</a></li>
            <li><a href="#">Marketing Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Features</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Guides</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Experts</a></li>
            <li><a href="#">Agencies</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
              <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" required="" type="email" />
              <button class="click-btn btn btn-default">
                <span>subscribe</span>
              </button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
              </div>

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i>
          by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#"><i class="ti-facebook"></i></a>
          <a href="#"><i class="ti-twitter"></i></a>
          <a href="#"><i class="ti-dribbble"></i></a>
          <a href="#"><i class="ti-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/time.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>