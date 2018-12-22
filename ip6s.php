<?php
session_start();
$_SESSION['namabarang'] = "IPHONE 6s - Rp 4.300.000,-";//session yang akan didaftarkan
//atau disimpan pada server
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kedai Smartphone</title>
    <link rel="stylesheet" href="coba.css">
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
    <button onclick="topFunction()" id="myBtn" title="Go to top">KE ATAS</button>


    <table width="90%" align=center >
      <tr>
        <td>
        <div class="gambarr">
          <div class="gambarhp">
         <img id="myImg" src="produk/ip6s/apple-iphone-6s1.jpg" height="300px"> <br>
					</div>
					<div id="myModal" class="modal">
						<span class="close">&times;</span>
							<img class="modal-content" id="img01">
						<div id="caption"></div>
					</div>
          <div class="harga">
            <strong>IPHONE 6S</strong> <br>Rp 4.300.000,- <br>
          </div>

          <div class="order">
            <br>
            <a href="pemesanan.php"><button class="button">Beli Sekarang</button></a>
          </div>

        </div>
        </td>
        <td>

           <table  width="100%" class="t01" style="font-size:19px;">

<caption><strong style="font-size:30px;">Spesifikasi IPHONE 6s</strong></caption>
<tr>
	<th>HARGA</th>
	<td>Rp 4 jutaan</td>
</tr>
<tr>
	<th>STATUS</th>
	<td>Sudah dirilis (September 2014)</td>
</tr>
<tr>
	<th>BODY</th>
	<td>138.1 x 67 x 6.9 mm , 129 gram</td>
</tr>
<tr>
	<th>PROSESOR</th>
	<td>Apple A8 (20 nm)</td>
</tr>
<tr>
	<th>GPU</th>
	<td>PowerVR GX6450 (quad-core graphics)</td>
</tr>
<tr>
	<th>RAM</th>
	<td>1 GB RAM DDR3</td>
</tr>
<tr>
	<th>STORAGE</th>
	<td>16/32/64/128 GB</td>
</tr>
<tr>
	<th>LAYAR</th>
	<td>4.7 inches, 60.9 cm2 (750 x 1334 pixels)</td>
</tr>
<tr>
	<th>KAMERA</th>
	<td>1,2 MP & 8 MP</td>
</tr>
<tr>
	<th>BATERAI</th>
	<td>Non-removable Li-Po 1810 mAh battery (6.9 Wh)</td>
</tr>
<tr>
	<th>SISTEM OPERASI</th>
	<td>iOS 8, upgradable to iOS 12.1</td>
</tr>
<tr>
	<th>JARINGAN</th>
	<td>4G</td>
</tr>
<tr>
	<th>KONEKTIVITAS</th>
	<td>WiFi, Bluetooth, NFC</td>
</tr>
<tr>
		<th>INTERFACE</th>
		<td>Lightning port</td>
</tr>
<tr>
	<th>SENSOR</th>
	<td>Fingerprint, accelerometer, gyro, proximity, compass, barometer</td>
</tr>
<tr>
	<th>LAINNYA</th>
	<td>Sertifikat IP6</td>
</tr>
</table>



        </td>
      </tr>

      </table>
      <br><br>

      <!-- Tab links -->
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')"style="padding-left:100px; padding-right:100px; font-size:25px;">REVIEW</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')"style="padding-left:100px; padding-right:100px; font-size:25px;">SPESIFIKASI LENGKAP</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')"style="padding-left:95px; padding-right:95px; font-size:25px;">GALERI FOTO</button>
      </div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  <table width="50%" align=center>

	<br>
 	
	 <div align="center">
				 <img src="produk/ip6/logofoto6s.png">
			 </div>
	 <tr>
		 <td colspan="2" class="isi">
			 <div align="center">
			 </div>
			 <p><strong>iPhone 6 tidak sekadar lebih besar </strong> tapi juga lebih baik dalam berbagai aspek. Lebih besar, tapi lebih tipis. Lebih bertenaga, tapi juga lebih hemat energi. Dan dengan permukaan logam yang mulusnya menyatu sempurna dengan layar Multi-Touch, iPhone lebih baik dalam segala standar.</p>
			 
			 <h2>Desain ramping</h2>
			 <p>Desain kaca dan aluminium yang menyatu sempurna membuat iPhone 6 terasa pas, meski ukurannya lebih besar.</p>
			 <div align="center">
				 <img src="produk/ip6/4.png">
			 </div>

			 <h2>Layar Retina HD</h2>
			 <p>Meskipun hadir dalam ukuran 5,5 inci dan 4,7 inci, ini merupakan iPhone paling tipis dengan layar Multi-Touch tercanggih yang pernah dibuat.</p>

			 <div align="center">
				 <img src="produk/ip6/3.png">
			 </div>

			 <h2>Chip A8 dengan arsitektur 64 bit</h2>
			 <p>Chip A8 tidak hanya lebih cepat dari chip A7, tapi juga lebih hemat energi sampai 50 persen.</p>

			 <div align="center">
				 <img src="produk/ip6/6.png">
			 </div>

			 <h2>Koprosesor gerakan M8</h2>
			 <p>Memungkinkan Anda melacak kecepatan dan jarak Anda, serta melacak ketinggian menggunakan barometer bawaan.</p>

			 <div align="center">
				 <img src="produk/ip6/5.png">
			 </div>

		 </td>
	 </tr>
 </table>

</div>

<div id="Paris" class="tabcontent">
 <table class="t01">
		 <tr>
			 <td><h2>Network</h2></td>
			 <td>Technology</td>
			 <td>GSM / CDMA / HSPA / EVDO / LTE</td>
		 </tr>
		 <tr>
			 <td><h2>Launch</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Announced</td>
					 </tr>
					 <tr>
						 <td>Status</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>2014, September</td>
					 </tr>
					 <tr>
						 <td>Available. Released 2014, September</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Body</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Dimension</td>
					 </tr>
					 <tr>
						 <td>Weight</td>
					 </tr>
					 <tr>
						 <td>Build</td>
					 </tr>
					 <tr>
						 <td style="background-color:white;">SIM</td>
					 </tr>
					 <tr>
						 <td style="background-color:white;" ><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:white;"><br></td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>138.1 x 67 x 6.9 mm (5.44 x 2.64 x 0.27 in)</td>
					 </tr>
					 <tr>
						 <td>129 g (4.55 oz)</td>
					 </tr>
					 <tr>
						 <td>Front glass, aluminum body</td>
					 </tr>
					 <tr>
						 <td>Nano-SIM</td>
					 </tr>
					 <tr>
						 <td style="background-color:white;">- Apple Pay (Visa, MasterCard, AMEX certified)</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Display</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Type</td>
					 </tr>
					 <tr>
						 <td>Size</td>
					 </tr>
					 <tr>
						 <td>Resolution</td>
					 </tr>
					 <tr>
						 <td>Multitouch</td>
					 </tr>
					 <tr>
						 <td>Protection</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>LED-backlit IPS LCD, capacitive touchscreen, 16M colors</td>
					 </tr>
					 <tr>
						 <td>4.7 inches, 60.9 cm2 (~65.8% screen-to-body ratio)</td>
					 </tr>
					 <tr>
						 <td>750 x 1334 pixels, 16:9 ratio (~326 ppi density)</td>
					 </tr>
					 <tr>
						 <td>Yes</td>
					 </tr>
					 <tr>
						 <td>Ion-strengthened glass, oleophobic coating</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Platform</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>OS</td>
					 </tr>
					 <tr>
						 <td>Chipset</td>
					 </tr>
					 <tr>
						 <td>CPU</td>
					 </tr>
					 <tr>
						 <td>GPU</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>iOS 8, upgradable to iOS 12.1</td>
					 </tr>
					 <tr>
						 <td>Apple A8 (20 nm)</td>
					 </tr>
					 <tr>
						 <td>Dual-core 1.4 GHz Typhoon (ARM v8-based)</td>
					 </tr>
					 <tr>
						 <td>PowerVR GX6450 (quad-core graphics)</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Memory</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Cardslot</td>
					 </tr>
					 <tr>
						 <td>Internal</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>No</td>
					 </tr>
					 <tr>
						 <td>16/32/64/128 GB, 1 GB RAM DDR3</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Camera</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Primary</td>
					 </tr>
					 <tr>
						 <td>Features</td>
					 </tr>
					 <tr>
						 <td>Video</td>
					 </tr>
					 <tr>
						 <td>Secondary</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>8 MP, f/2.2, 29mm (standard), 1/3", 1.5µm, PDAF</td>
					 </tr>
					 <tr>
						 <td>Dual-LED dual-tone flash, HDR</td>
					 </tr>
					 <tr>
						 <td>1080p@60fps, 720p@240fps</td>
					 </tr>
					 <tr>
						 <td>1.2 MP, f/2.2, 31mm (standard)</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Sound</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Alert Types</td>
					 </tr>
					 <tr>
						 <td>Loudspeaker</td>
					 </tr>
					 <tr>
						 <td>3.5 mm jack</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>Vibration, proprietary ringtones</td>
					 </tr>
					 <tr>
						 <td>Yes</td>
					 </tr>
					 <tr>
						 <td>Yes</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- 16-bit/44.1kHz audio</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- Active noise cancellation with dedicated mic</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>COMMS</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>WLAN</td>
					 </tr>
					 <tr>
						 <td>Bluetooth</td>
					 </tr>
					 <tr>
						 <td>GPS</td>
					 </tr>
					 <tr>
						 <td>NFC</td>
					 </tr>
					 <tr>
						 <td>Radio</td>
					 </tr>
					 <tr>
						 <td>USB</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot</td>
					 </tr>
					 <tr>
						 <td>4.0, A2DP, LE</td>
					 </tr>
					 <tr>
						 <td>Yes, with A-GPS, GLONASS</td>
					 </tr>
					 <tr>
						 <td>Yes (Apple Pay only)</td>
					 </tr>
					 <tr>
						 <td>No</td>
					 </tr>
					 <tr>
						 <td>2.0, proprietary reversible connector</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Features</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Sensors</td>
					 </tr>
					 <tr>
						 <td>Messaging</td>
					 </tr>
					 <tr>
						 <td >Browser</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;"><br></td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer</td>
					 </tr>
					 <tr>
						 <td>iMessage, SMS(threaded view), MMS, Email, Push Email</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">HTML5 (Safari)</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- Siri natural language commands and dictation</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- iCloud cloud service</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- MP3/WAV/AAX+/AIFF/Apple Lossless player</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- MP4/H.264 player</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- Audio/video/photo editor</td>
					 </tr>
					 <tr>
						 <td style="background-color:#d5ebff;">- Document editor</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Battery</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td><br></td>
					 </tr>
					 <tr>
						 <td>Stand-by</td>
					 </tr>
					 <tr>
						 <td>Talk time</td>
					 </tr>
					 <tr>
						 <td>Music play</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>Non-removable Li-Po 1810 mAh battery (6.9 Wh)</td>
					 </tr>
					 <tr>
						 <td>Up to 250 h (3G)</td>
					 </tr>
					 <tr>
						 <td>Up to 60 h</td>
					 </tr>
					 <tr>
						 <td>Up to 50 h</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>MISC</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Colors</td>
					 </tr>
					 <tr>
						 <td>Price</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>Space Gray, Silver, Gold</td>
					 </tr>
					 <tr>
						 <td>About 360 EUR</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
		 <tr>
			 <td><h2>Test</h2></td>
			 <td>
				 <table>
					 <tr>
						 <td>Performance</td>
					 </tr>
					 <tr>
						 <td>Display</td>
					 </tr>
					 <tr>
						 <td>Camera</td>
					 </tr>
					 <tr>
						 <td>Loudspeaker</td>
					 </tr>
					 <tr>
						 <td>AudioQuality</td>
					 </tr>
					 <tr>
						 <td>BatteryLife</td>
					 </tr>
				 </table>
			 </td>
			 <td>
				 <table>
					 <tr>
						 <td>Basemark OS II: 1252 / Basemark X: 15841</td>
					 </tr>
					 <tr>
						 <td>Contrast ratio: 1213 (nominal), 3.838 (sunlight)<td>
					 </tr>
					 <tr>
						 <td>Photo / Video</td>
					 </tr>
					 <tr>
						 <td>Voice 66dB / Noise 65dB / Ring 72dB</td>
					 </tr>
					 <tr>
						 <td>Noise -93.7dB / Crosstalk -82.8dBNoise -94dB / Crosstalk -73.4dB</td>
					 </tr>
					 <tr>
						 <td>Endurance rating 61h</td>
					 </tr>
				 </table>
			 </td>
		 </tr>
	 </table>


</div>

<div id="Tokyo" class="tabcontent" style="font-family:'Sintony', sans-serif">

  <div class="gambargaleri" align="center">

    <img src="galeri/IP6S/gs.png" >
    <img src="galeri/IP6S/gs1.jpg" >
  </div>
</div>

      <script>
           // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }

      // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
      </script>
<br><br>
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
