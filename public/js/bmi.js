 var screen=document.querySelector('#screen');
    var btn=document.querySelectorAll('.btn');

    function hitung() {
        screen3.value=(screen1.value / Math.pow((screen2.value/100),2));
        const value = Math.round(screen3.value * 10) / 10;
        screen3.value = value;

        let greeting;
        if (value <= 17.0) {
          greeting = "Kurus (Kekurangan berat badan tingkat tinggi)";
        } 
        else if (value >= 17.1 && value <= 18.4) {
          greeting = "Kurus (kekurangan berat badan tingkat rendah)";
        }
        else if (value >= 18.5 && value <= 25.0) {
          greeting = "Normal";
        }
        else if (value >= 25.1 && value <= 27.0) {
        greeting = "Gemuk (kelebihan berat badan tingakt rendah)";
        }
        else {
          greeting = "Gemuk (Kelebihan berat badan tingkat tinggi)";
        }
                document.getElementById("hasil").innerHTML = greeting;
    }


    function reset() {
        screen1.value=screen1.value.substr(0,screen1.value.length-1000);
        screen2.value=screen2.value.substr(0,screen2.value.length-1000);
        screen3.value=screen3.value.substr(0,screen3.value.length-1000);
    }
