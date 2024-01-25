<?php
$mahasiswa = ["Merhandes Gunawan", "1230123213", "Teknik Informatika"];
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
        <?php foreach ($mahasiswa as $a) { ?>
            <li><?= $a; ?></li>
        <?php } ?>
    </ul>

</body>

</html>