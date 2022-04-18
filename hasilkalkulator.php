

<?php
 //Problem: cara agar saat user memilih beberapa checkbox tersebut, dan saat di submit hasilnya akan menjumlahkan semua total kalori dari makanan yang telah di pilih, lalu menampilkan apa saja makanan yang sudah di pilih tersebut. 
 if(isset($_POST['hitung'])){

                        // include("database.php");
                        // $conn = mysqli_connect("localhost", "root", "", "kalkulator_db");
                        // $sql="select * from makanan";
                        // $hasil=mysqli_query($conn,$sql);
                        //             $no=0;
                        //             while ($data = mysqli_fetch_array($hasil)) {
                        //             $no++;

                        //             $ket="";
                        //             if (isset($_POST['makanan'])) {
                        //                 $jurusan = trim($_POST['makanan']);

                        //                 if ($jurusan==$data['nama'])
                        //                 {
                        //                     $ket="selected";
                        //                 }
                        //             }
                        //           }
                            


  $JumlahKalori = 0;
  if(!empty($_POST['JumlahKalori'])) {

      foreach($_POST['JumlahKalori'] as $x => $kalori){
        // echo $x;  
        $JumlahKalori +=  $kalori;
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
      <h3><?php echo $ket;?></h3>
      <div class="btn">
        <a href="kalkulator.php"> BACK </a>
      </div>
    </main>
  </body>
</html>
