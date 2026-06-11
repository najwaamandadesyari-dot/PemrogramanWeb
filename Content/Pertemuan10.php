<h3 style="text-align: center;">Ini adalah halaman untuk pertemuan ke 10</h3>
<hr>

<h3 style="text-align: center;">Array sederhana tentang Buah</h3>

<?php
// Array sederhana
$buah = array("Apel", "Jeruk", "Mangga");
?>

<h3>Daftar Buah:</h3>
<ul class='list-utama'>
    <?php foreach ($buah as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; ?>
</ul>

<hr>

<?php
// Array data mahasiswa
$mahasiswa = array(
    ["Nama" => "Ali", "NIM" => "12345", "Nilai" => 85],
    ["Nama" => "Budi", "NIM" => "12346", "Nilai" => 90],
    ["Nama" => "Cici", "NIM" => "12347", "Nilai" => 78]
);

echo "<h3>Data Mahasiswa</h3>";
?>

<div>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs):
                        if ($mhs['Nilai'] >= 80) {
                            $status = "Lulus";
                        } else {
                            $status = "Tidak Lulus";
                        }
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mhs['Nama']; ?></td>
                        <td><?= $mhs['NIM']; ?></td>
                        <td><?= $mhs['Nilai']; ?></td>
                        <td><?= $status; ?></td>
                    </tr>
                    <?php endforeach; ?>
    </table>
</div>

<hr>

<?php
$mahasiswa = array(
    ["Nama" => "Ali", "NIM" => "12345", "Nilai" => [85, 90, 88]],
    ["Nama" => "Budi", "NIM" => "12346", "Nilai" => [78, 82, 80]],
    ["Nama" => "Cici", "NIM" => "12347", "Nilai" => [92, 95, 93]]
);
?>

<div>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai-1</th>
            <th>Nilai-2</th>
            <th>Nilai-3</th>
            <th>Rata-rata</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['Nama']; ?></td>
            <td><?= $mhs['NIM']; ?></td>
            <?php foreach ($mhs['Nilai'] as $nilai): ?>
                <td><?= $nilai; ?></td>
            <?php endforeach; ?>
            <?php
            $rata = array_sum($mhs['Nilai']) / count($mhs['Nilai']);
            ?>
            <td><?= number_format($rata, 2); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>