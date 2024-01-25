<?php
// $mahasiswa = [
//     ["Merhandes Gunawan", "00000081070", "merhandes.gunawan@student.umn.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "303030303030", "Doddy.Ferdiansyah@student.umn.ac.id", "Teknik Informatika"]
// ];

//array associative
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

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"];  ?>"></li>
            <li><?php echo $mhs["nama"] ?></li>
            <li><?php echo $mhs["nrp"] ?></li>
            <li><?php echo $mhs["email"] ?></li>
            <li><?php echo $mhs["jurusan"] ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>