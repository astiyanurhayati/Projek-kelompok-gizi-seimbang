<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan</title>
</head>
<body>
Pilih Jenis Kelamin: <br>
<p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
<p><input type='radio' name='jenis_kelamin' value='wanita' />Wanita</p>



<form method="post" action="">
    <label> Berat Badan</label> 
    <input type="number" name="berat"> <br><br>
`
    <label> Tinggi Badan</label>
    <input type="number" name="tinggi"> <br><br>


    <label>Usia</label>
    <input type="number" name="usia">
<br><br>
    
    <input type="submit" name="daftar" value="submit">


</form>
    
</body>
</html>
<?php
@$Berat = $_POST ['berat'];
@$Tinggi = $_POST ['tinggi'];
@$Usia = $_POST ['usia'];


//jenis kelamin

@$Jenis_Kelamin = $_POST['jenis_kelamin'];



   
    
    if(isset($_POST['daftar'])){
        
        if($Jenis_Kelamin == 'pria'){
            $brmpria = (88.4 + 13.4 * $Berat) + (4.8 * $Tinggi) - (5.68 * $Usia);
            echo $brmpria;
        }else{
            $brmwanita = (447.6 + 9.25 * $Berat) + (3.10 * $Tinggi) - (4.33 * $Usia);
            echo $brmwanita;
        }

   
    }
    





?>