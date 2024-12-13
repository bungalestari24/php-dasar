<?php
// $_GET
var_dump($_GET);
$mahasiswa = [
    [
    "nama" => "bunga",
    "nrp" => "0888666777",
    "email" => "bungaftria@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "foto1.jpg",
    ],
    [
    "nama" => "dosica",
    "nrp" => "0099555444",
    "email" => "dsica@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "foto2.jpg",
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
    
</body>
</html>