
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="with=device-width, initial scale=1.0">
  <link rel="stylesheet" type="text/css" href="{!! asset('css/homepage.css') !!}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
  <title>Bugar</title>
</head>
  <body style="background-image: url(images/home.png);">
    <header>
      <nav>
          <div class="fotoProfil">
            <img src="images/Foto Diri.jpg" id="profil"></a>
          </div>
          <p>Halo <a>{{ Auth::user()->name }}</a></p>
        
        <div class="toolbar">
          <ul>
            <li><a href="{{ url('/resep') }}">Resep</a></li>
            <li><a href="{{ url('/profile') }}">Profil</a></li>
            <li><a href="{{ url('/about') }}">Tentang Kita</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
          
        </div>
      </nav>
    </header>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img class="bd-placeholder-img" style="background-image:url(images/slide1.jpg);"></img>
              <div class="container">
                <div class="carousel-caption text-start">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="bd-placeholder-img" style="background-image:url(images/slide2.jpg);"></img>
              <div class="container">
                <div class="carousel-caption">
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <img class="bd-placeholder-img" style="background-image:url(images/slide3.jpg);"></img>
              <div class="container">
                <div class="carousel-caption text-end">
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    <div class="left">
      <div class="htmlcss">
        <div class="kolom">
          <a href="{{ url('/bmi') }}"><img src="images/home1.jpg" id="photo" height="290" width="530" style="border-radius:7%"></a>
        </div>
        <div class="Keterangan">
          <h1>Kalkulator BMI</h1>
        <p>Endless to-do lists and constant distractions from coworkers, calendars and cuddly pets means that you’re probably wasting a lot of time. Seque helps you to plan, focus and optimize your time so that you can get more done in less time.
          Work distraction-free immersed in deep focus blocks, one task at a time.</p> 
        </div>
      </div>
    </div>
    <div class="right" style="margin-left: 56.5%;">
      <div class="htmlcss1">
        <div class="kolom1">
          <a href="{{ url('/gizi') }}"><img src="images/home2.jpg" id="photo" height="290" width="530" style="border-radius:7%"></a>
        </div>
        <div class="Keterangan2" style="margin-bottom: 8%;">
          <h1>Kalkulator Gizi</h1>
        <p>Endless to-do lists and constant distractions from coworkers, calendars and cuddly pets means that you’re probably wasting a lot of time. Seque helps you to plan, focus and optimize your time so that you can get more done in less time.
          Work distraction-free immersed in deep focus blocks, one task at a time.</p> 
        </div>
      </div>
  </div>
    <div class="left">
      <div class="htmlcss">
        <div class="kolom">
          <a><img src="images/home3.jpg" id="photo" height="290" width="530" style="border-radius:7%"></a>
        </div>
        <div class="Keterangan">
          <h1>Konsultasi Langsung</h1>
        <p>Anda bisa menekan fitur livechat dibawah kanan layar anda!</p> 
        </div>
      </div>
    </div>
    <div class="footer-container" style="margin-top: 8%;">
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
            <div class="footer-saran-form"></div>
          <h2>Kritik & Saran</h2>
          <input type="text" placeholder="Ketikkan kritik dan saran" id="footer-saran" style="padding: 0 8px;">
          <button type="button" value="submit" class="btn btn-warning" style="background-color: #2d3d3d; color: #FFF; border-color: #2d3d3d;">Kirim</button>
        </div>
        </div>
        
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6289b3aeb0d10b6f3e736923/1g3kubor6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>