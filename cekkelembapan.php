<?php  
    //buatlah koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbmultisensor");

    //baca data dari tabel tb_sensor
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

    //data terakhir akan berada diatas

    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    $kelembapan = $data['kelembapan'];

    //uji, apabila nilai suhu belum ada, maka anggap suhu = 0
    if( $kelembapan == "") $kelembapan = 0;

    //cetak nilai suuhu
    echo $kelembapan;
?>