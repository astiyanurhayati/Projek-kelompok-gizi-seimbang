
<?php
 
if(isset($_POST['hitung'])){
    if(!empty($_POST['JumlahKalori'])) {
        $JumlahKalori = 0;
        foreach($_POST['JumlahKalori'] as $kalori){
            $JumlahKalori += $kalori;
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
      <h2> <?php echo $JumlahKalori?> </h2>
      <h3>Teridiri dari = 1 Gelas Susu</h3>
      <div class="btn">
        <a href="kalkulator.php"> BACK </a>
      </div>
    </main>
  </body>
</html>
