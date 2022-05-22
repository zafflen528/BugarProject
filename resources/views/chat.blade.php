<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/livechat.css') !!}">
    <title>Sesi LiveChat</title>
</head>
<body>
    <header><div class="header">
      <img src="images/Foto Diri.jpg" id="profil">
        <div class="nama">KONSULTASI LANGSUNG</div>
        <div class="menu-list">
          <ul>
          <li><a href="{{ url('/dashboard') }}"class='active'>Beranda</a></li>
            <li><a href="{{ url('/resep') }}" >Resep</a></li>
            <li><a href="{{ url('/profile') }}" >Profil</a></li>
            <li><a href="{{ url('/about') }}">Tentang Kita</a></li>
          </ul>
      </div>
    </header>
    <main>
    <div class="container">
   <br />
   
   
   <div class="photo">
   <li><img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTgxMDEwMDE1MDUyNjM3NTQ0/cumberbatch_179663904jpg.jpg"
   style="width:75px;height:75px;"></li>
   <br>
   <li>Dr. ShareLock Homeless</li>
   </div>
   <br />
   <br>
   <div class="table-responsive">
    
    
    <div id="user_details"></div>
    <div id="user_model_details"></div>
    <div class="table-history">
    <div class="history">
  
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="darker">
  
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="history">
 
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="darker">
  
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>
<div class="history">
 
  <p>Great idea! where do we start then?</p>
  <span class="time-right">11:07</span>
</div>
<div class="darker">
  
  <p>Maybe we can start from looking a reference first</p>
  <span class="time-left">11:10</span>
</div>
</div>
    <div class="chat-message">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                          <input type="text" class="form_control" placeholder="Enter text here...">
                          <button class="button" style="vertical-align:middle"><span>Kirim </span></button>
                        </div>
                                                          
                    </div>
                </div>
   </div>
  </div>
    </main>
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
</body>
</html>