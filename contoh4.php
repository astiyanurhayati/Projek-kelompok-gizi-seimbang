<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="icon" href="img/main.png" type="image/gif" sizes="16x16" />
    <title>Panduan Gizi Seimbang</title>
  </head>
  <body>
    
    
<!-- berat dan tinggi -->
<form method="POST" action="">
      <div class="data-tubuh">
          <h2 id="datatubuh"><b>Masukan Data Tubuh Anda !</b></h2>
          <div class="BeratTinggi">
            <!-- berat -->
            <label>Berat Badan</label><br>
            <input type="number" id="Berat" name="berat" placeholder="Masukan dalam satuan Kg" /><br>

              <!-- tinggi -->
            <label>Tinggi Badan</label><br>
           <input type="number" id="Tinggi" name="tinggi" placeholder="Masukan dalam satuan cm">
        </div>

        <!-- jenis kelamin option -->
        <div class="JenisKelamin">
            <h3>Jenis Kelamin</h3>

            <div class="select">
              <select>
                <option value="pilih" hidden>Pilih Jenis Kelamin</option>
                <option value="pria" name="gender">Pria</option>
                <option value="Wanita" name="gender">Wanita</option>
               
              </select>
   

        </div>
        <!-- ----------- -->

        <!-- usia -->
        <div class="usia">
          <label>Usia Anda</label><br>
            <input type="number" id="Usia" name="usia"  />
        </div>
        <!-- ------------------ -->

        <!-- aktivitas -->
        <div class="aktivitas">
   
            <div class="select">
              <h3>Aktivitas Fisik yang anda lakukan</h3>
              <select>
                
                <option value="pilih" hidden>Pilih Aktivitas Fisik</option>
                <option value="sangatjarang" name="aktivitas">Sangat Jarang Berolahraga</option>
                <option value="jarang" name="aktivitas">Jarang olahraga</option>
                <option value="cukup" name="aktivitas">Cukup Olahraga</option>
                <option value="sering" name="aktivitas">Sering Olahraga</option>
                <option value="sangatsering" name="akvifitas"> Sangat Sering Olahraga</option>
                
                
               
              </select>
     
        </div>

        <div class="btn-hasil">
            <input type="submit" name="hitung" value="Liat Hasil"/>
        </div>

      </div>
   

</form>
  </body>
</html>
<?php
@$Berat = $_POST ['berat'];
@$Tinggi = $_POST ['tinggi'];
@$Gender = $_POST['gender'];
@$Usia = $_POST ['usia'];
@$aktivitas = $_POST['aktivitas'];



$AkgPria = 66 + (13.7 * $Berat)+ (5 * $Tinggi) - (6.8 * $Usia);
$AkgWanita = 655 + (9.6 * $Berat) + (1.8 * $Tinggi) - (4.7 * $Usia);



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
        @$Protein = 15 * $HasilAkg / 100;
        @$Karbohidrat = 60 * $HasilAkg /100;
        @$Lemak = 15 * $HasilAkg / 100;

        //Rincian Gram
        @$GrProtein = $Protein / 4;
        @$GrKarbohidrat = $Karbohidrat /4;
        @$GrLemak = $Lemak / 9;
        
        echo "hasil total kalori" .$HasilAkg;
        echo "Protein: " .$Protein;
    
}


?>

