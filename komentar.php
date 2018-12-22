<!--<?php
//memasukkan file koneksi
//include 'koneksi.php';
//?> -->


<?php
   require_once("koneksi.php");
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $komentar = $_POST['komentar'];
   $sql = "SELECT * FROM komentar WHERE nama = '$nama'";
   $query = mysqli_query($db,$sql); //$db->query($sql)
    if(!$nama || !$email || !$komentar) {
		echo "<script>alert('Masih ada data yang kosong!');history.go(-1)</script>";
    }else{
		$data = "INSERT INTO komentar VALUES (NULL, '$nama', '$email', '$komentar')";
		$simpan = $db->query($data);
		if($simpan) {
			echo " ";
		}else{
			echo "<div align='center'>Proses Gagal!</div>";
		}
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<title>Kedai Smartphone</title>
		<link rel="stylesheet" href="new1.css">
  </head>

  <body>
	<div class="container">
		<div class="navbar">
			<a href="index.html" style="padding-bottom:11px;"><img src="images/logokedai.png" alt="" width="136" height="46"></a>

      


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

    <br>
    <br>
  
<div class="login-card">
<form action="komentar.php" method="post">
<center><h1>Berikan Penilaian Anda</h1><br></center>
<table>
<tbody>
<tr><td colspan="2" align="center"></td></tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>Nama : </td>
</tr>
<tr>
  <td><input name="nama" type="text" style="width:340px" placeholder="Nama Anda"></td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>E-mail : </td>
</tr>
<tr>
  <td><input name="email" type="text" style="width:340px" placeholder="E-mail Anda"></td>
</tr>
<tr>
  <td>Komentar : </td>
</tr>
<tr>
  <td>
	<textarea rows="10" cols="47" input name="komentar" input type="text" placeholder="Komentar Anda"></textarea>
  </td>
</tr>
</tbody>
</table>
</br>

<center>
<button class="button" value="SUBMIT" type="submit">KIRIM</button>
<br>
<br>
<a href="index.html"><input name="cancel" value="BATAL" type="button" class="button1"></a></input>
</center>
</br></br>
</div>



<div class="viewkomentar">
	<h1 style="color:blue">Semua Komentar</h1>
	<?php
	include 'koneksi.php';
        $result = mysqli_query($db, "SELECT * FROM komentar ORDER BY id DESC");
		$no=1;
        while($row = mysqli_fetch_array($result)){
            echo "<font color =blue><h4>" . $row['nama'] . "</h4></font>" . $row['email'] . " <p style='text-align:justify'>" . $row['komentar'] . "</p>" . "<br />";
			echo "<br/>";
			$no++;
        }
  ?>
  </div>




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
</html>













