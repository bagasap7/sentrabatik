<?php
include "../templates/header.php";
include "../admin/login/connect.php";
?>

<style>
  body {
    width: 100%;
    background-color: #fff1e6;
    opacity: 1;
    background-size: 50px 50px;
  }

  #loader {
    position: fixed;
    width: 100%;
    height: 100vh;
    z-index: 999999999;
    overflow: visible;
  }

  /* Latar Belakang */
  .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 11111;
    right: 0;
    top: 0;
    background-color: rgba(249, 253, 255, 0.9);
    overflow-x: hidden;
    transition: 0.7s;
  }

  /* pilihan navbar */
  .overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
  }

  /* navbar dibuka */
  .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    font-family: 'Karla', sans-serif;
    font-weight: bold;
    color: rgb(207, 3, 3);
    display: block;
    color: #a87a41;
    transition: 0.3s;
  }

  /* hover */
  .overlay a:hover,
  .overlay a:focus {
    /* color: #FE9001; */
    color: #FE9001;
  }

  /* tombol tutup */
  .overlay .closebtn {
    position: absolute;
    top: -8px;
    right: 31px;
    font-size: 60px;
  }

  .hamb {
    border: 3px solid #ece5d9;
    box-shadow: 0px 0px 5px 1px #aaaaaa;
    position: fixed;
    width: 70px;
    height: 70px;
    top: 15px;
    right: 20px;
    color: #ece5d9;
    background-color: #a87a41;
    border-radius: 50px;
    text-align: center;
    font-size: 1.5em;
    z-index: 1;
  }

  @media (max-width: 768px) {
    .hamb {
      top: 20px;
      left: 85vw;
    }
  }

  @media (max-width: 474px) {
    .hamb {
      top: 20px;
      left: 82vw;
    }
  }

  @media (max-width: 390px) {
    .hamb {
      top: 20px;
      left: 78vw;
    }
  }

  @media (max-width: 280px) {
    .hamb {
      top: 20px;
      left: 73vw;
    }
  }
</style>
</head>

<body>
  <!-- navbar -->
  <div id="loader"></div>
  <div id="content">
  </div>
  <!-- overlay -->
  <div id="myNav" class="overlay">
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- Overlay content -->
    <div class="overlay-content">
      <a class="nav-link" href="http://localhost/sentrabatik/index.php">Home</a>
      <a class="link" href="http://localhost/sentrabatik/pages/list.php">Choose City</a>
      <a class="link" href="http://localhost/sentrabatik/pages/gallery.php">Gallery</a>
      <a class="link" href="http://localhost/sentrabatik/pages/about.php">About</a>
      <a class="link" href="http://localhost/sentrabatik/pages/contact.php">Contact Us</a>
    </div>
  </div>
  <span onclick="openNav()">
    <button type="button" class="btn hamb">
      <i class="fas fa-bars"></i>
    </button>
  </span>


  </nav>
  <div class="container containercontact">
    <h1 data-aos="zoom-out-up" data-aos-duration="2000">
      HUBUNGI KAMI </h1>
    <div class="row contactrow">
      <div class="col-xl-4 col-lg-6 col-md-12 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="card card1">
          <span>Bagas Aditya P.</span>
          <ul class="social-media-list">
            <li><a href="https://www.instagram.com/bagss.ap/"><i class="fab fa-instagram" target="_blank"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter" target="_blank"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-12 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
        <div class="card card2">
          <span>Kreshna Putra A.W.</span>
          <ul class="social-media-list">
            <li><a href="https://github.com/kreshna3131" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCMGG3tewudLY57pESaGhUiw" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://instagram.com/kreshnaputraaw?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/kreshnaputra.adiwicaksana" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://line.me/ti/p/jZHUFjxwoG" target="_blank"><i class="fab fa-line"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-4 col-lg-12 col-md-12 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
        <div class="card card3">
          <span>Ivan Fausta D.</span>
          <ul class="social-media-list">
            <li><a href="https://www.instagram.com/ivanfaustadinata/"><i class="fab fa-instagram" target="_blank"></i></a></li>
            <li><a href="https://m.facebook.com/profile.php"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
            <li><a href="https://twitter.com/home"><i class="fab fa-twitter" target="_blank"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <!-- <footer id="footer">
    <div class="container">
      <h3>Contact Me</h3>
      <p>You can Contact Me at </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
        <a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
        <a href="#" class="instagram"><i class="fab fa-github"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>kosong</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Design With Love By <a href="">kosong</a>
      </div>
    </div>
  </footer> -->
  <!-- akhir footer -->
  </div>
  <!-- akhir container -->

  <?php
  include "../templates/footer.php";
  ?>