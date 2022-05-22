<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="with=device-width, initial scale=1.0">
  <link rel="stylesheet" type="text/css" href="{!! asset('css/profil.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
  <title>Bugar</title>
</head>
  <body>
    <header>
        <nav>
            <div class="fotoProfil">
              <img src="images/Foto Diri.jpg" id="profil"></a>
            </div>
            <a href="#" class="logo">Profil</a>
          <div class="toolbar">
            <ul>
              <li><a href="{{ url('/dashboard') }}">Beranda</a></li>
              <li><a href="{{ url('/resep') }}">Resep</a></li>
              <li><a href="{{ url('/profile') }}" class="active">Profil</a></li>
              <li><a href="{{ url('/about') }}">Tentang Kita</a></li>
            </ul>
          </div>
        </nav>
      </header>
        <div class="wrapper">
          <section class="right">
            <div class="profil-heading1">
              <h2>Nama</h2>
              <div class="card" style="width: 35rem; height: 3rem; 	border-radius: 30px;">
                <div class="card-body">
                  <p <a>{{ Auth::user()->name }}</a></p>
                </div>
              </div>
            </div>
              <h2>Email</h2>
              <div class="card" style="width: 35rem; height: 3rem; 	border-radius: 30px;">
                <div class="card-body">
                  <p <a>{{ Auth::user()->email }}</a></p>
                </div>
              </div>
              <div>
                <div class="card-body">
                   <a href="{{ url('/profile') }}">Ganti Password</a>
                </div>
              </div>
            </div>
          </section>
          <section class="left">
            <div class="profil-heading2">
              <div class="profile-pic-div2" style="margin-top: -15%;">
                <img src="images/Foto Diri.jpg" id="photo">
              </div>
            </div>
          </section>
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
              <div class="footer-heading foot2" style="margin-right: -7%; text-align: left;">
                <h2>Kebijakan Privasi</h2>
                <a>Kami menghargai privasi dan tidak akan pernah mengirim spam kepada Anda!
                  Terima kasih telah menggunakan jasa kami!</a>
              </div>
              </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>