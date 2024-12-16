<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <title>Home</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbarNavAltMarkup" data-bs-smooth-scroll="true">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-secondary sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand fs-4 fw-bold" href="index.php">Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            <a class="nav-link" href="#article">Article</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#profile">Profile</a>
            <a class="nav-link" href="#schedule">Schedule</a>
            <a class="nav-link" href="Login.php" target="_blank">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Home page -->
     <div class="bg-danger-subtle mb-5" id="home">
        <div class="container d-flex flex-md-row-reverse justify-content-between pt-md-5 pb-md-5 flex-column pt-3">
            <div class="container">
                <img src="img/911.jpg" class="rounded-4 float-md-end mx-auto d-block" width="75%" alt="porsche">    
            </div>
            <div class="container align-content-center">
                <p class="fs-1 fw-bold ">
                    If You Born Poor,It is not your mistake, but if you die poor,it is your mistake
                </p>
                <p class="fs-2 fw-light">
                    Jika Anda terlahir miskin, itu bukan kesalahan Anda, Tapi jika Anda mati miskin, itu adalah kesalahan Anda
                </p>
            </div>
        </div>
     </div>

     <!-- article begin -->
      <section id="article" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">article</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
              <div class="col">
                <div class="card h-100">
                  <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                    <p class="card-text">
                      <?= $row["isi"]?>
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">
                      <?= $row["tanggal"]?>
                    </small>
                  </div>
                </div>
              </div>
              <?php
            }
            ?> 
          </div>
        </div>
      </section>
      <!-- article end -->

     <!-- Article -->
     <!-- <h1 class="text-center mt-5" id="article">My Daily Journal</h1>
     <div class="mx-md-4 mt-1 mb-5 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
       <div class="col">
         <div class="card h-100">
           <img src="img/article1.png" class="card-img-top" alt="ss kursus udemy" />
           <div class="card-body bg-danger-subtle">
             <h5 class="card-title">Senin, 28 Oktober 2024</h5>
             <p class="card-text text-justify">
               hari ini saya melakukan aktivitas perkuliahan dari jam 07:00
               sampai 08:40 dengan matakuliah Pemrograman Berbasis Web, saya
               belajar salahsatu dari framework css yaitu bootstrap. Setelah
               pulang dari kampus saya makan lalu belanja kebutuhan seperti
               sabun, tisu, pewangi dan lain lain di toko swalayan ada siliwangi.
               setelah itu saya melakukan kegiatan seperti biasa mempelajari
               kursus di udemy, dari kursus itu saya mempelajari php PDO. saya
               berhasil mempraktekan pelajaran itu, walaupun hanya sedikit.
               setelah belajar mengenai php PDO saya belajar bootstrap di
               youtube.
             </p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card h-100">
           <img src="img/article2.png" class="card-img-top" alt="template rpl" />
           <div class="card-body bg-danger-subtle">
             <h5 class="card-title">Selasa, 29 Oktober 2024</h5>
             <p class="card-text text-justify">
               hari ini saya kuliah jam 07:00 sampai jam 08:40 dengan matakuliah
               Basis Data, perkuliahan tersebut membahas tentang bahasa kueri
               prosedural seperti select, insert, update dan delete. Setelah itu
               dilanjut dengan perkuliahan pendidikan kewarganegaraan yang
               dimulai jam 10:20 sampai 12:00, diperkuliahan ini kelompok saya
               presentasi mengenai penugas pkn yang akan kelompok saya lakukan.
               Setelah perkuliahan selesai saya mengerjakan tugas dari matakuliah
               rekayasa perangkat lunak, tugasnya membuat project charter dan
               project scoop untuk sebuah situs web penjualan bouquet bunga. saat
               mengerjakan tugas terebut saya belajar mengenai model proses dan
               istilah istilah yang dipakai saat membangun sebuah perangkat
               lunak, saya mengerjakan ini sampai malam.
             </p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card h-100">
           <img src="img/article3.png" class="card-img-top" alt="materi logif" />
           <div class="card-body bg-danger-subtle">
             <h5 class="card-title">Rabu, 30 Oktober 2024</h5>
             <p class="card-text text-justify">
               hari ini kuliah dimulai dengan mata kuliah Logika Informatika dari
               jam 07:00 sampai jam 09:30, saya belajar Bentuk klausa dan Prinsip
               resolusi, pada materi bentuk klausa belajar bagaimana cara
               mengubah premis yang komplek ke bentuk klausanya, ada 4 tahapan
               untuk mengubah premis yang kompleks. pada materi prinsip resolusi
               membahas prinsip-prinsip resolusi dan pembuktian kesimpulan.
               setelah perkuliahan logika informatika selesai saya melanjutkan
               mengerjakan tugas rekayasa perangkat lunak seperti di hari
               sebelumnya, hari ini saya membuat jadwal untuk pengembangan situs
               web. siang harinya ada perkuliahan rekayasa perangkat lunak, pada
               perkuliahan tersebut saya dan teman teman hanya menunjukan dokumen
               project yang telah di print lalu direvisi dan pulang, setelah
               sampai kos dokumen yang direvisi langsung diperbaiki dan mengubah
               beberapa jadwal pengerjaan.
             </p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card h-100">
           <img src="img/article4.png" class="card-img-top" alt="diagram" />
           <div class="card-body bg-danger-subtle">
             <h5 class="card-title">Kamis, 31 Oktober 2024</h5>
             <p class="card-text text-justify">
               hari ini tidak ada perkuliahan karena materi yang diajarkan sudah
               selesai, pagi ini hanya mengumpulkan tugas dan tandatangan daftar
               hadir. setelah mengumpulkan tugas saya membuat daftar tugas tugas
               yang akan diekrjakan oleh saya dan anggota kelompok RPL, ada
               sekitar 30 daftar tugas yang akan kelompok kami kerjakan. siangnya
               ada perkuliahan sistem operasi, di perkuliahan SO hanya membahas
               soal yang berkemungkinan muncul di UTS dan tugas membuat makalah
               tentang virtualisasi. setelah pulang kuliah saya mencari program
               untuk membuat desain database dan menemukan ada beberapa web yang
               bisa digunakan untuk mendesain database, pada akhirnya saya
               memilih plantUML untuk membuat desain database. saya mencoba
               membuat diagram sederhana dengan program ini, saat pertama kali
               memakai rasanya susah, tapi ternyata mudah karena tidak banyak
               kata-kata yang harus dihafal.
             </p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card h-100">
           <img src="img/article5.png" class="card-img-top" alt="materi basdat" />
           <div class="card-body bg-danger-subtle">
             <h5 class="card-title">Jum'at, 1 November 2024</h5>
             <p class="card-text text-justify">
               hari ini saya berangkat kuliah jam 08:40 sampai jam 10:20 dengan
               matakuliah Basis Data, pada perkuliahan tersebut membahas Data
               Manipulation Language (DML) dan membahas persiapan untuk UTS.
               disiang hari saya mambuat diagram database untuk tugas kelompok
               rpl, karena diagramnya agak kompleks, saya mengerjakan diagram ini
               sampai malam.
             </p>
           </div>
         </div>
       </div>
     </div> -->

     <!-- Gallery -->
     <h1 class="mt-5 text-center" id="gallery">Gallery</h1>

     <div class="row mt-3 mx-1">
       <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
         <img
           src="img/911.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="911 gt3rs"
         />
 
         <img
           src="img/srt.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="srt hellcat"
         />
 
         <img
           src="img/corvette.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="corvette"
         />
       </div>
 
       <div class="col-lg-4 mb-4 mb-lg-0">
         <img
           src="img/blue_mustang.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="ford mustang biru"
         />
 
         <img
           src="img/white_mustang.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="ford mustang putih"
         />
 
         <img
           src="img/camaro.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="camaro"
         />
       </div>
 
       <div class="col-lg-4 mb-4 mb-lg-0">
         <img
           src="img/red_srt.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="srt merah"
         />
 
         <img
           src="img/burnout_mustang.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="mustang burnout"
         />
 
         <img
           src="img/miata.jpg"
           class="w-100 shadow-1-strong rounded mb-4"
           alt="miata"
         />
       </div>
     </div>

     <!-- schedule -->
     <h1 class="mt-5 text-center" id="schedule">SCHEDULE</h1>

     <div class="mx-md-4 mt-1 mb-5 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
       <div class="col">
         <div class="card h-100 text-center">
           <div
             class="card-header bg-danger bg-opacity-75 bg-danger bg-opacity-75"
           >
             Senin
           </div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item">
               Pemrograman Berbasis Web <br />
               07:00 - 08:40 | D.2.j
             </li>
           </ul>
         </div>
       </div>
       <div class="col">
         <div class="card h-100 text-center">
           <div class="card-header bg-danger bg-opacity-75">Selasa</div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item">
               Basis Data <br />
               07:00 - 08:40 | H.5.4
             </li>
             <li class="list-group-item">
               Pendidikan Kewarganegaraan <br />
               10:20 - 12:00 | Aula H7
             </li>
           </ul>
         </div>
       </div>
       <div class="col">
         <div class="card h-100 text-center">
           <div class="card-header bg-danger bg-opacity-75">Rabu</div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item">
               Logika Informatika <br />
               07:00 - 09:30 | H.4.7
             </li>
             <li class="list-group-item">
               Rekayasa Perangkat Lunak <br />
               12:30 - 15:00 | H.4.4
             </li>
           </ul>
         </div>
       </div>
       <div class="col">
         <div class="card h-100 text-center">
           <div class="card-header bg-danger bg-opacity-75">Kamis</div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item">
               Probabilitas dan Statistik <br />
               07:00 - 09:30 | H.3.2
             </li>
             <li class="list-group-item">
               Sistem Operasi <br />
               12:30 - 15:00 | H.5.12
             </li>
           </ul>
         </div>
       </div>
       <div class="col">
         <div class="card h-100 text-center">
           <div class="card-header bg-danger bg-opacity-75">Jum'at</div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item">
               Basis Data <br />
               08:40 - 10:20 | D.3.M
             </li>
           </ul>
         </div>
       </div>
       <div class="col">
         <div class="card h-100 text-center">
           <div class="card-header bg-danger bg-opacity-75">Sabtu</div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item">Belajar dirumah</li>
           </ul>
         </div>
       </div>
     </div>

     <!-- Profile -->
     <div class="container-fluid bg-primary-subtle mt-5" id="profile">
      <div class="row row-cols-1 row-cols-md-2 py-md-5 py-2">
        <div class="col text-center">
          <img
            src="img/nyong.JPG"
            class="w-50 rounded-pill"
            alt="ilham photo"
          />
        </div>
        <div class="col mt-5 text-center text-md-start">
          <h4>A11.2023.15122</h4>
          <h1>Muhammad Fajar Ilham</h1>
          <p>Program Studi Teknik Informatika</p>
          <a href="https://dinus.ac.id/"><p>Universitas Dian Nuswantoro</p></a>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="bg-dark-subtle mt-5">
      <p class="p-3 text-center">&copy; 2024 Copyright: Muhammad Fajar Ilham. All rights reserved.</p>
    </footer>

    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>