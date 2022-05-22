<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{!! asset('css/profil.css') !!}">
</head>
<body>
<header>
        <nav>
            <div class="fotoProfil">
              <img src="{{asset('/propil')}}/{{ Auth::user()->image }}" id="profil"></a>
            </div>
            <a href="#" class="logo">Form</a>
          <div class="toolbar">
            <ul>
              <li><a href="{{ url('/dashboard') }}">Beranda</a></li>
              <li><a href="{{ url('/resep') }}">Resep</a></li>
              <li><a href="{{ url('/profile') }}">Profil</a></li>
              <li><a href="{{ url('/form') }}"class="active">Isi Form</a></li>
              <li><a href="{{ url('/about') }}" >Tentang Kita</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <section>
        <form action="">

            <div class="input-row">
                <p>Apakah...</p>
                <div>
                    <input type="radio" name="weight-goals" id="bulk" value="bulking">
                    <span>Meningkatkan Berat Badan</span>
                    <input type="radio" name="weight-goals" id="cut" value="cutting">
                    <span>Menurunkan Berat Badan</span>
                </div>
            </div>

            <div class="input-row">
                <p>Apakah kamu dapat mengakses fasilitas pusat bugar (gym)?</p>
                <div>
                    <input type="radio" name="gym-available" id="gym-yes" value="gym-yes">
                    <span>Iya</span>
                    <input type="radio" name="gym-available" id="gym-no" value="gym-no">
                    <span>Tidak</span>
                </div>
            </div>

            <div class="input-row">
                <p>Jelaskan secara detil pengalaman Anda dengan latihan olahraga!</p>
                <div>
                    <textarea name="pengalaman-latihan" id="pengalaman-latihan" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
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
                  
              </div>
              </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>