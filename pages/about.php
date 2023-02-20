  <?php
  include "../templates/header.php";
  include "../admin/login/connect.php";
  ?>

  <style>
    .cardabout {
      border-radius: 10px;
      padding: 2.5vw;
      margin: 3vw;
      width: 80vw;
      border: 1px solid #a87a41;
    }

    .cardabout img {
      width: 80%;
      align-items: center;
      justify-content: center;
      display: flex;
      padding-bottom: 20px;
    }

    .cardabout h1 {
      text-align: center;
      font-size: 3vw;
      padding-bottom: 20px;
      font-family: 'Karla';
      font-weight: bold;
    }

    .cardabout p {
      text-align: justify;
      font-family: 'Spectral', serif;
    }
  </style>

  <div class="card cardabout d-flex justify-content-center align-items-center">
    <h1 data-aos="fade-down" data-aos-duration="2000">
      ASAL USUL WEBSITE </h1>
    <img src='http://localhost/sentrabatik/admin/image/title.png' class='card-img-top' alt='...' data-aos='zoom-in' data-aos-duration='2000' />
    <div class="card-body">
      <p class="pabout" data-aos-duration="2000" data-aos="fade-up">
        <strong>
          Zona Batik </strong>
        adalah sebuah web yang di dalamnya berisi rekomendasi tempat berbelanja batik yang dilengkapi dengan petunjuk lokasi tempat penjual batik yang ada dibeberapa kota besar di Indonesia seperti Solo, Cirebon, Pekalongan dan Yogyakarta. Web ini dibuat dan dikembangakan oleh tim three star yang beranggotakan oleh Bagas Aditya Pramudana sebagai ketua, Ivan Fausta Dinata dan Kreshna Putra Adi Wicaksana. Tujuan atau dasar dibuatnya web ini adalah inisiatif kita dikarenakan pada masa pandemi virus corona ini banyak toko ataupun pengerajin batik yang susah dalam menjual produknya, dengan adanya web ini diharapkan para pengerajin batik dan toko batik bisa mendapatkan konsumen kembali seperti saat sebelum pandemi virus corona.
      </p>
    </div>
  </div>
  <?php
  include "../templates/footer.php";
  ?>