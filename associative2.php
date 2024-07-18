<?php
// $mahasiswa = ["Ryo", "7264371", "ryo@gmail.com", "Informatika"]

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 
$mahasiswa = [
    [
    "nama" => "Ryo", 
    "nrp" => "7264371",
    "email" => "ryo@gmail.com",
    "jurusan" => "Informatika",
    "gambar" => "Ryo.jpg"
    
    ],
    [
    "nama" => "Nijika", 
    "nrp" => "7264372",
    "email" => "nijika@gmail.com",
    "jurusan" => "Informatika",
    "gambar" => "Nijika.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>