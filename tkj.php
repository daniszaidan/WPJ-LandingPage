<!DOCTYPE html>
<html>
<head>

    <title>Jurusan RPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/class.js"></script>
    <script src="js/classs.js"></script>
    <script src="js/classss.js"></script>
    <script src="js/classsss.js"></script>
    <script src="js/classssss.js"></script>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
    </script>

</head>
<body>

	<nav>
        <ul>
            <a href="http://localhost/wpj/" class="smoothScroll learn">Back To Home</a>
            <div id="logolearn">
                <a><img src="img/logo_al_irsyad.png"></a>
            </div>
        </ul>
    </nav>

    <div id="satu"></div>
    <div class="kolom" id="tkjlearn">
        <div class="full">
            <a class="tengah">Teknik Komputer dan Jaringan</a>
            <a class="bawah">Learn More TKJ</a>
        </div>
    </div>

    <div class="atasteam">
        <div class="artikel">
            
                <div class="judultkj"><p><b>Teknik Komputer dan Jaringan</b> (TKJ) adalah program keahlian yang bertujuan membekali peserta didik dengan keterampilan, pengetahuan, dan sikap agar kompeten dalam merakit, menginstall program, merawat dan memperbaiki komputer serta jaringannya.<br><br>
                </p></div>

            <p>

                <div class="subjudul">Target Pendidikan Jurusan RPL SMK menjadi Programmer yang handal. Proses belajar mengajar di RPL SMK Al-Irsyad Tegal Normatif, Adaftif, Produktif<br><br></div>

                <div class="subjudul">Siswa TKJ (meskipun belum tamat) mampu bekerja sebagai teknisi komputer dan administrator jaringan di toko/ servis komputer, kantor, hotel, bank atau ISP baik di tingkat lokal (nasional) maupun luar negeri.<br><br></div>

    			<div class="subjudul">TKJ merupakan program keahlian baru di Sekolah-sekolah Menengah Kejuruan (SMK), baik Negeri ataupun Swasta sejak tahun 2004. Wajar jika masyarakat belum banyak mengetahui/memahaminya. Meskipun baru, siswa TKJ SMK diakui kemampuannya oleh kalangan dunia kerja.<br><br></div>

    			<div class="subjudul">Sejak terbitnya kebijakan pemerintah bahwa sekolah kejuruan (dulu SMEA, STM, SMKK, dll) berubah nama menjadi SMK, menimbulkan konsekuensi bahwa setiap SMK memiliki kewenangan yang sama untuk membuka jurusan (bidang keahlian) / prodi (program keahlian) baru atau lebih populer dengan istilah re-engineering.<br><br></div>

    			<div class="subjudul">Program keahlian yang sudah tidak banyak dibutuhkan oleh dunia usaha/industri secara perlahan akan ditutup dan dibuka program keahlian baru sesuai kebutuhan dunia kerja. Dengan demikian tidak ada lagi perbedaan antara SMK eks SMEA, STM, SMKK atau lainnya. Setiap SMK dapat membuka program yang dulunya hanya ada di sekolah kejuruan lain. Sebagai contoh SMK eks SMEA boleh membuka jurusan (bid. keahlian) teknik seperti TKJ, multimedia, elektro, dll. Sebaliknya SMK eks STM boleh membuka tata boga, tata busana ataupun kecantikan.<br><br></div>

            </p>
        </div>

        <div class="slideimage">
              <img class="mySlides slideawal" src="img/slide (1).jpg">
              <img class="mySlides" src="img/slide (2).jpg">
              <img class="mySlides" src="img/slide (3).jpg">
              <img class="mySlides" src="img/slide (4).jpg">
              <img class="mySlides" src="img/slide (5).jpg">
              <img class="mySlides" src="img/slide (6).jpg">
              <img class="mySlides" src="img/slide (7).jpg">
              <img class="mySlides" src="img/slide (8).jpg">
              <img class="mySlides" src="img/slide (9).jpg">
              <img class="mySlides" src="img/slide (10).jpg">
              <img class="mySlides" src="img/slide (11).jpg">
              <img class="mySlides" src="img/slide (12).jpg">
              <img class="mySlides" src="img/slide (13).jpg">
              <img class="mySlides" src="img/slide (14).jpg">
              <img class="mySlides" src="img/slide (15).jpg">
              <img class="mySlides" src="img/slide (16).jpg">
              <img class="mySlides" src="img/slide (17).jpg">
              <img class="mySlides" src="img/slide (18).jpg">
              <img class="mySlides" src="img/slide (19).jpg">

              <button class="slide-button sebelah-kiri" onclick="plusDivs(-1)">&#10094;</button>
              <button class="slide-button sebelah-kanan" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <div class="jarakslide"></div>

    </div>
    <div class="team">
            <div class="team_satu">
                <div class="sampuldanis">
                    <div class="pp">
                        <div class="profile"><img src="img/ppdanis.png"></div>
                        <a class="at" href="">Danis Zaidan</a>
                        <div class="katabijak">
                            <P>"<b>DanZai</b> is <b >Dan</b>is <b>Zai</b>dan<br/>
                            Designer and Programmer, Learn while playing Games.<br/>
                            Find Me ? Search in Google."
                            </P>
                        </div>
                        <div class="facebook">
                            <div class="icon"></div>
                            <a class="akun" href="">Facebook</a>
                        </div><div class="email">
                            <div class="iconmail"></div>
                            <a class="akun" href="https://www.google.com/intl/in/gmail/about/#inbox?compose=daniszaidan@gmail.com">daniszaidan@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team_dua">
                <div class="sampulgalang">
                    <div class="pp">
                        <div class="profile"><img src="img/ppgalang.jpg"></div>
                        <a class="at" href="">Galang Mulqia Hakiki</a>
                        <div class="katabijak">
                            <P>"Seorang yang optimis yaitu yang melihat kesempatan untuk tumbuh dan maju di dalam kesulitan."
                            </P>
                        </div>
                        <div class="facebook">
                            <div class="icon"></div>
                            <a class="akun" href="">Facebook</a>
                        </div><div class="instagram">
                            <div class="icongram"></div>
                            <a class="akun" href="https://www.instagram.com/galang_mh/">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team_tiga">
                <div class="sampulsukma">
                    <div class="pp">
                        <div class="profile"><img src="img/ppsukma.png"></div>
                        <a class="at" href="">Sukma Abdul Ghoni</a>
                        <div class="katabijak">
                            <P>"Segalanya untuk Berdoa, Berusaha, dan Tawakal, maka pintu keberhasilan akan terbuka"
                            </P>
                        </div>
                        <div class="facebook">
                            <div class="icon"></div>
                            <a class="akun" href="">Facebook</a>
                        </div>
                        <div class="instagram">
                            <div class="icongram"></div>
                            <a class="akun" href="https://www.instagram.com/sukma_ghoni/">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>'Website Profil Jurusan' With Scroll Animation and Parallax Effect using HTML, CSS, Javascript, and JQuery || 

                <span><b>Dilarang Menjiplak, Mengedit, Mengakui, atau Digunakan untuk Personal / Organisasi tanpa seijin dari Anggota TEAM </b></span> - 
                
                Copyright &copy 2017 - All Rights Reserved Design By <a href="http://nexiapedia.blogspot.com/">DanZai</a></p>
            </div>
        </div>
        <div id="enam"></div>

    <a class="up smoothScroll" href="#satu">UP!</a>

</body>
</html>