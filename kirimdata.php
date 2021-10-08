<?php
    // koneksi ke database

    $konek= mysqli_connect("localhost", "root", "", "dbmultisensor");

    // baca data yang dikirim dalam data esp8266
    $suhu = $_GET['suhu'];
    $kelembapan = $_GET['kelembapan'];
    $cahaya = $_GET['ldr'];
    $tekanan = $_GET['tekanan'];

    //simpan ke tabel 

    //auto increment = 1/ mengembalikan ID menjadi 1 apabila dikosongkan
    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    //SIMPAN DATA SENSOR KE TAbel tb-sensor
    $simpan = mysqli_query($konek, "insert into tb_sensor(suhu, kelembapan, ldr, tekanan)values('$suhu', '$kelembapan', '$cahaya', '$tekanan')");

    //uji smpan untuk memberikan respon
    if($simpan)
        echo "berhasil dikrim" ;
    else
        echo "gagal terkirim";

?>