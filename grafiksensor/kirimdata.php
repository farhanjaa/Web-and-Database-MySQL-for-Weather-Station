<?php
    // koneksi ke database

    $konek= mysqli_connect("localhost", "root", "", "grafiksensor");

    // baca data yang dikirim dalam data esp8266
    $suhu = $_GET['suhu'];
    $kelembaban = $_GET['kelembaban'];
    $tekanan = $_GET['tekanan'];
    $cahaya = $_GET['cahaya'];
    //simpan ke tabel 

    //auto increment = 1/ mengembalikan ID menjadi 1 apabila dikosongkan
    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    //SIMPAN DATA SENSOR KE TAbel tb-sensor
    $simpan = mysqli_query($konek, "INSERT INTO tb_sensor(suhu, kelembaban, tekanan, cahaya)values('$suhu', '$kelembaban','$tekanan', '$cahaya')");

    //uji smpan untuk memberikan respon
    if($simpan)
        echo "berhasil dikrim" ;
    else
        echo "gagal terkirim";

?>