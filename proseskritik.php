<?php
   require_once("koneksi.php");
   $kritik = $_POST['kritik'];
   $sql = "SELECT * FROM kritik WHERE kritik = '$kritik'";
   $query = mysqli_query($db,$sql); //$db->query($sql)
    if(!$kritik) {
		echo "<script>alert('Data keluhan masih kosong');history.go(-1)</script>";
    }else{
		$data = "INSERT INTO kritik VALUES (NULL, '$kritik')";
		$simpan = $db->query($data);
		if($simpan) {
			echo "<div align='center'> </div>";
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
		<link rel="stylesheet" href="indexcari.css">
  </head>

  <body>
	<div class="container">
		<div class="navbar">
			<a href="index.html" style="padding-bottom:11px;"><img src="images/logokedai.png" alt="" width="136" height="46"></a>

			<div class="dropdown">
				<div class="zxc">
          <div class="dropbtn" style="padding-top:24px; padding-bottom:24px">Produk
		</div>
			<i class="fa fa-caret-down"></i>
          </div>
				<div class="dropdown-content">
					<a href="product.html">-Semua Produk-</a>
					<a href="produksamsunghome.html">SAMSUNG</a>
					<a href="produkapplehome.html">APPLE</a>
				</div>
			</div>
		<div class="about1">
			<a href="cari.php" style="padding-top:24px; padding-bottom:24px">Konfirmasi</a>
			<a href="kritik.php" style="padding-top:24px; padding-bottom:24px">Kritik & Saran</a>
		</div>
        <div class="about">
      <a href="about.html" style="padding-top:24px; padding-bottom:24px">Tentang</a>
      <a href="login.php" style="padding-top:24px; padding-bottom:24px">LOGIN</a>
      
        </div>
        </div>

    <br>
    <br>
    <div class="jbody">
      <font face="Arial">
      <b>KEDAI SMARTPHONE</b></font> <br>
    </div>
	<center>
	</br>
	</br>
	<img src="images/berhasil.png" width="20%">
	<h2>TERIMA KASIH ATAS MASUKKAN DAN KELUHAN ANDA<br></h2>
	</center>
	</br>
	</br>
</br>	
</br>	
</br>	
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
