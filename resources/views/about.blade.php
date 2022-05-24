<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="with=device-width, initial scale=1.0">
  <link rel="stylesheet" type="text/css" href="{!! asset('css/style_tentang_kita.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
  <title>Bugar</title>
</head>
  <body style="background-image:url({{asset('assets/bg3.png')}}) ;">
    <header>
        <nav>
            <div class="fotoProfil">
              <img src="{{asset('/propil')}}/{{ Auth::user()->image }}" id="profil"></a>
            </div>
            <a href="#" class="logo">TENTANG KITA</a>
          <div class="toolbar">
            <ul>
              <li><a href="{{ url('/dashboard') }}">Beranda</a></li>
              <li><a href="{{ url('/resep') }}">Resep</a></li>
              <li><a href="{{ url('/profile') }}">Profil</a></li>
              <li><a href="{{ url('/form') }}">Isi Form</a></li>
              <li><a href="{{ url('/about') }}" class="active">Tentang Kita</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="middle">
        <img src="assets/Rectangle 11.png" class="backtext" style="margin-left: 600px; margin-top: 200px; margin-bottom: -15px;width: 40%" />
        <ul>
          <li>
            <a href="#" id="nama" style="margin-top: -50%;">BUGAR</a>
            <a href="#">
              <div class="identity">
                Kelompok 7 <br />
                1. Muhammad Dzikri Rahmansyah <br />
                2. Muhammad Abyan Zafran <br />
                3. Imam Waliyuddin Rabbani <br />
                4. Gaffy Rizqillah Muhammad Alfatah <br />
                5. Muhammad Labib Alaudin
              </div>
            </a>
          </li>
        </ul>
      </div>
          <div class="footer-container" style="margin-top: 15%;">
            <div class="footer">
              <div class="footer-heading foot1" style="margin-left: -7%;">
                <h2>Yuk Hidup Sehat!</h2>
                <a href="#" style="margin-top: 3%;">Kebijakan Privasi</a>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">FAQ</a>
                <a href="#">Support</a>
                <img src="images/logo2.png" width="240" height="70" style="margin-left: -3.2%; margin-top: 1.5%; margin-bottom: -18.8%;">
                <div class="social-links">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-line"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
              <div class="footer-heading foot2" style="margin-right: -15%; text-align: left;">
                <h2>Kebijakan Privasi</h2>
                <a>Kami menghargai privasi dan tidak akan pernah mengirim spam kepada Anda!
                  Terima kasih telah menggunakan jasa kami!</a>
                  <div class="footer-saran-form"></div>
                    <h2>Kritik & Saran</h2>
                    <input type="text" placeholder="Ketikkan kritik dan saran" id="footer-saran" style="padding: 0 8px;">
                    <button type="button" value="submit" class="btn btn-warning" style="background-color: #2d3d3d; color: #FFF; border-color: #2d3d3d;">Kirim</button>
                  </div>
              </div>
              </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
