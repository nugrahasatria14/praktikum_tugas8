<?php
include 'siswa.php';
$siswa = new Siswa();
$data = $siswa->tampilData();
?>

<html>
<head>
    <title>Data Siswa Madrasah</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; }
        table { border-collapse: collapse; width: 70%; margin: 20px auto; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Data Siswa Madrasah</h2>
    <table>
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $s): ?>
            <tr>
                <td><?= $s['nis'] ?></td>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['kelas'] ?></td>
                <td><?= $s['jurusan'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
