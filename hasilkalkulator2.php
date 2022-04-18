

<?php
 //Problem: cara agar saat user memilih beberapa checkbox tersebut, dan saat di submit hasilnya akan menjumlahkan semua total kalori dari makanan yang telah di pilih, lalu menampilkan apa saja makanan yang sudah di pilih tersebut. 

 include "data.php";

 $JumlahKalori = 0;
 $label = '';

  
 if(isset($_POST['hitung'])){
  
  if(!empty($_POST['JumlahKalori'])) {
      foreach($_POST['JumlahKalori'] as $x => $kalori){ 
        $d = search($makanan, 'id', $kalori);
        $label = $label.' '.$d[0]['nama'].' '.$d[0]['jumlah'].',';
        $JumlahKalori +=  $d[0]['berat'];
      }
      
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
      <h2> <?php echo $JumlahKalori; ?> </h2>
      <h3>Teridiri dari <?php echo $label; ?></h3>
      <div class="btn">
        <a href="kalkulator2.php"> BACK </a>
      </div>
    </main>
  </body>
</html>
