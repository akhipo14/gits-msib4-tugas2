<?php
$filename = 'list_pengunjung.txt';	//mendefinisikan nama file yang di gunakan untuk menyimpan data jumlah pengunjung

function lihat(){		//function lihat
	global $filename;	//set variabel $filename yang bersifat global

	if(file_exists($filename)){		//jika file list_pengunjung.txt ada
		$value = file_get_contents($filename);	//set nilai di notepad
	}else{		//jika file list_pengunjung.txt tidak ada maka akan membuat file list_pengunjung.txt
		$value = 0;		//kemudian set value menjadi 0
	}

	file_put_contents($filename, ++$value);		//menuliskan kedalam file list_pengunjung.txt value di tambah 1
}

lihat();	//menjalankan function lihat
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/82ebf8392e.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style_portfolio.css">
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/style_location.css">
    <link rel="stylesheet" href="css/style_footer.css">
    <script src="script.js" defer></script>
    <title>Profil | Rafli Haikal</title>
  </head>
  <body>
      <div class="navbar">
        <input type="checkbox" name="" value="" id="check">
        <label for="check">
          <i class="fa-solid fa-bars" id="menu"></i>
          <i class="fa-solid fa-xmark" id="close"></i>
        </label>
        <ul>
          <li > <a class="active" href="#"><i class="fa-solid fa-house"></i>Home</a> </li>
          <li> <a href="#"><i class="fa-solid fa-user"></i>Whoami?</a> </li>
          <li> <a href="#"><i class="fa-solid fa-book"></i>Portfolio</a> </li>
          <li> <a href="#"><i class="fa-solid fa-location-dot"></i>Location</a> </li>
          <li> <a href="#"><i class="fa-solid fa-phone"></i>Contact</a> </li>
        </ul>
      </div>
      <div class="content">

        <div class="header">
          <div class="col-1">
            <div class="text">
              <h1>Hello, There</h1>
              <div class="nama">

                <h1>Im </h1><h1 class="nama2">Rafli Haikal</h1>
              </div>
              <p>Web Developer and Graphic Designer</p>
            </div>
            <div class="button">
              <button type="button" name="button">Contact me on whatsapp <i class="fa-brands fa-whatsapp"></i></button>
              <button type="button" name="button">Send me your email <i class="fa-regular fa-envelope"></i></button>
              <button type="button" name="button">Lets see my instagram <i class="fa-brands fa-instagram"></i></button>
            </div>
          </div>
          <div class="col-2">
            <div class="gambar">
              <img src="img/profil.png" alt="">
            </div>
          </div>
        </div>

        <div class="whoami">
          <div class="col-1">
            <h1>Whoami ?</h1>
            <p>Nama saya Rafli Haikal. Saat ini saya sedang menempuh pendidikan di Politeknik Negeri Padang,
            Jurusan Teknologi Informasi, Program Studi D4 Teknologi Rekayasa Perangkat Lunak, semester 6.
          Saya menyukai desain dan koding. saat ini saya sedang belajar bagaimana membuat website dengan framwork laravel di Gits Indonesia.</p>

          </div>
          <div class="col-2">
            <div class="wrapper1">
              <div class="wrapper">
                <i id="left" class="fa-sharp fa-solid fa-angle-left"></i>
                <div class="card">
                  <img src="img/1.png" alt="">
                  <img src="img/2.png" alt="">
                  <img src="img/3.png" alt="">
                  <img src="img/4.png" alt="">
                  <img src="img/5.png" alt="">
                  <img src="img/6.png" alt="">
                  <img src="img/7.png" alt="">
                </div>
                <i id="right" class="fa-sharp fa-solid fa-angle-right"></i>
              </div>

            </div>
          </div>
        </div>
        <div class="Portfolio">
          <h1>Portfolio</h1>
          <div class="port-website">
            <div class="port-website-text">
              <h2>Website</h2>
              <p>Dibawah ini adalah contoh website yang sudah saya buat. ada yang menggunakan html, css, js dan php native dan ada juga yang menggunakan framework laravel.
              harapan saya adalah saya bisa membuat dan mengembangkan website yang lebih banyak lagi. dan yang paling penting bisa bermanfaat baik untuk admin website, maupun user yang menikmati website tersebut.
             </p>

            </div>
            <div class="port-website-img">
              <div class="kiri">
                <div class="grup">
                  <div class="hover-effect">
                    <img src="img/website/1.png" alt="">
                  </div>
                  <p>Website Penjualan payung untuk UMKM</p>
                  <div class="github">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                  </div>
                </div>
                  <div class="grup">
                    <div class="hover-effect">
                      <img src="img/website/3.png" alt="">
                    </div>
                    <p>website penjualan keripik singkong untuk UMKM</p>
                    <div class="github">
                      <a href="#"><i class="fa-brands fa-github"></i></a>
                    </div>
                  </div>
              </div>
              <div class="kanan">
                <div class="grup">
                  <div class="hover-effect">
                    <img src="img/website/2.png" alt="">
                  </div>
                  <p>Website penjualan obat tradisional minangkabau untuk UMKM</p>
                  <div class="github">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                  </div>
                </div>
                <div class="grup">
                  <div class="hover-effect">
                    <img src="img/website/4.png" alt="">
                  </div>
                  <p>website pemesanan tiket bus (saya sebagai front-end-developer)</p>
                  <div class="github">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="port-design">
            <div class="port-design-text">
              <h2>Design</h2>
              <p>Berikut ini adalah beberapa desain yang telah saya buat seperti desain promosi yang di posting di sosial media, lalu desain logo, dan desain poster illustrasi dan WPAP artis.
                semua desain yang buat itu menggunakan aplikasi Adobe Illustrator. Saya harap sedikit keahlian saya dibidang Desain ini juga bisa bermanfaat untuk diri saya sendiri maupun orang lain.</p>
            </div>
            <div class="port-design-img">
              <div class="design-img-1">
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/1.png" alt="">
                  </div>
                </div>
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/2.png" alt="">
                  </div>
                </div>
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/3.png" alt="">
                  </div>
                </div>
              </div>
              <div class="design-img-2">
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/4.png" alt="">
                  </div>
                </div>
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/5.png" alt="">
                  </div>
                </div>
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/6.png" alt="">
                  </div>
                </div>
              </div>
              <div class="design-img-3">
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/7.png" alt="">
                  </div>
                </div>
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/8.png" alt="">
                  </div>
                </div>
                <div class="pembungkus-gambar">
                  <div class="hidden-effect">
                    <img src="img/design/9.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="location">
              <h1>My Locaion</h1>
              <div class="location-item">
                <div class="location-item-text">
                  <h2>Mampir Yuk :)</h2>
                  <p>yakk.. ini adalah lokasi tempat saya tinggal yaitu di rumah nenek saya. Alamat lengkapnya itu di Jl. Delima Raya Ujung, Belimbing, Kuranji, Padang, Sumatera Barat. Disebelah Wisma Nina. bagi teman-teman yang ingin bertemu langsung dengan saya boleh main-main kerumah. hehe..</p>
                </div>
                <div class="location-item-map">
                  <div class="pembungkus1-map">
                    <div class="pembungkus2-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d498.66558372338477!2d100.4216423160365!3d-0.9013124360588731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1677473041745!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
          <div class="footer">
            <ul>
              <li> <a href="#"><i class="fa-solid fa-user"></i>Whoami?</a> </li>
              <li> <a href="#"><i class="fa-solid fa-book"></i>Portfolio</a> </li>
              <li> <a href="#"><i class="fa-solid fa-location-dot"></i>Location</a> </li>
              <li> <a href="#"><i class="fa-solid fa-phone"></i>Contact</a> </li>
            </ul>
            <div class="copyright">
              <p>copyright <a href="#">@rflihaikal | </a> </p>
            <p>  <a href="#"><i class="fa-solid fa-eye"></i><?php echo ' Total Pengunjung: '.file_get_contents($filename);	//menampilkan jumlah pengunjung di website
         			?></a> </p>
        	          </div>
          </div>
  </body>
</html>
