<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<h2 align = "center"><?= $title; ?></h2>
<p align = "center">Apakah kamu pecinta film? </p>
<p align = "center">Kini, kamu dapat menikmati film-film favorit secara gratis melalui aplikasi nonton film yang mudah digunakan. 
  Aplikasi ini menyediakan beragam jenis film, mulai dari film-film terbaru yang sedang tayang di bioskop hingga film klasik yang jarang ditemukan.
Nikmati berbagai film terbaru seperti Marvel Avenger, Gatot Kaca, Keluarga Cemara, Bukan Wanita Pilihan, Buya Hamka dan masih banyak lagi melalui aplikasi ini.</p>

<?= $this->endSection() ?>

</body>
</html>