<?php
$nama = "VICTOR FOO TUN KEAT";
$matrik = "18DDT23F1023";
$kelas = "DDT6A";
$telefon = "010-9071777";
$alamat = "Politeknik Tuanku Syed Sirajuddin";

$servis = [
    "Pembangunan Sistem Web (PHP, MySQL)",
    "Rekabentuk & Pengurusan Database",
    "Sistem Login & Authentication",
    "Sistem CRUD Lengkap",
    "Dashboard Admin & Laporan"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Profesional</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 sahaja -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center fw-bold mb-5">PROFIL PROFESIONAL</h2>

    <div class="row g-4">

        <!-- COLUMN 1 (1/6) -->
        <div class="col-12 col-md-2">
            <img src="Foo.jpeg" 
                 class="img-fluid rounded shadow w-100 h-100 object-fit-cover" 
                 alt="Profile">
        </div>

        <!-- COLUMN 2 (1/3) -->
        <div class="col-12 col-md-4">
            <div class="card shadow h-100">
                <div class="card-header bg-primary text-white fw-bold">
                    BIODATA PERUNDING
                </div>
                <div class="card-body">
                    <p><strong>Nama Penuh</strong><br><?= $nama ?></p>
                    <hr>
                    <p><strong>No. Matrik</strong><br><?= $matrik ?></p>
                    <hr>
                    <p><strong>Kelas</strong><br><?= $kelas ?></p>
                    <hr>
                    <p><strong>No. Telefon</strong><br><?= $telefon ?></p>
                    <hr>
                    <p><strong>Alamat Pejabat</strong><br><?= $alamat ?></p>
                </div>
            </div>
        </div>

        <!-- COLUMN 3 (1/2) -->
        <div class="col-12 col-md-6">
            <div class="card shadow h-100">
                <div class="card-header bg-success text-white fw-bold">
                    PERKHIDMATAN & KEPAKARAN
                </div>
                <div class="card-body">

                    <h5 class="fw-bold text-primary">
                        Web Solutions Consultant
                    </h5>

                    <p>
                        Saya membantu individu dan organisasi membangunkan sistem web
                        yang dinamik, selamat dan mesra pengguna.
                    </p>

                    <h6 class="fw-bold mt-4">Skop Perkhidmatan:</h6>

                    <?php foreach ($servis as $item) { ?>
                        <span class="badge bg-secondary mb-2"><?= $item ?></span>
                    <?php } ?>

                    <div class="mt-4">
                        <ul>
                            <li>Pembangunan Sistem Web Dinamik</li>
                            <li>Rekabentuk Database Berstruktur</li>
                            <li>Analisis & Dokumentasi Sistem</li>
                        </ul>
                    </div>

                    <a href="tel:0109071777" class="btn btn-dark mt-3">
                        Hubungi Sekarang
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
