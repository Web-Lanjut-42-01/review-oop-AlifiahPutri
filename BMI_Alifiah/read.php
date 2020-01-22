<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <h2>Hasil</h2>
    <?php
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
     ?>
     <table>
       <tr>
         <td>Nama</td>
         <td>:</td>
         <td><?= $nama ?></td>
       </tr>
       <tr>
         <td>Umur</td>
         <td>:</td>
         <td><?= $umur ?></td>
       </tr>
       <tr>
         <td>Jenis Kelamin</td>
         <td>:</td>
         <td><?= $gender ?></td>
       </tr>
       <tr>
         <td>Berat Badan</td>
         <td>:</td>
         <td><?= $berat ?></td>
       </tr>
       <tr>
         <td>Tinggi Badan</td>
         <td>:</td>
         <td><?= $tinggi ?></td>
       </tr>
     </table>
     <?php
    $input = new hitung();
    $input->bmi($gender,$berat,$tinggi);
     ?>
   </center>
  </body>
</html>
<?php
class hitung{
  public function bmi($gender,$berat,$tinggi)
  {
    $itung = $berat/($tinggi*$tinggi/10000);
    echo "BMI : ".number_format($itung);
    if ($gender=="Laki-Laki") {
     if ($itung<17) {
       echo "<br>Keterangan : Under Weight/Kurus";
     } elseif ($itung>=17 && $itung<=25) {
       echo "<br>Keterangan : Normal Weight/Normal";
     } elseif ($itung>25 && $itung<=27) {
       echo "<br>Keterangan : Over Weight/Kegemukan";
     } elseif ($itung>27) {
       echo "<br>Keterangan : Obesitas";
     }
   } elseif ($gender=="Perempuan") {
     if ($itung<18) {
       echo"<br>Keterangan : Under Weight/Kurus";
     } elseif ($itung>=18 && $itung<=25) {
       echo "<br>Keterangan : Normal Weight/Normal";
     } elseif ($itung>25 && $itung<=27) {
       echo "<br>Keterangan : Over Weight/Kegemukan";
     } elseif ($itung>27) {
       echo "<br>Keterangan : Obesitas";
     }
   }
  }
}
 ?>
