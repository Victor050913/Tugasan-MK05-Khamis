<?php
$nama = "VICTOR FOO TUN KEAT";
$matrik = "18DDT23F1023";
$kelas = "DDT6A";
$telefon = "010-9071777";
$alamat = "Politeknik Tuanku Syed Sirajuddin";

$servis = [
    "Pembangunan Sistem Web menggunakan PHP",
    "Rekabentuk & Pengurusan Database MySQL",
    "Sistem Login & Pendaftaran Pengguna",
    "Pembangunan Sistem CRUD",
    "Dashboard Admin & Sistem Pengurusan Data"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Perunding Profesional</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .cta-btn {
            background: #0d6efd;
            color: #fff;
            font-weight: 500;
        }
        .cta-btn:hover {
            background: #0b5ed7;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center fw-bold mb-5">Profil Perunding Profesional</h2>

    <div class="row g-4 align-items-start">

        <!-- Kolum 1 -->
        <div class="col-12 col-md-2 text-center">
            <img src="foo.jpeg" alt="Victor Foo" class="img-fluid rounded shadow">
        </div>

        <!-- Kolum 2 -->
        <div class="col-12 col-md-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Maklumat Diri</h4>
                    <p><strong>Nama:</strong> <?= $nama ?></p>
                    <p><strong>No. Matrik:</strong> <?= $matrik ?></p>
                    <p><strong>Kelas:</strong> <?= $kelas ?></p>
                    <p><strong>No. Telefon:</strong> <?= $telefon ?></p>
                    <p><strong>Alamat Pejabat:</strong><br><?= $alamat ?></p>
                </div>
            </div>
        </div>

        <!-- Kolum 3 -->
        <div class="col-12 col-md-6">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Perkhidmatan Perunding Web</h4>

                    <p>
                        Saya merupakan seorang perunding pembangunan laman web yang mahir dalam
                        penggunaan PHP dan MySQL. Saya membantu individu serta organisasi membina
                        sistem web yang dinamik, selamat dan mesra pengguna.
                    </p>

                    <h6 class="fw-bold mt-4">Kepakaran & Servis:</h6>
                    <ul>
                        <?php foreach ($servis as $item) { ?>
                            <li><?= $item ?></li>
                        <?php } ?>
                    </ul>

                    <a href="tel:0109071777" class="btn cta-btn shadow mt-3">
                        Hubungi Sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
