<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
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
</body>
</html>