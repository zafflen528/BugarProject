<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/40c82c7a25.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style_resep.css') !!}">
    <link rel="icon" href="{!! asset('assets/BUGAR.ico') !!}">
  </head>
  <body style="background-image:url({{asset('assets/bg1.png')}}) ;">
    <header>
      <nav>
          <div class="fotoProfil">
            <img src="{{asset('/propil')}}/{{ Auth::user()->image }}" id="profil"></a>
          </div>
          <a href="#" class="logo">Resep</a>
        <div class="toolbar">
          <ul>
            <li><a href="{{ url('/dashboard') }}">Beranda</a></li>
            <li><a href="{{ url('/resep') }}" class="active">Resep</a></li>
            <li><a href="{{ url('/profile') }}" >Profil</a></li>
            
            <li><a href="{{ url('/about') }}">Tentang Kita</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="box-container">
      <div class="box">
        
        <div class="content">
        <img src="assets/cont1.png" style="width:45%; float:left"alt="" />
        <ul style="list-style-type:none;float:left ">
            <li><h1 style="font-weight:900">Rawon</h1> </li>
            <li><h3>Bahan</h3> </li>
            <p >
            <ul style="column-count:2;column-gap:30px;">
              <li>500g daging sandung lamur sapi</li>
              <li>1 dengkul sapi, belah dua</li>
              <li>3 lembar daun jeruk purut segar</li> 
              <li>1 batang serai, memarkan</li> 
              <li>1 sdm air asam jawa</li> 
              <li>2 batang daun bawang, iris seukuran 1 cm</li> 
              <li>1 sdm Royco Kaldu Sapi</li> 
              <li>3 liter air</li> 
              <li>1 sdm Garam</li> 
              <li>5 sdm minyak goreng</li>
              <li>4 siung bawang putih</li>
              <li>8 butir bawang merah</li>
              <li>5 buah keluak, geprek </li>
              <li>4 butir kemiri, sangrai</li> 
              <li>1 cm kunyit, bakar</li> 
              <li>Taoge pendek</li> 
              <li>Telur asin</li> 
              <li>Sambal rawit</li> 
              <li>Jeruk nipis</li> 
              <li>Emping</li>
            </ul></p>

            <li><h3>Langkah-langkah</h3> </li>
            <ul style="list-style-type:number">
            <li>Rebus daging dan dengkul sapi hingga setengah lunak. Potong daging sesuai selera. Sisihkan.</li>
            <li>Masukkan Royco Kaldu Sapi dan garam ke dalam air rebusan daging.</li>
            <li>Tumis bumbu halus, lengkuas, daun jeruk, dan serai hingga harum dan matang.</li>
            <li>Masukkan potongan daging ke dalam tumisan, masak hingga bumbu meresap.</li>
            <li>Masukkan tumisan daging ke dalam kuah kaldu. Masak dengan api kecil hingga daging empuk.</li>
            <li>Sajikan hangat beserta pelengkap.</li>
            </ul>
        </ul>
          
        </div>
      </div>
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
