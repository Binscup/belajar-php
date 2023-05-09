<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // no 1
    $kalimat = "saat ini saya sudah mencapai materi php.";
    $cari ="php";
    $tidakditemukan = "javascript";
    $posisi = strpos($kalimat,"$cari");
    echo "hasil yang di temukan ". $posisi. '<br>';

    $kalimat = "saat ini saya sudah mencapai materi php.";
    $cari ="php";
    $tidakditemukan = "javascript";
    $posisi = strpos($kalimat,"$tidakditemukan");
    echo "hasil yang tidak di temukan ". $posisi; 

    ?>
    <br>
    <br>

    <?php
    $kalimat = "aku telah melalui belajar php string, sekarang telah mencapai tahapan strpos.";
    $cari ="belajar php string";
    $tidakditemukan = "javascript";
    $posisi = strpos($kalimat,"$cari");
    echo "hasil yang di temukan ". $posisi. '<br>';
    
    $kalimat = "saat ini saya sudah mencapai materi php.";
    $cari ="php";
    $tidakditemukan = "javascript";
    $posisi = strpos($kalimat,"$tidakditemukan");
    echo "hasil yang tidak di temukan ". $posisi; 
    ?>
</body>
</html>