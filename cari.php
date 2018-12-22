<?php
//memasukkan file koneksi
include 'koneksi.php';
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
        </div>
        </div>

    <br>
    <br>
    <div class="jbody">
      <font face="Arial">
      <b>KEDAI SMARTPHONE</b></font> <br>
    </div>
 <div class="login-card">
 <center>
	<h2>Konfirmasi Pemesanan</h2>
	<form action="" method="post">
		<input type="text" name="no_ktp" placeholder="Masukkan Nomor Handphone" />
		<input type="submit" class="button" name="submit" value="Cari">
	</form>
</center>
</div>
	<?php
	//jika tombol Cari di klik akan menjalankan script berikutnya
	if(isset($_POST['submit'])){
		//membuat variabel $no_ktp yang menyimpan data dari inputan Nomor KTP
		$no_ktp = $db->real_escape_string(htmlentities(trim($_POST['no_ktp'])));
		
		//cek apakah Nomor KTP kurang dari 3 karakter
		if(strlen($no_ktp)<3){
			//pesan error jika Nomor KTP kurang dari 3 karakter
			echo '<p>Nomor KTP terlalu pendek.</p>';
		}else{
			//membuat variabel $where dengan nilai kosong
			$where = "";
			
			//membuat variabel $no_ktp_split untuk memecah Nomor KTP setiap ada spasi
			$no_ktp_split = preg_split('/[\s]+/', $no_ktp);
			//menghitung jumlah Nomor KTP dari split di atas
			$total_no_ktp = count($no_ktp_split);
			
			//melakukan perulangan sebanyak Nomor KTP yang di masukkan
			foreach($no_ktp_split as $key=>$kunci){
				//set variabel $where untuk query nanti
				$where .= "no_ktp LIKE '%$kunci%'";
				//jika Nomor KTP lebih dari 1 (2 dan seterusnya) maka di tambahkan OR di perulangannya
				if($key != ($total_no_ktp - 1)){
					$where .= " OR ";
				}
			}
			
			//melakukan query ke database dengan SELECT, dan dimana WHERE ini mengambil dari $where
			$results = $db->query("SELECT * FROM pemesanan WHERE $where");
			//menghitung jumlah hasil query di atas
			$num = $results->num_rows;
			//jika tidak ada hasil
			if($num == 0){
				//pesan jika tidak ada hasil
				echo '<p>Pencarian dengan Nomor Handphone <b>'.$no_ktp.'</b> tidak ada hasil.</p>';
			}else{
				//pesan jika ada hasil pencarian
				echo '<p>Pencarian dari Nomor Handphone <b>'.$no_ktp.'</b> mendapatkan '.$num.' hasil:</p>';
				//perulangan untuk menampilkan data
				while($row = $results->fetch_assoc()){
					//menampilkan data
			echo"<center>";
			echo"<table>";
			echo "<tr>";
			echo "<td>&nbsp;</td>";
            echo "</tr>";
			echo "<tr>";
            echo "<td>Pemesan</td>";
            echo "<td>: ".$row['nama']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Jenis Kelamin</td>";
            echo "<td>: ".$row['jenis_kelamin']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>E-mail</td>";
            echo "<td>: ".$row['email']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Alamat</td>";
            echo "<td>: ".$row['alamat']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Nomor Handphone</td>";
            echo "<td>: ".$row['no_hp']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Nomor KTP</td>";
            echo "<td>: ".$row['no_ktp']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Barang yang di pesan</td>";
            echo "<td>: ".$row['barang']."</td>";
			echo "</tr>";
			
            echo "<tr>";
			echo "<td>&nbsp;</td>";
            echo "</tr>";
			echo"</table>";
			echo "*Ketika barang sudah di konfirmasi, Pesanan Anda telah selesai dan akan dihapus dari pemesanan";
			echo "</br>";
			echo "</br>";
            echo "<a href='konfirmasi.php?id=".$row['id']."'><button>Konfirmasi</button></a>"; 
			echo"<center>";
				}
			}
		}
	}
	?>
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
