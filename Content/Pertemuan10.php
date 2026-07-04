<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            margin:15px;
            font-size:14px;
        }

        h3{
            margin:10px 0;
        }

        hr{
            margin:10px 0;
        }

        table{
            margin-bottom:15px !important;
        }
    </style>
</head>
<body>

<h3 class="text-center">Ini adalah halaman untuk pertemuan ke 10</h3>

<hr>

<h3 class="text-center">Array Sederhana Tentang Buah</h3>

<?php
$buah = array("Apel", "Jeruk", "Mangga");
?>

<h5>Daftar Buah:</h5>

<ul>
    <?php foreach($buah as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; ?>
</ul>

<hr>

<?php
$mahasiswa = array(
    ["Nama" => "Ali", "NIM" => "12345", "Nilai" => 85],
    ["Nama" => "Budi", "NIM" => "12346", "Nilai" => 90],
    ["Nama" => "Cici", "NIM" => "12347", "Nilai" => 78]
);
?>

<h3>Data Mahasiswa</h3>

<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($mahasiswa as $mhs): ?>

        <?php
        if($mhs['Nilai'] >= 80){
            $status = "Lulus";
        }else{
            $status = "Tidak Lulus";
        }
        ?>

        <tr>
            <td><?= $mhs['Nama']; ?></td>
            <td><?= $mhs['NIM']; ?></td>
            <td><?= $mhs['Nilai']; ?></td>
            <td><?= $status; ?></td>
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<hr>

<?php
$mahasiswa = array(
    ["Nama" => "Ali", "NIM" => "12345", "Nilai" => [85,90,88]],
    ["Nama" => "Budi", "NIM" => "12346", "Nilai" => [78,82,80]],
    ["Nama" => "Cici", "NIM" => "12347", "Nilai" => [92,95,93]]
);
?>

<h3>Data Nilai Mahasiswa</h3>

<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai-1</th>
            <th>Nilai-2</th>
            <th>Nilai-3</th>
            <th>Rata-rata</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['Nama']; ?></td>
            <td><?= $mhs['NIM']; ?></td>

            <?php foreach($mhs['Nilai'] as $nilai): ?>
                <td><?= $nilai; ?></td>
            <?php endforeach; ?>

            <?php
            $rata = array_sum($mhs['Nilai']) / count($mhs['Nilai']);
            ?>

            <td><?= number_format($rata, 2); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>