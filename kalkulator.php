<?php


//total kalori permakanan
$JagungRebus = 90.2;
$KentangRebus = 166;
$Ketupat = 217;
$Lontong =  38;
$NasiPutih =  175;
$RotiTawarSeratTinggi =  146;
$SingkongRebus =  146;
$UbiRebus =  125;
$Crakers =  229;
$Makaroni =  91;
$MieInstant =  168;
$NasiTim =  88;
$NasiUduk =  506;
$RotiTawar =  128;

$BihunGoreng = 296;
$BuburAyam =  165;
$BuburSumsum =  178;
$KentangGoreng =  211;
$MieGoreng =  321;
$NasiGoreng =  267;
$SounGoreng =  263;
$Spaghetti =  642;
$TapeSingkong =  260;

$AyamPanggang =  164.3;
$DagingPanggang =  150;
$TelurAsinRebus =  138;
$TelurAyamRebus =  97;

$AtiAyamGoreng =  98;
$AyamPop =  265;
$BaksoDagingSapi =  260;
$EmpalDaging = 167;
$IkanBandengGoreng = 180.7;
$IkanKembungGoreng = 87.65;
$IkanLeleGoreng = 57.5;
$IkanTeriGoreng = 66;
$KerangRebus = 59;
$TelusMataSapi = 40;
$TempeGoreng = 118;
$UdangGorengBesar = 68.25;

$AbonSapi = 158;
$GulaiAyam = 156.3;
$PerkedelJagung = 180;
$RendangDaging = 285.5;
$SateAyam = 466;
$SambalGorengAti = 127;
$SopSapi = 227;
$TahuGoreng = 111;
$TelurDadar = 188;

$Alpukat = 85;
$Anggur = 60;
$Lengkeng = 79;
$Melon = 46;
$ManggaHarumManis = 90;
$PisangAmbon = 74.2;
$Sirsak = 55;

$DurianMontong = 134;
$Rambutan = 69;
$Sawo = 92;

$BeningBayam = 18;
$SayurAsam = 88;
$SopAyamKombinasi = 95;

$SayurLodeh =61;
$CahKacangPanjang = 72;
$TumisBuncis = 52;

$Apel= 92;
$Belimbing= 80;
$Duku = 81;
$JambuAir = 35.5;
$JambuBiji = 157;
$JerukMedan = 46;
$ManggaManalagi = 72;
$Nanas = 104;
$Pepaya = 46;
$Pir = 80;
$Salak = 63.6;
$Semangka = 48;

 

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
          <form action="hasilkalkulator.php" method="POST">
                <h3>Makanan Pokok Golongan B</h3>
                    <div class="gol-b">
                      <div class="kanan">
                          <table>
                            <tr>
                              <td>Jagung Rebus</td>
                              <td class="padding-left">= 250 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $JagungRebus;?>" /></td>
                            </tr>
                            <tr>
                              <td>Kentang Rebus</td> 
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $KentangRebus;?>" /></td>
                            </tr>
                            <tr>
                              <td>Ketupat</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Ketupat;?>" /></td>
                            </tr>
                            <tr>
                              <td>Lontong</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value= "<?php echo $Lontong;?> " /></td>
                            </tr>
                            <tr>
                              <td>Nasi Putih</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $NasiPutih;?>" /></td>
                            </tr>
                            <tr>
                              <td>Roti Tawar Serat Tinggi</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $RotiTawarSeratTinggi; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Singkong Rebus</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SingkongRebus;?>" /></td>
                            </tr>
                            <tr>
                              <td>Ubi Rebus</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $UbiRebus; ?>" /></td>
                            </tr>
                          
                          </table>
                      </div>
                      <div class="verikal_center"></div>
                      <div class="kiri">
                        <table>
                              <tr>
                                <td>Crakers</td>
                                <td class="padding-left">= 50 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Crakers; ?>" /></td>
                              </tr>
                              <tr>
                                <td>Makaroni</td>
                                <td class="padding-left">= 25 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Makaroni; ?>" /></td>
                              </tr>
                              <tr>
                                <td>Mie Instant</td>
                                <td class="padding-left">= 50 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="<?Php echo $MieInstant; ?>" /></td>
                              </tr>
                              <tr>
                                <td>Nasi Tim</td>
                                <td class="padding-left">= 100 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $NasiTim; ?>" /></td>
                              </tr>
                              <tr>
                                <td>Nasi Uduk</td>
                                <td class="padding-left">= 200 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $NasiUduk; ?>" /></td>
                              </tr>
                              <tr>
                                <td>Roti Tawar</td>
                                <td class="padding-left">= 50 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $RotiTawar;?>" /></td>
                              </tr>

                        </table>

                      </div>
                    </div>
                <h3>Makanan Pokok Golongan C</h3>
                    <div class="table">
                      <table>
                        <tr>
                          <td>Bihun Goreng</td>
                          <td class="padding-left">= 150 gram</td>

                          <?= $BihunGoreng ?> 
                          <?php echo  $BihunGoreng ?>

                          
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $BihunGoreng; ?>" /></td>
                        </tr>
                        
                        <tr>
                          <td>Bubur Ayam</td>
                          <td class="padding-left">= 200 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $BuburAyam; ?>" /></td>
                        </tr>
                        <tr>
                          <td>Bubur Sum-Sum </td>
                          <td class="padding-left">= 100 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $BuburSumsum;?>" /></td>
                        </tr>
                        <tr>
                          <td>Kentang Goreng</td>
                          <td class="padding-left">= 150 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $KentangGoreng; ?>" /></td>
                        </tr>
                        <tr>
                          <td>Mie Goreng</td>
                          <td class="padding-left">= 200 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $MieGoreng; ?>" /></td>
                        </tr>
                        <tr>
                          <td>Nasi Goreng	</td>
                          <td class="padding-left">= 100 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $NasiGoreng; ?>" /></td>
                        </tr>
                        <tr>
                          <td>Soun Goreng</td>
                          <td class="padding-left">= 100 gram</td>
                          <td><input type="checkbox" name="JumlahKalori" value="<?php echo $SounGoreng; ?>" /></td>
                        </tr>
                        <tr>
                          <td>Spaghetti</td>
                          <td class="padding-left">= 300 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Spaghetti;  ?>" /></td>
                        </tr>
                        <tr>
                          <td>Tape singkong</td>
                          <td class="padding-left">= 150 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TapeSingkong; ?>" /></td>
                        </tr>
                        

                      </table>

                    </div>
                  <!-- lauk pauk -->
                <div class="lauk-pauk">
                    <div class="kiri">
                      <h3>Makanan Lauk Pauk Golongan A</h3>
                      <div class="table">
                          <table>
                            <tr>
                              <td>Ayam Panggang</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $AyamPanggang; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Daging Panggang</td>
                              <td class="padding-left">= 70 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $DagingPanggang; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Telur Asin Rebus</td>
                              <td class="padding-left">= 75 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TelurAsinRebus; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Telur Ayam Rebus</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TelurAyamRebus;?>" /></td>
                            </tr>
                          </table>
                      </div>
                    </div>
                    <div class="g-lauk-pauk"></div>
                    <div class="kanan">
                 <h3>Makanan Lauk Pauk Golongan B</h3>
                    <div class="table">
                          <table>
                            <tr>
                              <td>Ati Ayam Goreng</td>
                              <td class="padding-left">= 50 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $AtiAyamGoreng; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Ayam Pop</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $AyamPop; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Bakso Daging Sapi</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $BaksoDagingSapi; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Empal Daging</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $EmpalDaging; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Ikan Bandeng Goreng</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $IkanBandengGoreng; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Ikan Kembung Goreng</td>
                              <td class="padding-left">= 80 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $IkanKembungGoreng; ?>" /></td>
                            </tr>

                            <tr>
                              <td>Ikan Lele Goreng</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $IkanLeleGoreng; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Ikan Teri Goreng</td>
                              <td class="padding-left">= 50 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $IkanTeriGoreng; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Kerang Rebus</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $KerangRebus; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Telur Mata Sapi</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TelurMataSapi; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Tempe Goreng</td>
                              <td class="padding-left">= 50 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TempeGoreng; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Udang Goreng Besar</td>
                              <td class="padding-left">= 80 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $UdangGorengBesar; ?>" /></td>
                            </tr>

                          </table>
                      </div>
                    </div>
                 </div>
                 <h3> Makanan Lauk Pauk Golongan C</h3>
                  <div class="table">
                        <table>
                          <tr>
                            <td>Abon Sapi</td>
                            <td class="padding-left">= 50 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $AbonSapi; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Gulai Ayam</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $GulaiAyam; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Perkedel Jagung</td>
                            <td class="padding-left">= 50 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $PerkedelJagung; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Perkedel Kentang</td>
                            <td class="padding-left">= 50 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $PerkedelJagung; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Rendang Daging</td>
                            <td class="padding-left">= 75 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $RendangDaging; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Sate Ayam</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SateAyam; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Sambal Goreng Ati</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SambalGorengAti; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Sop Sapi</td>
                            <td class="padding-left">= 250 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SopSapi; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Tahu Goreng</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php  $TahuGoreng; ?>" /></td>
                          </tr>
                          <tr>
                            <td>Telur Dadar</td>
                            <td class="padding-left">= 75 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TelurDadar; ; ?>" /></td>
                          </tr>
                        </table>
                  </div>
                  <!-- selesai lauk pauk -->
                <!-- buah -->
                <div class="gol-buah">
                    <div class="kanan">
                      <h3>Buah-Buahan Golongan A</h3>
                      <div class="table">
                          <table>
                            <tr>
                              <td>Apel</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Apel; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Belimbing</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Belimbing; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Duku</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Duku;?>" /></td>
                            </tr>
                            <tr>
                              <td>Jambu Air</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $JambuAir; ?>" /></td>
                            </tr>
                            <tr>
                              <td>jambu Biji</td>
                              <td class="padding-left">= 320 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $JambuBiji; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Jeruk Medan</td>
                              <td class="padding-left">= 140 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $JerukMedan; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Mangga Manalagi</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $ManggaManalagi; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Nanas</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Nanas; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Pepaya</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Pepaya; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Pir</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Pir; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Salak</td>
                              <td class="padding-left">= 150 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Salak; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Semangka</td>
                              <td class="padding-left">= 150 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Semangka; ?>" /></td>
                            </tr>
                          </table>
                      </div>
                    </div>
                    <div class="g-buah"></div>
                    <div class="kiri">
                      <h3>Buah – Buahan Golongan B</h3>
                        <div class="table">
                          <table>
                            <tr>
                              <td>Alpukat</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Alpukat; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Anggur</td>
                              <td class="padding-left">= 125 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Anggur; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Lengkeng</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Lengkeng; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Melon</td>
                              <td class="padding-left">= 120 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Melon; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Mangga Harum Manis</td>
                              <td class="padding-left">= 300 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $ManggaHarumManis; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Pisang Ambon</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $PisangAmbon; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Sirsak</td>
                              <td class="padding-left">= 125 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Sirsak; ?>" /></td>
                            </tr>
                          </table>
                        </div>
                    </div>
                </div>
                <!-- selesai buah -->
                <h3>Buah – Buahan Golongan C</h3>
                  <div class="table">
                    <table>
                      <tr>
                        <td>Durian Montong</td>
                        <td class="padding-left">= 100 gram</td>
                        <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $DurianMontong; ?>" /></td>
                      </tr>
                      <tr>
                        <td>Rambutan</td>
                        <td class="padding-left">= 100 gram</td>
                        <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Rambutan; ?>" /></td>
                      </tr>
                      <tr>
                        <td>Sawo</td>
                        <td class="padding-left">= 100 gram</td>
                        <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $Sawo; ?>" /></td>
                      </tr>
                    </table>
                  </div>
                <div class="gol-sayur">
                  <div class="kanan">
                    <h3>Sayuran Golongan A</h3>
                      <div class="table">
                        <table>
                          <tr>
                            <td>Bening Bayam</td>
                            <td class="padding-left">= 50 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $BeningBayam;  ?>" /></td>
                          </tr>
                          <tr>
                            <td>Sayur Asam</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SayurAsam;  ?>" /></td>
                          </tr>
                          <tr>
                            <td>Sop Ayam Kombinasi</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SopAyamKombinasi; ?>" /></td>
                          </tr>
                        </table>
                      </div>
                  </div>
                  <div class="g-sayur"></div>
                  <div class="kiri">
                    <h3>Sayuran Golongan B</h3>
                      <div class="table">
                          <table>
                            <tr>
                              <td>Sayur Lodeh</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $SayurLodeh; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Cah Kacang Panjang</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $CahKacangPanjang; ?>" /></td>
                            </tr>
                            <tr>
                              <td>Tumis Buncis</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="<?php echo $TumisBuncis; ?>" /></td>
                            </tr>
                          </table>
                      </div>
                  </div>
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
