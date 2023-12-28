<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- <link rel="stylesheet" href="style/home-style.css"/> -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@300;400&family=Young+Serif&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "roboto", sans-serif;
      overflow-x: hidden;
    }

    /* nav */

    .c-nav nav {
      width: 100%;
      /* height: 100px; */
      border-radius: 50px;
    }

    .nav-item {
      width: 1350px;
      margin-left: 90px;
      transform: translateY(40px);
    }

    /* .c-nav .nav-item {
    } */

    nav {
      display: flex;
      background-color: rgb(10, 9, 8);
      justify-content: space-around;
      /* padding: 20px 0; */
      height: 70px;
      align-items: center;
      color: rgb(234, 224, 213);
    }

    nav .logo {
      font-family: "Young Serif", serif;
      letter-spacing: 3px;
      font-size: 1.5em;
    }

    nav ul {
      display: flex;
      list-style: none;
      width: 40%;
      justify-content: space-between;
    }

    nav ul li a {
      color: rgb(234, 224, 213);
      text-decoration: none;
      font-size: 1.2em;
    }

    nav ul li .masuk a {
      background-color: rgb(43, 63, 72);
      padding: 10px 15px 10px 15px;

    }

    nav ul li .masuk a:hover {
      background-color: #ddd;
      color: black;
    }

    nav ul li .login a{
      background-color: rgb(78,33,37);
      padding: 10px 15px 10px 15px;
    }

    nav ul li .login a:hover{
      background-color: #666;
      color: black;
    }

    nav ul li a:hover {
      color: rgb(198, 172, 143);
    }

    /* hamburger menu */

    .menu-toggle {
      display: none;
      flex-direction: column;
      height: 20px;
      justify-content: space-between;
      position: relative;
    }

    .menu-toggle input {
      position: absolute;
      width: 40px;
      height: 28px;
      left: -5px;
      top: -5px;
      opacity: 0;
      cursor: pointer;
      z-index: 2;
    }

    .menu-toggle span {
      display: block;
      width: 25px;
      height: 3px;
      background-color: rgb(234, 224, 213);
      border-radius: 3px;
      transition: all 0.5s;
    }

    .menu-toggle span:nth-child(2) {
      transform-origin: 0 0;
    }

    .menu-toggle span:nth-child(4) {
      transform-origin: 0 100%;
    }

    .menu-toggle input:checked~span:nth-child(2) {
      background-color: white;
      transform: rotate(45deg) translate(1px, 1px);
    }

    .menu-toggle input:checked~span:nth-child(4) {
      background-color: white;
      transform: rotate(-45deg) translate(-1px, 0);
    }

    .menu-toggle input:checked~span:nth-child(3) {
      opacity: 0;
      transform: scale(0);
    }

    .anim .container {
      width: 100%;
      height: 698px;
      /* margin-bottom: 40px; */
      /* display: flex;
  justify-content: start;
  align-items: end; */
      background: url(../img/tempat-parkir-di-area-umum.png) no-repeat;
      background-size: cover;
    }

    .hero {
      width: 100%;
      height: 300px;
      padding: 60px 60px;
      transform: translateY(205px);
      font-size: 2.4em;
      background: url(../img/wave2.svg) no-repeat;
      position: relative;
      top: 60px;
    }

    .hero .m-judul {
      position: absolute;
      bottom: 400px;
      left: 110px;
      transform: translateY(-100%);
      transition: 900ms all ease-in-out;
      opacity: 0;
    }

    .anim.animate .m-judul {
      transform: translateY(0%);
      transition: 900ms all ease-in-out;
      opacity: 1;
    }

    .hero p {
      color: rgb(10, 9, 8);
    }

    .hero .judul-1,
    .judul-2 {
      color: rgb(252, 163, 17);
    }

    .hero .m-judul button,
    a {
      border: none;
      width: 12rem;
      /* height: 1rem; */

      background-color: rgb(10, 9, 8);
      color: white;
      border-radius: 10px;
    }




    .anim2 {
      background-color: rgba(10, 9, 8, 0.971);
      color: white;
    }

    .content {
      display: grid;
      grid-template-areas:
        "content-1 content-1 content-1"
        "content-1 content-1 content-1"
        "content-2 content-3 content-3"
        "content-2 content-3 content-3";
      gap: 20px;
      width: 100%;
      justify-content: center;
    }

    .content-1 {
      display: grid;
      min-width: 1200px;
      background-color: rgba(43, 63, 72, 0.45);
      grid-area: content-1;
      min-height: 340px;
      color: rgb(50, 136, 179);
      border-radius: 10px;
      transform: translateY(-100%);
      transition: 900ms all ease-in-out;
      opacity: 0;
    }

    .content-1 .img {
      display: flex;
      justify-content: end;
      align-items: center;
    }

    .text {
      position: relative;
      margin-right: 500px;
    }

    .isi {
      position: absolute;
      top: -160px;
      left: 50px;
      font-size: 1.4em;
    }

    .sub {
      position: absolute;
      top: -240px;
      left: 60px;
      color: rgb(252, 163, 17);
    }

    .anim2 .element {
      background: url(../img/waveatas2.svg) no-repeat;
      width: 100%;
    }

    .anim2.animate .content-1 {
      transform: translateY(0%);
      transition: 900ms all ease-in-out;
      opacity: 1;
    }

    .content-1 img {
      margin-top: 50px;
      height: 200px;
      width: 450px;
      align-items: center;
      border-radius: 10px 0 0 10px;
      border: 3px solid rgb(94, 80, 63);
    }

    .content-2 {
      grid-area: content-2;
      background: url(../img/parkir.png);
      min-height: 450px;
      border-radius: 10px;
      font-size: 1.3em;
      color: rgb(252, 163, 17);
      transition: 900ms all ease-in-out;
      transform: translatex(-100%);
      opacity: 0;
    }

    .anim2.animate .content-2 {
      transform: translatex(0%);
      transition: 900ms all ease-in-out 200ms;
      opacity: 1;
    }

    .content-2 .judul-c2 {
      position: relative;
      top: 200px;
      margin-left: 60px;
    }

    .content-3 {
      background: url(../img/garasi-parkir-dalam-ruangan-dan.png) no-repeat;
      background-size: cover;
      grid-area: content-3;
      min-height: 450px;
      color: rgb(252, 163, 17);
      border-radius: 10px;
      transform: translatex(100%);
      transition: 900ms all ease-in-out;
      opacity: 0;
    }

    .anim2.animate .content-3 {
      transform: translatex(0%);
      transition: 900ms all ease-in-out 400ms;
      opacity: 1;
    }

    .content-3 .judul-c3 {
      position: relative;
      top: 300px;
      left: 60px;
    }

    .container-3 {
      width: 100%;
      text-align: center;
      height: 658px;
      font-size: 2.9em;
      background-color: rgba(10, 9, 8, 0.971);
    }

    .container-3 .text-2 {
      margin-top: 60px;
      color: rgb(234, 224, 213);
      transform: translateX(100%);
      transition: 900ms all ease-in-out;
      opacity: 0;
    }

    .anim3.animate .text-2 {
      transform: translateY(0%);
      transition: 900ms all ease-in-out;
      opacity: 1;
    }

    .container-3 h1 .j {
      color: rgb(252, 163, 17);
      transform: translateY(-100%);
      transition: 900ms all ease-in-out;
      opacity: 0;
    }

    .anim3.animate .j {
      transform: translatey(0%);
      opacity: 1;
      transition: 900ms all ease-in-out;
    }

    .legend-container {
      color: white;
      width: 100%;
      height: 938px;
      background-color: rgba(10, 9, 8, 0.971);
      display: grid;
      gap: 15px;
    }

    .container-4 {
      gap: 15px;
      display: grid;
      grid-template-columns: 0.23fr 0.21fr 0.23fr;
      justify-content: center;
    }

    .card-1 {
      background-color: rgba(50, 136, 179, 0.1);
      text-align: center;
      height: 350px;
      width: 320px;
      border-radius: 10px;
      transform: translateY(-100%);
      transition: 900ms all ease-in-out 400ms;
      opacity: 0;
    }

    .anim4.animate .card-1 {
      transform: translateY(0%);
      opacity: 1;
      transition: 900ms all ease-in-out;
    }

    .card-judul-1 {
      text-align: center;
      margin-top: 150px;

    }

    .card-2 {
      background-color: rgba(50, 136, 179, 0.1);
      text-align: center;
      height: 350px;
      width: 320px;
      border-radius: 10px;
      transform: translateY(-100%);
      transition: 900ms all ease-in-out 200ms;
      opacity: 0;
    }

    .anim4.animate .card-2 {
      transform: translateY(0%);
      opacity: 1;
      transition: 900ms all ease-in-out 200ms;
    }

    .card-judul-2 {
      text-align: center;
      margin-top: 150px;

    }


    .card-3 {
      background-color: rgba(50, 136, 179, 0.1);
      text-align: center;
      height: 350px;
      width: 320px;
      border-radius: 10px;
      transform: translateY(-100%);
      opacity: 0;
      transition: 900ms all ease-in-out;
    }

    .anim4.animate .card-3 {
      transform: translateY(0%);
      opacity: 1;
      transition: 900ms all ease-in-out 400ms;
    }

    .card-judul-3 {
      text-align: center;
      margin-top: 150px;

    }

    .main-card {
      grid-area: main-card;
    }

    .main-sub {
      color: white;
      display: grid;
      justify-content: center;
      gap: 15px;
      grid-template-areas:
        "main-card main-card main-card"
        "main-card main-card main-card"
        "sub-card-1 sub-card-1 sub-card-2"
        "sub-card-1 sub-card-1 sub-card-2";
    }

    .main-card {
      background-color: rgba(43, 63, 72, 0.45);
      grid-area: main-card;
      height: 270px;
      width: 1015px;
      border-radius: 10px;
      transform: translateX(100%);
      opacity: 0;
      transition: 900ms all ease-in-out;
    }

    .anim4.animate .main-card {
      transform: translateX(0%);
      opacity: 1;
      transition: 900ms all ease-in-out;
    }

    .judul-main {
      display: flex;
      justify-content: space-around;
      transform: translateX(175px);
    }

    .judul-main h1 {
      transform: translateY(100px);
    }

    .img-main img {
      width: 170px;
      height: 270px;
      border-radius: 10px;
    }

    .sub-card-1 {
      background-color: rgba(43, 63, 72, 0.45);
      grid-area: sub-card-1;
      height: 270px;
      width: 500px;
      border-radius: 10px;
      text-align: center;
      transform: translate(-60%, 60%);
      opacity: 0;
      transition: 900ms all ease-in-out;
    }

    .anim4.animate .sub-card-1 {
      transform: translate(0%);
      opacity: 1;
      transition: 900ms all ease-in-out;
    }

    .sub-card-1-judul,
    .text-sub-card-1 {
      transform: translateY(100px);
    }

    .sub-card-2 {
      background-color: rgba(43, 63, 72, 0.45);
      grid-area: sub-card-2;
      height: 270px;
      width: 500px;
      border-radius: 10px;
      text-align: center;
      transform: translate(60%, 60%);
      opacity: 0;
      transition: 900ms all ease-in-out;
    }

    .anim4.animate .sub-card-2 {
      transform: translate(0%);
      opacity: 1;
      transition: 900ms all ease-in-out;
    }

    .sub-card-2-judul,
    .text-sub-card-2 {
      transform: translateY(100px);
    }

    footer {
      width: 100%;
      height: 620px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      background-color: rgb(252, 163, 17);
      font-size: 1.3em;
      position: relative;
    }

    #about {
      position: absolute;
      left: 720px;
      width: 50%;
      top: 30px;

    }

    /* ul, li a:nth-child(4){
      background-color: red;
    } */

    i {
      font-size: 2em;
      display: flex;
      justify-content: center;
    }

    table {
      margin-top: 80px;
      border-collapse: collapse;
      width: 80%;
      transform: translateX(160px);
    }

    /* responsive tablet */

    @media screen and (max-width: 768px) {
      nav ul {
        width: 50%;
      }
    }

    /* mobile */

    @media screen and (max-width: 576px) {
      .menu-toggle {
        display: flex;
        margin-left: 50%;
        z-index: 999999;
      }

      nav ul {
        position: absolute;
        height: 100vh;
        width: 100%;
        top: 0;
        right: 0;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        background-color: rgb(10, 9, 8);
        z-index: -1;
        transform: translateX(100%);
        transition: all 1s;
        opacity: 0;
      }

      nav ul.slide {
        opacity: 1;
        transform: translateX(0);
        z-index: 999;
      }
    }
  </style>
</head>

<body>

  <section class="anim">
    <div class="container">
      <div class="c-nav">
        <div class="nav-item">
          <nav class="nav">
            <div class="logo">
              <h4>Welcome</h4>
            </div>
            <ul>
              <li><a href="form/dashboard.php ">List</a></li>
              <li><a href="form/index.php">Order </a></li>
              <li><a href="#about">About</a></li>
              <li>
                <div class="masuk">
                  <a href="">Sign In</a>
                </div>
              </li>
              <li>
                <div class="login">
                  <a href="">login</a>
                </div>
              </li>
            </ul>
            <div class="menu-toggle">
              <input type="checkbox" />
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>
      </div>
      <div class="hero">
        <div class="m-judul">
          <h4 class="judul-1">Selamat Datang</h4>
          <h4 class="judul-2"><span>Di Tempat Parkir Kami</span></h4>
          <p>Parkir Block-c Jika mau pesan Di Sini</p>
          <!-- <a href="form/index.php"><button class="tombol">Mulai</button></a> -->
        </div>
      </div>
    </div>
  </section>


  <section class="anim2">
    <div class="element">
      <div class="content">
        <div class="content-1">
          <div class="img">
            <img src="../img/garasi-parkir.png" alt="" />
          </div>
          <div class="text">
            <h1 class="sub">Ayo Parkir Di Parkiran</h1>
            <p class="isi">
              Mulailah Parkir Di Parkiran Agar Tidak Mengganggu Pengguna Jalan
              Yang Lain Dengan Website Ini Kamu Bisa Memesan Tempat
              ParkirUntuk Kendaraan Kamu
            </p>
          </div>
        </div>
        <div class="content-2">
          <div class="judul-c2">
            <h1>Mulailah Pesan</h1>
            <p>pesan parkir sekarang</p>
            <p>agar kendaraanmu aman</p>
          </div>
        </div>
        <div class="content-3">
          <div class="judul-c3">
            <h1>Mulailah Tertib</h1>
            <p>Parkir adalah keadaan tidak bergerak suatu kendaraan</p>
            <p>
              yang bersifat sementara karena ditinggalkan oleh pengemudinya.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="anim3" id="informasi">
    <div class="container-3">
      <br />
      <br />
      <br />
      <h1>
        <span class="j">Ayo Pesan Parkir Di Sini Agar Tidak Macet</span>
      </h1>
      <div class="text-2">
        <p>Website Ini Di Peruntukkan Kepada</p>
        <p>Para pengendara Yang Ingin Parkir</p>
      </div>
    </div>
  </section>

  <section class="anim4" id="benefit">
    <div class="legend-container">
      <div class="container-4">
        <div class="card-1">
          <div class="card-judul-1">
            <h1>Dapatkan Akses Parkir lebih cepat</h1>
            <p>Dengan Memesan Di Sini Tidak Perlu Antri</p>
          </div>
        </div>
        <div class="card-2">
          <div class="card-judul-2">
            <h1>Keamanan Lebih Terjamin</h1>
            <p>Keamanan Kendaraan Anda Lebih Terjamin</p>
          </div>
        </div>
        <div class="card-3">
          <div class="card-judul-3">
            <h1>Tidak Menyebabkan Macet</h1>
            <p>Dengan Parkir Anda Tidak Perlu Terjebak Macet</p>
          </div>
        </div>
      </div>
      <div class="main-sub">
        <div class="main-card">
          <div class="judul-main">
            <h1 class="j-main">Sangat Efisien</h1>
            <div class="img-main">
              <img src="../img/gedung.png" alt="" />
            </div>
          </div>
        </div>
        <div class="sub-card-1">
          <h1 class="sub-card-1-judul">Agar Tidak Macet</h1>
          <div class="text-sub-card-1">
            <p>Bangun Kesadaran Diri Anda Dengan Parkir</p>
            <p>Di Parkiran</p>
          </div>
        </div>
        <div class="sub-card-2">
          <h1 class="sub-card-2-judul">Agar Tidak Mengganggu</h1>
          <div class="text-sub-card-2">
            <p>Bangun Kesadaran Diri Anda Dengan Parkir</p>
            <p>Di Parkiran</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div id="about">
      <h1>About</h1>
    </div>
    <table>
      <tr>
        <td>Contact</td>
        <td>Developer:</td>
      </tr>
      <tr>
        <td>contact:</td>
        <td>123456789</td>
      </tr>
      <tr>
        <td>Team:</td>
        <td>Gak tau</td>
        <td>|</td>
        <td>Gak tau</td>
        <td>|</td>
      </tr>
      <tr>
        <td>Project</td>
        <td>Tugas:</td>
        <td>16-10-2-23</td>
        <td>|</td>
        <td>Sistem Parkiran Sederhana</td>
      </tr>
      <tr>
        <td>Name:</td>
        <td>Parkiran Blok-c</td>
      </tr>
      <tr>
        <td>web</td>
        <td>sederhana</td>
      </tr>
      <tr>
        <td>Mapel:</td>
        <td>Database</td>
      </tr>
    </table>
    <table>
      <tr>
        <td><i class="ri-github-fill"></i></td>
        <td><i class="ri-twitter-fill"></i></td>
        <td><i class="ri-facebook-circle-fill"></i></td>
        <td><i class="ri-instagram-line"></i></td>
        <td><i class="ri-threads-line"></i></td>
      </tr>
    </table>
  </footer>
  <script src="../js/main.js"></script>
</body>

</html>