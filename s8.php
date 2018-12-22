<?php
session_start();
$_SESSION['namabarang'] = "SAMSUNG GALAXY S8 - Rp 10.000.000,-";//session yang akan didaftarkan
//atau disimpan pada server
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kedai Smartphone</title>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
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

		  <img id="myImg" src="produk/speks8/galaxys8.png" height="300px"> <br>
				</div>
				<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

          <div class="harga">
            <strong>SAMSUNG GALAXY S8</strong> <br>Rp 10.000.000,- <br>
          </div>

          <div class="order" style="padding-left:70px;">
            <br>
            <a href="pemesanan.php"><button class="button">Beli Sekarang</button></a>
          </div>

        </div>
        </td>
        <td>

          <table  width="100%" class="t01" style="font-size:19px;">

            <caption><strong style="font-size:30px;">Spesifikasi Samsung Galaxy S8</strong></caption>
            <tr>
              <th>HARGA</th>
              <td>Rp 10 juta</td>
            </tr>
            <tr>
              <th>STATUS</th>
              <td>Sudah dirilis (April 2017)</td>
            </tr>
            <tr>
              <th>BODY</th>
              <td>148,9 x 68,1 x 8 mm, 155 gram</td>
            </tr>
            <tr>
              <th>PROSESOR</th>
              <td>Exynos 8895 octa-core 2,3 GHz</td>
            </tr>
            <tr>
              <th>GPU</th>
              <td>Mali-G71MP20</td>
            </tr>
            <tr>
              <th>RAM</th>
              <td>4 GB</td>
            </tr>
            <tr>
              <th>STORAGE</th>
              <td>64 GB (microSD up to 256 GB)</td>
            </tr>
            <tr>
              <th>LAYAR</th>
              <td>Super AMOLED 5,8 inci (2.960 x 1.440 piksel)</td>
            </tr>
            <tr>
              <th>KAMERA</th>
              <td>12 MP & 8 MP</td>
            </tr>
            <tr>
              <th>BATERAI</th>
              <td>3.000 mAh (fast charging)</td>
            </tr>
            <tr>
              <th>SISTEM OPERASI</th>
              <td>Dream UX (Android 7.0)</td>
            </tr>
            <tr>
              <th>JARINGAN</th>
              <td>Dual-SIM 4G</td>
            </tr>
            <tr>
              <th>KONEKTIVITAS</th>
              <td>WiFi, Bluetooth, NFC</td>
            </tr>
            <tr>
                <th>INTERFACE</th>
                <td>USB Type-C, jack audio 3,5 mm, microSD</td>
            </tr>
            <tr>
              <th>SENSOR</th>
              <td>Iris scanner, fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2</td>
            </tr>
            <tr>
              <th>LAINNYA</th>
              <td>Sertifikat IP68, Fast charging</td>
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
        <tr>
          <td colspan="2" class="isi">

              <p>Penantian panjang kami untuk bisa segera menjajal Samsung Galaxy S8 berakhir pada 5 Mei 2017 lalu. Ya, pada Jumat 5 Mei, para pemesan Galaxy S8 sudah bisa menjemput smartphone pesanannya di Samsung Store yang dikehendaki. Dan berikut adalah pengalaman kami bercengkerama dengan smartphone seharga Rp10,5 juta ini.</p>
              <h2>KELEBIHAN</h2>
              <p><strong>Smartphone masa depan. &nbsp;</strong> Samsung Galaxy S8 adalah smartphone paling futuristik saat ini. Dengan layar besar, desain compact, dan bagian muka hampir tanpa bezel, smartphone ini terlihat begitu futuristik dan berhasil membuat smartphone flagship lain jadi terlihat kuno dan jadul.</p>
              <div align="center">
                <img src="produk/speks8/g1.jpg">
              </div>
              <p><strong>Masih tahan air.&nbsp;</strong>Kita tak perlu khawatir ketika menggunakan Galaxy S8 di tempat basah atau berdebu. Bodi cantik Galaxy S8 bakal bisa melawan serbuan air dan debu berkat adanya sertifikat IP68. Kita bisa membawanya menyelam hingga 1,5 meter selama 30 menit di air tawar.</p>

              <p><strong>Layar terbaik.&nbsp;</strong>Galaxy S8 memiliki bentang layar 5,8 inci yang melengkung cantik dengan panel Super AMOLED dan brightness 1.000 nits. Tak heran jika layar ini diganjar sebagai yang terbaik versi DisplayMate. Selain sangat cerah, layar Galaxy S8 juga sangat tajam berkat resolusi 2.960 x 1.440 piksel yang dimilikinya. Selain kinclong, layar ini juga kuat karena dilindungi Gorilla Glass 5.</p>
              <div align="center">
                <img src="produk/speks8/g2.jpg" >
              </div>
              <p><strong>Irit baterai.&nbsp;</strong>Bodi ramping Galaxy S8 memuat baterai 3.000 mAh. Kapasitas ini tergolong standar dan agak mencurigakan, apakah bisa bertahan seharian? Pada pengujian battery test menggunakan PCMark, daya tahan baterainya di atas sepuluh jam.</p>

              <p>Sedangkan saat kami gunakan dengan pemakaian full load internet dan media sosial plus game, screen-on-time yang diraih tidak pernah kurang dari lima jam. Asyiknya lagi, baterai ini juga ditunjang teknologi fast charging atau pun wireless charging.</p>

              <p><strong>Gesit dan powerful.&nbsp;</strong>Indonesia kebagian Galaxy S8 dengan chipset Exynos 8895 dan RAM 4 GB. Saat kami jajal, Galaxy S8 hanya memerlukan waktu sekitar 15 detik untuk proses booting. Perpindahan aplikasi (multitasking) juga berjalan mulus. Bagaimana dengan performa sintetisnya? Dari pengujian benchmark yang kami lakukan, Galaxy S8 berhasil menorehkan skor 171 ribu poin pada AnTuTu.</p>

              <div align=center>
                <img src="produk/speks8/g3.jpg" >
              </div>

              <p><strong>Sensor biometrik lengkap.&nbsp;</strong>Dalam hal keamanan, Samsung menghadirkan tiga sensor biometrik pada Galaxy S8, yakni sidik jari, iris, dan pengenal wajah. Ketiga sensor ini memiliki kinerja yang cepat dan cukup akurat. Dengan begitu kita bisa memilih cara membuka kunci yang aman sesuai dengan keinginan.</p>

              <div align=center>
                <img src="produk/speks8/g4.jpg" >
              </div>
              <p><strong>Headset AKG.&nbsp;</strong>Untuk pertama kalinya Samsung menyertakan headset berkualitas bermerek AKG sebagai paket penjualan Galaxy S8. Headset ini diklaim memiliki banderol sekitar Rp1 juta. Terlepas dari harganya, headset ini memang terbukti bisa sajikan suara yang bulat dan detail.</p>
              <div align=center>
                <img src="produk/speks8/g5.jpg" >
              </div>
              <h2>KEKURANGAN</h2>
              <p><strong>Sensor sidik jari butuh adaptasi.&nbsp;</strong>Kami termasuk yang mengeluhkan letak sensor sidik jari pada Galaxy S8 yang tidak lazim. Itu terjadi pada awal-awal pemakaian dimana kami cukup sering menempelkan jari ke kamera. Untuk mengatasi hal ini, Anda hanya perlu sesering mungkin menggunakan sensor ini sehingga jadi terbiasa.</p>
              <div align=center>
                <img src="produk/speks8/g6.jpg">
              </div>
              <p><strong>GPU Mali.&nbsp;</strong>Sebenarnya tidak ada yang salah dengan GPU Mali-G71MP20 yang digunakan oleh Samsung Galaxy S8. GPU ini terbukti kencang dan canggih, serta sudah mendukung API Vulkan. Tapi sayangnya GPU satu ini belum sepenuhnya sempurna untuk bermain game karena ada beberapa judul game yang belum kompatibel.</p>
              <div align=center>
                <img src="produk/speks8/g7.jpg">
              </div>
              <p>Sebut saja game Batman: The Telltale Series, Bully, Space Marshals 2, atau Injustice 2 yang masih mengalami kendala saat dimainkan. Mulai dari tampilan gambar yang berantakan, efek grafis yang tidak lengkap, hingga frame rate tersendat. Tapi sekali lagi, hanya segelintir judul game saja yang mengalami kendala ini.</p>
              <p><strong>Face detection mudah ditipu.&nbsp;</strong>Sisi depan Galaxy S8 memuat kamera yang bisa berfungsi untuk mengenali wajah guna membuka kunci smartphone. Kecepatannya memang baik, tapi rentan dibohongi. Ya, fitur pengenal wajah ini masih bisa diakali dengan menggunakan foto.</p>
              <h2>KESIMPULAN</h2>
              <p>Samsung berhasil keluar dari zona nyaman dengan menciptakan smartphone futuristik yang benar-benar terlihat baru. Seperti biasa, sebagai rajanya smartphone Samsung, Galaxy S8 memiliki kecepatan di atas rata-rata dengan sejubel fitur terkini dan kamera yang sangat bisa diandalkan.</p>

          </td>
        </tr>
      </table>
    </div>

    <div id="Paris" class="tabcontent">

      <table class="t01" width="100%">
			<tr>
				<td><h2>Network</h2></td>
				<td>Technology</td>
				<td>GSM / HSDPA / LTE</td>
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
							<td>2017, March</td>
						</tr>
						<tr>
							<td>Available. Released 2017, April</td>
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
							<td>SIM</td>
						</tr>
						<tr>
              <td style="background-color:white;" ><br></td>
						</tr>
						<tr>
							<td><br></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>	148.9 x 68.1 x 8 mm (5.86 x 2.68 x 0.31 in)</td>
						</tr>
						<tr>
							<td>155 g (5.47 oz)</td>
						</tr>
						<tr>
							<td>Front/back glass (Gorilla Glass 5), aluminum frame</td>
						</tr>
						<tr>
							<td>Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)</td>
						</tr>
						<tr>
							<td style="background-color:white;">- Samsung Pay (Visa, MasterCard certified)</td>
						</tr>
						<tr>
							<td>- IP68 certified - dust/water proof (up to 1.5m for 30 mins)</td>
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
							<td><br></td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;"><br></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>Super AMOLED capacitive touchscreen, 16M colors</td>
						</tr>
						<tr>
							<td>5.8 inches, 84.8 cm2 (~83.6% screen-to-body ratio)</td>
						</tr>
						<tr>
							<td>1440 x 2960 pixels, 18.5:9 ratio (~570 ppi density)</td>
						</tr>
						<tr>
							<td>Yes</td>
						</tr>
						<tr>
							<td>Corning Gorilla Glass 5</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- HDR10 compliant</td>
						</tr>
						<tr>
							<td>- 3D Touch (home button only)</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- Always-on display</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><h2>Platform</h2></td>
				<td>
					<table>
						<tr>
							<td style="background-color:white;">OS</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">Chipset</td>
						</tr>
						<tr>
							<td><br></td>
						</tr>
						<tr>
							<td >CPU</td>
						</tr>
						<tr>
							<td style="background-color:white;"><br></td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">GPU</td>
						</tr>
						<tr>
							<td><br></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td style="background-color:white;">Android 7.0 (Nougat), upgradable to Android 8.0 (Oreo)</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">Exynos 8895 Octa - EMEA</td>
						</tr>
						<tr>
							<td>Qualcomm MSM8998 Snapdragon 835 - USA & China</td>
						</tr>
						<tr>
							<td>Octa-core (4x2.3 GHz Mongoose M2 & 4x1.7 GHz Cortex-A53) - EMEA</td>
						</tr>
						<tr>
							<td style="background-color:white;">Octa-core (4x2.35 GHz Kryo & 4x1.9 GHz Kryo) - USA & China</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">Mali-G71 MP20 - EMEA</td>
						</tr>
						<tr>
							<td>Adreno 540 - USA & China</td>
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
							<td>microSD, up to 256 GB (uses SIM 2 slot) - dual SIM model only</td>
						</tr>
						<tr>
							<td>64 GB, 4 GB RAM</td>
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
							<td>12 MP (f/1.7, 26mm, 1/2.5", 1.4 µm, Dual Pixel PDAF), phase detection autofocus, OIS, LED flash</td>
						</tr>
						<tr>
							<td>Geo-tagging, simultaneous 4K video and 9MP image recording, touch focus, face/smile detection, Auto HDR, panorama</td>
						</tr>
						<tr>
							<td>2160p@30fps, 1080p@60fps, 720p@240fps, HDR, dual-video rec.</td>
						</tr>
						<tr>
							<td>8 MP (f/1.7, 25mm, 1/3.6", 1.22 µm), autofocus, 1440p@30fps, dual video call, Auto HDR</td>
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
							<td><br></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>Vibration; MP3, WAV ringtones</td>
						</tr>
						<tr>
							<td>Yes</td>
						</tr>
						<tr>
							<td>Yes</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- 32-bit/384kHz audio</td>
						</tr>
						<tr>
							<td>- Active noise cancellation with dedicated mic</td>
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
							<td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot</td>
						</tr>
						<tr>
							<td>5.0, A2DP, LE, aptX</td>
						</tr>
						<tr>
							<td>Yes, with A-GPS, GLONASS, BDS, GALILEO</td>
						</tr>
						<tr>
							<td>Yes</td>
						</tr>
						<tr>
							<td>No</td>
						</tr>
						<tr>
							<td>3.1, Type-C 1.0 reversible connector</td>
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
							<td>Browser</td>
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
						<tr>
							<td style="background-color:#d5ebff;"><br></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>Iris scanner, fingerprint (rear-mounted), accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2</td>
						</tr>
						<tr>
							<td>SMS(threaded view), MMS, Email, Push Email, IM</td>
						</tr>
						<tr>
							<td>HTML5</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- Samsung DeX (desktop experience support)</td>
						</tr>
						<tr>
							<td>- Fast battery charging (Quick Charge 2.0)</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- Qi/PMA wireless charging (market dependent)</td>
						</tr>
						<tr>
							<td>- ANT+ support</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- Bixby natural language commands and dictation</td>
						</tr>
						<tr>
							<td>- MP4/DivX/XviD/H.265 player</td>
						</tr>
						<tr>
							<td style="background-color:#d5ebff;">- MP3/WAV/eAAC+/FLAC player</td>
						</tr>
						<tr>
							<td>- Photo/video editor</td>
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
							<td>Non-removable Li-Ion 3000 mAh battery (11.55 Wh)</td>
						</tr>
						<tr>
							<td>Up to 20 h (3G)</td>
						</tr>
						<tr>
							<td>Up to 67 h</td>
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
							<td>SAR</td>
						</tr>
						<tr>
							<td>SAR EU</td>
						</tr>
						<tr>
							<td>Price</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>Midnight Black, Orchid Gray, Arctic Silver, Coral Blue, Maple Gold, Rose Pink, Burgundy Red</td>
						</tr>
						<tr>
							<td>0.44 W/kg (head)     0.75 W/kg (body) </td>
						</tr>
						<tr>
							<td>	0.32 W/kg (head)     1.27 W/kg (body)</td>
						</tr>
						<tr>
							<td>About 530 EUR</td>
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
							<td>Basemark OS II: 3272 / Basemark OS II 2.0: 3376 Basemark X: 42370</td>
						</tr>
						<tr>
							<td>Contrast ratio: Infinite (nominal), 4.768 (sunlight)</td>
						</tr>
						<tr>
							<td>Photo / Video</td>
						</tr>
						<tr>
							<td>Voice 66dB / Noise 70dB / Ring 72dB</td>
						</tr>
						<tr>
							<td>Noise -92.5dB / Crosstalk -92.8dB</td>
						</tr>
						<tr>
							<td>Endurance rating 84h</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

    </div>

  <div id="Tokyo" class="tabcontent" style="font-family:'Sintony', sans-serif">

    <div class="gambargaleri" align="center">

      <img src="galeri/SGS8/1.jpg" >
      <img src="galeri/SGS8/2.jpg" >
      <img src="galeri/SGS8/3.jpg" >
      <img src="galeri/SGS8/4.jpg" >
      <img src="galeri/SGS8/5.jpg" >
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
