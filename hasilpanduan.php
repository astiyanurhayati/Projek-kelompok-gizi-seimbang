<?php
// print_r($_POST);

$Berat = $_POST ['berat'];
$Tinggi = $_POST ['tinggi'];
$Gender = $_POST['gender'];
$Usia = $_POST ['usia'];
$aktivitas = $_POST['aktivitas'];



$AkgPria = 66 + (13.7 * $Berat)+ (5 * $Tinggi) - (6.8 * $Usia);
$AkgWanita = 655 + (9.6 * $Berat) + (1.8 * $Tinggi) - (4.7 * $Usia);
$HasilAkg = 0;
$GrLemak = 0;
$Lemak = 0;
$Protein = 0;
$GrProtein = 0;
$Karbohidrat = 0;
$GrKarbohidrat = 0;

 if(isset($_POST['hitung'])){
        
          //menghitung Akg
          if($Gender == "pria"){
              if($aktivitas == "sangatjarang"){
                $HasilAkg = $AkgPria * 1.2;
              }elseif($aktivitas == "jarang"){
                $HasilAkg = $AkgPria * 1.375;
              }elseif($aktivitas == "cukup"){
                $HasilAkg = $AkgPria * 1.55;
              }elseif($aktivitas == "sering"){
                $HasilAkg = $AkgPria * 1.725;
              }elseif($aktivitas == "sangatsering"){
                $HasilAkg = $AkgPria * 1.9;
              }
              
            }elseif ($Gender == "wanita"){
              if($aktivitas == "sangatjarang"){
                $HasilAkg = $AkgWanita * 1.2;
              }elseif($aktivitas == "jarang"){
                $HasilAkg = $AkgWanita * 1.375;
              }elseif($aktivitas == "cukup"){
                $HasilAkg = $AkgWanita * 1.55;
              }elseif($aktivitas == "sering"){
                $HasilAkg = $AkgWanita * 1.725;
              }elseif($aktivitas == "sangatsering"){
                $HasilAkg = $AkgWanita * 1.9;
              }

          }
        
        // Rincian kalori
        $Protein = 15 * $HasilAkg / 100;
        $Karbohidrat = 60 * $HasilAkg / 100;
        $Lemak = 15 * $HasilAkg / 100;

        //Rincian Gram
        $GrProtein = $Protein / 4;
        $GrKarbohidrat = $Karbohidrat /4;
        $GrLemak = $Lemak / 9;
      
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="css/hasilpanduan.css" />
    <link rel="icon" href="img/main.png" type="image/gif" sizes="16x16" />
    <title>Hasil</title>
  </head>
  <body>
    <main>
      <h1>
        Angka Kecukupan Gizi Anda adalah: <br /><span>
        <?php echo ceil($HasilAkg)."*"; ?> </span> kalori per hari
      </h1>
     <br>

    </h3>
    <p>Kebutuhan gizi anda dalam sehari adalah:</p>
      <ul>
        <li>Protein : <span> <?php echo ceil($Protein); ?> kalori atau <?php echo ceil($GrProtein) ?>  gram</span></li>
        <li>Lemak : <span> <?php echo ceil($Lemak) ?> kalori atau <?php echo ceil($GrLemak)?> gram</span></li>
        <li>Karbohidrat : <span> <?php echo ceil($Karbohidrat) ?> kalori atau <?php echo ceil ($GrKarbohidrat) ?> gram</span></li>
      </ul>
      <h5>*Untuk menghitung kebutuhan gizi, kami menggunakan rumus <span> <a href="https://en.wikipedia.org/wiki/Harris%E2%80%93Benedict_equation" target='_blank'> Harris Benedict</a></span></h5>
      <div class="btn">
        <a href="panduan.php"> BACK </a>
      </div>
    </main>
    <div class="clear"></div>
  </body>
</html>





