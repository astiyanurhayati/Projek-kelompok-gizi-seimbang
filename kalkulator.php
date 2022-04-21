
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
            <p>Ini adalah kalkulator kalori dimana kamu bisa menghitung kalori yang sssakan atau telah dikonsumsi. Caranya adalah dengan memilih makanan yang akan atau telah kamu konsumsi kemudian tekan tombol Lanjut ke Hasil</p>
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
                              <td><input type="checkbox" name="JumlahKalori[]" value="0"/> </td>
                            </tr>
                            <tr>
                              <td>Kentang Rebus</td> 
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="1" /></td>
                            </tr>
                            <tr>
                              <td>Ketupat</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="2" /></td>
                            </tr>
                            <tr>
                              <td>Lontong</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value= "3" /></td>
                            </tr>
                            <tr>
                              <td>Nasi Putih</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="4" /></td>
                            </tr>
                            <tr>
                              <td>Roti Tawar Serat Tinggi</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="5" /></td>
                            </tr>
                            <tr>
                              <td>Singkong Rebus</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="6" /></td>
                            </tr>
                            <tr>
                              <td>Ubi Rebus</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="7" /></td>
                            </tr>
                          
                          </table>
                      </div>
                      <div class="verikal_center"></div>
                      <div class="kiri">
                        <table>
                              <tr>
                                <td>Crakers</td>
                                <td class="padding-left">= 50 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="8" /></td>
                              </tr>
                              <tr>
                                <td>Makaroni</td>
                                <td class="padding-left">= 25 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="9" /></td>
                              </tr>
                              <tr>
                                <td>Mie Instant</td>
                                <td class="padding-left">= 50 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="10" /></td>
                              </tr>
                              <tr>
                                <td>Nasi Tim</td>
                                <td class="padding-left">= 100 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="11" /></td>
                              </tr>
                              <tr>
                                <td>Nasi Uduk</td>
                                <td class="padding-left">= 200 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="12" /></td>
                              </tr>
                              <tr>
                                <td>Roti Tawar</td>
                                <td class="padding-left">= 50 gram</td>
                                <td><input type="checkbox" name="JumlahKalori[]" value="13" /></td>
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
                          <td><input type="checkbox" name="JumlahKalori[]" value="14" /></td>
                        </tr>
                        
                        <tr>
                          <td>Bubur Ayam</td>
                          <td class="padding-left">= 200 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="15"/></td>
                        </tr>
                        <tr>
                          <td>Bubur Sum-Sum </td>
                          <td class="padding-left">= 100 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="16" /></td>
                        </tr>
                        <tr>
                          <td>Kentang Goreng</td>
                          <td class="padding-left">= 150 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="17" /></td>
                        </tr>
                        <tr>
                          <td>Mie Goreng</td>
                          <td class="padding-left">= 200 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="18" /></td>
                        </tr>
                        <tr>
                          <td>Nasi Goreng	</td>
                          <td class="padding-left">= 100 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="19" /></td>
                        </tr>
                        <tr>
                          <td>Soun Goreng</td>
                          <td class="padding-left">= 100 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="20" /></td>
                        </tr>
                        <tr>
                          <td>Spaghetti</td>
                          <td class="padding-left">= 300 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="21" /></td>
                        </tr>
                        <tr>
                          <td>Tape singkong</td>
                          <td class="padding-left">= 150 gram</td>
                          <td><input type="checkbox" name="JumlahKalori[]" value="22" /></td>
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
                              <td><input type="checkbox" name="JumlahKalori[]" value="23" /></td>
                            </tr>
                            <tr>
                              <td>Daging Panggang</td>
                              <td class="padding-left">= 70 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="24" /></td>
                            </tr>
                            <tr>
                              <td>Telur Asin Rebus</td>
                              <td class="padding-left">= 75 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="25" /></td>
                            </tr>
                            <tr>
                              <td>Telur Ayam Rebus</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="26" /></td>
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
                              <td><input type="checkbox" name="JumlahKalori[]" value="27" /></td>
                            </tr>
                            <tr>
                              <td>Ayam Pop</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="28"/></td>
                            </tr>
                            <tr>
                              <td>Bakso Daging Sapi</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="29" /></td>
                            </tr>
                            <tr>
                              <td>Empal Daging</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="30" /></td>
                            </tr>
                            <tr>
                              <td>Ikan Bandeng Goreng</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="31" /></td>
                            </tr>
                            <tr>
                              <td>Ikan Kembung Goreng</td>
                              <td class="padding-left">= 80 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="32" /></td>
                            </tr>

                            <tr>
                              <td>Ikan Lele Goreng</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="33" /></td>
                            </tr>
                            <tr>
                              <td>Ikan Teri Goreng</td>
                              <td class="padding-left">= 50 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="34" /></td>
                            </tr>
                            <tr>
                              <td>Kerang Rebus</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="35" /></td>
                            </tr>
                            <tr>
                              <td>Telur Mata Sapi</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="36" /></td>
                            </tr>
                            <tr>
                              <td>Tempe Goreng</td>
                              <td class="padding-left">= 50 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="37" /></td>
                            </tr>
                            <tr>
                              <td>Udang Goreng Besar</td>
                              <td class="padding-left">= 80 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="38" /></td>
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
                            <td><input type="checkbox" name="JumlahKalori[]" value="39" /></td>
                          </tr>
                          <tr>
                            <td>Gulai Ayam</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="40" /></td>
                          </tr>
                          <tr>
                            <td>Perkedel Jagung</td>
                            <td class="padding-left">= 50 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="41" /></td>
                          </tr>
                          <tr>
                            <td>Perkedel Kentang</td>
                            <td class="padding-left">= 50 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="42" /></td>
                          </tr>
                          <tr>
                            <td>Rendang Daging</td>
                            <td class="padding-left">= 75 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="43" /></td>
                          </tr>
                          <tr>
                            <td>Sate Ayam</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="44" /></td>
                          </tr>
                          <tr>
                            <td>Sambal Goreng Ati</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="45" /></td>
                          </tr>
                          <tr>
                            <td>Sop Sapi</td>
                            <td class="padding-left">= 250 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="46"/></td>
                          </tr>
                          <tr>
                            <td>Tahu Goreng</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="47" /></td>
                          </tr>
                          <tr>
                            <td>Telur Dadar</td>
                            <td class="padding-left">= 75 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="48" /></td>
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
                              <td><input type="checkbox" name="JumlahKalori[]" value="49"/><td>
                            </tr>
                            <tr>
                              <td>Belimbing</td>
                              <td class="padding-left">= 160 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="50" /></td>
                            </tr>
                            <tr>
                              <td>Duku</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="51"/><td>
                            </tr>
                            <tr>
                              <td>Jambu Air</td>
                              <td class="padding-left">= 60 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="52" /></td>
                            </tr>
                            <tr>
                              <td>jambu Biji</td>
                              <td class="padding-left">= 320 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="53" /></td>
                            </tr>
                            <tr>
                              <td>Jeruk Medan</td>
                              <td class="padding-left">= 140 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="54" /></td>
                            </tr>
                            <tr>
                              <td>Mangga Manalagi</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="55" /></td>
                            </tr>
                            <tr>
                              <td>Nanas</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="56"/></td>
                            </tr>
                            <tr>
                              <td>Pepaya</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="57"></td>
                            </tr>
                            <tr>
                              <td>Pir</td>
                              <td class="padding-left">= 200 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="58"/><td>
                            </tr>
                            <tr>
                              <td>Salak</td>
                              <td class="padding-left">= 150 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="59"></td>
                            </tr>
                            <tr>
                              <td>Semangka</td>
                              <td class="padding-left">= 150 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="60" /></td>
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
                              <td><input type="checkbox" name="JumlahKalori[]" value="61"/></td>
                            </tr>
                            <tr>
                              <td>Anggur</td>
                              <td class="padding-left">= 125 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="62"></td>
                            </tr>
                            <tr>
                              <td>Lengkeng</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="63" /></td>
                            </tr>
                            <tr>
                              <td>Melon</td>
                              <td class="padding-left">= 120 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="64"/></td>
                            </tr>
                            <tr>
                              <td>Mangga Harum Manis</td>
                              <td class="padding-left">= 300 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="65" /></td>
                            </tr>
                            <tr>
                              <td>Pisang Ambon</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="66" /></td>
                            </tr>
                            <tr>
                              <td>Sirsak</td>
                              <td class="padding-left">= 125 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="67"></td>
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
                        <td><input type="checkbox" name="JumlahKalori[]" value="68" /></td>
                      </tr>
                      <tr>
                        <td>Rambutan</td>
                        <td class="padding-left">= 100 gram</td>
                        <td><input type="checkbox" name="JumlahKalori[]" value="69"/></td>
                      </tr>
                      <tr>
                        <td>Sawo</td>
                        <td class="padding-left">= 100 gram</td>
                        <td><input type="checkbox" name="JumlahKalori[]" value="70"/></td>
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
                            <td><input type="checkbox" name="JumlahKalori[]" value="71" /></td>
                          </tr>
                          <tr>
                            <td>Sayur Asam</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="72" /></td>
                          </tr>
                          <tr>
                            <td>Sop Ayam Kombinasi</td>
                            <td class="padding-left">= 100 gram</td>
                            <td><input type="checkbox" name="JumlahKalori[]" value="73" /></td>
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
                              <td><input type="checkbox" name="JumlahKalori[]" value="74" /></td>
                            </tr>
                            <tr>
                              <td>Cah Kacang Panjang</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="75" /></td>
                            </tr>
                            <tr>
                              <td>Tumis Buncis</td>
                              <td class="padding-left">= 100 gram</td>
                              <td><input type="checkbox" name="JumlahKalori[]" value="76" /></td>
                            </tr>
                          </table>
                      </div>
                  </div>
                </div>
                <div class="btn-hasil">
                      <input type="submit" name="submit" value="Liat Hasil" />
                    </div>
          </form>
    </main>

    <footer>
      <h3>© 2022 kelompok 7</h3>
    </footer>
  </body>
</html>
