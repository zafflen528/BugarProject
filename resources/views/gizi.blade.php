<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
   <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="{!! asset('css/kalkulatorgizi-style.css') !!}">
   <title>Kalkulator Gizi</title>
</head>
<body style="background-image:url({{asset('assets/bg3.png')}}) ;">
    <header>
        <nav>
            <div class="fotoProfil">
              <img src="{{asset('/propil')}}/{{ Auth::user()->image }}" id="profil"></a>
            </div>
            <a href="#" class="logo">Kalkulator Gizi</a>
          <div class="toolbar">
            <ul>
            <li><a href="{{ url('/dashboard') }}" class='active'>Beranda</a></li>
            <li><a href="{{ url('/resep') }}" >Resep</a></li>
            <li><a href="{{ url('/profile') }}" >Profil</a></li>
            <li><a href="{{ url('/form') }}">Isi Form</a></li>
            <li><a href="{{ url('/about') }}">Tentang Kita</a></li>
            </ul>
          </div>
        </nav>
      </header>


    <div class="calories-cal" style="margin-bottom: 7%; margin-top: -1%;">
        <div class="container" style="display: absolute;">
            <div class="row" style="display: absolute;">
                <div class="col-md-6" style="display: absolute;">
                    <div class="left-data" style="display: absolute;">
                      <br></br>
                        <h1 style="margin-top: -4%;">Kalkulator Gizi</h1>
                        <p> Silahkan Masukkan Berat Badan, Tinggi Badan, dan Umur Anda!!</p>
                    <h5>Berat Badan (Kg)</h5>
                    <input type="text " id="we">

                    <h5>Tinggi Badan (Cm)</h5>
                    <input type="text" id="hi">

                    <h5>Umur</h5>
                    <input type="text" name="" id="age">
                    <p></p>
                    <button class="btn btn-primary" onclick="Calo()">Hitung Kalori!!</button>
                    <button class="btn btn-danger" onclick="Clear()">Hitung Ulang</button>
                    <p id="resultcal"></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pie-chart">
                  <br></br>
                    <h1 style="margin-top: -4%;">Diagram</h1>
                    <canvas id="myChart" style="transform: scale(0.96); margin-top: -20px; margin-left: -10px;"></canvas>
                </div>
            </div>
        </div>
   
    </div>
    </div>
    <div class="footer-container">
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
    <script src="js/kalkulatorgizi.js"></script>
        
</body>
</html>
