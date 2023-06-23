<?php
    //koneksi database
    $konek = mysqli_connect("localhost", "root", "", "grafiksensor");
    // baca id tertinggi
    $sql_id = mysqli_query($konek, "SELECT MAX(id) FROM tb_sensor");
    //tanggap datanya
    $data_id = mysqli_fetch_array($sql_id);
    // ambil id terakhir/terbesar
    $id_akhir = $data_id['MAX(id)'];
    $id_awal = $id_akhir - 24;


    // baca data dari tabel tb_sensor
    // baca informasi tanggal untuk semua data - sumbu
    $waktu = mysqli_query($konek, "SELECT waktu FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
    // baca informasi suhu untuk semua data - sumbu Y di grafik
    $suhu  = mysqli_query($konek, "SELECT suhu FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
    $kelembaban  = mysqli_query($konek, "SELECT kelembaban FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
    $tekanan  = mysqli_query($konek, "SELECT tekanan FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
    $cahaya  = mysqli_query($konek, "SELECT cahaya FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");

?>

<!-- tampilan grafik -->
<div class="panel panel-primary">
    <div class="panel-heading">
    Grafik sensor
    </div>

    <div class="panel-body">
        <!-- siapkan canvas untuk grafik -->
        <canvas id="myChart"></canvas>

        <!-- gambar grafik  -->
        <script type="text/javascript">
            //baca ID canvas tempat grafik akan diletakkan
            var canvas = document.getElementById('myChart');
            //  letakkan data tangal dan suhu untuk grafik 
            var data = {
                labels : [
                    <?php
                        while($data_tanggal = mysqli_fetch_array($waktu))
                        {
                            echo '"'.$data_tanggal['waktu'].'",' ;
                        }
                    ?>
                ],
                datasets : [
                {
                    label: "Cahaya", 
                    fill: true,
                    backgroundColor: "rgba(56, 149, 19, .2)",
                    borderColor: "rgba(56, 149, 19, 1)",
                    lineTension: 0.5,
                    pointRadius: 5,
                    data : [
                        <?php  
                            while($data_suhu = mysqli_fetch_array($cahaya))
                            {
                                echo $data_suhu['cahaya'].',' ;
                            }
                        ?>            
                    ]
                },
                ]
            };


            //option grafik 
            var option = {
                showLines : true,
                animation : {duration : 5}

            } ;
            //cetak grafis kedalam canvas
            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option               
            });

        </script>
    </div>
</div>