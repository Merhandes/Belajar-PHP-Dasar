<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Merhandes Gunawan",
        "nrp" => "00000081070",
        "email" => "merhandes.gunawan@student.umn.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "handes.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "00000012345",
        "email" => "doddy.ferdiansyah@student.umn.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "doddy.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>