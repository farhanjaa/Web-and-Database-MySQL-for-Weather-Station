<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik sensor</title>

    <!-- panggil file bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript"src="jquery-latest.js"></script>

    <!-- memanggil data grafik -->
    <script type="text/javascript">
        var refreshid= setInterval(function(){
            $('#responcontainer').load('data.php');
        }, 1000);
    </script>
</head>
<body>
    <!-- tempat tampilan grafik -->
    <div class="container my-4"  style="text-align: center;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent">
    <h3>Grafik sensor secara realtime</h3>
        <p>(Data yang ditampilkan adalah 5 data terakhir)</p>
      <a class="navbar-brand" href="index.php"><span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
          </svg></span></a>
    
    </nav>

    </div>
    
    <!--Container: element layout pada bootsrap-->
    <!-- div untuk grafik -->
    <div class="container" style="width: 80%">
        <div class="container" id="responcontainer" style="width: 80%; text-align: center">
        </div>
    </div>

    


    <!-- pemanuis untuk gambar -->
    <div class="container" style="text-align: center;"> 
         <img src="telkim.png" class="rounded float-start" alt="iyee" width="700" height="600">
    </div>
</body>
</html>