<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=data-transaksi.doc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kwitansi Pembayaran SPP SMK AL IHSAN</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
     h2 {
        text-transform: uppercase;
        color: salmon;
      }
    h3 {
        text-transform: uppercase;
        color: salmon;
      }
    h4 {
        text-transform: uppercase;
        color:#999999;
      }
     h5 {
        text-transform: uppercase;
        color:#999999;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
  
  input {
          background-color: #ffff;
      
           border: solid 1px salmon;
          padding: 10px;
          text-decoration:none;
          font-size: 12px;
    }
  button {
      width:auto;
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
      
    }
    </style>
</head>

<body>
 <?php
  // memanggil file koneksi.php untuk membuat koneksi


  // mengecek apakah di url ada nilai GET id
  if (isset($_POST['id_kelas'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_kelas = ($_POST['id_kelas']);
 $tahun_masuk = ($_POST['tahun']);
 
 ?>
<p align="center">DATA SISWA </p>
<p align="center">SMK AL IHSAN</p>
<p align="center">DATA SISWA KELAS <?php echo $id_kelas ;?> TAHUN AJARAN <?php echo $tahun_masuk;?></p>
<p>&nbsp;</p>


  <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NISN</th>
          <th>Nama</th>
           <th>Kelas</th>
           <th>Alamat</th>
          <th>No Telp</th>
            <th>Tahun Masuk</th>
          
    </thead>
  
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM siswa,kelas,spp WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND kelas.id_kelas='$id_kelas' AND spp.id_spp='$tahun_masuk'";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nisn']; ?></td>
          <td><?php echo $row['nis']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['id_kelas']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['no_telp']; ?></td>
          
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
    }
      ?>
    </tbody>
    </table>
</body>
</html>
