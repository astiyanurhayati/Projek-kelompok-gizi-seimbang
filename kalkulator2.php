<?php

include "data.php";

?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/kalkulator.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <title>Kalkulator Kalori</title>
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
          <li><a href="panduan.php">Panduan</a></li>
          <li>
            <a href="kalkulator.php"> <span>Kalkulator</span> </a>
          </li>
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
      <img src="img/wk.png" alt="wikrama-logo"/>
    </header>
    <div class="judul">
      <h1>Kalkulator Kalori</h1>
    </div>

    <main>
        <div class="pjn">
            <p>Ini adalah kalkulator kalori dimana kamu bisa menghitung kalori yan gakan atau telah dikonsumsi. Caranya adalah dengan memilih makanan yang akan atau telah kamu konsumsi kemudian tekan tombol Lanjut ke Hasil</p>
        </div>
        <div class="btn">
            <a href="#ceklis">Next</a>
        </div>
        <div class="subjudul" id="ceklis">
          <h2>Pilih makanan yang kamu konsumsi</h2>
        </div>
          <form action="hasilkalkulator2.php" method="POST">
                <h3>Makanan Pokok Golongan B</h3>
                    <div class="gol-b">
                      <div class="kanan">
                          <table>
                              <?php 
                                foreach($makanan as $key => $value){
                                  
                                    echo '
                                    <tr>
                                        <td>'.$value['nama'].'</td>
                                        <td class="padding-left">= '.$value['jumlah'].'</td>
                                        <td><input type="checkbox" name="JumlahKalori[]" value="'.$value['id'].'" /></td>
                                    </tr>
                                    ';
                                }
                              ?>
                             
                          </table>
                      </div>
                      <div class="verikal_center"></div>
                      
                    </div>


                 
                <div class="btn-hasil">
                      <input type="submit" name="hitung" value="Liat Hasil" />
                    </div>
          </form>
    </main>

    <footer>
      <h3>© 2022 kelompok 7</h3>
    </footer>
  </body>
</html>
