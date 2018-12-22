<?php
session_start();

if(!isset($_SESSION['namabarang'])){

    die("Anda belum register atau mendaftarkan session");
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


<br>
<br>

<div class="login-card">
<form action="prosespemesanan.php" method="post">
<center><h1>Formulir Pembelian</h1><br></center>
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
  <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</td>
</tr>
<tr>
  <td><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td>
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
  <td>Alamat : </td>
</tr>
<tr>
  <td><input name="alamat" type="text" style="width:340px" placeholder="Alamat Anda"></td>
</tr>
<tr>
  <td>No KTP : </td>
</tr>
<tr>
  <td><input name="no_hp" type="text" style="width:340px" placeholder="Nomor KTP"></td>
</tr>
<tr>
  <td>No HP : </td>
</tr>
<tr>
  <td><input name="no_ktp" type="text" style="width:340px" placeholder="Nomor Handphone"></td>
</tr>
  Verifikasi Pembelian : </br>
  <input type="checkbox" name="barang" value="<?php echo $_SESSION['namabarang']; ?>"><?php echo $_SESSION['namabarang']; ?>
</tbody>
</table>
</br>

<center>
<button class="button" value="BELI" type="submit">BELI</button>
<br>
<br>
<a href="product.html"><input name="cancel" value="BATAL" type="button" class="button1"></a></input>
</center>
</br></br>

</form>
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
