<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="with=device-width, initial scale=1.0">
  <link rel="stylesheet" type="text/css" href="{!! asset('css/stylebmi.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
  <title>Kalkulator BMI</title>
</head>
  <body style="background-image:url({{asset('assets/bg3.png')}}) ;">
    <header>
        <nav>
            <div class="fotoProfil">
              <img src="{{asset('/propil')}}/{{ Auth::user()->image }}" id="profil"></a>
            </div>
            <a href="#" class="logo">Kalkulator BMI</a>
          <div class="toolbar">
            <ul>
            <li><a href="{{ url('/dashboard') }}"class='active'>Beranda</a></li>
            <li><a href="{{ url('/resep') }}" >Resep</a></li>
            <li><a href="{{ url('/profile') }}" >Profil</a></li>
            <li><a href="{{ url('/form') }}">Isi Form</a></li>
            <li><a href="{{ url('/about') }}">Tentang Kita</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container" style="margin-bottom: 7%">
        <div class="tentang">
          <p>
            Body Mass Index (BMI) adalah sebuah nilai yang didapatkan dari perhitungan berat dan tinggi badan seseorang. Dengan IMT, dapat diketahui apakah proporsi tubuh orang tersebut normal atau tidak.Saat ini ada lima kategori BMI: underweight, normal, overweight, obese I, dan obese II.BMI yang tidak normal
            dapat memprediksi risiko kesehatan seseorang di masa depan, misalnya penyakit metabolik seperti hipertensi, penyakit jantung, stroke, dan diabetes melitus.
            <br></br>
            BMI atau IMT diukur dengan cara membandingkan berat badan dengan tinggi badan. Cara ini dapat digunakan untuk orang yang berusia di atas 18 tahun. 
            Sedangkan, menghitung indeks massa tubuh dengan cara ini tidak berlaku untuk anak dan remaja (usia di bawah 18 tahun). Status gizi anak diukur dengan indikator berat badan menurut usia, tinggi badan menurut usia, dan berat badan menurut tinggi badan. 
          </p>
        </div>
         <div class="wrapper">
          <img src="images/image.png" id="image">
        <div class="display">
            <h4>Masukkan berat badan (Kg)</h4>
            <input id="screen1" type="text" placeholder="0">
        </div>
        <div class="display">
            <h4>Masukkan tinggi badan (Cm)</h4>
            <input id="screen2" type="text" placeholder="0">
        </div>
        <div class="display">
            <h4>Hasil</h4>
            <input id="screen3" type="text" placeholder="0" disabled>
        </div>
        <div class="btns">
            <div class="row">
                <button type="button" class="btn btn-success" onclick="hitung()">Hitung</button>
                <button type="button" class="btn btn-danger" onclick="reset()" style="margin-top: -3.4%; margin-left: 91%;">Reset</button>
            </div>
        </div>
        <a id="hasil"></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/bmi.js"></script>
  </body>
</html>