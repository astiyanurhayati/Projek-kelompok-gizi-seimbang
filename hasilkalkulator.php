

<?php
$menu = array(
  array("250 gram Jagung Rebus", 90.2),
  array("200 gram Kentang Rebus", 166),
  array("160 gram Ketupat", 217),
  array("200 gram Lontong", 38),
  array("100 gram Nasi Putih", 175),
  array("60 gram Roti Tawar Serat Tinggi", 146),
  array("100 gram Singkong Rebus", 146),
  array("100 gram Ubi Rebus", 125),
  array("50 gram Crakers", 229),
  array("25 gram Makaroni", 91),
  array("50 gram Mie Instant", 168),
  array("100 gram Nasi Tim", 88),
  array("200 gram Nasi Uduk", 506),
  array("50 gram Roti Tawar", 128),
  array("150 gram Bihun Goreng", 296),
  array("200 gram Bubur Ayam", 165),
  array("100 gram Bubur Sum-sum", 178),
  array("150 gram Kentang Goreng", 211),
  array("200 gram Mie Goreng", 321),
  array("100 gram Nasi Goreng", 267),
  array("100 gram Soun Goreng", 263),
  array("300 gram Spagetti", 642),
  array("150 gram Tape Singkong", 260),
  array("100 gram Ayam Panggang", 164.3),
  array("70 gram Daging Panggang", 150),
  array("75 gram Telur Asin Rebus", 138),
  array("60 gram Telur Ayam Rebus", 97),
  array("50 gram Ati Ayam Goreng", 98),
  array("200 gram Ayam Pop", 265),
  array("100 gram Bakso Daging Sapi", 260),
  array("100 gram Empal Daging", 167),
  array("160 gram Ikan Bandeng Goreng", 180.7),
  array("80 gram Ikan Kembung Goreng", 87.65),
  array("60 gram Ikan Lele Goreng", 57.5),
  array("50 gram Ikan Teri Goreng", 66),
  array("100 gram Kerang Rebus", 59),
  array("60 gram Telur Mata Sapi", 40),
  array("50 gram Tempe Goreng", 118),
  array("80 gram Udang Goreng Besar", 68.25),
  array("50 gram Abon Sapi", 158),
  array("100 gram Gulai Ayam", 156.3),
  array("50 gram Perkedel Jagung", 180),
  array("50 gram Perkedel Kentang", 123),
  array("75 gram Rendang Daging", 285.5),
  array("100 gram Sate Ayam", 466),
  array("100 gram Sambal Goreng Ati", 127),
  array("250 gram Sop Sapi", 227),
  array("100 gram Tahu Goreng", 111),
  array("75 gram Telur Dadar", 188),
  array("160 gram Apel", 92),
  array("160 gram Belimbing", 80),
  array("200 gram Duku", 81),
  array("60 gram Jambu Air", 35.5),
  array("320 gram Jambu Biji", 157),
  array("140 gram Jeruk Medan", 46),
  array("100 gram Mangga Manalagi", 72),
  array("200 gram Nanas", 104),
  array("100 gram Pepaya", 46),
  array("200 gram Pir", 80),
  array("150 gram Salak", 63.6),
  array("150 gram Semangka", 48),
  array("100 gram Alpukat", 85),
  array("125 gram Anggur", 60),
  array("100 gram Lengkeng", 79),
  array("120 gram Melon",46),
  array("300 gram Mangga Harum Manis", 90),
  array("100 gram Pisang Ambon", 74.2),
  array("125 gram Sirsak", 55),
  array("100 gram Durian Montong", 134),
  array("100 gram Rambutan", 69),
  array("100 gram Sawo", 92),
  array("50 gram Bening Bayam", 18),
  array("100 gram Sayur Asam", 88),
  array("100 gram Sop Ayam Kombinasi", 95),
  array("100 gram Sayur Lodeh", 61),
  array("100 gram Cah Kacang Panjang", 72),
  array("100 gram Tumis Buncis", 52)
);

$nama = null;
$kalori= 0;
$tampilnama = "pilih makanan yang anda konsumsi terlebih dahulu";
$tampilkalori = "Data Kosong";
@$JumlahKalori = $_POST['JumlahKalori'];

if (isset($_POST['submit'])){
    foreach((array)$JumlahKalori as $item){
      $nama .= $menu[$item][0] .", ";
      $kalori= $kalori + $menu[$item][1];
      $tampilnama = "Terdiri dari " . $nama;
      $tampilkalori = $kalori ." kkal";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/hasilkalkulator.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <title>Hasil Kalkulator</title>
  </head>
  <body>

    <main>
      <img src="img/hasilkalkulator.png" alt="" />
      <h3>Jumlah Kalori yang anda konsumsi adalah</h3>
      <h2 style="color: orange";><?php echo $tampilkalori; ?></h2>
      <h3><?php echo $tampilnama?></h3>
      <div class="btn">
        <a href="kalkulator.php"> BACK </a>
      </div>
    </main>

  </body>
</html>
