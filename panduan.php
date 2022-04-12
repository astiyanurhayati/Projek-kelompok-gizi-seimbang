<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="css/panduan.css" />
    <link rel="icon" href="img/main.png" type="image/gif" sizes="16x16" />
    <title>Panduan Gizi Seimbang</title>
  </head>
  <body>
    <header>
      <nav>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li><a href="pengenalan.html">Pengenalan</a></li>
          <li>
            <a href="panduan.html"> <span>Panduan</span> </a>
          </li>
          <li><a href="kalkulator.php">Kalkulator</a></li>
        </ul>
        </div>
        <span class="click" style="font-size: 30px; cursor: pointer; float: right" onclick="openNav()">&#9776; </span>

        <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }

          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
        </script>
      </nav>
      <img src="img/wk.png" alt="logo-wikrama">
    </header>
    <main>
      <div class="judul">
        <h1>Panduan Gizi Seimbang</h1>
      </div>
      <div class="akg">

        <h2>Angka Kecukupan Gizi (AKG)</h2><br>
        <p>Angka Kecukupan Gizi (AKG) adalah nilai yang menunjukkan kebutuhan rata-rata zat gizi tertentu yang harus dipenuhi setiap hari. Gizi yang harus dicukupi adalah energi, protein, lemak, karbohidrat, serat, air, vitamin, dan mineral.</p><br>
        <p>Angka Kecukupan Gizi (AKG) juga dipengaruhi oleh faktor berat badan, tinggi badan, usia, jenis kelamin, tingkat aktivitas fisik, dan kondisi fisiologis. Jika kebutuhan gizi spesifik untuk satu individu, AKG merupakan jumlah rata-rata gizi sehari bagi hampir semua orang sehat di suatu negara. Itu artinya AKG merupakan patokan zat gizi rata-rata yang diperlukan oleh suatu kelompok orang.</p>
      </div>
      <!-- level aktivitas -->
      <div class="panduan-aktivitas">
        <p>Ini adalah panduan gizi seimbang untuk menghitung kalori yang harus di konsumsi perharinya. <br> <br><b>Ada 5 golongan untuk aktivitas fisik:</b></p>
     

        <ul>
           <li><b>Sangat jarang berolahraga</b></li>
           <li><b>Jarang olahraga (1-3 kali per minggu)</b></li>
           <li><b>Cukup olahraga (3-5 kali per minggu)</b></li>
           <li><b>Sering olahraga (6-7 kali per minggu)</b></li>
           <li><b>Sangat sering olahraga (sekitar 2 kali dalam sehari)</b></li>
      

        </ul>
      </div>
      <div class="btn">
          <a style="text-decoration:none" href="#datatubuh"> <button>MULAI HITUNG AKG</button></a>
      </div>

      <!-- berat dan tinggi -->
      <form method="POST" action="hasilpanduan.php"> 
        <div class="data-tubuh">
          <h2 id="datatubuh"><b>Masukan Data Tubuh Anda !</b></h2>
          
          <div class="BeratTinggi">
              <!-- berat -->
              <label>Berat Badan</label><br>
              <input type="number" id="Berat" name="berat" placeholder="Masukan dalam satuan Kg" /  required><br>

                <!-- tinggi -->
              <label>Tinggi Badan</label><br>
            <input type="number" id="Tinggi" name="tinggi" placeholder="Masukan dalam satuan cm"  required>
          </div>

          <!-- jenis kelamin option -->
          <div class="JenisKelamin">
              <h3>Jenis Kelamin</h3>

      
              <div class="select">
                <select name="gender" required>
                  <option value="" hidden>Pilih Jenis Kelamin</option>
                  <option value="pria" name="gender">Pria</option>
                  <option value="wanita" name="gender">Wanita</option>
                
                </select>
      

          </div>
          <!-- ----------- -->

          <!-- usia -->
          <div class="usia">
            <label>Usia Anda</label><br>
              <input type="number" id="Usia" name="usia"  required  />
          </div>
          <!-- ------------------ -->

          <!-- aktivitas -->
          <div class="aktivitas">
        
              <div class="select">
                <h3>Aktivitas Fisik yang anda lakukan</h3>
                <select name="aktivitas" required>
                  
                  <option value="" hidden >Pilih Aktivitas Fisik</option>
                  <option value="sangatjarang" name="aktivitas">Sangat Jarang Berolahraga</option>
                  <option value="jarang" name="aktivitas">Jarang olahraga</option>
                  <option value="cukup" name="aktivitas">Cukup Olahraga</option>
                  <option value="sering" name="aktivitas">Sering Olahraga</option>
                  <option value="sangatsering" name="aktivitas"> Sangat Sering Olahraga</option>
        
                </select>
          
          </div>

          <div class="btn-hasil">
              <input type="submit" name="hitung" value="Liat Hasil"/>
          </div>

        </div>
      </form>
    </main>
    <footer>
      <h3>© 2022 kelompok 7</h3>
    </footer>
  </body>
</html>

