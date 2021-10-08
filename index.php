<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Multi Sensor</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <!-- load otomatis/ realtime -->
    <script type="text/javascript">
    $(document).ready( function() {
      
      setInterval(  function() {
        $("#ceksuhu").load("ceksuhu.php");
        $("#cekkelembapan").load("cekkelembapan.php");
        $("#cekcahaya").load("cekcahaya.php");
        $("#cektekanan").load("cektekanan.php");
      }, 1000 );
      
    } );
    </script>


  </head>
  <body>
        <div class="container" style="text-align: center; margin-top: 200px">
        <h2>Monitoring Multi sensor <br> Secara Realtime</h2>

        <div style="display: flex">
        <!-- menampilkan nilai suhu -->
        <div class="card text-center" style="width: 33.33%">
          <div class="card-header"style="font-size: 30px; font-weight: bold; background-color: yellow;">
    Suhu
          </div>
          <div class="card-body">
            <h1><span id="ceksuhu" >0</span>°C</h1>
          </div>
        </div>
       <!-- akhir menampilkan nilai suhu -->

     <!-- menampilkan nilai kelembapan -->
      <div class="card text-center" style="width: 33.33%">
          <div class="card-header"style="font-size: 30px; font-weight: bold; background-color: blue; color: white">
    Kelembapan
          </div>
          <div class="card-body">
            <h1><span id="cekkelembapan">0</span>%</h1>
          </div>
        </div>
       <!-- akhir menampilkan nilai kelembapan -->

       <!-- menampilkan nilai kelembapan -->
       <div class="card text-center" style="width: 33.33%">
          <div class="card-header"style="font-size:24px; font-weight: bold; background-color: red; color: white">
    Intensitas Cahaya
          </div>
          <div class="card-body">
            <h1><span id="cekcahaya">0</span></h1>
          </div>
        </div>
       <!-- akhir menampilkan nilai suhu -->

       <!-- menampilkan nilai kelembapan -->
      <div class="card text-center" style="width: 33.33%">
          <div class="card-header"style="font-size: 30px; font-weight: bold; background-color: blue; color: white">
    Tekanan
          </div>
          <div class="card-body">
            <h1><span id="cektekanan">0</span>Pa</h1>
          </div>
        </div>
       <!-- akhir menampilkan nilai kelembapan -->
        
        </div>

        <!-- Gambar pemanis -->
        <div class ="container" style="padding-top: 20px">
            <img src="images/kodingperangkat.png">
        </div>
        
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmY1" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>