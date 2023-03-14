<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">



    <title>IOT control Relay</title>

<script>

    function ubahstatus(value){
        if(value==true) value= "ON"; else value= "OFF"
        document.getElementById('status').innerHTML=value;
    }

    function ubahrange(val){
       
        document.getElementById('range').innerHTML=val;
    }
</script>

  </head>
  <body>

    <div class="container">
        <h2>Control Relay dan Servo dengan ESP32</h2>

        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="ubahstatus(this.checked)">
        <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status">OFF</span></label>
        </div>
        <label for="customRange1" class="form-label">posisi servo <span id="range">0</span> derajat</label>
        <input type="range" class="form-range" id="customRange1" min="0" max="180" step="1" value="0" onchange="ubahrange(this.value)">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  
  </body>
</html>
