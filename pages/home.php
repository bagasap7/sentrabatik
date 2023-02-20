<?php
include "admin/login/connect.php";
?>

<style>
  .banner_main {
    background: #FFF1E6;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding: 50px;
  }

  .text-bg h1 {
    color: #fff;
    font-size: 40px;
    font-family: 'Karla', sans-serif;
    line-height: 50px;
    font-weight: bold;
    color: #a87a41;
    text-align: center;
  }

  .text-bg .h1home {
    color: #a87a41;
    font-size: 40px;
    line-height: 10px;
    padding-bottom: 25px;
    font-weight: bold;
    color: black;
    text-align: center;
  }

  .text-bg h1 span {
    color: #a87a41;
    font-family: 'Spectral', serif;
    font-size: 31px;
    line-height: 35px;
    font-weight: bold;
    text-align: justify;
  }

  .text-bg p {
    color: #fff;
    font-size: 17px;
    line-height: 28px;
    padding: 40px 0;
    color: #a87a41;
    text-align: justify;
  }

  .text-bg a {
    font-size: 16px;
    font-weight: bold;
    background-color: #fff;
    color: #a87a41;
    padding: 10px 0px;
    width: 100%;
    max-width: 190px;
    text-align: center;
    display: inline-block;
    text-transform: uppercase;
    border-radius: 10px;
    border: 1px solid #a87a41;
  }

  .text-bg a:hover {
    background-color: #000;
    color: #fff;
    text-decoration: none;
  }

  .text-img figure {
    margin: 0px;
  }

  .text-img figure img {
    width: 75%;
    margin-left: 50px;
    border-radius: 10px;
    border: 3px solid #a87a41;
  }

  /** Services section **/
  .Services {
    padding: 90px;
    background: #FFF1E6;
    font-family: Poppins;
  }

  .Services .titlepage {
    text-align: center;
  }

  .Services .titlepage h2 {
    padding-bottom: 20px;
    font-size: 45px;
    color: #a87a41;
  }

  .Services .titlepage p {
    color: #a87a41;
  }

  .Services .Services-box i {
    background: #fff;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    display: inline-block;
    padding-top: 19px;
  }

  .Services .Services-box i:hover {
    background: #ddd;
  }

  .Services .Services-box h3 {
    padding: 20px 0px 20px 0px;
    font-size: 20px;
    line-height: 25px;
    display: block;
    font-weight: 500;
    color: #a87a41;
  }

  .Services .Services-box {
    text-align: center;
    background-color: transparent;
    border-radius: 20px;
    border: #a87a41 solid 2px;
    padding: 40px;
    transition: ease-in all 0.5s;
    margin-bottom: 30px;
  }

  .Services .Services-box:hover {
    background: #fcc889;
    transition: ease-in all 0.5s;
    cursor: pointer;
    color: #FFF1E6;
  }

  .Services .Services-box p {
    font-size: 16px;
    line-height: 24px;
    color: #a87a41;
  }

  .read_more {
    font-size: 16px;
    background-color: #fff;
    color: #000;
    padding: 10px 0px;
    width: 100%;
    max-width: 190px;
    display: flex;
    justify-content: center;
    text-align: center;
    margin: 0 auto;
    margin-top: 20px;
  }

  .read_more:hover {
    background: #8308eb;
    color: #fff;
  }

  @media (max-width: 1025px) {
    .text-bg h1 {
      font-size: 6vw;
      text-align: center;
    }

    .text-bg h1 span {
      font-size: 4vw;
      text-align: center;
    }

    .text-bg p {
      text-align: justify;
    }
  }


  @media (max-width: 768px) {
    body {
      padding-top: 110px;
    }

    .text-bg h1 {
      font-size: 7vw;
      text-align: center;
    }

    .text-bg h1 span {
      font-size: 5vw;
      text-align: center;
    }

    .text-bg p {
      text-align: justify;
    }

    .banner_main {
      padding: 0;
    }

    .Services {
      padding: 0;
    }
  }

  @media (max-width: 376px) {
    .text-bg h1 {
      font-size: 10vw;
      text-align: center;
    }

    .text-bg h1 span {
      font-size: 7vw;
      text-align: center;
    }

    .text-bg p {
      text-align: justify;
    }
  }

  @media (max-width: 442px) {
    .text-bg span {
      font-size: 7vw;
      text-align: center;
    }
  }

  /** end Services section **/
</style>

<!-- banner -->
<div class="container containerhome">
  <section class="banner_main">
    <div class="row d_flex">
      <div class="col-md-5 col-sm-12">
        <div class="text-bg">
          <h1 data-aos="fade-down" data-aos-delay="200">
            SELAMAT DATANG </h1>
          <h1 data-aos="fade-down" data-aos-delay="400">
            DI WEBSITE </h1>
          <h1 data-aos="fade-right" data-aos-delay="600">
            <span>
              SENTRA BATIK INDONESIA </span>
          </h1>
          <p data-aos="fade-up" data-aos-delay="800">
            Temukan Motif Batik terbaik yang ada di Indonesia. <strong>
              "klik Get Started" </strong>
            untuk memulai memilih kota penghasil batik dan temukan motif batik pilihanmu </p>
          <a href="http://localhost/sentrabatik/pages/list.php" data-aos="fade-up" data-aos-delay="1000">Get Started</a>
        </div>
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="text-img" data-aos="fade-left" data-aos-delay="1000">
          <figure>
            <img src='http://localhost/sentrabatik/admin/image/homeimg.jpg' />
          </figure>
        </div>
      </div>
    </div>

  </section>
  <!-- end banner -->

  <!-- Services  -->
  <div id="service" class="Services">

    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2 data-aos="fade-left" data-aos-delay="200">
            Pelayanan Kami </h2>
          <p data-aos="fade-right" data-aos-delay="400">
            Kami memberikan informasi mengenai batik terbaik bagi para wisatawan baik lokal maupun internasional </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="200">
        <div class="Services-box">
          <i>
            <img src='http://localhost/sentrabatik/admin/image/store.png' width='60px' height='60px' alt='#' /> </i>
          <h3>
            Rekomendasi Tempat penghasil batik </h3>
          <p>
            Kami mencantumkan beberapa penghasil/toko batik dibeberapa kota yang mempunyai motif batik tertentu </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="400">
        <div class="Services-box">
          <i>
            <img src='http://localhost/sentrabatik/admin/image/teks.png' width='50px' height='65px' alt='#' /> </i>
          <h3>
            Penjelasan Motif batik </h3>
          <p>
            Setiap kota yang mempunyai ciri khas batik tertentu mempunyai makna yang berbeda beda tiap motifnya </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="600">
        <div class="Services-box">
          <i>
            <img src='http://localhost/sentrabatik/admin/image/peta.png' width='60px' height='60px' alt='#' /> </i>
          <h3>
            Denah lokasi </h3>
          <p>
            Setiap toko/penghasil batik sudah terintegrasi dengan Google Maps </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="800">
        <div class="Services-box">
          <i>
            <img src='http://localhost/sentrabatik/admin/image/galeri.png' width='60px' height='60px' alt='#' /> </i>
          <h3>
            Gallery </h3>
          <p>
            Kami memberikan beberapa foto tempat wisata sebagai referensi lain selain kain batik </p>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- end Servicess -->
<!-- akhir pages -->

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