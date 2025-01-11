<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp5940647.jpg'); 
            background-size: cover; 
            background-position: center center; 
            background-attachment: fixed; 
            background-color: rgba(130, 130, 130, 0.658);
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .section {
            display: none; 
        }
        .active {
            display: block; 
        }
        .schedule-card {
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .monday { background-color: rgb(61, 59, 59); }
        .tuesday { background-color: rgb(61, 59, 59); }
        .wednesday { background-color:rgb(61, 59, 59); }
        .thursday { background-color:rgb(61, 59, 59); }
        .friday { background-color: rgb(61, 59, 59); }
        .saturday { background-color:rgb(61, 59, 59); }
        .sunday { background-color:rgb(61, 59, 59); }
        @media (min-width: 768px) {
            .schedule-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 10px;
            }
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .navbar-nav .nav-item .btn {
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .navbar-nav .nav-item .btn:hover {
            background-color: #ffc107;
            color: #212529;
        }
        .navbar-toggler-icon {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg rounded-3 mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daily Journal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <button class="btn btn-outline-light mx-2 rounded-3 px-4 py-2" onclick="showSection('home')">
                                <i class="bi bi-house-door-fill"></i> Home
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-light mx-2 rounded-3 px-4 py-2" onclick="showSection('profile')">
                                <i class="bi bi-person-circle"></i> Profile
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-light mx-2 rounded-3 px-4 py-2" onclick="showSection('content')">
                                <i class="bi bi-file-earmark-text-fill"></i> Content
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-light mx-2 rounded-3 px-4 py-2" onclick="showSection('schedule')">
                                <i class="bi bi-calendar-event-fill"></i> Schedule
                            </button>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-outline-danger mx-2 rounded-3 px-4 py-2">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="home" class="section active">
            <div class="card bg-dark text-white border-0 position-relative overflow-hidden">
                <img src="https://wallpapercave.com/wp/wp12547051.png" alt="Background Image" class="card-img" style="opacity: 0.5; height: 100%; object-fit: cover;">
                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center p-4">
                    <h1 class="display-4 fw-bold text-uppercase mb-3" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        Welcome to <span class="text-warning">Daily Journal</span>
                    </h1>
                    <p class="fs-5" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">
                        Temukan artikel harian, galeri foto yang menarik, dan jadwal kegiatan mahasiswa di sini!
                    </p>
                    <a href="#content" onclick="showSection('content')" class="btn btn-warning btn-lg mt-3">Jelajahi Konten</a>
                </div>
            </div>

            <div class="container my-4">
                <h2 class="text-center fw-bold text-dark">Highlight Hari Ini</h2>
                <div class="row mt-4 g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title text-warning">Artikel Unggulan</h5>
                                <p class="card-text">
                                    Hari keempat ospek tiba dengan penuh antusiasme! Temukan cerita selengkapnya tentang bagaimana mahasiswa baru menghadapi tantangan.
                                </p>
                                <a href="#" onclick="showSection('content')" class="btn btn-dark btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <img src="https://dinus.ac.id/wp-content/uploads/2023/09/SESI-1-FIK-UDINUS-1080x675.jpg" alt="Featured Image" class="img-fluid rounded shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="profile" class="section">
            <h2 class="text-center mb-4">Profile</h2>
            <div class="text-center mb-4">
                <img src="https://wallpapercave.com/dwp1x/wp11125186.jpg" alt="Profile Photo" class="profile-photo">
            </div>
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <table class="table table-borderless text-center">
                        <tr>
                            <td><strong>Nama:</strong></td>
                            <td>Ardyatma Syarif</td>
                        </tr>
                        <tr>
                            <td><strong>NIM:</strong></td>
                            <td>a11.2023.15500</td>
                        </tr>
                        <tr>
                            <td><strong>Program Studi:</strong></td>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>1112315500@gmail.com</td>
                        </tr>
                        <tr>
                            <td><strong>Telepon:</strong></td>
                            <td>+6288214878351</td>
                        </tr>
                        <tr>
                            <td><strong>Alamat:</strong></td>
                            <td>PEKALONGAN, KEDUNGWUNI PEKAJANGAN GG 16</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        
      <div class="container p-4">
        <div class="row">
            
            <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">ARTICLE</h1>
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


            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Gallery</h2>
                    <div class="row row-cols-3 g-2">
                        <div class="col">
                            <img src="https://th.bing.com/th/id/OIP.21OrKBFp5svYmvrGTNLUxgHaEP?w=271&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Gallery Image 1" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="https://dinus.ac.id/wp-content/uploads/2023/09/SESI-1-FIK-UDINUS-1080x675.jpg" alt="Gallery Image 2" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="https://dinus.ac.id/wp-content/uploads/2023/09/DNS7619-1080x675.jpg" alt="Gallery Image 3" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="http://localhost/tugas_php3/img/20241216204455.jpeg" alt="Gallery Image 3" class="img-fluid">
                        </div>
                        
                    </div>
                    <a href="#" class="btn btn-link d-block mt-3 text-center">Lainnya...</a>
                </div>
            </div>
        </div>

        <div id="schedule" class="section active">
            <h2 class="text-center mb-4">Jadwal Kuliah & Kegiatan Mahasiswa</h2>
            <div class="schedule-grid">
                <div class="schedule-card monday">
                    <h5>Senin</h5>
                    <p>Tidak ada Jadwal</p>
                </div>
                <div class="schedule-card tuesday">
                    <h5>Selasa</h5>
                    <p>08:40 - 10:20<br>PKN<br>Ruang: AULA</p>
                </div>
                <div class="schedule-card tuesday">
                    <h5>Selasa</h5>
                    <p>12:30 - 14:10<br>Basis data<br>Ruang: H.5.14</p>
                </div>
                <div class="schedule-card tuesday">
                    <h5>Selasa</h5>
                    <p>15:30 - 18:00<br>Sistem Operasi<br>Ruang: H.4.7</p>
                </div>
                <div class="schedule-card wednesday">
                    <h5>Rabu</h5>
                    <p>12.30 - 15:00<br>Sistem Informasi<br>Ruang: H.5.10</p>
                </div>
                <div class="schedule-card thursday">
                    <h5>Kamis</h5>
                    <p>14:10 - 15:50<br>Pemrograman Berbasis Web<br>Ruang: D.2.J</p>
                </div>
                <div class="schedule-card thursday">
                    <h5>Kamis</h5>
                    <p>16:00 - 18:00<br>Basis Data<br>Ruang: D.3.M</p>
                </div>
                <div class="schedule-card friday">
                    <h5>Jumat</h5>
                    <p>09:30 - 12:00<br>Rekayasa Perangkat Lunak<br>Ruang: H.4.5</p>
                </div>
                <div class="schedule-card friday">
                    <h5>Jumat</h5>
                    <p>12:30 - 15:00<br>Logika informatika<br>Ruang: H.4.10</p>
                </div>
                <div class="schedule-card friday">
                    <h5>Jumat</h5>
                    <p>15:30 - 18:00<br>Probabilitas dan satistik<br>Ruang: H.4.8</p>
                </div>
                <div class="schedule-card saturday">
                    <h5>Sabtu</h5>
                    <p>Tidak ada Jadwal</p>
                </div>
                <div class="schedule-card sunday">
                    <h5>Minggu</h5>
                    <p>Tidak ada Jadwal</p>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSection(section) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(sec => sec.classList.remove('active'));
            document.getElementById(section).classList.add('active');
        }
    </script>
</body>
</html>
