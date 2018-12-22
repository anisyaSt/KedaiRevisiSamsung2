<?php
session_start();
 
if(!isset($_SESSION['namabarang'])){
    
    die("Anda belum register atau mendaftarkan session");
}else{
	$barang=$_SESSION['namabarang'];
}
?>
<head>
	<link rel="stylesheet" type="text/css" href="berhasil.css">
</head>


<?php
   require_once("koneksi.php");
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $email = $_POST['email'];
   $no_hp = $_POST['no_hp'];
   $no_ktp = $_POST['no_ktp'];
   $barang = $_POST['barang'];
   $jenis_kelamin = $_POST['jenis_kelamin'];
   $sql = "SELECT * FROM pemesanan WHERE nama = '$nama'";
   $query = mysqli_query($db,$sql); //$db->query($sql)
    if(!$nama || !$alamat || !$no_hp || !$no_ktp || !$jenis_kelamin || !$email || !$barang) {
		echo "<script>alert('Masih ada data yang kosong!');history.go(-1)</script>";
    }else{
		$data = "INSERT INTO pemesanan VALUES (NULL, '$nama', '$jenis_kelamin', '$email', '$alamat', '$no_hp', '$no_ktp', '$barang')";
		$simpan = $db->query($data);
		if($simpan) {
			echo " ";
		}else{
			echo "<div align='center'>Proses Gagal!</div>";
		}
    }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kedai Smartphone</title>
    <link rel="stylesheet" href="new1.css">
  </head>
  <body>
     <div class="container">

		<div class="navbar">
        <a href="index.html"><img src="images/logokedai.png" alt="" width="136" height="46"></a>

        <div class="dropdown">
          <div class="zxc">
          <button class="dropbtn">PRODUK
		</div>
			<i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="product.html">-Semua Produk-</a>
            <a href="produksamsunghome.html">SAMSUNG</a>
            <a href="produkapplehome.html">APPLE</a>
          </div>
        </div>
		<div class="about1">
			<a href="cari.php" style="padding-top:24px; padding-bottom:24px">KONFIRMASI</a>
			<a href="kritik.php" style="padding-top:24px; padding-bottom:24px">KRITIK & SARAN</a>
		</div>
        <div class="about">

          <a href="about.html" style="padding-top:24px; padding-bottom:24px">TENTANG</a>
         
        </div>
        </div>
<body>




   <center>
	<h1 align=center>Selamat <br> Pembelian Anda Berhasil</h1>
	<img src="images/berhasil.png" width="15%">
          <p align=center>-= GRATIS ONGKIR KE SELURUH INDONESIA =-</p>
		  <br>
		  <br>
		  <hr>
		  <p align=center>SILAHKAN SELESAIKAN PEMBAYARAN DENGAN MELAKUKAN TRANSFER KE SALAH SATU REKENING KAMI DI BAWAH INI</p>
		  <hr>
		  <br>
		  <img src="images/mandiri.png" width="30%" >
		  <h2>
			a.n Kedai Smartphone
		  <br>(008) 12345654321
		  </h2>
		  
		  <br>
		  <br>
		  <br>
		  <img src="images/bri.png" width="30%" >
		  <h2>
			a.n Kedai Smartphone
		  <br>(002) 567891234
		  </h2>
		  
		  <br>
		  <br>
		  <br>
		  <img src="images/bca.png" width="30%" >
		  <h2>
			a.n Kedai Smartphone
		  <br>(014) 98765432123
		  </h2>
		  <br>
		  
          <hr></hr>

          <h2 align=center>Ingin melihat produk kami ? Klik   <a href="index.html"><button class="button"><font color=black>BERANDA</font></button></a></h2>
</center>
<div class="partner">
  <table border = "0" width = "100%" bgcolor = "" align ="center" style="height:294px;">
    <tr  valign = "top">
      <td width="350" align = "left"> <font face = "arial" size = "4" color="white"> <br>JASA PENGIRIMAN<br>
        <table align="left" width="300">
          <tr>
            <td align="left" style="width:40px"><img src="images/jne.png" width="120px" height="70px"></td>
            <td align="left" style="width:40px"><img src="images/pos.png" width="120px" height="70px"></td>
          </tr>
          <tr>
            <td align="left" style="width:40px"><img src="images/sicepat.png" width="120px" height="70px"></td>
            <td align="left" style="width:40px"><img src="images/tiki.png" width="120px" height="70px"></td>
          </tr>
        </table>
      </td>


      <td width="350"> <font face = "arial" size = "4" color="white"> <br>CUSTOMER SERVICE<br>
        <table align="left" width="300">
          <tr>
            <td align="left" style="width:70px"> <img src="images/jam.png" width="40px" height="40px">
              <font face = "arial" size="3"> Buka Jam 10.00 - 21.00 WIB </font>
              </img>
            </td>
          </tr>
          <tr>
            <td align="left" style="width:70px"><img src="images/wa.png" width="40px" height="40px">
              <font face = "arial" size="3"> 08997834127 </font>
            </img>
            </td>
          </tr>
          <tr>
            <td align="left" style="width:70px"><img src="images/Line.png" width="40px" height="40px">
              <font face = "arial" size="3"> @kedai.smartphone </font>
              </img>
            </td>
          </tr>
          <tr>
            <td align="left" style="width:70px"><img src="images/gmail.png" width="50px" height="30px">
              <font face = "arial" size="3"> kedai.smartphone@gmail.com </font>
              </img>
            </td>
          </tr>
        </table>
      </td>

      <td width="350"> <font face = "arial" size="4" color="white"> <br>LOKASI<br>  </font>
        <font face = "arial" size="3" color="white">
        Jalan Gajah Timur Dalam 1 no.9F <br>
        (Dekat Lotte Mart Swalayan) <br>
        Kelurahan Gayamsari, Kecamatan Gayamsari <br>
        Kota Semarang, Jawa Tengah <br>
        </font>
      </td>
    </tr>
  </table>
</div>
<br>
<div class="footer">
  <h5 align= "center"><font face = "arial">Copyright @KedaiSmartphone.com 2018 <br> All Right Reserved </font></h5>
</div>

</div>
  </body>
</html>

</body>